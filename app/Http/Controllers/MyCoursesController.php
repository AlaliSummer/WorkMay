<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyCoursesController extends Controller
{
    public function Index()
    {
        $user_id = auth()->user()->id;
        $course = Course::get();
        $enroll = Enrollment::where('user_id', $user_id)->with(['course'])->get();
        $invoice = Invoice::where('user_id', $user_id)->get();

        return Inertia::render('Courses/Trainees/MyCourses', [
            'user' => $user_id,
            'course' => $course,
            'enrollments' => $enroll,
            'invoices' => $invoice,
        ]);












//        $enroll = Enrollment::where('user_id', $user_id)->get();
////        $enroll = Enrollment::query()
////            ->with([
////                'courses',
////                'invoice',
////            ]);
////        $enroll = Enrollment::where('course_id', $course->id)
////            ->where('user_id', optional(auth()->user())->id)
////            ->first();
//        return Inertia::render('Courses/Trainees/MyCourses', [
//            'enrollments' => $enroll,
//            'courses' => Course::get(),
//            'user' => $user_id,
//        ]);
    }
}
