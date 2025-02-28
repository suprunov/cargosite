(function () {
  var popup = $(`<div class="popup"><div class="popup__inner">
        <div class="popup__close-wrapper"><div class="popup__close"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32"><path stroke="#20212B" stroke-width="1.5" d="M21.657 21.657 10.343 10.343M21.657 10.344 10.343 21.657"/></svg></div></div>
        <div class="popup__body"></div></div>
    </div>`).appendTo('body');
  var back = $('<div class="popup__back"></div>').appendTo('body');
  var body = popup.find('.popup__body');

  var duration =
    parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--popup-trs')) * 1000;

  var currentElement,
    currentElementParent,
    currentClass = '';

  var isAnimated = false;

  function show(e, options) {
    if (isAnimated) return;
    isAnimated = true;

    currentElement = options.el;
    currentElementParent = currentElement.parent();
    currentClass = options.class;

    popup.addClass(currentClass);
    currentElement.appendTo(body);
    currentElement.trigger('onBeforeShow');

    popup.addClass('_show');
    setTimeout(function () {
      $('body').addClass('_popup-show').trigger('fix');
    }, 0);

    $(window).on('keydown.popup', function (e) {
      setTimeout(function () {
        if (e.which == 27) {
          e.preventDefault();
          $(window).trigger('popup:hide');
        }
      }, 0);
    });

    setTimeout(function () {
      if (currentElement && currentElement.length) currentElement.trigger('onAfterShow');
      isAnimated = false;
    }, duration);
  }
  function hide() {
    if (isAnimated) return;
    isAnimated = true;

    if (currentElement && currentElement.length) currentElement.trigger('onBeforeHide');
    $('body').removeClass('_popup-show');

    $(window).off('keydown.popup');

    setTimeout(function () {
      if (currentElement && currentElement.length) currentElement.trigger('onAfterHide');

      currentElement.appendTo(currentElementParent);
      popup.removeClass(currentClass);

      currentElement = false;
      currentElementParent = false;
      currentClass = '';

      popup.removeClass('_show');

      $('body').trigger('unfix');

      isAnimated = false;
    }, duration);
  }

  popup.find('.popup__close').on('click', hide);
  back.on('click', hide);

  $(window).on('popup:show', show);
  $(window).on('popup:hide', hide);

  // setTimeout(function(){
  //     $(window).trigger('popup:show',{
  //         el: $('.form__apply'),
  //         class: ''
  //     });
  // },500);

  $('body').on('click', '._js-popup-close', function () {
    hide();
    return false;
  });
  $('body').on('click', '._js-popup', function () {
    // var el = $($(this).attr('href'));
    var data = {};
    if (this.tagName == 'A') {
      if (this.getAttribute('href').charAt(0) == '#') {
        data.el = $(this.getAttribute('href'));
      } else if (this.dataset.type == 'youtube') {
        // console.log('youtube', youtube_parser(this.getAttribute('href')))
        data.el = $(
          '<div class="video-box"><iframe src="https://www.youtube.com/embed/' +
            youtube_parser(this.getAttribute('href')) +
            '" frameborder="0" allow="autoplay; encrypted-media;" allowfullscreen></iframe></div>',
        );
        data.class = 'popup_video';
      }
    } else {
      data.el = $(this.dataset.target);
    }
    if (this.dataset.class) {
      data.class = this.dataset.class;
    }
    if (data.el.length) {
      $(window).trigger('popup:show', data);
      return false;
    }
  });
})();
