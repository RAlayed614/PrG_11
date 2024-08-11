<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\content>
 */
class contentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Title' => fake()->company(),
            'Photo' => fake()->image(),
            'description' => fake()->text(),
            'type' => fake()->boolean()
            //protected $fillable = ['Title', 'description', 'type'];
        ];
    }
}
