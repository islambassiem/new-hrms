<?php

namespace Database\Factories;

use App\Enums\GenderEnum;
use App\Enums\MaritalStatusEnum;
use App\Enums\ReligionEnum;
use App\Enums\VacationEnum;
use App\Models\Country;
use App\Models\Insurance;
use App\Models\SpecialNeedsType;
use App\Models\Sponsorship;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'head_id' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),

            'first_name_en' => fake('en')->firstName(),
            'middle_name_en' => fake('en')->randomElement([null, fake('en')->firstName()]),
            'third_name_en' => fake('en')->randomElement([null, fake('en')->firstName()]),
            'last_name_en' => fake('en')->lastName(),
            'first_name_ar' => fake('ar')->firstName(),
            'middle_name_ar' => fake('ar')->randomElement([null, fake('ar')->firstName()]),
            'third_name_ar' => fake('ar')->randomElement([null, fake('ar')->firstName()]),
            'last_name_ar' => fake('ar')->lastName(),

            'gender' => fake()->randomElement(GenderEnum::toArray()),
            'marital_status' => fake()->randomElement([collect(MaritalStatusEnum::cases())->random()->value, null]),
            'nationality_id' => Country::inRandomOrder()->first()->id,
            'religion' => fake()->randomElement([collect(ReligionEnum::cases())->random()->value, null]),
            'home_country_id' => fake()->randomElement([null, fake()->regexify('[A-Z]{2}[0-9]{8}')]),
            'date_of_birth' => fake()->randomElement([null, fake()->date()]),
            'place_of_birth' => fake()->randomElement([Country::inRandomOrder()->first()->id, null]),

            'phone' => fake()->randomElement([null, fake()->phoneNumber()]),
            'mobile' => fake()->randomElement([null, fake()->phoneNumber()]),
            'email' => fake()->unique()->safeEmail(),

            'is_active' => fake()->boolean(30),
            'has_salary' => fake()->boolean(90),
            'has_biometric' => fake()->boolean(80),
            'works_on_saturday' => fake()->boolean(20),
            'has_married_contract' => fake()->boolean(10),

            'sponsorship_id' => Sponsorship::inRandomOrder()->first()->id,
            'joining_date' => fake()->date(),
            'resignation_date' => fake()->randomElement([null, fake()->date()]),
            'vacation' => collect(VacationEnum::cases())->random()->value,
            'special_needs_id' => fake()->randomElement([SpecialNeedsType::inRandomOrder()->first()->id, null]),
            'insurance_id' => fake()->randomElement([Insurance::inRandomOrder()->first()->id, null]),
            'created_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
            'updated_by' => fake()->randomElement([User::inRandomOrder()->first()->id, null]),
        ];
    }
}
