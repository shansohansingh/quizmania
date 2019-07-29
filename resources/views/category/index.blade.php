@extends('layouts.app')

@section('content')
<div class="container">
  <h2 style="float:left">All Categories</h2>   
  <button class="btn btn-primary pull-right" style="float:right"><a href="{{ URL('add-category') }}" style="color:white">Add New</a></button>        
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($categories as $category)
      <tr>
        <td>{{ $category->title }}</td>
        <td><button class="btn btn-primary pull-right"><a href="{{ URL('edit-category/'.$category->id)}}" style="color:white">Edit</a></button> <button class="btn btn-danger pull-right"><a href="{{ URL('delete-category/'.$category->id)}}" style="color:white">Delete</a></button></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection