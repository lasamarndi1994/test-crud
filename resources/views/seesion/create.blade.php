@extends('layouts.app')

@section('content')



<div class="row col-lg-12">

    <form action="{{route('session.store')}}" method="POST">
        @csrf
        <div class="col-md-6">
            <lable>Name</lable>
            <input type="name" class="form-control" name="name">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <lable>Email</lable>
            <input type="email" class="form-control" name="email">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <lable>password</lable>
            <input type="password" class="form-control" name="password">
            @error('password')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-6 mt-2">

            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

@endsection
