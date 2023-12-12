<x-mail::layout>
{{-- Header --}}
<x-slot:header>
<x-mail::header :url="config('app.url')">
{{ config('app.name') }}
</x-mail::header>
</x-slot:header>

{{-- Body --}}
{{ $slot }}

{{-- Subcopy --}}
@isset($subcopy)
<x-slot:subcopy>
<x-mail::subcopy>
{{ $subcopy }}
</x-mail::subcopy>
</x-slot:subcopy>
@endisset

{{-- Footer --}}
<x-slot:footer>
<x-mail::footer>
أنت تتلقى هذه الرسالة لأنك قمت بالتسجيل في workmay.net باستخدام عنوان البريد الإلكتروني هذا.
<br/>
© {{ date('Y') }} ورك ماي. كل الحقوق محفوظة.
</x-mail::footer>
</x-slot:footer>
</x-mail::layout>
