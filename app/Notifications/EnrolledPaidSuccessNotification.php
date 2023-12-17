<?php

namespace App\Notifications;

use App\Models\Enrollment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class EnrolledPaidSuccessNotification extends Notification
{
    use Queueable;

    public Enrollment $enrollment;

    /**
     * Create a new notification instance.
     */
    public function __construct(Enrollment $enrollment)
    {
        $this->enrollment = $enrollment;
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

    /**mn
     * Get the mail representation of the notification.
     */
    public function toMail(object $notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject(__('words.success-paid-email-title'))
            ->bcc('shafiqalshaar@clarastars.com')
            ->markdown('emails.paid-success', [
                'course_name' => $this->enrollment->course->title,
                'button_url' => url('dashboard'),
                'from_date' => $this->enrollment->course->from_date,
                'to_date' => $this->enrollment->course->to_date,
                'days' => $this->enrollment->course->from_date->diffInDays($this->enrollment->to_date),
                'hours' => $this->enrollment->course->from_date->diffInHours($this->enrollment->course->to_date),
                'from_time' => optional($this->enrollment->course->from_date)->format('H:i'),
                'to_time' => optional($this->enrollment->course->to_date)->format('H:i'),
                'maps_location' => $this->enrollment->course->maps_location,

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
