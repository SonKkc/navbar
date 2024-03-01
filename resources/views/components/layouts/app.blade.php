<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
        <title>{{ $title ?? 'Page Title' }}</title>
        <script src="https://cdn.tailwindcss.com"></script>
        @livewireStyles
        @yield('head')
    </head>
    <body>
        <livewire:navbar.navbar />

        <livewire:pages.home />


        @livewireScripts
    </body>
</html>