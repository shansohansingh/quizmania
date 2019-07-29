@extends('layouts.app')

@section('content')
<div class="container">
  <h2 style="float:left">All Tags</h2>   
  <button class="btn btn-primary pull-right" style="float:right"><a href="{{ URL('add-tag') }}" style="color:white">Add New</a></button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($tags as $tag)
      <tr>
        <td>{{ $tag->title }}</td>
        <td>{{ $tag->correct_options }}</td>
        <td><button class="btn btn-primary pull-right"><a href="{{ URL('edit-tag/'.$tag->id)}}" style="color:white">Edit</a></button> <button class="btn btn-danger pull-right"><a href="{{ URL('delete-tag/'.$tag->id)}}" style="color:white">Delete</a></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection