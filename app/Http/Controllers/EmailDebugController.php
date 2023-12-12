<?php

namespace App\Http\Controllers;

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
        $markdown = new Markdown(view(), config('mail.markdown'));
        return $markdown->render("emails.paid-success", [
            'course_name' => 'ادارة الازامات',
        ]);
    }
}