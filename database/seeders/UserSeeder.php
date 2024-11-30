<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            "name" => "Muhammad Dzulfikri",
            "username" => "dzulfikri",
            "email" => "dzulfikri@gmail.com",
            "email_verified_at" => now(),
            "password" => Hash::make("password"),
            "remember_token" => Str::random(10)
        ]);

        User::create([
            "name" => "Mujiburrohman",
            "username" => "mujib",
            "email" => "mujib@gmail.com",
            "email_verified_at" => now(),
            "password" => Hash::make("password"),
            "remember_token" => Str::random(10)
        ]);

        User::create([
            "name" => "Ulwi Shofa",
            "username" => "ulwi",
            "email" => "ulwi@gmail.com",
            "email_verified_at" => now(),
            "password" => Hash::make("password"),
            "remember_token" => Str::random(10)
        ]);
    }
}
