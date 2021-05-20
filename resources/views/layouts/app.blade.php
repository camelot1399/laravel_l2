<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
{{--            @include('layouts.navigation')--}}

            <nav class="bg-white shadow flex flex-nowrap justify-between pt-5 pb-5 pl-20 pr-20">
                <x-logo-content></x-logo-content>
                <x-nav-content></x-nav-content>
            </nav>

            <!-- Page Heading -->
            <header class="pt-5 pb-5 pl-20 pr-20 bg-white text-5xl">
               {{ $header }}
            </header>

            <!-- Page Content -->
            <main class="pl-20 pr-20 bg-white shadow pt-2 pb-2">
                {{ $slot }}
            </main>

            <footer class="wrapper pl-20 pr-20">
                <x-footer></x-footer>
            </footer>
        </div>
    </body>
</html>
