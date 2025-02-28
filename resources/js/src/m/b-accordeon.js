$.fn.accordeon = function () {
  $(this).each(function () {
    var ac = $(this),
      items = ac.find('> .accordeon__item');

    if (!ac.data('init')) {
      ac.data('init', true);

      items.each(function () {
        var item = $(this),
          heading = item.find('>.accordeon__heading');

        var id = heading.attr('id');
        heading
          .data('id', id)
          .append(
            '<span class="accordeon__heading-icon"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#07061A" viewBox="0 0 32 32"><path fill-rule="evenodd" d="M21.657 14.667a.8.8 0 0 1 0 1.131l-4.997 4.997a.933.933 0 0 1-1.32 0l-4.997-4.997a.8.8 0 0 1 1.131-1.131L16 19.192l4.526-4.525a.8.8 0 0 1 1.13 0Z" clip-rule="evenodd"/></svg></span>',
          );

        if (!item.find('.accordeon__body').length) {
          item.addClass('_empty');
          return;
        }

        heading.on('click keypress', function (e) {
          if (e.type === 'click' || (e.type === 'keypress' && (e.which === 32 || e.which == 13))) {
            var h = $(this);
            if (!h.hasClass('_active')) {
              items.find('> .accordeon__heading._active').trigger('click');
              h.addClass('_active');
              item
                .find('> .accordeon__body')
                .stop()
                .slideDown(220, function () {
                  // if (D.scrollTop() > item.offset().top) {
                  // Z.scrollBodyTo(item.offset().top + 21);
                  // };
                });

              // window.location.hash = h.data('id');
              // history.replaceState(null, null, document.location.pathname + '#' + h.data('id'));
            } else {
              h.removeClass('_active');
              item.find('> .accordeon__body').stop().slideUp(200);
              // history.pushState("", document.title, window.location.pathname);
            }
            if (e.type === 'click') {
              h.blur();
            }
            return false;
          }
        });
      });

      items.find('> .accordeon__heading._active').parent().find('> .accordeon__body').show();

      items.find('.accordeon__heading').attr('tabindex', 0);
    }
  });
};

$('.accordeon').accordeon();
