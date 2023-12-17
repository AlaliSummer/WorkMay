<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Invoice;
use Carbon\Carbon;
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
        Invoice::truncate();
        Enrollment::truncate();
        Course::truncate();

        $courses = [
            [
                'title' => 'أساسيات الأعمال المكتبية',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2023-12-24 6:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-12-28 9:00 PM GMT+3'),
            ],
            [
                'title' => 'إدارة الازمات',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2023-12-24 6:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-12-28 9:00 PM GMT+3'),
            ],
            [
                'title' => 'القيادة الإدارية',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2023-12-24 6:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-12-28 9:00 PM GMT+3'),
            ],

        ];
        foreach ($courses as $course) {
            Course::firstOrCreate($course);
        }
    }
}
