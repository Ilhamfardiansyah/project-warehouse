<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Ilham Fardiansyah",
        "email" => "ilhamfardiansyah97@gmail.com",
        "image" => "img/il.png"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman Singgel Posts
Route::get('posts/{post:slug}', [PostController::class, 'show']);
// Login
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegisterController::class, 'index']);
