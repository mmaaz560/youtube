<?php

use App\Http\Controllers\CommentController;
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
Route::view('/watch/{id}','single-video');
Route::view('/search/{title}','searchvideo');


Route::post('/upload-video', [Videocontroller::class, 'uploadvideo']);
Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/login', [UserController::class, 'loginUser']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/add-comment',[CommentController::class, 'createcomment']);
Route::post('/search',[Videocontroller::class, 'searchitem']);

Route::get('/',[Videocontroller::class, 'getvideos']);
Route::get('/watch/{id}',[Videocontroller::class, 'getsinglevideo']);
Route::get('/get-comment',[CommentController::class, 'getcomment']);
Route::get('/getsearchvideo',[Videocontroller::class, 'searchvideos']);