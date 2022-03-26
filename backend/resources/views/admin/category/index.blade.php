@extends('layouts.general')

@section('content')
<div class="main-panel">
          <div class="content-wrapper">
          @if ($message = session('success'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
          <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h1>Categories</h1>
                    <h3>
                        <span>
                          <a href="{{url('add-category')}}"><i class="mdi mdi-plus-circle"></i></a>
                        </span>
                      </h3>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Brief </th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($category as $item)
                          <tr>
                            <td>
                              <img src="{{$item->image}}" alt="image" />
                              <span class="ps-2">{{$item->name}}</span>
                            </td>
                            <td> {{$item->brief}} </td>
                            <td>
                              <a href="{{ url('edit-category/'.$item->id) }}" class="btn btn-primary">Edit</a>
                              <a href="{{ url('delete-category/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            <!-- <td>
                              <div class="badge badge-outline-success">Approved</div>
                            </td> -->
                          </tr>
                          @endforeach
                              </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        @endsection