<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('tasks._create')
            </div>
        </div>

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    {{ $index + 1 }}. {{ $task->list }}
                    <div>
                        <a class="btn btn-primary" href="/tasks/{{ $task->id }}/edit">Edit</a>

                        <form action="{{ route('tasks.destroy', $task->id) }}" method="post" style="display: inline;">
                            @csrf
                            @method('delete')

                            <button class="btn btn-danger me-2" type="submit">Delete</button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
</x-app-layout>
