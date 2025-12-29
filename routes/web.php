<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TaskController::class, 'index']);



Route::resource('tasks',TaskController::class);

Route::patch('/tasks/{task:id}',[TaskController::class, 'Update_stat'])->name('tasks.changestatus');

