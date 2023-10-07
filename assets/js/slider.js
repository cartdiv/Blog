
const swiper1 = new Swiper(".swiper", {
    autoplay: {
      delay: 3500,
      disableOnInteraction: false,
    },
    slidesPerView: "auto",
    spaceBetween: 30,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
      // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  });
  