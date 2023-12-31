<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Market') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <link href={{ asset('assets/css/plugins.css') }} rel="stylesheet">
        <link href={{ asset('assets/css/style.css') }} rel="stylesheet">
        <link href={{ asset('assets/type/icons.css') }} rel="stylesheet">

        <!-- Scripts -->
 @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 ">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white ">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        <script src={{ asset('assets/js/jquery.min.js') }}></script>
        <script src={{ asset('assets/js/bootstrap.min.js') }}></script>
        <script src={{ asset('assets/js/plugins.js') }}></script>
        <script src={{ asset('assets/js/jquery.themepunch.tools.min.js') }}></script>
        <script src={{ asset('assets/js/scripts.js') }}></script>
    </body>
</html>
