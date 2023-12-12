<?php

namespace App\Notifications;

use App\Models\Enrollment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EnrolledInCourseNotification extends Notification
{
    use Queueable;

    public $enroll;

    /**
     * Create a new notification instance.
     */
    public function __construct(Enrollment $enroll)
    {
        $this->enroll = $enroll;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(__('words.enrolled-in-course-email-title'))
            ->bcc('shafiqalshaar@clarastars.com')
            ->markdown('emails.enrolled-in-course', [
                'course_name' => $this->enroll->course->title,
                'invoice_url' => url('invoices.show'), // TODO: Update the URL.
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
