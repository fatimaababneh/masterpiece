@extends('layouts.general')

@section('content')

<form action="{{ url('update-user/'.$user->id) }}" method="POST" style="margin:15vh auto auto 0; width:65vw;">
  @csrf
  @method('put')
  <h1>Edit User</h1>
  <div class="form-group" >
    <label for="name">Name</label>
    <input value="{{$user->name}}" style="color:white;" type="text" class="form-control" id="name" name="name" placeholder="Name">
  </div>
  <div class="form-group" >
    <label for="image">Email Address</label>
    <input value="{{$user->email}}" style="color:white;" type="email" class="form-control" id="image" name="email" placeholder="Email Address">
  </div>
  <div class="form-group">
    <label for="cat_id">Role</label>
    <select required id="role_as" name="role_as" style="color:white;" class="form-control">
    <option disabled>Select a Role</option>
    <option {{ ($user->role_as) == '1' ? 'selected' : '' }}  value="1">Admin</option>
    <option {{ ($user->role_as) == '0' ? 'selected' : '' }} value="0">User</option>

    </select>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-primary">Edit User</button>
  </div>

</form>

@endsection