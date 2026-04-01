<?php
use App\Http\Controllers\Videocontroller;
use App\Http\Controllers\UserController;

use Illuminate\Support\Facades\Route;

Route::get('users/{id}', function ($id) {
    
});
Route::get('/', function () {
    return view('welcome');
});

Route::view('/studio','studio');
Route::view('/register','components.register');
Route::view('/login','components.login');

Route::post('/upload-video', [Videocontroller::class, 'uploadvideo']);
Route::post('/register', [UserController::class, 'registerUser']);