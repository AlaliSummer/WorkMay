<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function Index() {
        return Inertia::render('Courses/Index',
            ['courses' => Course::latest()->paginate(10),]);
    }

    public function Show($course_id) {
        return Inertia::render('Courses/Show', [
            'courses' => Course::findOrFail($course_id),
        ]);
    }
}
