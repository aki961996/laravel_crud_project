@extends('layouts/master')
@section('title','Book-online')
@section('content')
<div class="row min-vh-100 align-items-center">
    <div class="col-sm-6 mx-auto mt-5">





        <form action="{{route('class.result')}}" method="post" name="class-result">
            @csrf
            <h2>Find a class near me</h2>
            <div class="form-group">
                <label>Where would you like to swim?</label>
                <input type="text" class="form-control" name="search" aria-describedby="emailHelp"
                    placeholder="Enter Postcode">

            </div>
            <div class="form-group">
                <label>Your childs date of birth or due date</label>
                <input type="date" class="form-control" name="dob" placeholder="date of birth">
            </div>

            <button type="submit" class="btn btn-dark">search</button>
            {{-- <a href="" id="addBtn" class="">Search</a> --}}
        </form>

    </div>
</div>



@endsection