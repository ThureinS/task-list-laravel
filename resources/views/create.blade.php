@extends('layouts.app')

@section('title', 'Create New Task')

@section('style')
    <style>
        .error-message {
            color: red;
            font-size: 0 8rem;
        }
    </style>
@endsection

@section('content')
    <form action={{ route('task.store') }} method="post">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="5"></textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="long_description">Long Description:</label>
            <textarea id="long_description" name="long_description" rows="10"></textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Create Task</button>
    </form>
@endsection
