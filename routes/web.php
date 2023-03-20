<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Halaman utama
Route::get('/', [HomeController::class, 'index']);

//create
Route::get('/task/create', [TaskController::class, 'create']); //ini viewnya (buat nambah data)
Route::post('/tasks', [TaskController::class, 'store']);//ini progressnya (buat nambah data)

//read
//halaman index
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/tasks/{id}', [TaskController::class, 'show']);

//update
Route::get('/task/{id}/edit', [TaskController::class, 'edit']); //ini viewnya doang
Route::patch('tasks/{id}', [TaskController::class, 'update']); //ini progressnya

//delete
Route::delete('tasks/{id}', [TaskController::class, 'destroy']);
