<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @vite('resources/css/app.css')

    <title>{{ $title ?? 'Tubes IMK' }}</title>
</head>
<body class="container mx-auto">

    <x-partials.navbar />

    <div class="min-h-screen p-6">
        {{ $slot }}
    </div>

    <x-partials.footer />

    {{ $scripts ?? '' }}
</body>
</html>