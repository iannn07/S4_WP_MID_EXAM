<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Login Admin</title>
    <link href="{{ asset('Web Assets/img/favicon.png') }}" rel="icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <!-- Scripts -->
    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    {{-- Login Assets --}}
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{ asset('Admin Assets/Login Assets/fonts/material-icon/css/material-design-iconic-font.min.css') }}">

    <!-- Main css -->
    <link rel="stylesheet" href="{{ asset('Admin Assets/Login Assets/css/style.css') }}">

    <!-- JS -->
    <script src="{{ asset('Admin Assets/Login Assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('Admin Assets/Login Assets/js/main.js') }}"></script>
</head>

<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

</html>
