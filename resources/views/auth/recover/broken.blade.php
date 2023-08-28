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
    <style>
        body{
            background-color: #f5f5f5;
        }
        .contenedor_reset{
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }
        .container img{
            width: 100%;
            max-width: 150px;
        }
        .reset_img{
            width: 100%;
            max-width: 560px;
        }
    </style>

    <div class="contenedor_reset">
        <div class="imagen">
            <img src="{{ asset('storage/imagenes/404broken.svg') }}" alt="">
        </div>
        <div class="enlace text-center">
            <h1 class="bold text-5xl">El enlace caduco o ya fue usado</h1>
            <p class="text-lg">Por favor, solicita un nuevo enlace</p>
            <br> 
            <a href="{{ route('register') }}" class="btn btn-primary bg-naranja m-5 p-2 text-white mt-5 rounded-lg">Volver al inicio</a>
        </div>
    </div>
   
</body>
</html>
