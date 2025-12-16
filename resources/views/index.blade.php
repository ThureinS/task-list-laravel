<h1>List of Tasks</h1>


@forelse ($tasks as $task)
    <p>
        <a href={{ route('task.show', ['id' => $task->id]) }}>
            {{ $task->title }}
        </a>
    </p>
@empty
    <p>There are no tasks!</p>
@endforelse
