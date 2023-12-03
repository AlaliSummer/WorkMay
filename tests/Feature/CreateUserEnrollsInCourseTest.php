<?php

namespace Tests\Feature;

use App\Models\Invoice;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateUserEnrollsInCourseTest extends TestCase
{
    /**
     * @return void
     */
    public function test_sending_course_details_when_user_enrolled_event_is_fired(): void
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $course = Course::factory()->create();
        $invoice = Invoice::factory()->create([
            'user_id' => $user->id,
            'course_id' => $course->id,
            'sub_total' => $price = 1000,
            'tax' => $tax = $price * 0.15,
            'grand_total' => $price + $tax,
        ]);

        Event::assertDispatched(UserEnrolledInCourseEvent::class, function ($event) use ($user, $course) {
            return $event->user->id === $user->id && $event->course->id === $course->id;
        });
    }
}
