<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseConfirmController extends Controller
{
    /**
     * Show the course name
     *
     * @param $course_id
     * @return \Inertia\Response|\Inertia\ResponseFactory|string
     */
    public function index($course_id)
    {
        $course = Course::findOrFail($course_id);

        if ($course->is_user_enrolled) {
            dd('already');
            return 'تم تسجيلك من قبل';
        }

        return Inertia('Courses/Confirm/Index', [
            'course' => $course
        ]);
    }
}
