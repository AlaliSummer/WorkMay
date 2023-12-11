@component('mail::message')

# تحية طيبة

{{ __('words.thank-you-for-enrolling-in-our-upcoming-course') }}, <span style="color:red;">{{ $course_name }}.</span>

{{ __('words.next-step-is-to-pay-the-course-fee') }}.

@component('mail::magic-button', ['url' => 'hepalsd'])
احجز مقعدك
@endcomponent

@endcomponent
