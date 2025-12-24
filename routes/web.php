<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('tasks.home');
});
Route::resource('tasks',TaskController::class);
