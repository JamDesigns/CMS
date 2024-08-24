<!DOCTYPE html>
<html lang="{{ LaravelLocalization::getCurrentLocale() }}">    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        {!! SEO::generate() !!}

        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href={{ strtolower(substr($_SERVER['SERVER_PROTOCOL'], 0, strpos($_SERVER['SERVER_PROTOCOL'], '/' ))) . '://' . $_SERVER['HTTP_HOST'] ."/favicon.ico" }}>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Font Awesome -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="w-full flex flex-col min-h-screen" style="min-width: 320px">

        <!-- Cokies Consent -->
        @include('cookie-consent::index')

        <!-- Page Header && Navigation -->
        @include('layouts.navigation')

        <!-- Page Content -->
        <main class="flex grow">
            {{ $slot }}
        </main>

        <!-- Page Footer -->
        @include('layouts.footer')

        @stack('modals')

        @livewireScripts
    </body>
</html>
