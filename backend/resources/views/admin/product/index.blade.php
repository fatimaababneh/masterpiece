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
                    <h1>
                      Products
                      </h1>
                      <h3>
                        <span>
                          <a href="{{url('add-product')}}"><i class="mdi mdi-plus-circle"></i></a>
                        </span>
                      </h3>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Category </th>
                            <th>Add image </th>
                            <th> Brief </th>
                            <th> Stock </th>
                            <th>Price</th>
                            <th>ِActions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($product as $item)
                          <tr>
                            <td>
                              <!-- <img src="{{$item->image}}" alt="image" /> -->
                              <span class="ps-2">{{$item->name}}</span>
                            </td>
                            <td> {{$item->category->name}} </td>
                            <td> {{$item->brief}} </td>
                            <td> {{$item->stock}} </td>
                            <td> ${{($item->price)}} </td>
                            <td>
                              <a href="{{ url('edit-product/'.$item->id) }}" class="btn btn-primary">Edit</a>
                              <a href="{{ url('delete-product/'.$item->id) }}" class="btn btn-danger">Delete</a>
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