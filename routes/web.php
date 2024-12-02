<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => "Home Page"]);
});

Route::get('/about', function () {
    return view('about', ['name' => "Muhammad Dzulfikri", 'title' => "About"]);
});

Route::get("/posts", function () {
    // Easger loading
    // $posts = Post::with(['author', 'category'])->latest()->get();

    $posts = Post::latest()->get();
    return view('/posts', ['title' => "Blog", 'posts' => $posts]);
});

Route::get("/posts/{post:slug}", function (Post $post) {
    return view("/post",  ['title' => 'Single Post', 'post' => $post]);
});

Route::get("/contact", function () {
    return view("/contact", ['title' => "Contact"]);
});

Route::get("/authors/{user:username}", function (User $user) {
    // lazy eager loading
    // $posts = $user->posts->load('author', 'category');

    $posts = $user->posts;
    return view("/author", ['title' => count($posts) . " Articles by " . $user->name, 'posts' => $posts]);
});

Route::get("/categories/{category:slug}", function (Category $category) {
    //lazy eager loading
    // $posts = $category->posts->load('author', 'category');

    $posts = $category->posts;
    return view("/category", ['title' => "Category " . $category->name, 'posts' => $posts]);
});
