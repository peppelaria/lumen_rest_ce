<?php
  
namespace App\Http\Controllers;
  
use App\Models\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class TestController extends Controller{
	public function __construct() {
        $this->middleware('oauth');
    }
    
    public function getTest($test_uid){
        $testassigned = "rcuz_chronoforms_data_test_table_json_updated";
        $test = Test::leftJoin('rcuz_chronoforms_data_test_archive as testarch', $testassigned.'.test_id', '=', 'testarch.test_id')->where($testassigned.'.test_uid', '=', $test_uid)->groupBy('testarch.test_id')->get(['test_uid', 'test_name', 'test_type', 'test_time', $testassigned.'.cf_created', $testassigned.'.cf_modified', $testassigned.'.test_started', $testassigned.'.start_time', $testassigned.'.end_time', $testassigned.'.test_questions', 'rightAnswerPoints', 'wrongAnswerPoints']);
       	if ($test) {
			/*return $this->createSuccessResponse($test, 200);*/
            return str_replace("}\"","}",(str_replace("\"{","{",substr(stripslashes($test), 1, -1))));
		}
		return $this->createErrorResponse("Risorsa non trovata", 404);
    } 
    

    public function updateTest(Request $request, $test_uid) {       
        $test = Test::find($test_uid);

        if ($request->input('start_time')) {
            $test->start_time = $request->input('start_time');
        }
        if ($request->input('end_time')) {
            $test->end_time = $request->input('end_time');
        }
        if ($request->input('test_questions')) {
            $test->test_questions = $request->input('test_questions');
        }
        if ($request->input('test_started')) {
            $test->test_started = $request->input('test_started');
        }
        if ($request->input('test_done')) {
            $test->test_done = $request->input('test_done');
        }
        if ($request->input('platform')) {
            $test->platform = $request->input('platform');
        }

        $test->save();
  
        if ($test) {
            /*return $this->createSuccessResponse($test, 200);*/
            return "{".str_replace("}\"","}",(str_replace("\"{","{",substr(stripslashes($test), 1, -1))))."}";
        }
        return $this->createErrorResponse("Risorsa non trovata", 404);
    }
}
?>