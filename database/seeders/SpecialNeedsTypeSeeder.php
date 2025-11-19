<?php

namespace Database\Seeders;

use App\Models\SpecialNeedsType;
use Illuminate\Database\Seeder;

class SpecialNeedsTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SpecialNeedsType::create([
            'code' => '01',
            'name_en' => 'Physical Disability',
            'name_ar' => 'إعاقة جسدية',
        ]);
        SpecialNeedsType::create([
            'code' => '02',
            'name_en' => 'Health Impairment',
            'name_ar' => 'إعاقة صحية',
        ]);
        SpecialNeedsType::create([
            'code' => '03',
            'name_en' => 'Hearing Disability',
            'name_ar' => 'إعاقة سمعية',
        ]);
        SpecialNeedsType::create([
            'code' => '04',
            'name_en' => 'ضعف سمع',
            'name_ar' => 'Hearing Impairment',
        ]);
        SpecialNeedsType::create([
            'code' => '05',
            'name_en' => 'Visual Disability',
            'name_ar' => 'إعاقة بصرية',
        ]);
        SpecialNeedsType::create([
            'code' => '06',
            'name_en' => 'Visual Impairment',
            'name_ar' => 'ضعف بصر',
        ]);
        SpecialNeedsType::create([
            'code' => '07',
            'name_en' => 'Mental Disability',
            'name_ar' => 'إعاقة عقلية',
        ]);
        SpecialNeedsType::create([
            'code' => '08',
            'name_en' => 'Cerebral Palsy',
            'name_ar' => 'شلل دماغي',
        ]);
        SpecialNeedsType::create([
            'code' => '09',
            'name_en' => 'Autism',
            'name_ar' => 'توحد',
        ]);
        SpecialNeedsType::create([
            'code' => '10',
            'name_en' => 'Attention Deficit Hyperactivity Disorder',
            'name_ar' => 'فرط حركة وتشتت انتباه',
        ]);
        SpecialNeedsType::create([
            'code' => '11',
            'name_en' => 'Learning Difficulties',
            'name_ar' => 'صعوبات تعلم',
        ]);
        SpecialNeedsType::create([
            'code' => '12',
            'name_en' => 'Speech and Language Difficulties',
            'name_ar' => 'صعوبات الكلام واللغة',
        ]);
        SpecialNeedsType::create([
            'code' => '13',
            'name_en' => 'Slow Learning',
            'name_ar' => 'بطئ تعلم',
        ]);
        SpecialNeedsType::create([
            'code' => '14',
            'name_en' => 'Other',
            'name_ar' => 'أخرى',
        ]);
    }
}
