<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Instructor;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Psy\Readline\Hoa\ConsoleOutput;

class CoursesController extends Controller
{
    public function Index()
    {
        $old_courses = Course::where('from_date', '<', now())->paginate(10);
        $upcoming_courses = Course::where('from_date', '>', now())->paginate(10);

        return Inertia::render('Courses/Index',
            [
                'courses' => Course::latest()->paginate(10),
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

    public function create()
    {
        return Inertia::render('Profile/MyCourses/Create', [
            'user' => auth()->user()->id,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'instructor_id' => 'nullable|exists:instructors,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'register_starts_at' => [
                'nullable',
                'date',
                'before:to_date'
            ],
            'register_ends_at' => [
                'nullable',
                'date',
                'after:from_date'
            ],
            'seats_available' => 'required',
            'grand_total' => 'nullable|string|max:255',
            'sub_total' => 'nullable|string|max:255',
            'tax' => 'nullable|string|max:255',
            'hours' => 'required|string|max:255',
            'from_date' => [
                'required',
                'date',
                'before:to_date'
            ],
            'to_date' => [
                'required',
                'date',
                'after:from_date'
            ],
        ]);

        $user_id = auth()->user()->id;
        $instructor = Instructor::where('user_id', $user_id)->first();

        $course = Course::create([
            'user_id' => $user_id,
            'instructor_id' => $instructor->id,
            'title' => $request->title,
            'description' => $request->description,
            'seats_available' => $request->seats_available,
            'price' => $request->grand_total,
            'hours' => $request->hours,
            'from_date' => $request->from_date,
            'to_date' => $request->to_date,
        ]);

        return redirect()->route('profile.my-courses');
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
