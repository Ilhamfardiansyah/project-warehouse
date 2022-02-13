<?php

use Illuminate\Support\Facades\Route;
// use \App\Models\Post;

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

Route::get('/blog', function () {
    return view('blog', [
        "title" => "Post",
        "posts" => Post::all()
    ]);
});

// //Halaman Singgel Posts

Route::get('posts/{slug}', function ($slug) {

    

    return view('post', [
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});

