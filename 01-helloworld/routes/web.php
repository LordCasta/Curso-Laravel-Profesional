<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'landing.index')->name('index');
Route::view('/about', 'landing.about')->name('about');
// Route::get('users/{id}', function ($id) {
    
// });
// Route::post('users/{id}', function ($id) {
    
// });
// Route::put('users/{id}', function ($id) {
    
// });

// Route::delete('users/{id}', function ($id) {
    
// });
// Route::patch();
