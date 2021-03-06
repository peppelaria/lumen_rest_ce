<?php
  
namespace App\Http\Controllers;
  
use App\Models\UserTest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
class UserTestListController extends Controller{
	/*public function index(){
  
		$Tests  = test::all();
  
		return response()->json($Tests);
  
	}*/
  	
	public function getTest($student_id, $done) {
/*		$user = MeController::getMe($access_token);*/
/*		$user = json_decode($user, TRUE);*/
/*		$student_id = $user['0']['cf_user_id'];*/
		$now=date("Y-m-d",time());
		if ($done == "false") {
			$test_done = '0';
			$limit = $now;
		}
		else {
			$test_done = '1';
			$limit = '-inf';
		}
		$testassigned = "rcuz_chronoforms_data_test_table_json_updated";
		$test = UserTest::leftJoin('rcuz_chronoforms_data_test_archive as testarch', $testassigned.'.test_id', '=', 'testarch.test_id')->where('student_id', '=', $student_id)->where('end_available_date', '>=', $limit)->where('test_done', '=', $test_done)->where($testassigned.'.recycle', '=', '0')->groupBy($testassigned.'.test_uid')->get(['test_uid', 'test_name', $testassigned.'.cf_created', $testassigned.'.end_available_date', $testassigned.'.end_time']);
		if ($test) {
			return $this->createSuccessResponse($test, 200);
		}
		return $this->createErrorResponse("Risorsa non trovata", 404);
	}
  
	/*public function createTest(Request $request){
  
		$Test = Test::create($request->all());
  
		return response()->json($Test);
  
	}
  
	public function deleteTest($cf_id){
		$Test  = Test::find($cf_id);
		$Test->delete();
 
		return response()->json('deleted');
	}
  
	public function updateTest(Request $request,$cf_id){
		$Test  = Test::find($cf_id);
		$Test->cf_uid = $request->input('cf_uid');
		$Test->cf_created = $request->input('cf_created');
		$Test->cf_modified = $request->input('cf_modified');
		$Test->cf_created_by = $request->input('cf_created_by');
		$Test->cf_modified_by = $request->input('cf_modified_by');
		$Test->cf_ipaddress = $request->input('cf_ipaddress');
		$Test->test_uid = $request->input('test_uid');
		$Test->test_id = $request->input('test_id');
		$Test->start_available_date = $request->input('start_available_date');
		$Test->end_available_date = $request->input('end_available_date');
		$Test->student_id = $request->input('student_id');
		$Test->course_id = $request->input('course_id');
		$Test->test_questions = $request->input('test_questions');
		$Test->start_time = $request->input('start_time');
		$Test->end_time = $request->input('end_time');
		$Test->test_started = $request->input('test_started');
		$Test->test_done = $request->input('test_done');
		$Test->time_lock = $request->input('time_lock');
		$Test->printed = $request->input('printed');
		$Test->print_date = $request->input('print_date');
		$Test->recycle = $request->input('recycle');
		$Test->save();
  
		return response()->json($Test);
	}*/

 
}
?>