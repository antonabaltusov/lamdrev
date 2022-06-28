const swiper = new Swiper(".swiper", {
  // Optional parameters
  loop: true,

  autoHeight: true,
  // If we need pagination

  // Navigation arrows

  breakpoints: {
    320: {
      navigation: false,
      pagination: false,
      slidesPerView: 1.25,
      centeredSlides: true,
      effect: "coverflow",
      coverflowEffect: {
        rotate: 0,
        scale: 0.9,
        slideShadows: false,
      },
    },
    768: {
      coverflowEffect: null,
      slidesPerView: 1,
      centeredSlides: false,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    },
    1200: {
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    },
  },
  // sliderPerView: 2,
  // centeredSlides: true,

  // And if we need scrollbar
});
