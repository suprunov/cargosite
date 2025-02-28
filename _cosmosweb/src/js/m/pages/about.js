$('.about-hero').each(function(){
    var hero = $(this);
    
    hero.find('.about-hero__stats').append('<div class="about-hero__stats-scrlbr"></div>');

    var swiper = new Swiper(hero.find('.swiper')[0],{
        slidesPerView: 'auto',
        spaceBetween: 20,
        scrollbar: {
            el: hero.find('.about-hero__stats-scrlbr')[0],
            dragClass: 'about-hero__stats-scrlbr-bar',
            lockClass: '_hidden'
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                spaceBetween: 78
            },
            1000: {
                slidesPerView: 3,
                spaceBetween: 60
            },
            760: {
                slidesPerView: 3,
                spaceBetween: 40
            }
        }
    });
});

$('.about-history').each(function(){
    var hero = $(this);

    var swiper = new Swiper(hero.find('.swiper')[0],{
        spaceBetween: 24,
        slideToClickedSlide: true,
        watchSlidesProgress: true,
        // grabCursor: true,
        mousewheel: {
            forceToAxis: true
        }
    });
});