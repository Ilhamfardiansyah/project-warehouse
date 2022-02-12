<?php

use Illuminate\Support\Facades\Route;

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
    $blog_posts = 
    return view('blog', [
        "title" => "Post",
        "posts" => Post::all()
    ]);
});

//Halaman Singgel Posts

Route::get('posts/{slug}', function ($slug) {
     $blog_posts = [
    [
        "title" => "Judu Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ilham Fardiansyah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
        elit. Nobis sint quaerat quod, laborum pariatur repellat ipsam adipisci officia reiciendis doloribus, beatae vero tempore eum quisquam in hic et magni deleniti!
"
    ],
    [
        "title" => "Judu Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Jaya Wijaya",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
        elit. Nobis sint quaerat quod, laborum pariatur repellat ipsam adipisci officia reiciendis doloribus, beatae vero tempore eum quisquam in hic et magni deleniti!
"
    ]
];

foreach($blog_posts as $post){
    if($post["slug"] === $slug){
        $new_post = $post;
    }
}
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
