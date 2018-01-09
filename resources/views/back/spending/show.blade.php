@extends('layouts.app')
@section('content')

    <h1>Spendings</h1>
    Title spending :
    <br>
    <h1>Description</h1>
    <br>
    <h1>Association details</h1>
    @foreach($spending->users as $user)
        {{$user->name}}
    @endforeach
