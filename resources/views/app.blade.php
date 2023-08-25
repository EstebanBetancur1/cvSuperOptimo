<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $PageName }} - {{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/home.js') }}"></script>
    <script src="{{ asset('js/alpine.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('storage/imagenes/logo_ico.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  
</head>
    <body>
       @include('components.header')
       @yield('content')
    </body>
</html>
