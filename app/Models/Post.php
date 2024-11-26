<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
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
        ];
    }

    public static function find($slug): array
    {
        $post =  Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        if (!$post) {
            abort(404);
        }
        return $post;
    }
}
