@extends('layouts.general')

@section('content')

<form action="{{ url('insert-category') }}" method="POST" style="margin:15vh auto auto 0; width:65vw;">
  @csrf
  <h1>Add Category</h1>
  <div class="form-group" >
    <label for="exampleFormControlInput1">Name</label>
    <input style="color:white;" type="text" class="form-control" id="name" name="name" placeholder="Category Name">
  </div>
  <div class="form-group" >
    <label for="image">Image URL</label>
    <input style="color:white;" type="text" class="form-control" id="image" name="image" placeholder="Image URL">
  </div>
  <div class="form-group">
    <label for="brief">Brief</label>
    <textarea name="brief" id="brief" style="color:white;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Add Category</button>
  </div>

</form>

@endsection