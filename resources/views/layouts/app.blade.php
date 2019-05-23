<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Site Hazo') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" /><!--LAIOUT-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" /><!--LAIOUT-->
    <link rel="stylesheet" href="{{asset('css/noscript.css')}}" />
</head>
<body>
    <div id="app">
        
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/front/jquery.min.js') }}"></script>
    <script src="{{ asset('js/front/jquery.scrolly.min.js') }}"></script>
    <script src="{{ asset('js/front/jquery.scrollex.min.js') }}"></script>
    <script src="{{ asset('js/front/browser.min.js') }}"></script>
    <script src="{{ asset('js/front/breakpoints.min.js') }}"></script>
    <script src="{{ asset('js/front/util.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
