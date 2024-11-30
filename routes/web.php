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
    return view('/posts', ['title' => "Blog", 'posts' => Post::all()]);
});

Route::get("/posts/{post:slug}", function (Post $post) {
    return view("/post",  ['title' => 'Single Post', 'post' => $post]);
});

Route::get("/contact", function () {
    return view("/contact", ['title' => "Contact"]);
});

Route::get("/authors/{user:username}", function (User $user) {
    return view("/author", ['title' => count($user->posts) . " Articles by " . $user->name, 'posts' => $user->posts]);
});

Route::get("/categories/{category:slug}", function (Category $category) {
    return view("/category", ['title' => "Category " . $category->name, 'posts' => $category->posts]);
});
