
@extends('layouts/master')
@section('title','Home')
@section('content')

     <!-- Page Content -->
         <div >

        <div class="d-flex align-items-center justify-content-between ba-none w3-container w3-teal">
            <h1>Count of Users : {{$user}}</h1>
             <a href="{{ route('logout')}}" class="btn btn-info">Logout</a>  
        </div>

       
          <!-- Modal -->
       @include('modals/activeUsers')
       @include('modals/add')
    

        <!-- <div class="w3-container">
            <h2></h2>
            <p></p>
            <p></p>
        </div> -->
        
       
        <div class="container mt-2">
            <div class="row mx-0 align-items-center justify-content-between" >
                <h2>User List</h2>
                <span class="span"> 
                <a href="" class="btn btn-outline-primary btn-sm mb-2" data-toggle="modal" data-target="#myModal">Active Users</a>      
               <a href="" id="addBtn" class="btn btn-outline-dark btn-sm mb-2" data-toggle="modal" data-target="#addModal">Add User</a>
            </span>



            </div>

            
            <div class="mt-1">
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
                <table class="table table-bordered" id="users-list">
                    <thead>
                        <tr>
                            <th>User Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($users)
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->user_id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{$user->status}}</td>
                            <td>
                                <a href="{{route('edit.user',encrypt($user->user_id))}}" class="btn btn-outline-dark btn-sm">Edit</a>
                                <a href="{{route('delete.user',encrypt($user->user_id))}}" class="btn btn-danger btn-sm delete-btn">Delete</a>
                                <!-- <button class="btn btn-dark">
                    <i class="bi bi-heart-fill"></i> Like
                </button> -->
                            </td>
                        </tr>
                        @endforeach
                        @endif

                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection
   
   
    