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
        User::truncate();
        Category::truncate();
        Post::truncate();

         User::factory(10)->create();

         Category::create([
             'name' => 'Personal',
             'slug' => 'personal'
         ]);

        Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 3,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur\r\ndignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,\r\nperspiciatis quos suscipit veniam?'
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => 1,
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur\r\ndignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,\r\nperspiciatis quos suscipit veniam?'
        ]);

        Post::create([
            'category_id' => 2,
            'user_id' => 2,
            'title' => 'My Third Post',
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias aspernatur at atque consequuntur\r\ndignissimos, distinctio dolorem dolorum eaque eligendi hic illum in neque odit pariatur,\r\nperspiciatis quos suscipit veniam?'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
