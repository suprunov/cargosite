$.fn.tabs = function () {
  $(this).each(function () {
    var t = $(this),
      chips = t.find('>.tabs__items .tabs__items-item'),
      tabs = t.find('>.tabs__item');

    chips.on('click', function () {
      var item = $(this);
      if (item.hasClass('_active')) return;

      var rel = item.data('rel');
      chips.removeClass('_active');
      item.addClass('_active');

      tabs
        .hide()
        .filter('[data-rel="' + rel + '"]')
        .show();
    });

    chips.filter('._active').removeClass('_active').trigger('click');
  });
};

$('._js-tabs').tabs();

$.fn.tabsSelect = function () {
  $(this).each(function () {
    var t = $(this),
      select = t.find('>.tabs-select__select .select__input'),
      tabs = t.find('>.tabs__item');

    select.on('change', function () {
      var val = select.val();
      console.log(val);

      tabs.hide();
      if (val.length) {
        tabs.filter('[data-rel="' + val + '"]').show();
      } else {
        tabs.eq(0).show();
      }
    });

    select.trigger('change');
  });
};

$('.tabs-select').tabsSelect();
