<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <ul>
            <li><a href="{{ route('debug.emails.enrolled-in-course') }}">enrolled-in-course</a></li>
        </ul>
    </body>
</html>
