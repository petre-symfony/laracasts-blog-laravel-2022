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
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => fake()->sentence,
            'excerpt' => '<p>'.implode('</p><p>', fake()->paragraphs(2)).'</p>',
            'slug' => fake()->slug,
            'body' => '<p>'.implode('</p><p>', fake()->paragraphs(6)).'</p>',
        ];
    }
}
