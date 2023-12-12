@component('mail::message')

@component('mail::button', ['url' => 'hepalsd'])
{{ __('Accept Invitation') }}
@endcomponent

{{ __('If you did not expect to receive an invitation to this team, you may discard this email.') }}
@endcomponent
