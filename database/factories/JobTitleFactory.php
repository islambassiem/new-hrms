<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobTitle>
 */
class JobTitleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->unique()->numerify('###'),
            'name_en' => fake()->unique()->jobTitle(),
            'name_ar' => fake()->unique()->jobTitle().' (AR)',
            'created_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
            'updated_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
        ];
    }
}
