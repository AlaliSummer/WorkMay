<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'title' => 'أساسيات الأعمال المكتبية',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'register_starts_at' => '2023-12-14',
                'register_ends_at' => '2023-12-23',
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => '2023-12-24',
                'to_date' => '2023-12-28',
            ],
            [
                'title' => 'إدارة الازمات',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'register_starts_at' => '2023-12-14',
                'register_ends_at' => '2023-12-23',
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => '2023-12-24',
                'to_date' => '2023-12-28',
            ],
            [
                'title' => 'القيادة الإدارية',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'register_starts_at' => '2023-12-14',
                'register_ends_at' => '2023-12-23',
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => '2023-12-24',
                'to_date' => '2023-12-28',
            ],

        ];
        foreach ($courses as $course) {
            Course::firstOrCreate($course);
        }
    }
}
