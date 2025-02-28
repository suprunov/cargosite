$('.form').each(function () {
  var f = $(this);

  f.on('loading:on', function () {
    f.addClass('_loading');
  }).on('loading:off', function () {
    f.removeClass('_loading');
  });

  f.on('submit', function () {
    if (f.hasClass('form-error-required')) return false;
  });
});
