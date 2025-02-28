$('.vacancies__apply-form').each(function () {
  var f = $(this);

  f.on('submit', function () {
    if (f.hasClass('form-error-required')) return false;

    f.trigger('loading:on');

    // TODO: fetch here
    setTimeout(function () {
      // success
      f.trigger('loading:off');

      var body = f.parents('.folder__body');
      body.addClass('form-message');
      body.append(`<div class="form-message__inner"><div class="form-message__body">
                <div class="form-message__heading">Резюме отправлено</div>
                <div class="form-message__copy">В&nbsp;рабочие часы с&nbsp;вами свяжется <nobr>HR-менеджер</nobr></div>
            </div></div>`);
      window.scrollTo({
        top: body.parent().offset().top,
        behavior: 'smooth',
      });
    }, 500);

    return false;
  });
});
