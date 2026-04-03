<?php
use App\Http\Controllers\Videocontroller;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('users/{id}', function ($id) {
    
});
Route::get('/', function () {
    return view('welcome');
});

Route::view('/studio','studio')->middleware('auth');
Route::view('/register','components.register');
Route::view('/login','components.login')->name('login');
Route::view('/sidbar','components.sidbar');

Route::post('/upload-video', [Videocontroller::class, 'uploadvideo']);
Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/logout', [UserController::class, 'logout']);