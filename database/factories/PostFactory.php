<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $title=fake()->sentence();
        $body=fake()->text();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'category_id'=>Category::factory(),
            'user_id'=>User::factory(),
            'excerpt' => str::excerpt($body),
            'image_name' => fake()->imageUrl($width=400, $height=400),
            'body' => $body


        ];
    }
}
