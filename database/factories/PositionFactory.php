<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\JobTitle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'job_title_id' => JobTitle::inRandomOrder()->first()->id,
            'employee_id' => Employee::inRandomOrder()->first()->id,
            'start_date' => fake()->date(),
            'end_date' => fake()->randomElement([null, fake()->date()]),
            'is_official_position' => fake()->randomElement([true, false]),
            'created_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
            'updated_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
        ];
    }
}
