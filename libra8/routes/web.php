<?php
//use App\Http\Controllers\GetAlphabetController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddTasksController;
use App\Http\Controllers\GetTasksAllController;
use App\Http\Controllers\EditFormTasksController;
use App\Http\Controllers\EditTasksController;
use App\Http\Controllers\DeleteTasksController;
//use Illuminate\Support\Facades\Cache::flush();

Route::get('/', GetTasksAllController::class)->name('index');
Route::get('/tasks',function () { return view('tasks'); });
Route::post('/add', AddTasksController::class)->name('add');
Route::get('/tasks/{id}', EditFormTasksController::class)->name('editform');
Route::post('/edit', EditTasksController::class)->name('edit');
Route::get('/delete/{id}', DeleteTasksController::class)->name('delete');


