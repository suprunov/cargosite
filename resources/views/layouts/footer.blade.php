<footer class="footer">
    <x-menu.popular></x-menu.popular>
    <div class="footer__main">
        <div class="footer__header">
            <div class="footer__logo"><img src="{{ Vite::image('logo-footer.svg') }}" alt=""></div>
            <x-menu.social></x-menu.social>
        </div>
        <x-menu.bottom></x-menu.bottom>
    </div>
    <div class="footer__bottom">
        <div class="footer__bottom-inner">
            <x-menu.legal></x-menu.legal>
            <div class="footer__bottom-copy">
                <p>©&nbsp;АО «Каргономика», {{ date("Y") }}</p>
                <p>Все права защищены.</p>
            </div>
            <div class="footer__bottom-logo"><img src="{{ Vite::image('logo-footer.svg') }}" alt=""></div>
        </div>
    </div>
</footer>



