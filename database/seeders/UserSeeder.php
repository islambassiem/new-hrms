<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'employee_code' => '500322',
            'email' => 'islambassiem@inaya.edu.sa',
            'name' => 'Islam Bassiem',
        ]);
        User::factory(10)->create();
    }
}
