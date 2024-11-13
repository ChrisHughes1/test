

@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<h1>Projects</h1>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<a href="{{ route('projects.create') }}" class="btn btn-primary">Create New Project</a>

@foreach ($projects as $project)
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$project->id}}" aria-expanded="true" aria-controls="collapseOne">
        {{ $project->name }} - {{ $project->status }}
      </button>
    </h2>
    <div id="collapse{{$project->id}}" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p><a href="/projects/{{ $project->id }}">{{ $project->name }}</p></a>
       <p>Status: {{ $project->status }}</p>
       <form method="POST" action="{{ route('projects.destroy', ['id' => $project->id]) }}">
         @csrf 
        @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </div>
    </div>
  </div>
@endforeach
@endsection
