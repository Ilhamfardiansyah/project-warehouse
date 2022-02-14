<?php

namespace App\Models;

class Post 
{
    private static $blog_posts =  [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "Ilham Fardiansyah",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
        elit. Nobis sint quaerat quod, laborum pariatur repellat ipsam adipisci officia reiciendis doloribus, beatae vero tempore eum quisquam in hic et magni deleniti!
"
    ],
    [ 
        // "title" => "Judu Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "Jaya Wijaya",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing 
        elit. Nobis sint quaerat quod, laborum pariatur repellat ipsam adipisci officia reiciendis doloribus, beatae vero tempore eum quisquam in hic et magni deleniti!
"
    ]
];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}
