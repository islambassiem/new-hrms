<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Country>
 */
class CountryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->unique()->countryCode(),
            'name_en' => fake()->unique()->country(),
            'name_ar' => fake()->unique()->country().' (AR)',
            'is_active' => fake()->boolean(20),
            'created_by' => fake()->randomElement([User::pluck('id')->random(), null]),
            'updated_by' => fake()->randomElement([User::pluck('id')->random(), null]),
        ];
    }
}
