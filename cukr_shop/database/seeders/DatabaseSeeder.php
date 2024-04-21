<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Category::factory(10)->create();
        $posts = Post::factory(100)->create();
        $users = User::factory(10)->create();

        foreach($posts as $post){
            $userIds = $users->random(5)->pluck('id');
            $post->users()->attach($userIds);
        }
        
    }
}
