<?php

use App\Actions\Fortify\CreateNewUser;
use App\Http\Controllers\EmailDebugController;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Mail\Markdown;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('debug')->group(function() {
    // Email templates
    Route::get('debug', [EmailDebugController::class, 'index'])->name('debug');
    Route::get('debug/enrolled-in-course', [EmailDebugController::class, 'enrolledInCourse'])->name('debug.emails.enrolled-in-course');
    Route::get('debug/paid-success', [EmailDebugController::class, 'paidSuccess'])->name('debug.emails.paid-success');
});

Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')->redirect();
})->name('login.google');

Route::get('/auth/google/callback', function () {
    $google_user = Socialite::driver('google')->user();
    if ($user = User::where('google_id', $google_user->getId())->first()) {
        Auth::login($user);
        return redirect()->route('home');
    } else {
        $user = (new CreateNewUser)->create([
            'name' => $google_user->getName(),
            'email' => $google_user->getEmail(),
            'password' => $pass = Hash::make(Str::uuid()),
            'password_confirmation' => $pass,
            'google_id' => $google_user->getId(),
            'avatar' => $google_user->getAvatar(),
            'avatar_original' => $google_user->getAvatar(),
        ]);
        Auth::login($user);
        return redirect()->route('home');
    }
});
//WelcomeController
Route::get('/', [\App\Http\Controllers\HomeController::class, 'Index'])->name('home');
//Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
//})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');

    Route::get('courses/{id}/confirm', [\App\Http\Controllers\CourseConfirmController::class, 'index'])->name('courses.confirm');
    Route::post('courses/{id}/enroll', [\App\Http\Controllers\CoursesInvoicesController::class, 'store'])->name('courses.invoices');
    Route::get('courses/{id}/enrolled-successfully', [\App\Http\Controllers\CoursesController::class, 'Enrollment'])->name('courses.enrolled-successfully');
});

Route::post('noon', [\App\Http\Controllers\NoonController::class, 'storeNoonReceipt'])->name('webhooks.noon');
Route::get('invoices/{id}/pay-noon', [\App\Http\Controllers\NoonController::class, 'pay'])->name('invoices.noon.pay');
Route::resource('courses', \App\Http\Controllers\CoursesController::class);
Route::get('invoices/{id}', [\App\Http\Controllers\CoursesInvoicesController::class, 'show'])->name('invoices.show');
Route::get('invoices/{id}', [\App\Http\Controllers\CoursesInvoicesController::class, 'show'])->name('invoice.show');
Route::get('my-courses', [\App\Http\Controllers\MyCoursesController::class, 'Index'])->name('my-courses');
