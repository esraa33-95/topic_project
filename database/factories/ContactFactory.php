<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name'=>fake()->word(),
           'subject'=>fake()->word(),
           'message'=>fake()->text(),
           'email'=>fake()->email(),
           'read_at'=>fake()->numberBetween(0,1),
        ];
    }
}
