// import Swiper from 'swiper/bundle';

(function(){
    var nav = `<div class="slider__nav">
        <div class="slider__nav-item _prev"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#8491AD" stroke-width="2" d="m10 17 4.926-4.926a.105.105 0 0 0 0-.148L10 7"/></svg></div>
        <div class="slider__nav-item _next"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="#8491AD" stroke-width="2" d="m10 17 4.926-4.926a.105.105 0 0 0 0-.148L10 7"/></svg></div>
    </div>`;

    
    $('.solutions').each(function(){
        var s = $(this),
            g = s.find('.solutions__slider');
            items = s.find('.swiper-slide');
        
        if (items.length > 1) {
            g.append(nav);
            var swiper = new Swiper(g.find('.swiper')[0],{
                slidesPerView: 'auto',
                spaceBetween: 16,
                navigation: {
                    prevEl: g.find('.slider__nav-item._prev')[0],
                    nextEl: g.find('.slider__nav-item._next')[0]
                },
                breakpoints: {
                    761: {
                        spaceBetween: 20
                    }
                }
            });
        };
    });

    $('.partner-switch').each(function(){
        var s = $(this),
            g = s.find('.partner-switch__slider');
            items = s.find('.swiper-slide');
        
        if (items.length > 1 && !mql[760].matches) {
            g.append(nav);
            var swiper = new Swiper(g.find('.swiper')[0],{
                slidesPerView: 'auto',
                spaceBetween: 16,
                navigation: {
                    prevEl: g.find('.slider__nav-item._prev')[0],
                    nextEl: g.find('.slider__nav-item._next')[0]
                },
                breakpoints: {
                    761: {
                        spaceBetween: 20
                    }
                }
            });
        };
    });
})();