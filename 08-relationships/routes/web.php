<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
use App\Http\Resources\UserResource;
use App\Models\User;

Route::get('/', [UserController::class, 'index'])->name('index');
