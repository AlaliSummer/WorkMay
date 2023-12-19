<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyCoursesController extends Controller
{
    public function Index()
    {
        $user_id = auth()->user()->id;
        $enroll = Enrollment::where('user_id', $user_id)->get();
        return Inertia::render('Enrollment/Enroll', [
            'enrollments' => $enroll,
        ]);

    }
}
