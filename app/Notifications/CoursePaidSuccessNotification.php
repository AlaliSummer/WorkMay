<?php

namespace App\Notifications;

use App\Models\Enrollment;
use App\Models\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CoursePaidSuccessNotification extends Notification
{
    use Queueable;

    public Invoice $invoice;

    /**
     * Create a new notification instance.
     */
    public function __construct(Invoice $invoice)
    {
        $invoice = $invoice->load('course');
        $this->invoice = $invoice;
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
            ->markdown('emails.paid-success', [
                'course_name' => 'ادارة الازامات',
                'course_name' => $this->invoice->course->title,
                'button_url' => url('dashboard'),
                'from_date' => $this->invoice->course->from_date->format('Y-m-d'),
                'to_date' => $this->invoice->course->to_date->format('Y-m-d'),
                'days' => $this->invoice->course->from_date->diffInDays($this->invoice->course->to_date),
                'hours' => $this->invoice->course->from_date->diffInHours($this->invoice->course->to_date),
                'from_time' => optional($this->invoice->course->from_date)->format('h:i A'),
                'to_time' => optional($this->invoice->course->to_date)->format('h:i A'),
                'maps_location' => $this->invoice->course->maps_location,
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
