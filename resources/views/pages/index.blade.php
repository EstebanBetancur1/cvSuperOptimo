@extends('app')

@section('content')
<div class="contenedor">
    <div class="content_header bg-slate-200 xl:grid xl:grid-cols-2 grid-cols-1 m-auto h-4/5 overflow-hidden absolute xl:px-44 lg:px-40 md:px-30 px-24">
        <div class="content-i 2xl:m-auto mt-[90px] ">
            <h1 class="text 2xl:text-5xl text-4xl  font-bold">Ejemplos de currículos profesionales (+guías de redacción)</h1>
            <span class="inline-flex 2xl:text-2xl text-xl mt-5">Echa un vistazo a nuestros ejemplos gratuitos de currículos para inspirarte. Utiliza las guías de expertos y nuestro generador de currículos para crear un bonito currículo en cuestión de minutos. También ofrecemos una biblioteca de plantillas de currículum.</span>
            <div class="content-d__btn m-5">
                <a class=" bg-naranja hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" href="{{ route('curriculum') }}">Crear mi currículum</a>
            </div>
        </div>
        <div class="content-d">
            <div class="content-d__img flex relative">
                <img class="w-30 h-30  shrink-0 " src="{{ asset('storage/imagenes/curriculum.webp') }}" alt="Curriculum">
            </div>
        </div>    
    </div>
    <section class="h-4/5">
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum perferendis ea ratione? Sed, ipsum. Inventore quos nemo, magnam necessitatibus maiores facilis pariatur explicabo dolore laudantium sequi magni animi nihil nam.
    </section>
</div>



@endsection