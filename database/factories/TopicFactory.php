<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Topic>
 */
class TopicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->word(),
            'image'=>basename(fake()->image(public_path('assests/images/topics'))),
            'content'=>fake()->text(),
            'category_id'=>fake()->numberBetween(1,5),
            'published'=>fake()->boolean(),
            'trending'=>fake()->boolean(),
        ];
    }
}
