<?php
  
namespace App\Http\Controllers;
  
use App\Models\TestAssigned;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class TestAssignedController extends Controller{
	/*public function index(){
  
		$Tests  = test::all();
  
		return response()->json($Tests);
  
	}*/
  
	public function getTest($cf_id){
  
		$test  = TestAssigned::find($cf_id);
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
	}*/
  
	public function updateTest($cf_id){
		$test  = TestAssigned::find($cf_id);
		/*$Test->cf_uid = $request->input('cf_uid');
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
		$Test->course_id = $request->input('course_id');*/
		//$Test->test_questions = $request->input('test_questions');
		$test->test_questions = '{"questions":[{"question_id":"1","question_uid":"9beadea9f3bbe3fdd4fc48dc81e0f9af","student_answer":"A","time_elapsed":"2000","answer_time":"2014-02-10 19:03:22","in_time":"1"},{"question_id":"2","question_uid":"e36a0ff5c89d1d5eec03e06bc6f00071","student_answer":"B","time_elapsed":"2011","answer_time":"2014-02-10 19:03:33","in_time":"1"},{"question_id":"3","question_uid":"ed144783dbdab5dbccb9195fc086f195","student_answer":"A","time_elapsed":"2102","answer_time":"2014-02-10 19:05:04","in_time":"1"},{"question_id":"4","question_uid":"4023ead126a0d2483feb1bc3bbb9353b","student_answer":"E","time_elapsed":"2160","answer_time":"2014-02-10 19:06:02","in_time":"1"},{"question_id":"5","question_uid":"498cd14422ded0ac1318bcc8bccfb549","student_answer":"D","time_elapsed":"2641","answer_time":"2014-02-10 19:14:03","in_time":"1"},{"question_id":"6","question_uid":"ab00c8e0d3355caba65eb7158dbe8973","student_answer":"B","time_elapsed":"2729","answer_time":"2014-02-10 19:15:31","in_time":"1"},{"question_id":"7","question_uid":"c7cb03bb5a175908594e7a56d0173d7f","student_answer":"A","time_elapsed":"3340","answer_time":"2014-02-10 19:25:42","in_time":"1"},{"question_id":"8","question_uid":"c544c42acb1dd658ff08fdb004ec2cfd","student_answer":"E","time_elapsed":"2789","answer_time":"2014-02-10 19:16:31","in_time":"1"},{"question_id":"9","question_uid":"30b691ce874d7e679973d6be9bf78876","student_answer":"D","time_elapsed":"2815","answer_time":"2014-02-10 19:16:57","in_time":"1"},{"question_id":"10","question_uid":"30ccb754ee428174d5736dae9851664c","student_answer":"B","time_elapsed":"3007","answer_time":"2014-02-10 19:20:09","in_time":"1"},{"question_id":"11","question_uid":"7a6c2e7a4ac990218c1d76f23438b6e6","student_answer":"B","time_elapsed":"3122","answer_time":"2014-02-10 19:22:04","in_time":"1"},{"question_id":"12","question_uid":"50a6cce78db29792a710b69fe8447eba","student_answer":"A","time_elapsed":"3192","answer_time":"2014-02-10 19:23:14","in_time":"1"},{"question_id":"13","question_uid":"798c14be57f46a60662b5ca529d428f4","student_answer":"E","time_elapsed":"3309","answer_time":"2014-02-10 19:25:11","in_time":"1"},{"question_id":"14","question_uid":"c4b1c4e23f0ec11c6fd508a3124e3de0","student_answer":"D","time_elapsed":"3655","answer_time":"2014-02-10 19:30:57","in_time":"1"},{"question_id":"15","question_uid":"bb14d80bab90fb8048568f95d9a7c6da","student_answer":"","time_elapsed":"3712","answer_time":"2014-02-10 19:31:54","in_time":"1"},{"question_id":"16","question_uid":"d12e98947a577fd420852ca4b8aa558e","student_answer":"","time_elapsed":"3765","answer_time":"2014-02-10 19:32:47","in_time":"1"},{"question_id":"17","question_uid":"36707bc9229137dbc70ba6160da44fbb","student_answer":"C","time_elapsed":"3872","answer_time":"2014-02-10 19:34:34","in_time":"1"},{"question_id":"18","question_uid":"51ebf22e87ed02963c98446068e1b131","student_answer":"B","time_elapsed":"3988","answer_time":"2014-02-10 19:36:30","in_time":"1"},{"question_id":"19","question_uid":"fb814fd5e4a9f3c7aa2f28b16de4b418","student_answer":"E","time_elapsed":"4120","answer_time":"2014-02-10 19:38:42","in_time":"1"},{"question_id":"20","question_uid":"962d9a749a696d0f81148d41a9c7e83a","student_answer":"D","time_elapsed":"4264","answer_time":"2014-02-10 19:41:06","in_time":"1"},{"question_id":"21","question_uid":"65e4f05f24d0d5042b23e0a9817bb710","student_answer":"C","time_elapsed":"4364","answer_time":"2014-02-10 19:42:46","in_time":"1"},{"question_id":"22","question_uid":"c2f8248393c93491df69414303050521","student_answer":"A","time_elapsed":"4414","answer_time":"2014-02-10 19:43:36","in_time":"1"},{"question_id":"23","question_uid":"c46ca50594f35235b932452f6dc069da","student_answer":"B","time_elapsed":"4467","answer_time":"2014-02-10 19:44:29","in_time":"1"},{"question_id":"24","question_uid":"8c01c930db06b4f2a0591b2bb413920a","student_answer":"C","time_elapsed":"4524","answer_time":"2014-02-10 19:45:26","in_time":"1"},{"question_id":"25","question_uid":"6caacf799194f1fd84167023341c453b","student_answer":"","time_elapsed":"4725","answer_time":"2014-02-10 19:48:47","in_time":"1"},{"question_id":"26","question_uid":"e5293a381ea00adf3cf709be8991fa68","student_answer":"B","time_elapsed":"4839","answer_time":"2014-02-10 19:50:41","in_time":"1"},{"question_id":"27","question_uid":"d4df7791b61347ec086acd03a7a23fac","student_answer":"E","time_elapsed":"4796","answer_time":"2014-02-10 19:49:58","in_time":"1"},{"question_id":"28","question_uid":"431a2b6f52e309f23029a3cd837c1d44","student_answer":"B","time_elapsed":"70","answer_time":"2014-02-10 18:31:12","in_time":"1"},{"question_id":"29","question_uid":"10e167f76f28807e7400c81106335485","student_answer":"E","time_elapsed":"122","answer_time":"2014-02-10 18:32:04","in_time":"1"},{"question_id":"30","question_uid":"049ceaccf4853503e4899181e81e9cb5","student_answer":"E","time_elapsed":"135","answer_time":"2014-02-10 18:32:17","in_time":"1"},{"question_id":"31","question_uid":"89763fd8a6ab55027f058db1f76b2a1a","student_answer":"","time_elapsed":"197","answer_time":"2014-02-10 18:33:19","in_time":"1"},{"question_id":"32","question_uid":"d00fa7b9c23a11d57ed66b6ea271b494","student_answer":"D","time_elapsed":"299","answer_time":"2014-02-10 18:35:01","in_time":"1"},{"question_id":"33","question_uid":"052dcd029aaf9e96d26cd4821539b829","student_answer":"A","time_elapsed":"310","answer_time":"2014-02-10 18:35:12","in_time":"1"},{"question_id":"34","question_uid":"540948d05a68fd1d1cf4860797a9687f","student_answer":"D","time_elapsed":"329","answer_time":"2014-02-10 18:35:31","in_time":"1"},{"question_id":"35","question_uid":"0b2ffbacb17ed04b2c3c828e0fde90ba","student_answer":"A","time_elapsed":"359","answer_time":"2014-02-10 18:36:01","in_time":"1"},{"question_id":"36","question_uid":"948cf23f31c36c0b18a0b7a0569af4ce","student_answer":"D","time_elapsed":"372","answer_time":"2014-02-10 18:36:14","in_time":"1"},{"question_id":"37","question_uid":"5666dbc1d217ac7a7ca49e50b6eaa653","student_answer":"A","time_elapsed":"429","answer_time":"2014-02-10 18:37:11","in_time":"1"},{"question_id":"38","question_uid":"396f04c55aea2c537ff5330d60a2d562","student_answer":"C","time_elapsed":"507","answer_time":"2014-02-10 18:38:29","in_time":"1"},{"question_id":"39","question_uid":"33e15026734893e0b663f56ab36eefa3","student_answer":"B","time_elapsed":"623","answer_time":"2014-02-10 18:40:25","in_time":"1"},{"question_id":"40","question_uid":"436ed32be27bc0b8a3aace87bd659f37","student_answer":"C","time_elapsed":"663","answer_time":"2014-02-10 18:41:05","in_time":"1"},{"question_id":"41","question_uid":"e99a85434bd03c113ef85ffc1286bcb1","student_answer":"D","time_elapsed":"688","answer_time":"2014-02-10 18:41:30","in_time":"1"},{"question_id":"42","question_uid":"79b7e54908cae3e552f48e0c408dff5b","student_answer":"E","time_elapsed":"707","answer_time":"2014-02-10 18:41:49","in_time":"1"},{"question_id":"43","question_uid":"9d107d035cce00789bde269f3e74a059","student_answer":"","time_elapsed":"731","answer_time":"2014-02-10 18:42:13","in_time":"1"},{"question_id":"44","question_uid":"660321aac743fd5fd4c55ac5fb942f9a","student_answer":"A","time_elapsed":"820","answer_time":"2014-02-10 18:43:42","in_time":"1"},{"question_id":"45","question_uid":"1aef7366edb04426db72be5a948f5fcf","student_answer":"C","time_elapsed":"856","answer_time":"2014-02-10 18:44:18","in_time":"1"},{"question_id":"46","question_uid":"65dc1b5daae09bd889ad057765c1e6a1","student_answer":"B","time_elapsed":"885","answer_time":"2014-02-10 18:44:47","in_time":"1"},{"question_id":"47","question_uid":"8611a041cef81e800c4a69ed564c78a4","student_answer":"E","time_elapsed":"908","answer_time":"2014-02-10 18:45:10","in_time":"1"},{"question_id":"48","question_uid":"d993689c14d58adde7b9e14dd5727af0","student_answer":"A","time_elapsed":"962","answer_time":"2014-02-10 18:46:04","in_time":"1"},{"question_id":"49","question_uid":"f01939ba9208511db0186a3177664b0c","student_answer":"A","time_elapsed":"980","answer_time":"2014-02-10 18:46:22","in_time":"1"},{"question_id":"50","question_uid":"67eb8cf63eb66ebfbcf675c864cb529a","student_answer":"B","time_elapsed":"1000","answer_time":"2014-02-10 18:46:42","in_time":"1"},{"question_id":"51","question_uid":"507199201a41fd1bd85c5e2a79038d35","student_answer":"E","time_elapsed":"1086","answer_time":"2014-02-10 18:48:08","in_time":"1"},{"question_id":"52","question_uid":"8253d58a0abf100e6995ee4f9ff8550f","student_answer":"A","time_elapsed":"1129","answer_time":"2014-02-10 18:48:51","in_time":"1"},{"question_id":"53","question_uid":"c0702edc0643d86a8ceef67b72deec8a","student_answer":"C","time_elapsed":"1173","answer_time":"2014-02-10 18:49:35","in_time":"1"},{"question_id":"54","question_uid":"9ec2b87baa5b617a909a5ff1642853e0","student_answer":"D","time_elapsed":"1247","answer_time":"2014-02-10 18:50:49","in_time":"1"},{"question_id":"55","question_uid":"729a09fe3a9b959593b0dc95c95bb753","student_answer":"E","time_elapsed":"1321","answer_time":"2014-02-10 18:52:03","in_time":"1"},{"question_id":"56","question_uid":"e01f9d3271110758f6b0fad5921135fb","student_answer":"A","time_elapsed":"1376","answer_time":"2014-02-10 18:52:58","in_time":"1"},{"question_id":"57","question_uid":"fa7c4c98a6a83c7673863518ee1cac27","student_answer":"A","time_elapsed":"1603","answer_time":"2014-02-10 18:56:45","in_time":"1"},{"question_id":"58","question_uid":"04feed55a16ed886a161ab9ea056fc20","student_answer":"","time_elapsed":"1652","answer_time":"2014-02-10 18:57:34","in_time":"1"},{"question_id":"59","question_uid":"ba889c13eb2f6af7e589ec4f2dffa868","student_answer":"A","time_elapsed":"1787","answer_time":"2014-02-10 18:59:49","in_time":"1"},{"question_id":"60","question_uid":"98d68ec86a36879c693df774a9d3ff9f","student_answer":"","time_elapsed":"0","answer_time":"0000-00-00 00:00:00","in_time":"0"}]}';
		/*$Test->start_time = $request->input('start_time');
		$Test->end_time = $request->input('end_time');
		$Test->test_started = $request->input('test_started');*/
		$test->test_done = '2';
		/*$Test->time_lock = $request->input('time_lock');
		$Test->printed = $request->input('printed');
		$Test->print_date = $request->input('print_date');
		$Test->recycle = $request->input('recycle');*/
		$test->save();
  
		//return response()->json($Test);
	}

 
}
?>