<x-app-layout>
    <div class="container">

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Edit Task</div>
                    <div class="card-body">
                        <form action="{{ route('tasks.update', $task) }}" method="post" class="row">
                            @csrf
                            @method('put')
                            @include('tasks._form')
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
