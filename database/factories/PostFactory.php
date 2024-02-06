<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Persistance\Models\Post>
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
            'title' => fake()->title(),
            'article' => fake()->text(),
            'slug' => fake()->unique()->title(),
            'date_published' => fake()->dateTime(),
            'bannner_image' => fake()->imageUrl(),
            'enabled' => fake()->boolean(),
            'featured' => fake()->boolean(),
            'comments_enabled' => fake()->boolean(),
            'views' => fake()->numberBetween(0, 100),
        ];
    }
}
