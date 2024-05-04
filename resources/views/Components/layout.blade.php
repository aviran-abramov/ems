<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>EMS</title>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        @include('Components/header')

        {{ $slot }}
    </body>
</html>
