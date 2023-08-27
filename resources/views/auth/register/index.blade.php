@extends('app')

@section('content')
<div class="content_redes w-11/12 m-auto">
    <div class="titulo_redes mb-12 mt-8">
        <h1 class="text-3xl text-center font-bold text-naranja">Registrate disfruta los beneficios</h1>
    </div>
    <div class="contenedor_fondo_redes  mb-5">     
        <div class="redes_register justify-center flex gap-3">
            <div class="redes_bloque facebok_red flex ">
                <a href="/facebook-auth/redirect">
                <div class="antes flex">
                    <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"><path fill="#3B5998" d="M9.73 6.486v2.478H8v3.03h1.73l.013 8.506h3.552l-.014-8.505h2.384s.223-1.453.331-3.042h-2.701V6.881c0-.31.387-.726.77-.726H16V3h-2.631c-3.728 0-3.64 3.033-3.64 3.486z"></path></svg>
                     <span>Facebook</span>
                </div>
            </a>
                <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" class="sc-bHDAMl jxfayY"><path d="M9.32427537,7.23715414 L10.6757246,5.76284586 L16.6757246,11.2628459 C17.1080918,11.6591824 17.1080918,12.3408176 16.6757246,12.7371541 L10.6757246,18.2371541 L9.32427537,16.7628459 L14.5201072,12 L9.32427537,7.23715414 Z"></path></svg>
            </div>
            <div class="redes_bloque google flex">
                <a href="/google-auth/redirect">
                    <div class="antes flex">
                        <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg"><g><path d="M19 12.3058C19 11.8203 18.9606 11.3322 18.8767 10.8546L12.1404 10.8546V13.6048H15.9979C15.8379 14.4917 15.3235 15.2764 14.5704 15.775V17.5594H16.8718C18.2232 16.3155 19 14.4786 19 12.3058Z" fill="#4285F4"></path><path d="M12.1404 19.2833C14.0665 19.2833 15.6909 18.6509 16.8744 17.5592L14.573 15.7748C13.9327 16.2104 13.1061 16.4571 12.143 16.4571C10.2798 16.4571 8.70009 15.2001 8.13327 13.5101H5.75839V15.3497C6.97076 17.7613 9.44011 19.2833 12.1404 19.2833Z" fill="#34A853"></path><path d="M8.13065 13.5102C7.83149 12.6233 7.83149 11.6628 8.13065 10.7758V8.93628H5.75839C4.74545 10.9543 4.74545 13.3318 5.75839 15.3498L8.13065 13.5102Z" fill="#FBBC04"></path><path d="M12.1404 7.82623C13.1586 7.81049 14.1426 8.19362 14.88 8.8969L16.919 6.85791C15.6279 5.64554 13.9143 4.979 12.1404 4.99999C9.44011 4.99999 6.97076 6.52202 5.75839 8.93626L8.13065 10.7758C8.69485 9.08322 10.2772 7.82623 12.1404 7.82623Z" fill="#EA4335"></path></g></svg>
                        <span>Google</span>
                    </div>
            </a> 
                <svg width="24" height="24" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" class="sc-bHDAMl jxfayY"><path d="M9.32427537,7.23715414 L10.6757246,5.76284586 L16.6757246,11.2628459 C17.1080918,11.6591824 17.1080918,12.3408176 16.6757246,12.7371541 L10.6757246,18.2371541 L9.32427537,16.7628459 L14.5201072,12 L9.32427537,7.23715414 Z"></path></svg>
            </div>
        </div>
    </div>
    <div class="form w-11/12 m-auto flex justify-center">
        <form action="">
            <div class="contenedor_form grid grid-cols-2 row-span-2 gap-4">
                <div class="name">
                    <label for="name" class="block">Nombre Completo</label>
                    <input type="text" name="name" placeholder="Nombre Completo" class="input_form_r">
                </div>
                <div class="email">
                    <label for="email" class="block">Correo Electroncio</label>
                    <input type="email" name="email" placeholder="Correo Electronico" class="input_form_r">
                </div>
                <div class="password">
                    <label for="password" class="block">Contraseña</label>
                    <input type="password" name="password" placeholder="Contraseña" class="input_form_r">
                </div>
                <div class="password_confirmation">
                    <label for="password_confirmation" class="block">Confirma tu contraseña</label>
                    <input type="password_confirmation" name="password_confirmation" placeholder="Repite tu Contraseña" class="input_form_r">
                </div>
            </div>
            <a href="/" class="text-naranja text-sm mt-2 block"><span>Olvidaste tu contraseña?</span></a>
            <div class="politicas_de_uso mt-6 mb-1">
                <input type="checkbox" name="politicas" id="politicas" class="mr-2" required>
                <label for="politicas" class="text-sm">Acepto los <a href="{{ route('Politicas y condiciones') }}" class="text-naranja">Terminos y Condiciones</a> y <a href="{{ route('Politicas y condiciones') }}" class="text-naranja">Politicas de Privacidad</a></label>
            </div>
            <div class="submit_form">
                <button type="submit" class="bg-naranja w-full mt-2 p-2 text-white register_btn" >Registrarse</button>
            </div>
        </form>
        <footer>
            <div class="walking absolute left-0 hidden 2xl:block">
                <img src="{{  asset('storage/imagenes/walking.svg') }}" alt="">
            </div>
        </footer>
    </div>
</div>

@endsection