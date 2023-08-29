@extends('dashboard.app')

@section('content')
<div class="content_dashboard w-10/12">

    <div class="dashboard_titulo">
        <h2 class="text-2xl font-bold">Bienvenido </h2>
    </div>
    <div class="contenedor_views">
        <h3>Hojas de vida</h3>
    </div>
    <div class="selector">
        <span>CV</span>
        <button>+ Crear Nuevo</button>
    </div>
    <div class="vistas_hojas">
        <div class="contenedor_start">
            <div class="caja_preview">

            </div>
            <div class="caja_info">
                <h4>titulo</h4>
                <span>fecha de creacion</span>
                <ul>
                    <li>
                        <img src="{{ asset('storage/imagenes/icons/editar.svg') }}" alt="">
                        <a href="">Editar</a>
                    </li>
                    <li>
                        <img src="{{ asset('storage/imagenes/icons/descargar.svg') }}" alt="">
                        <a href="">Descargar PDF</a>
                    </li>    
                </ul>
                <div class="mas">
                    <button>... Más</button>
                    <ul>
                        <li>
                            <img src="{{ asset('storage/imagenes/icons/docx.svg') }}" alt="">
                            <a href="">Exportar a DOCX</a>
                        </li>
                        <li>
                            <img src="{{ asset('storage/imagenes/icons/email.svg') }}" alt="">
                            <a href="">Enviar correo</a>
                        </li>
                        <li>
                            <img src="{{ asset('storage/imagenes/icons/trash.svg') }}" alt="">
                            <a href="">Borrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection