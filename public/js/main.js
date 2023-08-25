var swiper = new Swiper(".mySwiper", {
  // Optional parameters
  // slidesPerView: 5,
  spaceBetween: 0,
  centeredSlides: true,
  speed: 1500,
  autoplay: {
    delay: 0,
  },
  loop: true,
  slidesPerView: 'auto',
  allowTouchMove: false,
  disableOnInteraction: true,
  // If we need pagination
  // pagination: {
  //   el: ".swiper-pagination",
  //   clickable: true,
  // },
  // Navigation arrows
  // navigation: {
  //   nextEl: '.swiper-button-next',
  //   prevEl: '.swiper-button-prev',
  // },
  // Breakpoints
  // breakpoints: {
  //   640: {
  //     slidesPerView: 2,
  //     spaceBetween: 20,
  //   },
  //   768: {
  //     slidesPerView: 4,
  //     spaceBetween: 40,
  //   },
  //   1024: {
  //     slidesPerView: 5,
  //     spaceBetween: 50,
  //   },
  // },
});