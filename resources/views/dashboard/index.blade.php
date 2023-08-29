@extends('dashboard.app')

@section('content')
<style>
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
        margin-top: -18px;
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
</style>
    <div class="contenedor_cajas_hoja w-10/12 m-auto relative">
        <div class="dashboard_titulo mt-11">
            <h2 class="text-2xl font-bold">Hojas de vida y cartas de presentación </h2>
        </div>
        <div class="contenedor_views flex gap-5 mt-2">
            <div class="cv utilidad_select">
                <h3>Hojas de vida</h3>
            </div>
            <div class="presentacion utilidad_select active">
                <h3>Carta de presentación</h3>
            </div>
            <div class="selector absolute right-0 inline-flex items-center justify-center px-4 py-2 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <button style="">&#10011; Crear Nuevo</button>
            </div>
        </div>
        <div class="vistas_hojas">
            <div class="contenedor_start flex gap-2">
                <div class="caja_preview">
                    <img src="{{ asset('storage/imagenes/curriculum.webp') }}" alt="">
                </div>
                <div class="caja_info">
                    <h4>titulo</h4>
                    <span>fecha de creacion</span>
                    <ul>
                        <li class="flex">
                            <img class="icon_smg" src="{{ asset('storage/imagenes/icons/editar.svg') }}" alt="">
                            <a href="">Editar</a>
                        </li>
                        <li class="flex">
                            <img class="icon_smg" src="{{ asset('storage/imagenes/icons/descargar.svg') }}" alt="">
                            <a href="">Descargar PDF</a>
                        </li>    
                    </ul>
                    <div class="mas">
                        <div class="flex"> 
                            <img class="icon_smg" src="{{ asset('storage/imagenes/icons/puntos.svg') }}" alt="">
                            <a href="">Más</a>
                        </div>
                        <ul class="hidden">
                            <li class="flex">
                                <img class="icon_smg" src="{{ asset('storage/imagenes/icons/docx.svg') }}" alt="">
                                <a href="">Exportar a DOCX</a>
                            </li>
                            <li class="flex">
                                <img class="icon_smg" src="{{ asset('storage/imagenes/icons/email.svg') }}" alt="">
                                <a href="">Enviar correo</a>
                            </li>
                            <li class="flex">
                                <img class="icon_smg" src="{{ asset('storage/imagenes/icons/trash.svg') }}" alt="">
                                <a href="">Borrar</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection