<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;

class EmailDebugController extends Controller
{
    public function index()
    {
        return view('debug.emails');
    }

    public function enrolledInCourse()
    {
        $markdown = new Markdown(view(), config('mail.markdown'));
        return $markdown->render("emails.enrolled-in-course", [
            'course_name' => 'ادارة الازامات',
            'invoice_url' => 'https://workmay.net',
        ]);
    }

    public function paidSuccess()
    {
        $enrollment = Enrollment::with('course')->first();

        $markdown = new Markdown(view(), config('mail.markdown'));
        return $markdown->render("emails.paid-success", [
            'course_name' => 'ادارة الازامات',
            'course_name' => $enrollment->course->title,
            'button_url' => url('daboard'),
            'from_date' => $enrollment->course->from_date->format('Y-m-d'),
            'to_date' => $enrollment->course->to_date->format('Y-m-d'),

            'days' => $enrollment->course->from_date->diffInDays($enrollment->course->to_date),
            'hours' => $enrollment->course->from_date->diffInHours($enrollment->course->to_date),

            'from_time' => optional($enrollment->course->from_date)->format('h:i A'),
            'to_time' => optional($enrollment->course->to_date)->format('h:i A'),

            'maps_location' => $enrollment->course->maps_location,
        ]);
    }
}
