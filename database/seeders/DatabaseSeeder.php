<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Aboutus;
use App\Models\Comment;
use App\Models\ContactUs;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Post::factory(5)->create();
        User::factory(5)->create();
        Comment::factory(2)->create();
        ContactUs::factory(2)->create();
        Aboutus::factory(1)->create();
    }
}
