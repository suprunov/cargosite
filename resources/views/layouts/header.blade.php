
<header class="header">
    <div class="header__inner">
        <div class="header__body">
            <div class="header__top">
                <div class="header__logo _desktop">
                    <a href="{{ route('homeIndex') }}"><img src="{{ Vite::image('logo.svg') }}" alt=""></a>
                </div>
                <div class="header__logo _mobile">
                    <a href="{{ route('homeIndex') }}">
                        <svg width="32" height="32" fill="none" viewBox="0 0 32 32">
                            <path fill="#20212B"
                                  d="M9.951 6.708H2.666V2.666H16l-2.62 2.62c-1.115 1.115-1.852 1.42-3.429 1.42Zm1.454 4.236 8.277-8.277h-1.396L14.521 6.43c-1.433 1.433-2.543 1.893-4.57 1.893H2.666v4.04l5.31.001c1.577 0 2.314-.305 3.428-1.42ZM7.457 22.257l19.59-19.59h-1.396L10.574 17.743c-1.433 1.434-2.544 1.894-4.57 1.894H2.666v4.04h1.362c1.577 0 2.314-.305 3.428-1.42ZM8.6 23.4c-1.433 1.433-2.544 1.893-4.57 1.893H2.665v4.04h26.667V2.667L8.6 23.4Zm.831-6.8L23.365 2.668h-1.397l-9.42 9.42c-1.433 1.433-2.543 1.893-4.57 1.893H2.666v4.04h3.336c1.577 0 2.314-.304 3.428-1.42Z"/>
                        </svg>
                    </a>
                </div>
                <x-menu.top></x-menu.top>
                <div class="header__user">
                    <button class="header__burger"><span class="helper-burger"></span></button>
                    <a href="#" class="btn _js-login">Личный кабинет</a>
                </div>
            </div>
        </div>
    </div>
</header>


