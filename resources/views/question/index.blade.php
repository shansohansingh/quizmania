@extends('layouts.app')

@section('content')
<div class="container">
  <h2 style="float:left">All questions</h2>   
  <button class="btn btn-primary pull-right" style="float:right"><a href="{{ URL('add-question') }}" style="color:white">Add New</a></button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Total Options</th>
        <th>Correct Options</th>
        <th>All Options</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($questions as $question)
      <tr>
        <td>{{ $question->title }}</td>
        <td>{{ $question->options }}</td>
        <td>{{ $question->correct_options }}</td>
        <td>@foreach ($question->answers as $answer)
            {{ $answer->option }} {{ $answer->status }}<br/>
        @endforeach
        </td>
        <td><button class="btn btn-primary pull-right"><a href="{{ URL('edit-question/'.$question->id)}}" style="color:white">Edit</a></button> <button class="btn btn-danger pull-right"><a href="{{ URL('delete-question/'.$question->id)}}" style="color:white">Delete</a></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection