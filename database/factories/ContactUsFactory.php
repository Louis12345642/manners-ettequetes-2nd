<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ContactUs>
 */
class ContactUsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $name=fake()->name();
        $message=fake()->text();
        return [
            'name' => $name,
            'email' => fake()->unique()->safeEmail(),
            'message' =>$message,

        ];
    }
}
