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
        //need truncate() only if you don't migrate:fresh
        User::truncate();
        Category::truncate();
        Post::truncate();

     // $user = User::factory(10)->create();
      //  Category::factory(1)->create();
       // Post::factory(10)->create();

         //Create fake data for everything but the users name
     /* $user = User::factory()->create([
            'name' => 'xxxx'
        ]);*/

      //all 5 posts will be written by $user
    //  Post::factory(5)->create([
    //      'category_id' => Category::factory()
         // 'category_id' => $user->id
    //  ]);


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

        Post::factory(2)->create([
            'category_id' => 1
            // 'category_id' => $user->id
        ]);

        Post::factory(2)->create([
            'category_id' => 2
            // 'category_id' => $user->id
        ]);

        Post::factory(2)->create([
            'category_id' => 3
            // 'category_id' => $user->id
        ]);

        Category::factory(20)->create();
        Post::factory(30)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
