
@extends ('layouts.app')

@section ('title', 'Project Details')

@section ('content')
<a href="{{ route('tasks.create') }}" class="btn btn-primary">Create a New Task</a>
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

<h1>{{ $project->name }} Tasks</h1>
    <ul>
        @foreach ($project->tasks as $task)
        <li>
            <p>Name: {{ $task->title }}</p>
            <p>Status: {{ $task->status }}</p>
            <p>Description: {{ $task->description }}</p>
            <p>Start Date: {{ $task->created_at }}</p>
            <p>Due Date: {{ $task->due_date ?? 'Unknown' }}</p>
        </li>
        @endforeach
    </ul>

<a href="{{route('projects.index')}}">Back to Projects</a>
@endsection