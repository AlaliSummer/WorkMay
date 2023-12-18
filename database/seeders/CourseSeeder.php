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
                'instructor_name' => 'الاستاذ / محمد عبد الله',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2023-11-24 6:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-11-28 9:00 PM GMT+3'),
            ],
            [
                'title' => 'إدارة الازمات',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'instructor_name' => 'الاستاذ / محمد عبد الله',
                'register_starts_at' => Carbon::make('2023-12-14 06:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 06:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2023-11-24 06:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-11-28 09:00 PM GMT+3'),
            ],
            [
                'title' => 'القيادة الإدارية',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'instructor_name' => 'الاستاذ / محمد عبد الله',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2023-11-24 06:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-11-28 09:00 PM GMT+3'),
            ],
            [
                'title' => 'إدارة المشاريع الاحترافية (®PMP) - دورة معتمدة',
                'description' => 'دورة PMP هي اختصار لـ Project Management Professional وهي دورة معتمدة لشهادة تقدمها مؤسسة إدارة المشاريع العالمية (PMI) للمحترفين في إدارة المشاريع. وتعد شهادة PMP معيارًا دوليًا مهنيًا معتمدًا لإدارة المشاريع وتعكس معرفة وخبرة ومهارات المتحصل عليها في هذا المجال.',
                'instructor_name' => 'المستشار / صلاح بن غالب العثمان',
                'register_starts_at' => Carbon::make('2024-01-07 06:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2024-01-11 06:00 PM GMT+3'),
                'seats_available' => '50',
                'price' => 1499,
                'hours' => '35 ساعة',
                'from_date' => Carbon::make('2024-01-07 05:00 PM GMT+3'),
                'to_date' => Carbon::make('2024-01-11 09:00 PM GMT+3'),
            ],
        ];

        foreach ($courses as $course) {
            Course::firstOrCreate($course);
        }
    }
}
