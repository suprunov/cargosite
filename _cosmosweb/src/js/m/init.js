var YAMAPSURL = 'https://api-maps.yandex.ru/v3/?apikey=344caba2-f9d1-4bb3-a264-6043d6d7b2d8&lang=ru_RU';

$('input._tel').each(function () {
	$(this).mask("+7 999 999-99-99");
});



$('.form__input').textInput();
$('._digits').digitsOnly();
$('.form__input._text').lettersOnly();
$('.form__cards').inputCards();
$('.form__input-range').range();

// $('.checkbox').checkbox();
// $('.radio').radio();
$('.select').select();
$('._js-autosize').autosize();
$('.form_required').required();

$('._js-replace-svg').replaceSVG();


// (function(){
// 	var goup = $('<div class="goup noselect"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16.3 9.2"><path d="M8.1 8.8l-.3.4L0 1.4 1.4 0l6.7 6.7L14.8 0l1.4 1.4-7.7 7.8-.4-.4z"/></svg></div>').appendTo('body'),
// 		isShowed = false;
// 	D.bind('scroll.goup',function(){
// 		var top = D.scrollTop();
// 		if (!isShowed && top >= 300) {
// 			goup.addClass('_on');
// 			isShowed = true;
// 		} else if (isShowed && top < 300) {
// 			goup.removeClass('_on');
// 			isShowed = false;
// 		};
// 	});
// 	goup.click(function(){
// 		Z.scrollBodyTo(0);
// 	});
// })();


W.on('popstate.hashnav', function (e, options) {
	var options = options || {};
	if (window.location.hash) {
		// console.log(window.location.hash)
		var hash = window.location.hash;
		hash = hash.replace('#', '');
		hash = decodeURIComponent(hash);
		// console.log(hash);
		var item = $('[id="' + hash + '"]');
		if (item.length) {
			// var item = $('#'+hash);
			item.removeAttr('id');
			if (item.parents('.accordeon__item').length) {
				var accItem = item.parents('.accordeon__item');
				var accItemHeading = accItem.find('.accordeon__heading');
				if (!accItemHeading.hasClass('_active')) {
					accItemHeading.trigger('click');
				} else {
					Z.scrollBodyTo(item.offset().top - ((mql[1000].matches) ? 40 : 100), options);
				}
				;
			} else {
				Z.scrollBodyTo(item.offset().top - ((mql[1000].matches) ? 40 : 100), options);
			}
			item.attr('id', hash);
		}
		;
	}
	;
});
setTimeout(function () {
	W.trigger('popstate.hashnav', {anim: false});
	$('body').removeClass('body-on-load');
}, 1);

$('.main-wrapper').each(function(){
	var mw = $(this);
	var top = 0;
	function fix() {
		top = document.documentElement.scrollTop;

		$('body').data('top',top).addClass('_content-fixed');
		$('body').data('fixed',true);
		mw.css({
			marginTop: -top
		});
		document.documentElement.scrollTop = 0;
	};
	function unfix() {
		$('body').removeClass('_content-fixed');
		mw.css({
			marginTop: 0
		});
		document.documentElement.scrollTop = top;
		$('body').data('fixed',false);
	};

	$('body')
		.on('fix',fix)
		.on('unfix',unfix);
});