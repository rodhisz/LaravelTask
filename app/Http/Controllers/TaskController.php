<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        if ($request->cari) {
            $tasks = Task::where('time', 'LIKE', "%$request->cari%")->get();
            return $tasks;
        }

        $tasks = Task::paginate(20);
        // return $tasks;
        return view('task.index', [
            'data' => $tasks
        ]);
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(TaskRequest $request)
    {
        Task::create([
            'tasks' => $request->tasks,
            'time' => $request->time
        ]);

        return redirect('/tasks');
    }

    public function show($id)
    {
        $task = Task::find($id);
        return $task;
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('task.edit', compact('task'));
    }


    public function update(TaskRequest $request, $id)
    {
        $task = Task::find($id);

        $task->update([
            'tasks' => $request->tasks,
            'time' => $request->time
        ]);

        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect('/tasks');
    }
}
