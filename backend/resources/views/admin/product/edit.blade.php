@extends('layouts.general')

@section('content')

<form action="{{ url('update-product/'.$product->id) }}" method="POST" style="margin:15vh auto auto 0; width:65vw;">
    @csrf
    @method('put')
    <h1>Edit Product</h1>
    <br>
  <div class="form-group" >
    <label for="name">Name</label>
    <input value="{{$product->name}}" required style="color:white;" type="text" class="form-control" id="name" name="name" placeholder="Product Name">
  </div>
  <div class="form-group" >
    <label for="price">Image1 URL</label>
    <input value="{{$product->image1}}" required style="color:white;" type="text" class="form-control" id="image1" name="image1" placeholder="Image URL">
  </div>
  <div class="form-group" >
    <label for="price">Image2 URL</label>
    <input value="{{$product->image2}}" required style="color:white;" type="text" class="form-control" id="image2" name="image2" placeholder="Image URL">
  </div>
  <div class="form-group" >
    <label for="price">Image3 URL</label>
    <input value="{{$product->image3}}" required style="color:white;" type="text" class="form-control" id="image3" name="image3" placeholder="Image URL">
  </div>
  <div class="form-group" >
    <label for="price">Image4 URL</label>
    <input value="{{$product->image4}}" required style="color:white;" type="text" class="form-control" id="image4" name="image4" placeholder="Image URL">
  </div>
  <div class="form-group">
    <label for="description">description</label>
    <input value="{{$product->description}}"  name="description" id="description" style="color:white;" class="form-control" placeholder="description">
  </div>
  <div class="form-group" >
    <label for="price">Price</label>
    <input value="{{$product->price}}" required style="color:white;" type="number"  class="form-control" id="price" name="price" placeholder="Product Price">
  </div>
  <div class="form-group" >
    <label for="stock">Stock</label>
    <input value="{{$product->stock}}" required style="color:white;" type="text" pattern="[0-9]+" class="form-control" id="stock" name="stock" placeholder="Product Stock">
  </div>
  <div class="form-group">
    <label for="cat_id">Category</label>
    <select selected="{{$product->category->name}}" required id="cat_id" name="cat_id" style="color:white;" class="form-control" id="cat_id">
    <option disabled>Select a Category</option>
    @foreach($category as $item)  
    <option value="{{ $item->id }}">{{$item->name}}</option>
    @endforeach

    </select>
  </div>
 
  <div class="form-group">
    <label for="brief">Brief</label>
    <textarea value="{{$product->brief}}" name="brief" id="brief" style="color:white;" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$product->brief}}</textarea>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Edit Product</button>
  </div>

</form>

@endsection