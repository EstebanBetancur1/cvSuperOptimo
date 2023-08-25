@extends('app')


@section('content')
<div class="contenedor">
    <div class="content-d">
        <h1>Más de 350 ejemplos de currículos profesionales (+guías de redacción)</h1>
        <span>Echa un vistazo a nuestros ejemplos gratuitos de currículos para inspirarte. Utiliza las guías de expertos y nuestro generador de currículos para crear un bonito currículo en cuestión de minutos. También ofrecemos una biblioteca de plantillas de currículum.</span>
        <div class="content-d__btn">
            <a href="{{ route('curriculum') }}">Crear mi currículum</a>
        </div>
        
    </div>
</div>
@endsection