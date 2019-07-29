<?php

namespace App\Http\Controllers;

use App\Question;
use App\Answer;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();
        return view('question.index',compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $question = Question::create([
            'title' => $request['title'],
            'total_answers' => $request['total-answers'],
            'correct_answers' => $request['correct-answers']
        ]);
        return view('answer.add',compact('question'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::where('id','=',$id)->first();
        return view('question.edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Question::where('id','=',$id)->update([
            'title' => $request['title'],
            'total_answers' => $request['total-answers'],
            'correct_answers' => $request['correct-answers']
        ]);

        return redirect('questions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        $question->delete();
        return redirect('questions');
    }
    
    public function try()
    {
        $questions = Question::all();
        $totalQuestions = $questions->count();
        $options = Answer::all();
        $array = array();
            for($i=0;$i<$totalQuestions;$i++){
                $data = array("id"=>$questions[$i]['id'], "title"=>$questions[$i]['title']);
                array_push($array,$data);
            }
        dd($array);
    }
}
