<!DOCTYPE html>
@viewFileComment
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    @vite('resources/css/app.css') <!-- Menggunakan Vite untuk memuat CSS -->

    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>

    @filamentStyles
    @livewireStyles
</head>

<body class="antialiased">
    @yield('content')

    {{ $slot }}

    @filamentScripts
    @vite('resources/js/app.js') <!-- Menggunakan Vite untuk memuat JS -->
    @livewireScripts
    @stack('scripts')
</body>

</html>
