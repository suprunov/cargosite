$.fn.digitsOnly = function () {
  $(this).keypress(function (event) {
    // console.log(event.which)
    var controlKeys = [8, 9, 13, 35, 36, 37, 39];
    var isControlKey = controlKeys.join(',').match(new RegExp(event.which));
    if (
      !event.which ||
      (48 <= event.which && event.which <= 57) ||
      (48 == event.which && $(this).attr('value'))
    ) {
      return;
    } else {
      event.preventDefault();
    }
  });
};
$.fn.lettersOnly = function () {
  $(this).keypress(function (event) {
    // console.log(event.which)
    var regex = new RegExp('^[а-яА-Яa-zA-Z ]+$');
    var key = String.fromCharCode(!event.charCode ? event.which : event.charCode);
    var controlKeys = [8, 9, 13, 35, 36, 37, 39];
    var isControlKey = controlKeys.join(',').match(new RegExp(event.which));
    if (!regex.test(key)) {
      event.preventDefault();
      return false;
    }
  });
};

$.fn.autosize = function () {
  $(this).each(function () {
    $(this)
      .on('input.autosize', function () {
        this.style.height = '5px';
        this.style.height = this.scrollHeight + 2 + 'px';
        this.scrollTo({
          top: this.scrollHeight,
        });
      })
      .trigger('input.autosize');
  });
};

$.fn.textInput = function () {
  $(this).each(function () {
    var input = $(this);
    if (input.hasClass('_simple')) return;

    var placeholder = input.attr('placeholder');

    input.wrap('<div class="form__input-wrapper"></div>');
    var wrapper = input.parent();
    wrapper.append('<span class="form__input-placeholder">' + placeholder + '</span>');

    function check() {
      if (input.val().length || input.is(':focus')) {
        wrapper.addClass('_active');
        input.attr('placeholder', '');
      } else {
        wrapper.removeClass('_active');
        input.attr('placeholder', placeholder);
      }
    }
    check();

    setTimeout(check, 300);

    input
      .on('keydown', function () {
        setTimeout(check, 1);
      })
      .on('focusout', function () {
        setTimeout(check, 1);
      })
      .on('focusin', function () {
        setTimeout(check, 20);
      });

    if (input.attr('type') == 'password') {
      wrapper.append(
        '<div class="form__input-password-icon _no"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill="#A7ADC8" fill-rule="evenodd" d="M4.14 8.77a.65.65 0 0 1 .84.372c2.475 6.42 11.558 6.42 14.033 0a.65.65 0 0 1 1.213.468c-2.903 7.53-13.557 7.53-16.46 0a.65.65 0 0 1 .373-.84Z" clip-rule="evenodd"/><path fill="#A7ADC8" fill-rule="evenodd" d="M11.348 18.486v-3.923h1.3v3.923a.65.65 0 0 1-1.3 0ZM5.614 17.07l1.962-3.398 1.126.65-1.962 3.397a.65.65 0 0 1-1.126-.65ZM2.081 13.877l2.774-2.774.92.92L3 14.797a.65.65 0 0 1-.919-.92ZM21.915 13.877l-2.774-2.774-.919.92 2.774 2.774a.65.65 0 0 0 .92-.92ZM18.382 17.07l-1.962-3.398-1.125.65 1.961 3.397a.65.65 0 0 0 1.126-.65Z" clip-rule="evenodd"/></svg></div><div class="form__input-password-icon _yes"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path fill="#A7ADC8" fill-rule="evenodd" d="M18.592 12.242c-2.573 5.593-10.611 5.593-13.184 0C7.95 6.6 16.05 6.6 18.592 12.242Zm1.408.005c-2.822 7.32-13.178 7.32-16 0 2.78-7.381 13.22-7.381 16 0Z" clip-rule="evenodd"/><path fill="#A7ADC8" fill-rule="evenodd" d="M12.001 13.007a1.007 1.007 0 1 0 0-2.014 1.007 1.007 0 0 0 0 2.014Zm0 1.3a2.307 2.307 0 1 0 0-4.614 2.307 2.307 0 0 0 0 4.614Z" clip-rule="evenodd"/></svg></div>',
      );
      wrapper.find('.form__input-password-icon').on('click', function () {
        wrapper.toggleClass('_password-show');
        input.prop('type', wrapper.hasClass('_password-show') ? 'text' : 'password');
      });
    }
  });
};

$.fn.select = function () {
  var isOpened = false;
  $(this).each(function () {
    var s = $(this),
      label = s.find('.select__label'),
      input = s.find('.select__input'),
      val = input.val();
    label
      .wrapInner('<div class="select__label-text"></div>')
      .append(
        '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#20212B" stroke-width="1.6" d="m7.757 11 4.172 4.172a.1.1 0 0 0 .142 0L16.243 11"/></svg>',
      );
    var labelText = s.find('.select__label-text');

    s.data('placeholder', labelText.text());

    s.find('.select__list-item[data-val="' + val + '"]').each(function () {
      var item = $(this);
      labelText.html(item.html());
      item.addClass('_active');
    });

    s.append('<div class="select__label-placeholder">' + s.data('placeholder') + '</div>');

    function show(e) {
      if (isOpened) {
        D.trigger('mousedown.select');
      }
      s.addClass('_open');
      D.on('mousedown.select', hide);
      isOpened = true;
    }
    function hide(e) {
      D.off('mousedown.select');
      s.removeClass('_open');
      isOpened = false;
    }
    s.on('mousedown.select', function (e) {
      e.preventDefault();
      e.stopPropagation();
    });
    label.on('mousedown.select', function (e) {
      if (!isOpened) {
        show();
      } else {
        if (s.hasClass('_open')) {
          hide();
        } else {
          D.trigger('mousedown.select');
          show();
        }
      }
    });

    if (!val.length) {
      s.addClass('_placeholder');
    }

    s.find('.select__list-item').on('click', function () {
      var item = $(this);
      var val = input.val();
      if (input.val() != item.data('val')) {
        input.val(item.data('val')).trigger('change');
        labelText.html(item.html());
      }
      s.find('.select__list-item._active').removeClass('_active');
      item.addClass('_active');
      s.removeClass('_placeholder');
      s.addClass('_active');
      hide();
    });

    s.find('.select__list-item._active').removeClass('_active').trigger('click');

    s.on('clear', function () {
      input.val('').removeClass('_error');
      labelText.text(s.data('placeholder'));
      s.addClass('_placeholder').removeClass('_error').find('.form__input-error-message').remove();
    });
  });
};

$.fn.inputCards = function () {
  $(this).each(function () {
    var c = $(this),
      input = c.find('.form__cards-item'),
      btn = c.find('.form__cards-btn'),
      min = c.data('min') || 0,
      max = c.data('max') || false;

    input.digitsOnly();
    if (max !== false) {
      input.prop('maxlength', max.toString().length);
    }

    input.on('focusout', function () {
      set();
    });
    input.on('paste', function () {
      setTimeout(function () {
        var val = parseInt(input.val);
        if (!Number.isInteger(val)) {
          val = 1;
          input.val(val);
        }
      }, 1);
    });

    function change(d) {}
    function set(d) {
      var val = parseInt(input.val().replace(/[^\d]/gi, ''));
      if (!Number.isInteger(val)) {
        val = 1;
      }
      if (d != undefined && d < 0) {
        val--;
      } else if (d != undefined && d > 0) {
        val++;
      }

      btn.removeClass('_disabled');
      if (val <= min) {
        val = min;
        btn.filter('._less').addClass('_disabled');
      } else if (max !== false && val >= max) {
        val = max;
        btn.filter('._more').addClass('_disabled');
      }

      input.val(val);
    }

    set();

    btn.on('click', function () {
      if ($(this).hasClass('_less')) {
        set(-1);
      } else {
        set(1);
      }
    });
  });
};

$.fn.range = function () {
  $(this).each(function () {
    var r = $(this),
      range = r.find('.form__input-range-slider'),
      input = r.parent().find('.form__input'),
      minOrig = r.data('min'),
      min,
      max = r.data('max'),
      step = r.data('step'),
      val = input.val();

    if (minOrig == 1) {
      min = 0;
    } else {
      min = minOrig;
    }

    range.ionRangeSlider({
      min: min,
      max: max,
      from: val,
      step: step,
      hide_min_max: true,
      hide_from_to: true,
      force_edges: true,
      onChange: function (data) {
        var val = minOrig == 1 && data.from == 0 ? 1 : data.from_pretty;
        input.val(val);
      },
      onUpdate: function (data) {
        var val = minOrig == 1 && data.from == 0 ? 1 : data.from_pretty;
        input.val(val);
      },
    });
    var slider = range.data('ionRangeSlider');

    var timer;
    input.on('keydown', function () {
      clearTimeout(timer);
      timer = setTimeout(function () {
        var val = input.val();
        if (!val.length) val = min;
        // if (val < min) val = min;
        if (minOrig == 1 && val == 1) val = min;
        slider.update({
          from: val,
        });
      }, 300);
    });
  });
};
