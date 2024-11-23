<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['name' => "Muhammad Dzulfikri", 'title' => "About"]);
});

Route::get("/posts", function () {
    return view('/posts', ['title' => "Blog", 'posts' => [
        [
            "id" => 1,
            "slug" => "judul-article-1",
            "title" => "Judul Article 1",
            "author" => "Muhammad Dzulfikri",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur soluta, quisquam
            recusandae neque repellendus ipsum asperiores. Corrupti nam tenetur, consequuntur incidunt, dolorem
            asperiores omnis soluta nisi, harum qui minus."

        ],
        [
            "id" => 2,
            "slug" => "judul-article-2",
            "title" => "Judul Article 2",
            "author" => "Muhammad Dzulfikri",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur soluta, quisquam
            recusandae neque repellendus ipsum asperiores. Corrupti nam tenetur, consequuntur incidunt, dolorem
            asperiores omnis soluta nisi, harum qui minus."

        ],
    ]]);
});

Route::get("/posts/{slug}", function ($slug) {
    $posts = [
        [
            "id" => 1,
            "title" => "Judul Article 1",
            "slug" => "judul-article-1",
            "author" => "Muhammad Dzulfikri",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur soluta, quisquam
            recusandae neque repellendus ipsum asperiores. Corrupti nam tenetur, consequuntur incidunt, dolorem
            asperiores omnis soluta nisi, harum qui minus."

        ],
        [
            "id" => 2,
            "slug" => "judul-article-2",
            "title" => "Judul Article 2",
            "author" => "Muhammad Dzulfikri",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Consequatur consectetur soluta, quisquam
            recusandae neque repellendus ipsum asperiores. Corrupti nam tenetur, consequuntur incidunt, dolorem
            asperiores omnis soluta nisi, harum qui minus."

        ],
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view("/post",  ['title' => 'Single Post', 'post' => $post]);
});

Route::get("/contact", function () {
    return view("/contact", ['title' => "Contact"]);
});
