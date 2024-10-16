<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [

            'user_id' => User::factory(),
            'category_id' => random_int(1,22),
            'title' => fake()->sentence(),
            'slug' => fake()->slug(),
            'excerpt' => fake()->paragraph(2),
            'body' => '<p>'. implode('</p><p>',[fake()->paragraph(6),fake()->paragraph(6)]).'</p>',
        ];
    }
}
