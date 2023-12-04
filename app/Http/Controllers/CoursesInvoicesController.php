<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Invoice;
use App\Models\User;
use App\Models\UserCourse;
use Brick\Math\RoundingMode;
use Carbon\Carbon;
use Faker\Provider\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
class CoursesInvoicesController extends Controller
{
    public function create(string $course_id)
    {
        $course = Course::query()
            ->with(['users' => function($q) {

            }])
            ->findOrFail($course_id);

        $users = $course->users;

        return Inertia::render('Courses/Invoices/Create', [
            'course' => $course,
            'users' => $users,
        ]);

    }

    public function store($course_id)
    {
//        $paid_at = Carbon::createFromFormat('Y-m-d H:i:s', $payload['event_time'], 'UTC');
        $course = Course::findOrFail($course_id);
        $user = User::find(auth()->user()->id);

        $price = $course->price;
//dd($price);
        // create invoice
        $reference_id = 909090;

        DB::beginTransaction();
        $invoice = Invoice::create([
                'user_id' => $user->id,
                'course_id' => $course->id,
                'reference_id' => $reference_id,
                'grand_total' =>  $price,
                'sub_total' => $price-($price/1.15*0.15),
                'tax' => (($price-($price/1.15*0.15))*0.15),
                'created_by_id' => auth()->user()->id,
            ]);
        $invoice->save();
        DB::commit();

//////////////////////////////////////////////////
//        DB::beginTransaction();               //
//        $record = UserCourse::create([        //
//            'user_id' => auth()->user(),      //
//            'course_id' => $course,           //
//            'enrolled_at' => now(),           //
//            'paid_at' => now(),               //
//        ]);                                   //
//        $record->save();                      //
//        DB::commit();                         //
//////////////////////////////////////////////////

        // link user with the course

        // send notification

//        return redirect()->route('user.dashboard', $course_id);
        return 0;
    }
}
