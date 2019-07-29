<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request; 
use App\Http\Controllers\Controller; 
use App\Answer; 
use App\Question; 
use Illuminate\Support\Facades\Auth; 
class QuestionAnswerController extends Controller 
{
public $successStatus = 200;
/** 
     * question and answers api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function details() 
    { 
        $user = Auth::user(); 
        $questions = Question::with('answers')->get();
        // $totalQuestions = $questions->count();
        // return 
        // $array = array();
        //     for($i=0;$i<$totalQuestions;$i++){
        //         $options = Answer::where('question_id','=',$questions[$i]['id'])->get();
        //         $data = array("id"=>$questions[$i]['id'], "title"=>$questions[$i]['title'], "options"=>$options);
        //         array_push($array,$data);
        // }        
        return response()->json(['status' => 'success','questions'=>$questions], $this-> successStatus); 

        
    } 
}