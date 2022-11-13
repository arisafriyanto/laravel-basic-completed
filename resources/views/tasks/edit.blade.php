<x-app-layout>
    <h1>Edit Tasks</h1>

    <form action="/tasks/{{ $task->id }}" method="post">
        @csrf
        @method('put')

        <input type="text" name="list" placeholder="The name of the task" value="{{ $task->list }}">

        <button type="submit">Edit</button>
    </form>
</x-app-layout>
