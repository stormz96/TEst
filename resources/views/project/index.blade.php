@extends('layout')

@section('content')

<h1>Project</h1>

<ul>
    @foreach($projects as $project)
        <li>
        <a href="/project/{{ $project->id}}">

            {{ $project->title}}
        
        </li>
    @endforeach
</ul>

@endsection
