
@extends ('layouts.app')

@section ('title', 'Project Details')

@section ('content')
<h1>Project Details</h1>
<ul>
    <li>
        <p><a href="{{route('projects.show', ['id'=>$project->id])}}">Name: {{ $project->name }}</a></p>
        <p>Status: {{ $project->status }}</p>
        <p>Start Date: {{ $project->start_date }}</p>
        <p>description: {{ $project->description }}</p>
        <p>End Date: {{ $project->end_date ?? 'Uknown'}}</p>
    </li>
</ul>

<a href="{{route('projects.index')}}">Back to Projects</a>
@endsection