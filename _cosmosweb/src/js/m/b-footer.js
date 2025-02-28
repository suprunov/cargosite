$('.footer__top-list').each(function(){
    var list = $(this);
    var slider = $('<div class="footer__top-slider"><div class="swiper"><div class="swiper-wrapper"></div></div><div class="swiper-scrlbr"></div></div>');

    var html = '';
    list.find('.footer__top-list-item').each(function(){
        html += `<div class="swiper-slide">
            ${ this.outerHTML }
        </div>`;
    });

    slider.find('.swiper-wrapper').append(html);

    slider.insertAfter(list);

    var swiper = new Swiper(slider.find('.swiper')[0],{
        slidesPerView: 'auto',
        spaceBetween: 16,
        scrollbar: {
            el: slider.find('.swiper-scrlbr')[0],
            dragClass: 'swiper-scrlbr-bar',
            lockClass: '_hidden'
        }
    });
});

$('.footer__nav-heading').on('click',function(){
    if (!mql[600].matches) return;

    var item = $(this);
    if (item.hasClass('_active')) {
        item
            .removeClass('_active')
            .next('ul')
            .slideUp(600,'easeOutExpo');
    } else {
        $('.footer__nav-heading._active').trigger('click');
        item
            .next('ul')
            .slideDown(600,'easeOutExpo');
        
        setTimeout(function(){
            item.addClass('_active');
        },1)
    };
});