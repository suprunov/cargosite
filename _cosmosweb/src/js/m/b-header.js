$('.header').each(function(){
    
    var h = $(this);
    var top = 0;

    var visible = false;

    var b = $('body');

    $(window).on('scroll.header',function(){
        if (b.data('fixed')) return;

        var t = document.documentElement.scrollTop;

        if (!visible && t > top) {
            visible = true;
            b.addClass('_header-fixed');
            // console.log('show');
        } else if (visible && t <= top) {
            visible = false;
            b.removeClass('_header-fixed');
            // console.log('hide');
        };
    });
});
$('.header__top').each(function(){
    var h = $(this),
        subs = h.find('.header__nav-item-sub'),
        labels = h.find('.header__nav-label');
    
    var sub = $('<div class="header__sub"></div>').appendTo(h);

    subs.each(function(index){
        var s = $(this);
        var label = s.find('.header__nav-label');
        label.data('index',index);
        sub.append(s.find('.header__nav-sub'));

        label.on('mouseenter',function(){
            show(index);
        }).on('mouseleave',function(){
            hide();
        });
    });

    var items = h.find('.header__nav-sub');

    sub.on('mouseenter',function(){
        clearTimeout(timer);
    }).on('mouseleave',function(){
        hide();
    });

    var timer;
    function show(index) {
        clearTimeout(timer);
        labels.removeClass('_hover');
        labels.eq(index).addClass('_hover');

        var left = labels.eq(0).position().left;

        sub.show();
        items.removeClass('_show');
        items.eq(index).addClass('_show');

        sub.css({
            left: left
        });

        setTimeout(function(){
            sub.addClass('_show');
        },0);
    };
    function hide() {
        timer = setTimeout(function(){
            labels.removeClass('_hover');
            sub.removeClass('_show');

            timer = setTimeout(function(){
                sub.hide();
            },200);
        },200);
    };
});

// $('.header__burger').on('click',function(){
// 	if (!$('html').hasClass('_side-nav_visible')) {
// 		$('html').addClass('_side-nav_visible');
// 	} else {
// 		$('html').removeClass('_side-nav_visible');
// 	};
// });

// $('.burger-nav__list a:not(.btn)').on('click',function(){
//     $('html').removeClass('_side-nav_visible');
// });

// $('.header').each(function(){
//     var h = $(this);
//     var top = 10;

//     var visible = true;

//     var prevTop = document.documentElement.scrollTop;

//     $(window).on('scroll.mobile-header',function(){
//         if ($('body').data('fixed')) return;

//         var t = document.documentElement.scrollTop;

//         if (t > prevTop && visible) {
//             visible = false;
//             h.addClass('_hide');
//             $('html').removeClass('_side-nav_visible');
//             console.log('hide');
//         } else if (t < prevTop && !visible) {
//             visible = true;
//             h.removeClass('_hide');
//             console.log('show');
//         };

        
//         prevTop = t;
//     });
// });