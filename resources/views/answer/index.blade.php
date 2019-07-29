@extends('layouts.app')

@section('content')
<div class="container">
  <h2 style="float:left">All Answers</h2>   
  <button class="btn btn-primary pull-right" style="float:right"><a href="{{ URL('add-answer') }}" style="color:white">Add New</a></button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Question</th>
        <th>Answer</th>
        <th>Correct Answer</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($answers as $answer)
      <tr>
        <td>{{ $answer->question()->name }}</td>
        <td>{{ $answer->option }}</td>
        <td>{{ $answer->correct_answer }}</td>
        <td><button class="btn btn-primary pull-right"><a href="{{ URL('edit-answer/'.$answer->id)}}" style="color:white">Edit</a></button> <button class="btn btn-danger pull-right"><a href="{{ URL('delete-answer/'.$answer->id)}}" style="color:white">Delete</a></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection