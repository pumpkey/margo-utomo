var swiper = new Swiper(".facility-slider", {
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
});

document.addEventListener("DOMContentLoaded", function () {
  new Swiper(".eco-gallery-slider", {
      loop: true,
      navigation: {
          nextEl: ".eco-gallery-next",
          prevEl: ".eco-gallery-prev",
      },
      slidesPerView: 1,
      spaceBetween: 10,
      autoplay: {
          delay: 3000,
          disableOnInteraction: false,
      },
  });
});