<?php

namespace Database\Seeders;

use App\Models\IdentityType;
use Illuminate\Database\Seeder;

class IdentityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        IdentityType::create([
            'code' => '01',
            'name_en' => 'National ID',
            'name_ar' => 'الهوية الوطنية',
        ]);
        IdentityType::create([
            'code' => '02',
            'name_en' => 'Gulf ID',
            'name_ar' => 'هوية خليجية',
        ]);
        IdentityType::create([
            'code' => '03',
            'name_en' => 'Iqama',
            'name_ar' => 'إقامة',
        ]);
        IdentityType::create([
            'code' => '04',
            'name_en' => 'Passport',
            'name_ar' => 'جواز سفر',
        ]);
        IdentityType::create([
            'code' => '05',
            'name_en' => 'رقم حدود',
            'name_ar' => 'Border Number',
        ]);
    }
}
