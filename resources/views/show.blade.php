@extends('layouts.app')

@section('title', $task->title)

@section('content')
    <div>
        <a href="{{ route('task.index') }}" class="link">⏪ Back to Task
            List</a>
    </div>

    <p class="mb-4 text-slate-700">{{ $task->description }}</p>

    <p class="mb-4 text-slate-700">{{ $task->long_description ?? '' }}</p>

    <p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} . Updated
        {{ $task->updated_at->diffForHumans() }}</p>

    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Incomplete</span>
        @endif
    </p>

    <div class="flex gap-2">
        <a href="{{ route('task.edit', ['task' => $task]) }}" class="btn">Edit</a>

        <form action="{{ route('task.toggle-complete', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit" class="btn">{{ $task->completed ? 'Mark Incomplete' : 'Mark Complete' }}</button>
        </form>

        <form action="{{ route('task.destroy', ['task' => $task->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn">Delete</button>
        </form>
    </div>

@endsection
