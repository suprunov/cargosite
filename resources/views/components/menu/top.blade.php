<nav class="header__nav">
    <ul>
        <li class="header__nav-item-sub">
            <div class="header__nav-label">Грузоперевозчикам
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">
                    <path stroke="#20212B" stroke-width="1.06667"
                          d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782" />
                </svg>
            </div>
            <div class="header__nav-sub">
                <div class="header__nav-sub-item">
                    <div class="header__nav-sub-item-header">
                        <a href="{{route('fuelIndex')}}" class="header__nav-sub-item-header-name">
                            <img src="{{ Vite::image('header-fuel.svg') }}" alt="">
                            Cargo.Fuel
                        </a>
                        <div class="header__nav-sub-item-header-label">скидка на топливо</div>
                    </div>
                    <ul>
                        <li><a href="{{route('fuelAbout')}}">Топливо</a></li>
                        <li><a href="{{route('fuelCards')}}">Топливные карты</a></li>
                        <li><a href="{{route('fuelServices')}}">Сервисы общая</a></li>
                        <li><a href="{{route('fuelAdblue')}}">Детальная сервиса</a></li>
                        <li><a href="{{route('fuelRelatedServices')}}">Сопутствующие сервисы</a></li>
                        <li><a href="{{route('fuelRelatedProducts')}}">Сопутствующие товары</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="header__nav-item-sub">
            <div class="header__nav-label">Сотрудникам
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 16 16">
                    <path stroke="#20212B" stroke-width="1.06667"
                          d="m5.172 7.333 2.78 2.782a.067.067 0 0 0 .095 0l2.781-2.782" />
                </svg>
            </div>
            <div class="header__nav-sub">
                <div class="header__nav-sub-item">
                    <div class="header__nav-sub-item-header">
                        <a href="{{route('vacanciesIndex')}}" class="header__nav-sub-item-header-name"><img
                                src="{{ Vite::image('header-fuel.svg') }}" alt="">Карьера </a>
                        <div class="header__nav-sub-item-header-label">Работайте с нами</div>
                    </div>
                    <ul>
                        <li><a href="{{route('vacanciesVacancy', ['slug' => 'xxx'])}}">Вакансия</a></li>
                    </ul>
                </div>
            </div>
        </li>
        <li class="header__nav-item-much"><a href="{{route('aboutIndex')}}">О компании</a></li>
        <li class="header__nav-item-much"><a href="{{route('contactsIndex')}}">Контакты</a></li>
        <li class="header__nav-item-much"><a href="{{route('documentationIndex')}}">Документация</a></li>
        <li class="header__nav-item-much"><a href="{{route('suppliersIndex')}}">Поставщикам</a></li>
    </ul>
</nav>
