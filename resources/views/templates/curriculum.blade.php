@extends('app')

@section('content')

<div class="swiper sample-slider">
    <div class="header_curriculum block justify-between mb-5 md:flex">
        <h1 class="text-2xl mb-2 md:text-3xl md:mb-0">Elije la pantilla de tu preferencia.</h1>
        <nav>
            <ul>
                <li></li>
                <li>
                    <form action="">
                        <select name="template" id="templateSelect" class="w-full">
                            <option value="0" selected disabled>Tipos de Plantillas</option>
                            <option value="1">Programador</option>
                            <option value="2">Cocina</option>
                            <option value="3">Constructor</option>
                            <option value="4">Bombero</option>
                            <option value="6">Piloto</option>
                            <option value="5">Telecomunicaciones</option>
                        </select>
                    </form>
                    <script>$(document).ready(function() {
                        $('#templateSelect').select2();
                      });</script>
                </li>
            </ul>
        </nav>
    </div>
    <div class="swiper-wrapper gap-3">
        <div class="swiper-slide">
            <img src="https://standout-cv.com/wp-content/uploads/2021/01/University-Applicant-CV-1.png">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://standout-cv.com/wp-content/uploads/2021/01/Masters-Student-CV-1-1.png">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://www.flightdeckfriend.com/wp-content/uploads/2022/10/Free-Pilot-CV-Template-5-737x1030.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
        <div class="swiper-slide gap-3">
            <img src="https://c0.piktochart.com/v2/themes/3108-cv-example-for-students/snapshot/large.jpg">
            <div class="boton_use">
                <button class="bg-naranja btn_dentro">Usar Plantilla</button>
            </div>
            <div class="tile_plantill">
                <h1>Plantilla 1</h1>
            </div>
        </div>
    </div>
</div>

<script>
var swiper = new Swiper(".sample-slider", {
  loopedSlides: 8,
  loop: true,
  autoplay: {
    delay: 0,
  },
  speed: 3000,
  slidesPerView: 3,
  freeMode: true,
  mousewheel: {
    releaseOnEdges: true,
  },
});

swiper.el.addEventListener("mouseleave", function () {
  // Reiniciar la reproducción automática al sacar el cursor
    swiper.autoplay.start();

});


 </script>
 
 
 
 
 
@endsection