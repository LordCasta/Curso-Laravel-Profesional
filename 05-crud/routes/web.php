<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::resource('/note', NoteController::class);

Route::resource('/post', PostController::class);
