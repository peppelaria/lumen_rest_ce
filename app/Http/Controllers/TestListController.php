<?php
  
namespace App\Http\Controllers;
  
use App\Models\Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
  
  
class TestListController extends Controller{
    public function getTest($test_id){
        $testarch  = Test::find($test_id);
        return response()->json($testarch);
    } 
}
?>