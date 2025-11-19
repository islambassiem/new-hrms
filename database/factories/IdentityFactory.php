<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\IdentityType;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Identity>
 */
class IdentityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = IdentityType::inRandomOrder()->first()->id;
        $identity_id = match ($type) {
            IdentityType::NationalID => fake()->unique()->numerify('######'),
            IdentityType::GulfID => fake()->unique()->numerify('######'),
            IdentityType::Iqama => fake()->unique()->numerify('######'),
            IdentityType::Passport => fake()->unique()->regexify('[A-Z]{1}[0-9]{8}'),
            IdentityType::BorderNumber => fake()->unique()->numerify('3#########'),
        };

        return [
            'employee_id' => Employee::inRandomOrder()->first()->id,
            'identity_type_id' => $type,
            'identity_id' => $identity_id,
            'place_of_issue' => fake()->randomElement([fake()->word(), null]),
            'date_of_issue' => fake()->randomElement([fake()->date(), null]),
            'date_of_expiry' => fake()->date(),
            'created_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
            'updated_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
        ];
    }
}
