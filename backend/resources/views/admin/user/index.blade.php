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
                    <h1>Users</h1>
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Role </th>
                            <th>ِAction</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>{{Auth::user()->name}}</td>
                            <td>{{Auth::user()->email}}</td>
                            <td> {{Auth::user()->role_as==1?'Admin':'User'}} </td>
                            <td></td>
                          </tr>
                          @foreach($user as $item)
                          @if($item->id != Auth::user()->id)
                          <tr>
                            <td> {{$item->name}} </td>
                            <td> {{$item->email}} </td>
                            <td> {{$item->role_as==1?'Admin':'User'}} </td>
                            <td>
                              <a href="{{ url('edit-user/'.$item->id) }}" class="btn btn-primary">Edit</a>
                              <a href="{{ url('delete-user/'.$item->id) }}" class="btn btn-danger">Delete</a>
                            </td>
                            <!-- <td>
                              <div class="badge badge-outline-success">Approved</div>
                            </td> -->
                          </tr>
                          @endif
                          @endforeach
                              </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
        @endsection