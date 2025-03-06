<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(5)->create(); // Buat 5 User
        Post::factory(10)->create(); // Buat 10 Post
    }
}
