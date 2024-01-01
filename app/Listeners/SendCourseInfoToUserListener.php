<?php

namespace App\Listeners;

use App\Notifications\CoursePaidSuccessNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendCourseInfoToUserListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $event->invoice->user->notify(new CoursePaidSuccessNotification($event->invoice));
    }
}
