<?php

namespace App\Http\Controllers;

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

        $tasks = Task::all();
        return $tasks;
    }

    public function store(Request $request)
    {
        Task::create([
            'tasks' => $request->task,
            'time' => $request->time
        ]);

        return 'success';
    }

    public function show($id)
    {
        $task = Task::find($id);
        return $task;
    }


    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        $task->update([
            'tasks' => $request->task,
            'time' => $request->time
        ]);

        return $task;
        ddd($task);
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return 'berhasil dihapus';
    }
}
