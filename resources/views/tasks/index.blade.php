<x-app-layout>
    <h1>Tasks</h1>

    <form action="/tasks" method="post">
        @csrf

        <input type="text" name="list" placeholder="The name of the task" autofocus>

        <button type="submit">Add</button>
    </form>

    <ul style="list-style-type: none;">
        @foreach ($tasks as $index => $task)
            <li style="margin-bottom: 15px;">
                {{ $index + 1 }}. {{ $task->list }}

                <div>

                    <a style="color: skyblue;" href="/tasks/{{ $task->id }}/edit">Edit</a>

                    <form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
                        @csrf
                        @method('delete')

                        <button type="submit"
                            style="border: 0; color: red; background: none; font-size: 15px;">Delete</button>
                    </form>

                </div>
            </li>
        @endforeach
    </ul>
</x-app-layout>
