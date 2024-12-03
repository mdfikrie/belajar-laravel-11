<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming",
            "color" => "red",
        ]);

        Category::create([
            "name" => "Mobile Development",
            "slug" => "mobile-development",
            "color" => "blue",

        ]);

        Category::create([
            "name" => "Machine Learning",
            "slug" => "machine-learning",
            "color" => "green",
        ]);
    }
}
