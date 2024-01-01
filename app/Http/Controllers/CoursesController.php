<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function Index()
    {
        $old_courses = Course::where('from_date', '<', now())->paginate(10);
        $upcoming_courses = Course::where('from_date', '>', now())->paginate(10);

        return Inertia::render('Courses/Index',
            ['courses' => Course::latest()->paginate(10),
                'old_courses' => $old_courses,
                'upcoming_courses' => $upcoming_courses]);
    }

    public function Show($course_id)
    {
        $course = Course::findOrFail($course_id);
        $old_courses = Course::where('from_date', '<', now())->paginate(10);
        $upcoming_courses = Course::where('from_date', '>', now())->paginate(10);
        $enroll = Enrollment::where('course_id', $course->id)
            ->where('user_id', optional(auth()->user())->id)
            ->first();
        $invoice = Invoice::where('course_id', $course->id)
            ->where('user_id', optional(auth()->user())->id)
            ->first();
        $can_enroll = now() < $course->from_date;
        return Inertia::render('Courses/Show', [
            'course' => $course,
            'enrollments' => $enroll,
            'invoice' => $invoice,
            'old_courses' => $old_courses,
            'upcoming_courses' => $upcoming_courses,
            'can_enroll' => $can_enroll,
        ]);
    }

    public function Enrollment($course_id)
    {
        // what is the logged in user id?
        $user_id = auth()->user()->id;
        $course = Course::find($course_id);

        // get the Enroll model for User & the Course
        $enroll = Enrollment::where('course_id', $course->id)
            ->where('user_id', $user_id)
            ->first();
        return Inertia::render('Enrollment/Enroll', [
            'enrollment' => $enroll,
            'course' => $course,
        ]);
    }
}
