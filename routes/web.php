<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

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

// //Halaman Singgel Posts

Route::get('posts/{slug}', [PostController::class, 'show']);

