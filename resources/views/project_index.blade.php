

@extends('layouts.app')

@section('title', 'Projects')

@section('content')
<h1>Projects</h1>
@foreach ($projects as $project)
<div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        {{ $project->name }}
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
      <div class="accordion-body">
      <p><a href="/projects/{{ $project->id }}">{{ $project->name }}</p></a>
       <p>Status: {{ $project->status }}</p>
      </div>
    </div>
  </div>
@endforeach
@endsection