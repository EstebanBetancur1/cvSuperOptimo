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
        .contenedr_resets{
            background-color: white;
            padding: 30px;
        }
        .icon_vision{
            width: 35px;
            height: 35px;
            position: absolute;
            right: 10px;
            top: 36px;
            cursor: pointer;
            z-index: 1;
        }
    </style>

    <div class="contenedor_reset">
        <div class="contenedr_resets shadow-lg rounded-lg">
            <div class="reset_img">
                <img src="{{ asset('storage/imagenes/email.svg') }}" alt="">
            </div>
            <div class="titulo mb-3">
                <h1 style="margin-top: -27px;" class="text-2xl font-semibold text-center">Recupera tu contraseña</h1>
                <span class="text-lg text-gray-400">Tu contraseña necesita 8 caracteres</span>
               
            </div>
            <form action="">
                @csrf
                <input type="hidden" value="{{ $token }}" id="token_current">
                <div class="password_1 mb-2 relative">
                    <label for="" class="flex mb-2">Nueva contraseña</label>
                    <input type="password" name="password" id="password_r" class="input_form_r" placeholder="Contraseña">
                    <img id="show_password" class="icon_vision" src="{{ asset('storage/imagenes/visible.png') }}" alt="">
                </div>
                <div class="password_2 mb-2 relative">
                    <label for="" class="flex mb-2">Repite Contraseña</label>
                    <input type="password" name="password_confirm" id="password_r_c" class="input_form_r" placeholder="Repite tu contraseña">
                </div>
                <div class="btn_reset">
                    <button class="btn btn-primary w-full bg-naranja mt-2 p-2 text-white text-1xl rounded[5px] shadow-sm" id="change_password_s">Restablecer contraseña</button>
                </div>
            </form>

        </div>
    </div>
    <script src="{{ asset('js/ajax.js') }}"></script>
    <script>
        $(document).ready(function(){
            $('#show_password').click(function(){
                if($('#password_r').attr('type') == 'password'){
                    $('#password_r').attr('type', 'text');
                    $('#show_password').attr('src', '{{ asset('storage/imagenes/hide.png') }}');

                }else{
                    $('#password_r').attr('type', 'password');
                    $('#show_password').attr('src', '{{ asset('storage/imagenes/visible.png') }}');
                }
            });
        });
    </script>


</body>
</html>
