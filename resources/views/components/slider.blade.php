<!-- Slider main container -->
<div class="mySwiper swiper">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->
        <div class="swiper-slide m-3">
            
        </div>
        <div class="swiper-slide m-3">Slide 2</div>
        <div class="swiper-slide m-3">Slide 3</div>
        <div class="swiper-slide m-3">Slide 4</div>
        <div class="swiper-slide m-3">Slide 5</div>
        <div class="swiper-slide m-3">Slide 6</div>
        <div class="swiper-slide m-3">Slide 7</div>
        <div class="swiper-slide m-3">Slide 8</div>
        <div class="swiper-slide m-3">Slide 9</div>
    </div>
    <!-- If we need pagination -->
  <!--   <div class="swiper-pagination"></div> -->
  
    <!-- If we need navigation buttons -->
  <!--   <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div> -->
  </div>

  <script>
var swiper = new Swiper(".mySwiper", {
  // Optional parameters
  //slidesPerView: 5,
  spaceBetween: 0,
  centeredSlides: true,
  speed: 3000,
  autoplay: {
    delay: 0,
  },
  loop: true,
  slidesPerView: 'auto',
  allowTouchMove: false,
  disableOnInteraction: true,
});
  </script>



