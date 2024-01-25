<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class InstructorController extends Controller
{
    public function Index()
    {
        //
    }

    public function Create()
    {
        return Inertia::render('Profile/MyCourses/Instructor/Create', [
            'user' => auth()->user()->id,
        ]);
    }

    public function Store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable|exists:users,id',
            'identity_number' => ['required'],
            'phone' => ['required', 'string', 'max:255', 'unique:users'],
        ]);

        $instructor = Instructor::create([
            'user_id' => auth()->user()->id,
            'identity_number' => $request->identity_number,
            'phone' => $request->phone,
        ]);

        return redirect()->route('profile.my-courses');
    }
}
