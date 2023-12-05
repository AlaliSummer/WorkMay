<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function Index() {
        return Inertia::render('Courses/Index',
            ['courses' => Course::latest()->paginate(10),]);
    }

    public function Show($course_id)
    {
        return Inertia::render('Courses/Show', [
            'courses' => Course::findOrFail($course_id),
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
