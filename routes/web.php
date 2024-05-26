<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\StudentController;

Route::get('/', [GroupController::class, 'index']);

Route::resource('groups', GroupController::class);
Route::resource('groups.students', StudentController::class, ['except' => ['index']]);