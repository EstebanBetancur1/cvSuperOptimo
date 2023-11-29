@extends('dashboard.app')

@section('content')
{{-- <style>
    .contenedor_views{
        border-bottom: 1px solid #c9c9c9;
    }
    .utilidad_select{
        transition: all .1s;
        cursor: pointer;
        font-weight: 500;
        font-size: 20px;
        margin-bottom: 5px;
    }
    .utilidad_select:hover{
        color:rgb(255, 60, 00);
    }
    .utilidad_select.active:hover{
        color:rgb(255, 60, 00);
    }
    .selector{
        margin-top: -26px;
    }
    .caja_preview{
        width: 232px;
        height: 314px;
        display: flex;
    }
    .caja_preview img{
        flex-shrink: 0;
        object-fit: cover;
    }
    .caja_info{
        line-height: 3.2;
    }
    .icon_smg{
        filter: invert(57%) sepia(86%) saturate(7494%) hue-rotate(4deg) brightness(104%) contrast(103%);
    }

    .hover_icons:hover{
        transition: all .1s;
        color: red
    }
    @media (max-width:640px){
        .selector{
        margin-top: 34px;
        }
        .vistas_hojas{
            margin-top: 50px;
        }
        .contenedor_crear_nuevo {
        right: 0 !important;
        top: 500px !important;
        cursor: pointer;
        }
       
    }

    .circulo {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #FF7A59;
        opacity: .5;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        margin:0px auto;
        padding:3%;
        cursor: pointer;
    }

    .circulo > h2 {
        font-family: sans-serif;
        color: white;
        font-size:50px;
    }
    .contenedor_crear_nuevo {
        right: 67px;
        top: 155px;
        cursor: pointer;
    }
    .text_crear{
        line-height: 1.2;
    }
    .titulo_crear{
        font-weight: 500;  
    }
    .fondo_crar:hover{
        color:rgb(255, 60, 00);
    }

    .subtitulo_crear{
        font-size: 14px;
        line-height: 16px;
        letter-spacing: 0.3px;
        font-weight: 400;
        color: rgb(130, 139, 162);
        width: 192px;
        height: 32px;
    }
</style> --}}
<div class="container mx-auto px-4 py-8 ">
    <div class="flex space-x-8 ">
        <!-- Resume Card -->
        <div class="bg-white rounded-lg shadow p-6 w-1/3 hover:border hover:border-solid-black">
            <div class="border-b pb-4">
                <h2 class="text-lg font-semibold">Untitled</h2>
                <p class="text-sm text-gray-500">Updated 29 August, 10:10</p>
            </div>
            <div class="pt-4 grid grid-cols-2">
                <div>
                    <img src="{{ asset('storage/imagenes/curriculum.webp') }}" alt="">
                </div>
                <ul class="mt-4 space-y-2">
                    <div class="flex items-center justify-between">
                        <span class="text-sm font-semibold text-blue-600 bg-blue-100 rounded-full px-3 py-1">35% Resume score</span>
                        <span class="text-xs text-gray-500">Nuevo</span>
                    </div>
                    <li class="flex items-center hover:bg-gray-100 cursor-pointer">
                        <i class="fas fa-edit text-orange-500 mr-2 hover:text-orange-200"></i>
                        <span>Editar</span>
                    </li>
                    <li class="flex items-center hover:bg-gray-100 cursor-pointer">
                        <i class="fas fa-envelope text-orange-500 hover:text-orange-200 mr-2"></i>
                        <span>Enviar correo</span>
                    </li>
                    <li class="flex items-center hover:bg-gray-100 cursor-pointer">
                        <i class="fas fa-file-pdf text-orange-500 hover:text-orange-200 mr-2"></i>
                        <span>Descargar PDF</span>
                    </li>
                    <li class="flex items-center  hover:bg-gray-100 cursor-pointer">
                        <i class="fas fa-file-word text-orange-500 hover:text-orange-200 mr-2"></i>
                        Descargar en DOCX
                    </li>
                    <li class="flex items-center hover:bg-gray-100 cursor-pointer">
                        <i class="fas fa-trash-alt text-orange-500 hover:text-orange-200 mr-2"></i>
                        Eliminar
                    </li>
                </ul>
            </div>
        </div>

        <!-- Add New Resume Card -->
        
     
        <a href="{{ route('resume.create') }}" class="bg-white rounded-lg shadow p-6 w-1/3 flex flex-col items-center cursor-pointer justify-center hover:border hover:border-solid-black">
            <div class="rounded-full bg-gray-200 p-4 h-10 w-10 justify-center items-center flex">
                <i class="fas fa-plus text-gray-400 text-2xl"></i>
            </div>
            <div class="text-center mt-4">
                <h3 class="text-lg font-semibold">Crear nuevo</h3>
                <p class="text-sm text-gray-500 mt-2">Cree un currículum personalizado para cada solicitud de empleo. ¡Duplica tus posibilidades de ser contratado!</p>
            </div>
        </a>
    
    </div>
</div>



@endsection