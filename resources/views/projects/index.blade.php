@extends('layouts.app')

@section('content')
<div class="flex items-center mb-3">
    <a href="{{ route('projects.create') }}">New projects</a>
</div>
    

<div class="flex">
    @forelse ($projects as $project)
        <div class="bg-white mr-4 rounded shadow p-5 w-1/3" style="height: 200px;">
            <h3 class="font-bold text-xl py-6">{{ $project->title }}</h3>
        
            <div class="text-teal-700">{{ Illuminate\Support\Str::limit($project->description, 100) }}</div>
        </div>
    @empty
        <div>No projects yet</div>
    @endforelse
</div>

@endsection
