var storySwiper = new Swiper(".story__swiper", {
  effect: "creative",
  creativeEffect: {
    prev: {
      shadow: true,
      translate: [0, 0, -400],
    },
    next: {
      translate: ["100%", 0, 0],
    },
  },

  pagination: {
    el: ".story__swiper-pagination",
    dynamicBullets: true,
  },

  // Default parameters
  loop: true,
  allowTouchMove: true,
  grabCursor: true,
  pauseOnMouseEnter: false,

  autoplay: false,

  grabCursor: true,
});

Fancybox.bind('[data-fancybox="gallery"]', {});
