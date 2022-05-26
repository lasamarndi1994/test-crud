@extends('layouts.app')

@section('content')



<div class="row col-lg-12">

    <form action="{{route('session.update',[$user->id])}}" method="POST">
        @method('PUT')
        @csrf
        <div class="col-md-6">
            <lable>Name</lable>
            <input type="name" class="form-control" name="name" value="{{$user->name}}">
            @error('name')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <lable>Email</lable>
            <input type="email" class="form-control" name="email" value="{{$user->email}}">
            @error('email')
            <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <lable>Status</lable>
            <select class="form-control" name="status">
                <option value="1" {{$user->is_active == 1 ? 'selected' : ''}}>Active</option>
                <option value="0" {{$user->is_active == 0 ? 'selected' : ''}}>Deactive</option>

            </select>

        </div>
        <div class="col-md-6 mt-2">

            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>

@endsection
