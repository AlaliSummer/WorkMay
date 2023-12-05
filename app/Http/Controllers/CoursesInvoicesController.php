<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Invoice;
use App\Models\User;
use App\Models\Enrollment;
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
        $course = Course::findOrFail($course_id);
        $user = User::find(auth()->user()->id);

        $price = $course->price;
        $exist = Enrollment::where('course_id', $course->id)
            ->where('user_id', $user->id)
            ->first();
        if($exist) {
           abort(404);
        }
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

        // link user with the course
        $record = Enrollment::create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'invoice_id' => $invoice->id,
            'enrolled_at' => now(),
        ]);
        $record->save();
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

        // send notification

        return redirect()->route('courses.enrolled-successfully', $course->id);
    }
}