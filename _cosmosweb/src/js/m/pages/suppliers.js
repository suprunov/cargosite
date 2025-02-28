$('.suppliers-turnover').each(function(){
    var hero = $(this);
    
    hero.find('.suppliers-turnover__history').append('<div class="swiper-scrlbr"></div>');

    var swiper = new Swiper(hero.find('.swiper')[0],{
        slidesPerView: 'auto',
        spaceBetween: 12,
        scrollbar: {
            el: hero.find('.swiper-scrlbr')[0],
            dragClass: 'swiper-scrlbr-bar',
            lockClass: '_hidden'
        },
        breakpoints: {
            1200: {
                spaceBetween: 20
            },
            760: {
                spaceBetween: 16
            }
        }
    });
});

$('.suppliers-customers').each(function(){
    if (mql[600].matches) {
        var g = $(this);
        $('.suppliers-customers__graph').insertAfter(g.find('.suppliers-customers__heading'));
    }
});