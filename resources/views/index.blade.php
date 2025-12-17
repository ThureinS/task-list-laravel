@extends('layouts.app')

@section('title', 'List of Tasks')

@section('content')
    @forelse ($tasks as $task)
        <p>
            <a href={{ route('task.show', ['id' => $task->id]) }}>
                {{ $task->title }}
            </a>
        </p>
    @empty
        <p>There are no tasks!</p>
    @endforelse
@endsection
