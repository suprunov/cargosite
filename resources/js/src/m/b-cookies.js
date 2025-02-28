$('.cookie-agreement').each(function () {
  var c = $(this);

  if (Cookies.get('cookies-ok')) {
    c.remove();
  } else {
    c.find('.cookie-agreement__cta .btn').on('click', function () {
      Cookies.set('cookies-ok', true, { expires: 365 });
      c.remove();
    });
  }
});
