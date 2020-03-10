@extends('layouts.app')

@section('content')
    <form action="{{ route('projects.store') }}" method="post">
        @csrf

        <h1>Create a project</h1>

        <div>

            <label for="title">Title</label>

            <div>
                <input type="text" name="title" placeholder="Title...">
            </div>

        </div>

        <div>
        
            <label for="description">Description</label>
        
            <div>
                <textarea name="description"></textarea>
            </div>
        
        </div>

        <div>
            <div>
                <button type="submit">Create project</button>
                <a href="/projects">Back to projects</a>
            </div>
        </div>
    </form>
@endsection