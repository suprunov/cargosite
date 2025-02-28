$('.header__burger').on('click', function () {
  if (!$('html').hasClass('_side-nav_visible')) {
    $('html').addClass('_side-nav_visible');
  } else {
    $('html').removeClass('_side-nav_visible');
  }
});

$('.burger-nav').each(function () {
  var b = $(this);

  var main = b.find('.burger-nav__main');
  var back = b.find('.burger-nav__main-back');
  b.find('.burger-nav__main-top-item').each(function () {
    var item = $(this);
    var sub = item.next('.burger-nav__main-sub');
    sub.appendTo(main);
    item.on('click', function () {
      main.addClass('_sub');
      sub.show();
    });
  });
  back.on('click', function () {
    main.find('.burger-nav__main-sub').hide();
    main.removeClass('_sub');
  });
});

// $('.burger-nav__back').on('click',function(){
//     $('html').removeClass('_side-nav_visible');
// });

// $('.header__burger').trigger('click');

// $('.burger-nav__list a:not(.btn)').on('click',function(){
//     $('html').removeClass('_side-nav_visible');
// });
