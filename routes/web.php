<?php
use App\Http\Controllers\Videocontroller;
use Illuminate\Support\Facades\Route;

Route::get('users/{id}', function ($id) {
    
});
Route::get('/', function () {
    return view('welcome');
});

Route::view('/studio','studio');

Route::post('/upload-video', [Videocontroller::class, 'uploadvideo']);