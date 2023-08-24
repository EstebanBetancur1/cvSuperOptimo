<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/home.js') }}"></script>
    <link rel="shortcut icon" href="{{ asset('storage/imagenes/logo_ico.svg') }}" type="image/x-icon" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
    <body>
        <h1 class="text-9xl uppercase">hola</h1>
    </body>
</html>
