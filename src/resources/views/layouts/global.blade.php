<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('meta')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ mix('css/app.css') }}" rel="stylesheet">

    @yield('css')
</head>
<body class="@yield('class-body')">
    @yield('content')
    @yield('javascript')
</body>
</html>
