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
        Invoice::where('id', '!=', 1)->delete();
        Enrollment::where('id', '!=', 1)->delete();
        Course::where('id', '!=', 1)->delete();

        $courses = [
            [
                'title' => 'أساسيات الأعمال المكتبية',
                'description' => 'النشاط الخاص بتوجيه ورقابة الأفراد القائمين بتجميع البيانات والمعلومات، وتسجيلها وتجهيزها، ونقلها إلى المستفيدين منها وحفظها وتهيئة الظروف البيئية المناسبة لتحقيق أهداف المنظمة.',
                'instructor_name' => 'الاستاذ / محمد عبد الله',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '20 ساعة',
                'from_date' => Carbon::make('2023-11-24 6:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-11-28 9:00 PM GMT+3'),
            ],
            [
                'title' => 'إدارة الازمات',
                'description' => 'بدأ الحاجة في العصر الحديث إلى علم مستقل يختص بالأزمات والكوارث وكيفية إدارتها ومواجهتها يطلق عليها ” علم إدارة الأزمات والكوارث” وهو علم مؤسس – كغيرة من العلوم – على مجموعه من الأسس والمبادئ العلمية والمفاهيم الخاصة به.
وهذا ما يجعله علماً مختلفاَ في اساليبه وتطبيقاته عن العلوم الإدارية الأخرى والتي قد تخلط به، فإدارة الأزمات والكوارث تهدف إلى التحكم في إحداث مفاجأة، والتعامل معها وتصنيفها ومواجهة اثارها ونتائجها،وهي اداره تقوم على الدراسة والبحث، والمعرفة والتجارب المستفادة والتخطيط واستخدام المعلومات والبيانات كأسس للقرار السليم.',
                'instructor_name' => 'الاستاذ / محمد عبد الله',
                'register_starts_at' => Carbon::make('2023-12-14 06:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 06:00 PM GMT+3'),
                'seats_available' => '25',
                'price' => 1250,
                'hours' => '16 ساعة',
                'from_date' => Carbon::make('2023-11-24 06:00 PM GMT+3'),
                'to_date' => Carbon::make('2023-11-28 09:00 PM GMT+3'),
            ],
            [
                'title' => 'القيادة الإدارية',
                'description' => ' الأمر الذي جعل المؤسسات مجبرة على بذل جهود أكبر لمسايرة هذا الوضع الجديد ومواكبة التحولات في مختلف الميادين، ولكن ما نلاحظه أن التغيرات لم يواكبها بالضرورة تحولات في الميدان الإداري، وهذا ما أكد مقولة أن الفجوة الأساسية بين الدول المتقدمة والدول النامية هي فجوة إدارية في المقام الأول، والتي يقصد بها تلك القيادة الإدارية القادرة على الاستخدام الأمثل للموارد المتاحة والدفع بأهم مورد بالمؤسسة، وهو العامل والعمل على الارتقاء بمستوى أدائه، فتوفُّر قيادةٍ إدارية بهذه الخصائص أصبح أمرًا ضروريًا بالمؤسسات اليوم والشغل الشاغل لها.',
                'instructor_name' => 'الاستاذ / محمد عبد الله',
                'register_starts_at' => Carbon::make('2023-12-14 6:00 PM GMT+3'),
                'register_ends_at' => Carbon::make('2023-12-23 6:00 PM GMT+3'),
                'seats_available' => '45',
                'price' => 1250,
                'hours' => '16 ساعة',
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
