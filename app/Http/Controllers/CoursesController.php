<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class CoursesController extends Controller
{
    public function Index() {
        return Inertia::render('Courses/Index');
    }
}
