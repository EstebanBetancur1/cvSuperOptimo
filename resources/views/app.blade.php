<!DOCTYPE html>
<html lang="es">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $PageName }} - {{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" href="{{ asset('storage/imagenes/logo_ico.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/alpine.js') }}"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>

</head>
<body>
    @include('components.header')
    @yield('content')
</body>
</html>
