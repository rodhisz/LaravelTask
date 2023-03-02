<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    private $tasklist = [
        'satu' => 'belajar laravel',
        'dua' => 'belajar laravel2',
        'tiga' => 'belajar laravel3',
    ];

    public function index(Request $request)
    {
        if ($hasil = $request->cari) {
            return $this->tasklist[$hasil];
        }
        return $this->tasklist;
    }

    public function store(Request $request)
    {
        $this->tasklist[$request->key] = $request->value;
        return $this->tasklist;
    }

    public function show($parameter)
    {
        return $this->tasklist[$parameter];
    }


    public function update(Request $request, $key)
    {
        $this->tasklist[$key] = $request->task;
        return $this->tasklist;
    }

    public function destroy($key)
    {
        unset($this->tasklist[$key]);
        return $this->tasklist;
    }
}
