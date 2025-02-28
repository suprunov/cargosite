$('.vacancies-us').each(function () {
  var us = $(this);

  var swiper = new Swiper(us.find('.swiper')[0], {
    slidesPerView: 'auto',
    spaceBetween: 16,
    mousewheel: {
      forceToAxis: true,
    },
    breakpoints: {
      1200: {
        spaceBetween: 24,
      },
      760: {
        spaceBetween: 20,
      },
    },
  });
});
