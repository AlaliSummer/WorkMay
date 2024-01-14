<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"  dir="{{ app()->getLocale()==='en' ? 'ltr' : 'rtl' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="logrocket-enabled" content="{{ auth()->user() ? 'true' : 'false' }}">
        @auth
            <meta name="logrocket-id" content="{{ auth()->user()->logrocketId() }}">
            <meta name="logrocket-id-extra" content='{!! auth()->user()->logrocketIdExtra() !!}'>
            {{--<meta name="user-permissions" content='{!! json_encode(collect(optional(auth()->user()->roles()->first())->getAllPermissions())->pluck('name')->toArray()) !!}'>--}}
        @endif

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js'])
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
