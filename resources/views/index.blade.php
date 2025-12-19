@extends('layouts.app')

@section('title', 'List of Tasks')

@section('content')
    @forelse ($tasks as $task)
        <p>
            <a href={{ route('task.show', ['task' => $task->id]) }}>
                {{ $task->title }}
            </a>
        </p>
    @empty
        <p>There are no tasks!</p>
    @endforelse

    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection
