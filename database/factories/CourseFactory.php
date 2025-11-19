<?php

namespace Database\Factories;

use App\Enums\CourseTypeEnum;
use App\Models\Country;
use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employee_id' => Employee::inRandomOrder()->first()->id,
            'name' => fake()->sentence(),
            'type' => fake()->randomElement(CourseTypeEnum::toArray()),
            'issuer' => fake()->company(),
            'year' => fake()->year(),
            'period' => fake()->word(),
            'city' => fake()->city(),
            'country_id' => Country::inRandomOrder()->first()->id,
            'created_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
            'updated_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
        ];
    }
}
