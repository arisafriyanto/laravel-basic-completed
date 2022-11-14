<x-app-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">Create New Task</div>
                    <div class="card-body">
                        <form action="/tasks" method="post" class="row">
                            @csrf

                            <div class="col-md-11">
                                <input type="text" name="list" class="form-control"
                                    placeholder="The name of the task" autofocus>
                            </div>

                            <div class="col-md-1">

                                <button class="btn btn-primary" type="submit">Add</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <ul class="list-group mt-4">
            @foreach ($tasks as $index => $task)
                <li class="list-group-item d-flex align-items-center justify-content-between">
                    {{ $index + 1 }}. {{ $task->list }}
                    <div>
                        <a class="btn btn-primary" href="/tasks/{{ $task->id }}/edit">Edit</a>

                        <form action="/tasks/{{ $task->id }}" method="post" style="display: inline;">
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
