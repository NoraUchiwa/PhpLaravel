@extends('layouts.app')
@section('content')

    <h1>Users</h1>
    Name : <strong>{{$users->name}}</strong>
    <br>
    <br>
    <img src="{{$users->avatar}}" alt="">

    @endsection