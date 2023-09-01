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
</style>
    <div class="contenedor_cajas_hoja w-10/12 2xl:w-8/12 m-auto relative">
        <div class="dashboard_titulo mt-16">
            <h2 class="sm:text-3xl font-bold">Hojas de vida y cartas de presentación </h2>
        </div>
        <div class="contenedor_views flex gap-5 mt-2">
            <div class="cv utilidad_select">
                <h3 class="text-base sm:text-2xl">Hojas de vida</h3>
            </div>
            <div class="presentacion utilidad_select active">
                <h3 class="text-base sm:text-2xl">Carta de presentación</h3>
            </div>
            <div class="selector absolute right-0 inline-flex items-center justify-center px-2 py-1 text-base font-medium leading-6 text-white whitespace-no-wrap bg-blue-600 border border-blue-700 rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <button style="">&#10011; Crear Nuevo</button>
            </div>
        </div>
        <div class="vistas_hojas mt-10 ">
            <div class="contenedor_start grid sm:grid-cols-3 grid-cols-2 gap-3">

                <div class="caja_cv flex gap-2 sm:mb-0 mb-5 cursor-pointer" id="create_new">
                    <div class="caja_preview border-[2px] rounded">
                        <span class="w-full grid place-content-center">
                            <div class="w-[50px] h-[50px] rounded-full bg-naranja opacity-50 flex justify-center items-center text-center m-auto p-[3%] cursor-pointer">
                                <h2 class="text-5xl mt-[-10px] text-white">+</h2>
                              </div>
                        </span>
                    </div>
                    <div class="caja_info">
                        <div class="titulo_info flex flex-col leading-5 mb-5">
                            <span class="text-gray-500 text-xl">Nuevo</span>
                            <span class="text-gray-500 text-base w-[164px] lg:w-[305px]">Crea un currículum personalizado para cada trabajo
                                solicitud. Duplica tus posibilidades de
                                siendo contratado!</span>
                        </div>
                    </div>
                </div>

                <div class="caja_cv flex gap-2 sm:mb-0 mb-5">
                    <div class="caja_preview border-[2px] rounded">
                        <img src="{{ asset('storage/imagenes/curriculum.webp') }}" alt="">
                    </div>
                    <div class="caja_info">
                        <div class="titulo_info flex flex-col leading-5 mb-5">
                            <span class="font-bold text-lg">Plantilla 1</span>
                            <span class="text-gray-400 text-base">Actualizado <?php echo date('d F')?></span>
                        </div>
                        <div class="icons_select sm:leading-[50px] leading-9">
                            <ul>
                                <li class="flex hover_icons cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/editar.svg') }}" alt="">
                                    <a href="" class="hover_icons">Editar</a>
                                </li>
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/descargar.svg') }}" alt="">
                                    <a  href="">Descargar PDF</a>
                                </li>    
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/docx.svg') }}" alt="">
                                    <a href="" >Exportar a DOCX</a>
                                </li>
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/email.svg') }}" alt="">
                                    <a href="">Enviar correo</a>
                                </li>
                            </ul>
                            <div class="content_mas">
                                <div class="flex cursor-pointer hover_icons" id="vermas"> 
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/puntos.svg') }}" alt="">
                                    <span>Más</span>
                                </div>
                                <ul class="hidden mas bg-white shadow rounded p-4">
                                    <li class="flex hover_icons  cursor-pointer">
                                        <img class="icon_smg" src="{{ asset('storage/imagenes/icons/trash.svg') }}" alt="">
                                        <a href="">Borrar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="caja_cv flex gap-2 sm:mb-0 mb-5">
                    <div class="caja_preview border-[2px] rounded">
                        <img src="{{ asset('storage/imagenes/curriculum.webp') }}" alt="">
                    </div>
                    <div class="caja_info">
                        <div class="titulo_info flex flex-col leading-5 mb-5">
                            <span class="font-bold text-lg">Plantilla 1</span>
                            <span class="text-gray-400 text-base">Actualizado <?php echo date('d F')?></span>
                        </div>
                        <div class="icons_select sm:leading-[50px] leading-9">
                            <ul>
                                <li class="flex hover_icons cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/editar.svg') }}" alt="">
                                    <a href="" class="hover_icons">Editar</a>
                                </li>
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/descargar.svg') }}" alt="">
                                    <a  href="">Descargar PDF</a>
                                </li>    
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/docx.svg') }}" alt="">
                                    <a href="" >Exportar a DOCX</a>
                                </li>
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/email.svg') }}" alt="">
                                    <a href="">Enviar correo</a>
                                </li>
                            </ul>
                            <div class="content_mas">
                                <div class="flex cursor-pointer hover_icons" id="vermas"> 
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/puntos.svg') }}" alt="">
                                    <span>Más</span>
                                </div>
                                <ul class="hidden mas bg-white shadow rounded p-4">
                                    <li class="flex hover_icons  cursor-pointer">
                                        <img class="icon_smg" src="{{ asset('storage/imagenes/icons/trash.svg') }}" alt="">
                                        <a href="">Borrar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="caja_cv flex gap-2 sm:mb-0 mb-5">
                    <div class="caja_preview border-[2px] rounded">
                        <img src="{{ asset('storage/imagenes/curriculum.webp') }}" alt="">
                    </div>
                    <div class="caja_info">
                        <div class="titulo_info flex flex-col leading-5 mb-5">
                            <span class="font-bold text-lg">Plantilla 1</span>
                            <span class="text-gray-400 text-base">Actualizado <?php echo date('d F')?></span>
                        </div>
                        <div class="icons_select sm:leading-[50px] leading-9">
                            <ul>
                                <li class="flex hover_icons cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/editar.svg') }}" alt="">
                                    <a href="" class="hover_icons">Editar</a>
                                </li>
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/descargar.svg') }}" alt="">
                                    <a  href="">Descargar PDF</a>
                                </li>    
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/docx.svg') }}" alt="">
                                    <a href="" >Exportar a DOCX</a>
                                </li>
                                <li class="flex hover_icons  cursor-pointer">
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/email.svg') }}" alt="">
                                    <a href="">Enviar correo</a>
                                </li>
                            </ul>
                            <div class="content_mas">
                                <div class="flex cursor-pointer hover_icons" id="vermas"> 
                                    <img class="icon_smg" src="{{ asset('storage/imagenes/icons/puntos.svg') }}" alt="">
                                    <span>Más</span>
                                </div>
                                <ul class="hidden mas bg-white shadow rounded p-4">
                                    <li class="flex hover_icons  cursor-pointer">
                                        <img class="icon_smg" src="{{ asset('storage/imagenes/icons/trash.svg') }}" alt="">
                                        <a href="">Borrar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            

            </div>
        </div>
    </div>



@endsection