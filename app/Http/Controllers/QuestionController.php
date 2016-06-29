<?php
  
namespace App\Http\Controllers;
  
use App\Models\Question;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class QuestionController extends Controller{
    public function getQuestion($cf_uid){
        $question  = Question::find($cf_uid);
        if ($question) {
            return $question;
        }
        return $this->createErrorResponse("Risorsa non trovata", 404);
    } 
}
?>