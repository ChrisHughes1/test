@extends('layouts.app')

@section ('title', 'Create a New a Task')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}">
        @csrf
        <p>Title: <input type="text" name="title" required></p>
        <p>Description: <input type="text" name="description" required></p>
        <p>Status: 
            <select name="status">
                <option value="not_started">Not Started</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </p>
        <p>assignee: <input type="text" name="assigned_to" required></p>
        <p>Project: 
            <select name="project_id">
                @foreach ($projects as $project)
                    <option value="{{ $project->id }}">{{ $project->name }}</option>
                @endforeach
            </select>
        <p>Due Date: <input type="date" name="due_date"></p>
        <input type="submit" value="Create Task">
        <a href="{{ route('tasks.index') }}">Cancel</a>
    </form>
@endsection
