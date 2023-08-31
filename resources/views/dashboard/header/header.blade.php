<style>
    .contenedor-logo_dashboard img{
        width: 170px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .btn-menu {
        width: auto;
        height: auto;
        border-radius: 50%;
    }
    .btn-menu:hover{
        border: 2px solid #000;
    }

    .btn-menu img{
        width: 45px;
        height: 45px;
        background-color: transparent;
        border: none;
        outline: none;
        cursor: pointer;
        border-radius: 50%;
        transition: all .5s ease-in-out;
    }
    .menu{
        transition: transform 1s ease-in-out;
        display: none;
        margin-left:-85px;
    }
    .menu.active{
        position: absolute;
        display: block;
    }
</style>



<header class="w-full shadow-sm h-20">
    <nav class="w-[95.666667%] m-auto p-2 ">
        <div class="flex justify-between items-center">
            <div class="contenedor-logo_dashboard">
                <a href="{{ route('dashboard') }}">
                    <img class="logo_dashboard" src="{{ asset('storage/imagenes/logo.png') }}" alt="">
                </a>
            </div>
            <div class="contenedor-btn_menu">
                <button class="btn-menu">
                    <img class="shrink-0" src="{{ asset('storage/imagenes/sesion.svg') }}" alt="">
                </button>
                <ul class="menu bg-white shadow rounded p-4 z-10">
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">Inicio</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">Perfil</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('dashboard') }}" class="menu-link">Configuración</a>
                    </li>
                    <li class="menu-item">
                        <a href="{{ route('logout') }}" class="menu-link">Cerrar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>





<script>
    const btn_menu = document.querySelector('.btn-menu');
    const menu = document.querySelector('.menu');
    btn_menu.addEventListener('click', () => {
        menu.classList.toggle('active');
    })
</script>