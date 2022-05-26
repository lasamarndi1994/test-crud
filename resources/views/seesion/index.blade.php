@extends('layouts.app')

@section('content')
<div class="row">
    <form action="{{route('logout')}}" method="post">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
    </form>

    <a href="{{route('session.create')}}" class="btn btn-success pull-right">Create</a>


</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Active</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
        <tr>
            <th scope="row">{{$loop->index+1}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><span class="{{$user->is_active == 1 ? 'text-success' : 'text-danger'}}">

                {{$user->is_active == 1 ? 'Active' : 'Deactive'}}
            </span></td>
            <td>
                <a href="{{route('session.show',[$user->id])}}"><i class="fa fa-eye"></i></a>
                <a href=""><i class="fa fa-trash text-danger"></i></a>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
