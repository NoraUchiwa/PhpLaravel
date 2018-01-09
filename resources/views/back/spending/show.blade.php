@extends('layouts.app')
@section('content')

    <h1>Spendings</h1>
    Title spending : {{$spending->title}}
    <br>
    <h1>Description</h1>
    {{$spending->description}}

    <br>
    <h1>Association details</h1>
    @foreach($spending->users as $user)
        {{$user->name}}
    @endforeach
    <br>
    Price : {{$spending->price}}
    <br>
    Date : {{$spending->created_at}}
@endsection