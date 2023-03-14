<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        if ($request->cari) {
            $tasks = DB::table('tasks')
                ->where('time', 'LIKE', "%$request->cari%")
                ->get();

            return $tasks;

            // return $this->tasklist[$request->cari];
        }

        $tasks = DB::table('tasks')->get();
        return $tasks;
    }

    public function store(Request $request)
    {
        // $this->tasklist[$request->key] = $request->value;
        // return $this->tasklist;

        DB::table('tasks')->insert([
            'tasks' => $request->task,
            'time' => $request->time
        ]);

        return 'success';
    }

    public function show($id)
    {
        $task = DB::table('tasks')->where('id', $id)->first();
        return ddd($task);

        // return $this->tasklist[$parameter];
    }


    public function update(Request $request, $id)
    {
        $task = DB::table('tasks')->where('id', $id)->update([
            'tasks' => $request->task,
            'time' => $request->time
        ]);

        return 'berhasil hore';
        ddd($task);
        // return $this->tasklist;
    }

    public function destroy($id)
    {
        DB::table('tasks')
            ->where('id', $id)
            ->delete();

        return 'berhasil dihapus';
    }
}
