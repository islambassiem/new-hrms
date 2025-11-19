<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            'HR',
            'Manager',
        ];
        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
                'guard_name' => 'web',
            ]);
        }

        $heads = Employee::whereNotNull('head_id')->get();
        foreach ($heads as $head) {
            $head->user->assignRole('Manager');
        }

        User::find(1)->assignRole('HR');
    }
}
