@extends('layouts.app')

@section('content')
    <h1>{{ $project->title }}</h2>
    
    <p>{{ $project->description }}</p>

    <a href="/projects">Go back</a>
@endsection
