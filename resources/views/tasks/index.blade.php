@extends('layouts.app')
@section('content')
    <h1>My Tasks</h1>

    @foreach ($tasks as $task)
        <div class="card mb-3 @if ($task->isCompleted()) border-success @endif">
            <div class="card-body">
                @if ($task->isCompleted())
                    <span class="badge bg-success">Completed</span>
                @endif
                <p>{{ $task->description }}</p>
                @if (!$task->isCompleted())
                    <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('PATCH')

                        <button class="btn btn-light btn-block" type="submit">Complete</button>

                @else
                <form action="/tasks/{{ $task->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <button class="btn btn-danger btn-block" type="submit">Delete</button>
                @endif

                </form>
            </div>
        </div>
    @endforeach
    <a href="/tasks/create" class="btn btn-primary btn-lg btn-block">Add New Task</a>
@endsection
