@extends('layout')

@section('title','Welcome')

@section('content')
 

 <h1>Welcome<h1>

    @foreach($tasks as $task)
    <li>{{ $task }}</li>
 @endforeach

@endsection