var bannerImgSwiper = new Swiper(".banner__swiper", {
  // Default parameters
  loop: true,
  allowTouchMove: true,
  pauseOnMouseEnter: false,

  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },

  longSwipesRatio: 0.01,
  followFinger: false,
  grabCursor: true,
  watchSlidesProgress: true,
  parallax: true,
  lazy: {
    loadPrevNext: true,
  },
});
