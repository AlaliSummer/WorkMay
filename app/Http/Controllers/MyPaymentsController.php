<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enrollment;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Inertia\Inertia;

class MyPaymentsController extends Controller
{
    public function Index()
    {
        $user_id = auth()->user()->id;
        $course = Course::get();
        $enroll = Enrollment::where('user_id', $user_id)->with(['course'])->get();
        $invoices = Invoice::query()
            ->with([
                'user',
                'course',
            ])
        ->where('user_id', $user_id)
            ->get();
        $amountDue = Invoice::where('user_id', $user_id)
            ->where('paid_at', null)
            ->get();

        return Inertia::render('Profile/MyPayments/Index', [
            'user' => $user_id,
            'course' => $course,
            'enrollments' => $enroll,
            'invoices' => $invoices,
            'amount_due' => $amountDue->count(),
        ]);
    }
}
