@extends('layouts.app')

@section ('title', 'Create a New Project')

@section('content')
    <form method="POST" action="{{ route('projects.store') }}">
        @csrf
        <p>Title: <input type="text" name="name" required></p>
        <p>Description: <input type="text" name="description" required></p>
        <p>Status: 
            <select name="status">
                <option value="not_started">Not Started</option>
                <option value="in_progress">In Progress</option>
                <option value="completed">Completed</option>
            </select>
        </p>
        <p>Start Date: <input type="date" name="start_date" required></p>
        <p>End Date: <input type="date" name="end_date"></p>
        <input type="submit" value="Create Project">
        <a href="{{ route('projects.index') }}">Cancel</a>
@endsection