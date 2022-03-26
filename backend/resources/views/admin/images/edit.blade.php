@extends('layouts.general')

@section('content')

<form action="{{ url('update-category/'.$category->id) }}" method="POST" style="margin:15vh auto auto 0; width:65vw;">
  @csrf
  @method('put')
  <h1>Edit Category</h1>
  <div class="form-group" >
    <label for="name">Name</label>
    <input value="{{$category->name}}" style="color:white;" type="text" class="form-control" id="name" name="name" placeholder="Category Name">
  </div>
  <div class="form-group" >
    <label for="image">Image URL</label>
    <input value="{{$category->image}}" style="color:white;" type="text" class="form-control" id="image" name="image" placeholder="Image URL">
  </div>
  <div class="form-group">
    <label for="brief">Brief</label>
    <textarea name="brief" id="brief" style="color:white;" class="form-control" id="brief" rows="3">{{$category->brief}}</textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Edit Category</button>
  </div>

</form>

@endsection