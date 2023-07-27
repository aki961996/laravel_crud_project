@extends('layouts/master')
@section('title','edit')
@section('content')


<div class="modal-body">
                <form action="{{ route('update.user') }}" method="POST"  id="add_create" name="add_create" >
                    @csrf

                {{-- update cheyubhol id hidden ayi vidanam user ella data ind so id um ind --}}
                 <input type="hidden" name="user_id" value="{{encrypt($user->user_id)}}">  
             
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value='{{$user->name}}'class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{$user->email}}"class="form-control">
                      </div> 

                       <div class="form-group">
                        <label>Dob</label>
                        <input type="date" name="date_of_birth" value="{{$user->date_of_birth}}" class="form-control">
                      </div>
     
     
                     <div class="form-group">
                        <label>status</label>
                        <select class="form-control" value="{{$user->status}}"name="status">
                            <option value="1" @if($user->status == 1) selected="selected" @endif>Active</option>
                            <option value="0" @if($user->status == 0) selected="selected" @endif>Inactive</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Update Data</button>
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                      </div>
            </form>

            </div>
@endsection
