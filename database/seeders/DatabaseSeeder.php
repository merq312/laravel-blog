<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

         $family = Category::create([
             'name' => 'Family',
             'slug' => 'family'
         ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'hello',
            'body' => 'something something something'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-Work-post',
            'excerpt' => 'working',
            'body' => 'work work work'
        ]);
    }
}
