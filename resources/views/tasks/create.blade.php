@extends('layouts.app')
@section('content')

        <h1>New Task</h1>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    
@endif
        <form method="POST" action="/tasks">

            @csrf

            <div class="mb-3">
                <label for="taskDescription" class="form-label">Task Description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Enter task description">
            </div>

            <button type="submit" class="btn btn-primary">Create Task</button>

        </form>
    
@endsection