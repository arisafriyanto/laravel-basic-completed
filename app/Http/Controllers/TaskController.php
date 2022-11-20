<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        return view("tasks.index", [
            'tasks' => Task::orderBy("id", "desc")->get(),
            'submit' => 'Create',
            'task' => new Task()
        ]);
    }

    public function store(TaskRequest $request)
    {
        $task = Task::create($request->all());

        return back();
    }

    public function edit(Task $task)
    {
        return view("tasks.edit", [
            "task" => $task,
            'submit' => 'Update'
        ]);
    }

    public function update(TaskRequest $request, Task $task)
    {
        $task->update([
            "list" => $request->list
        ]);

        return redirect("tasks");
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return back();
    }
}
