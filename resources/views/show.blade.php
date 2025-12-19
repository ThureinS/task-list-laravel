@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <p>{{ $task->description }}</p>
    <p>{{ $task->long_description ?? '' }}</p>
    <p>{{ $task->completed }}</p>
    <p>{{ $task->created_at }}</p>
    <p>{{ $task->updated_at }}</p>

    <a href="{{ route('task.edit', ['task' => $task]) }}">Edit</a>

    <p>{{ $task->completed ? 'Completed' : 'Incomplete' }}</p>

    <form action="{{ route('task.toggle-complete', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('PUT')
        <button type="submit">{{ $task->completed ? 'Mark Incomplete' : 'Mark Complete' }}</button>
    </form>

    <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
