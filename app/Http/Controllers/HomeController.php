<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function Index()
    {
        $old_courses = Course::where('from_date', '<', now())->paginate(10);
        $upcoming_courses = Course::where('from_date', '>', now())->paginate(10);

        return Inertia::render('Home',
            ['courses' => Course::latest()->paginate(10),
                'old_courses' => $old_courses,
                'upcoming_courses' => $upcoming_courses]);
    }
}
