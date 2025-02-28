$('.auth').each(function () {
  var auth = $(this),
    login = auth.find('.auth__form-login'),
    forgot = auth.find('.auth__form-forgot'),
    reg = auth.find('.auth__form-reg');

  function showLogin() {
    reset();
    login.show();
    login.find('input:visible').eq(0).focus();
  }
  function showForgot() {
    reset();
    forgot.show();
    forgot.find('input:visible').eq(0).focus();
  }
  function showReg() {
    reset();
    reg.trigger('reset');
    reg.show();
    reg.find('input:visible').eq(0).focus();
  }

  showReg();

  forgot.on('submit', function () {
    if (forgot.hasClass('form-error-required')) return false;

    forgot.trigger('loading:on');

    // TODO: fetch here
    setTimeout(function () {
      // success
      forgot.trigger('loading:off');

      var message = $(`<div class="auth__form-forgot-message">
                <h2 class="auth__heading">Мы&nbsp;отправили на&nbsp;почту письмо для восстановления пароля</h2>
                <div class="form__submit">
                    <button class="btn-cta">Продолжить</button>
                </div>
            </div>`);
      forgot.hide().after(message);
      message.find('.btn-cta').on('click', showLogin);
    }, 500);

    return false;
  });

  function reset() {
    auth.find('.form__input').val('').trigger('focusout');
    auth.find('.auth__form-forgot-message').remove();
    login.hide();
    forgot.hide();
    reg.hide();
  }

  reg.each(function () {
    var f = $(this),
      stepsMax = f.data('steps'),
      bar = f.find('.form-apply__progress-handler'),
      currentStep = 1,
      steps = f.find('.auth__form-reg-step'),
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
        f.find('.form__submit .btn-cta').text('Создать аккаунт');
      } else {
        f.find('.form__submit .btn-cta').text('Продолжить');
      }

      if (currentStep > 1) {
        f.find('.auth__form-login-new').hide();
        f.find('.auth__form-reg-back').show();
      } else {
        f.find('.auth__form-login-new').show();
        f.find('.auth__form-reg-back').hide();
      }
    }
    setStep();

    f.find('._js-reg-back').on('click', function () {
      currentStep--;
      setStep();
    });

    reg.on('reset', function () {
      currentStep = 1;
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

          var message = $(`<div class="auth__form-forgot-message">
                        <h2 class="auth__heading">Заявка отправлена</h2>
                        <div class="form-message__copy">В&nbsp;рабочие часы с&nbsp;вами свяжется менеджер</div>
                        <div class="form__submit">
                            <button class="btn-cta">Продолжить</button>
                        </div>
                    </div>`);
          f.hide().after(message);
          message.find('.btn-cta').on('click', hide);
        }, 500);
      }
      return false;
    });
  });

  auth.find('._js-auth-forgot').on('click', showForgot);
  auth.find('._js-auth-reg').on('click', showReg);
  auth.find('._js-auth-login').on('click', showLogin);

  var isAnim = false;

  function show() {
    if (isAnim) return;
    isAnim = true;
    $('body').addClass('_auth-show').trigger('fix');
    showLogin();
    auth.addClass('_show');
    setTimeout(function () {
      auth.addClass('_show-full');
    }, 0);
    setTimeout(function () {
      isAnim = false;
    }, 400);

    $(window).on('keydown.auth', function (e) {
      if (e.which == 27) {
        e.preventDefault();
        hide();
      }
    });
  }
  function hide() {
    if (isAnim) return;
    isAnim = true;
    auth.removeClass('_show-full');
    setTimeout(function () {
      auth.removeClass('_show');
      $('body').removeClass('_auth-show').trigger('unfix');
      isAnim = false;
    }, 400);
    $(window).off('keydown.auth');
  }

  $('._js-login').on('click', function () {
    show();
    return false;
  });
  auth.find('.auth__close').on('click', hide);

  // show();
  // showReg();
});
