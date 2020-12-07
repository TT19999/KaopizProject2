<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i < 10; $i++) { 
        //     $this->call([
        //         PostSeeder::class,
        //         CommentSeeder::class,
        //         categorySeeder::class,
        //     ]);
        // }

        // \App\Models\User::factory(100)->create();
        Comment::factory(10)->create();
        Post::factory(10)->create();
        Category::factory(10)->create();
    }
}
