<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Instructor;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyCoursesController extends Controller
{
    public function Index()
    {
        $user_id = auth()->user()->id;
        $instructor = Instructor::where('user_id', $user_id)->with(['courses'])->get();
        $enroll = Enrollment::where('user_id', $user_id)->with(['course'])->get();
        $invoice = Invoice::where('user_id', $user_id)->get();
        $isInstructor = Instructor::where('user_id', $user_id)->first();

        return Inertia::render('Profile/MyCourses/Index', [
            'user' => $user_id,
            'instructor' => $instructor,
            'enrollments' => $enroll,
            'invoices' => $invoice,
            'is_instructor' => $isInstructor,
        ]);
    }
}
