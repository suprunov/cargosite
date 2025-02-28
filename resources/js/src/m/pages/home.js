$('.home-ecosystem__body').each(function () {
  var f = $(this),
    items = f.find('.home-ecosystem__item');

  var images = $('<div class="home-ecosystem__images"></div>').appendTo(f);

  items.find('.home-ecosystem__item-image img').each(function () {
    $(this).clone().hide().appendTo(images);
  });

  images = images.find('img');

  var duration = 200;

  items.on('click', function () {
    var item = $(this);
    if (item.hasClass('_active')) return;

    items
      .filter('._active')
      .removeClass('_active')
      .find('.home-ecosystem__item-body')
      .slideUp(duration);
    // items.;
    item.addClass('_active').find('.home-ecosystem__item-body').slideDown(duration);

    var index = items.index(this);

    images.hide();
    images.eq(index).show();
  });

  items.removeClass('_active').eq(0).trigger('click');
});

$('.home-reviews').each(function () {
  var r = $(this),
    items = r.find('.swiper-slide');

  // var slidesHTML = r.find('.swiper-wrapper').html();
  // r.find('.swiper-wrapper').append(slidesHTML);

  var swiper = new Swiper(r.find('.swiper')[0], {
    // loop: true,
    slidesPerView: 'auto',
    spaceBetween: 16,
    centeredSlides: true,
    centeredSlidesBounds: true,
    centerInsufficientSlides: true,
    // loopAdditionalSlides: 1,
    breakpoints: {
      1200: {
        spaceBetween: 24,
      },
    },
  });

  items.each(function () {
    var item = $(this);
    var full = item.find('.home-reviews__full');
    if (!full.length) return;

    item.find('.home-reviews__item-cta span').on('click', function () {
      W.trigger('popup:show', {
        el: full,
        class: 'popup_review',
      });
    });
  });
  // r.find('.home-reviews__item-cta:eq(0) span').trigger('click');
});

$('.home-faq__ask').each(function () {
  var ask = $(this),
    f = $('.home-faq__form');

  $('._js-faq-ask').on('click', function () {
    W.trigger('popup:show', {
      el: ask,
      class: 'popup_ask',
    });
    return false;
  });
  // setTimeout(function(){ $('._js-faq-ask').eq(0).trigger('click'); },1);

  f.on('submit', function () {
    if (f.hasClass('form-error-required')) return false;

    f.trigger('loading:on');

    // TODO: fetch here
    setTimeout(function () {
      // success
      f.trigger('loading:off');

      ask.addClass('form-message');
      ask.append(`<div class="form-message__inner"><div class="form-message__body">
                <div class="form-message__heading">Ваш вопрос отправлен</div>
                <div class="form-message__copy">В&nbsp;рабочие часы с&nbsp;вами свяжется наш менеджер</div>
            </div></div>`);
    }, 500);

    return false;
  });

  ask.on('onAfterHide', function () {
    ask.find('.form-message__inner').remove();
    ask.removeClass('form-message');
  });
});
