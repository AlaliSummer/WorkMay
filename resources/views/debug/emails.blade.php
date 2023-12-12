<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <ul>
            <li><a target="_blank" href="{{ route('debug.emails.enrolled-in-course') }}">enrolled-in-course</a></li>
            <li><a target="_blank" href="{{ route('debug.emails.paid-success') }}">paid-success</a></li>
        </ul>
    </body>
</html>
