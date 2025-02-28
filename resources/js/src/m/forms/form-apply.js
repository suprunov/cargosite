$('.form-apply').each(function () {
  var f = $(this),
    stepsMax = f.data('steps'),
    bar = f.find('.form-apply__progress-handler'),
    currentStep = 1,
    steps = f.find('.form-apply-form-step'),
    title = f.find('.form-apply__label');

  function setStep() {
    bar.css({
      width: (100 / stepsMax) * currentStep + '%',
    });
    steps
      .hide()
      .filter('[data-step="' + currentStep + '"]')
      .show();
    f.find('.form-apply__progress-label span').text(currentStep);
    title.html(steps.filter('[data-step="' + currentStep + '"]').data('title'));
    if (currentStep == stepsMax) {
      f.find('.form__submit .btn-cta').text('Снизить затраты');
      f.find('.form__submit-agreement-btn').text('Снизить затраты');
    } else {
      f.find('.form__submit .btn-cta').text('Продолжить');
      f.find('.form__submit-agreement-btn').text('Продолжить');
    }
    if (currentStep > 1) {
      f.find('.form-apply__back').show();
    } else {
      f.find('.form-apply__back').hide();
    }
  }
  setStep();

  f.find('.form-apply__back-link').on('click', function () {
    currentStep--;
    setStep();
  });

  f.required({
    visible: true,
  });

  f.on('submit', function () {
    if (f.hasClass('form-error-required')) {
      return false;
    } else if (currentStep < stepsMax) {
      currentStep++;
      setStep();
      f.find('.form__input:visible:first').focus();
    } else {
      f.trigger('loading:on');

      // TODO: fetch here
      setTimeout(function () {
        // success
        f.trigger('loading:off');

        var body = f.parents('.home-apply__body');
        var h = body.height();
        f.hide();
        body.prepend(`<div class="home-apply__message">
                    <div class="home-apply__message-heading">Заявка отправлена</div>
                    <div class="home-apply__message-cta"><button class="btn-cta">Заполнить заново</button></div>
                </div>`);
        body.find('.home-apply__message').css({
          minHeight: h,
        });
        body.find('.home-apply__message-cta .btn-cta').on('click', function () {
          f.find('.form__input').val('').trigger('focusout');
          f.find('.form__input-wrapper').removeClass('_success');
          f.show();
          body.find('.home-apply__message').remove();
          currentStep = 1;
          setStep();
        });
        window.scrollTo({
          top: body.parent().offset().top - 40,
          behavior: 'smooth',
        });
      }, 500);
    }
    return false;
  });
});
