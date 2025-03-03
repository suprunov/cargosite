@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">Карьера</span>
        </div>
    </div>


    <section class="content-hero vacancies__hero">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Cargonomica вашего стабильного роста</h1>
                        <p class="content-hero__copy">В&nbsp;команде Cargonomica уже более 60&nbsp;человек и&nbsp;мы&nbsp;продолжаем
                            стремительно расти.</p>
                        <p class="content-hero__cta">
                            <a href="#vacancies" class="btn-cta">Смотреть вакансии</a>
                        </p>
                    </div>
                    <div class="content-hero__image">
                        <img
                            src="{{ Vite::image('vacancies/hero.jpg') }}"
                            alt=""
                            loading="lazy"
                            class="_desktop"
                        > <img
                            src="{{ Vite::image('vacancies/hero-m.jpg') }}"
                            alt=""
                            loading="lazy"
                            class="_mobile"
                        >
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vacancies-us">
        <div class="vacancies-us__inner">
            <div class="vacancies-us__body">
                <h2 class="vacancies-us__heading">Работа у&nbsp;нас&nbsp;— это</h2>
                <div class="vacancies-us__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Оплата обучения</h3>
                                        <p class="vacancies-us__item-copy">Помогаем стать экспертами в&nbsp;нашей
                                            области</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="{{ Vite::image('vacancies/us-1.png') }}" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Безопасность</h3>
                                        <p class="vacancies-us__item-copy">Официальное трудоустройство с&nbsp;полностью
                                            белой зарплатой, включая премии</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="{{ Vite::image('vacancies/us-2.png') }}" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Карьерный рост</h3>
                                        <p class="vacancies-us__item-copy">90% руководителей выросли из&nbsp;рядовых
                                            сотрудников компании</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="{{ Vite::image('vacancies/us-3.png') }}" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Прозрачный KPI</h3>
                                        <p class="vacancies-us__item-copy">Ничего не&nbsp;скрываем, поэтому можете
                                            самостоятельно посчитать размер зарплаты</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="{{ Vite::image('vacancies/us-4.png') }}" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vacancies-list" id="vacancies">
        <div class="vacancies-list__inner">
            <h2 class="vacancies-list__heading">Вакансии</h2>
            <div class="tabs _js-tabs">
                <div class="tabs__items">
                    @foreach ($vacancyDirections as $vacancyDirection)
                        <div class="tabs__items-item {{ $loop->first ? '_active' : '' }}"
                             data-rel="{{ $vacancyDirection->slug }}">
                            {{ $vacancyDirection->title }}
                        </div>
                    @endforeach
                </div>

                @foreach ($vacancyDirections as $vacancyDirection)
                    <div class="tabs__item" data-rel="{{ $vacancyDirection->slug }}">
                        <div class="vacancies-list__about">
                            <div class="accordeon">
                                <article class="accordeon__item">
                                    <div class="accordeon__heading">
                                        <h4>Чем занимается направление</h4>
                                    </div>
                                    <div class="accordeon__body">
                                        <p>{{ $vacancyDirection->description }}</p>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <div class="vacancies-list__list">
                            @forelse ($vacancyDirection->vacancies as $vacancy)
                                <article class="vacancies-list__item">
                                    <h3 class="vacancies-list__item-heading">{{ $vacancy->title }}</h3>
                                    <p class="vacancies-list__item-info">
                                        {{ $vacancy->location }} <i></i>
                                        {{ $vacancy->salary ? $vacancy->salary . ' ₽' : 'з/п не указана' }} <i></i>
                                        {{ $vacancy->place }}
                                    </p>
                                    <p class="vacancies-list__item-cta">
                                        <a href="{{ route('vacanciesVacancy', $vacancy->slug) }}"
                                           class="btn">Подробнее</a>
                                    </p>
                                </article>
                            @empty
                                <p>Вакансий пока нет</p>
                            @endforelse
                        </div>

                        <div class="show-more" data-target=".vacancies-list__list">
                            <button class="btn">Показать ещё</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="vacancies__apply" id="apply">
        <div class="folder">
            <div class="folder__body">
                <div class="vacancies__apply-body">
                    <form action="#" class="vacancies__apply-form form form_required">
                        <h2 class="vacancies__apply-form-heading">Нет подходящей <br>вакансии?</h2>
                        <p class="vacancies__apply-form-copy">Заполняйте форму, а&nbsp;мы&nbsp;подберем подходящий
                            вариант</p>

                        <div class="vacancies__apply-form-body">
                            <h4>Контактные данные</h4>
                            <div class="form__item">
                                <input
                                    type="text"
                                    class="form__input _text"
                                    placeholder="Фамилия, имя и отчество"
                                    data-message="Введите фамилию и имя"
                                    required
                                >
                            </div>
                            <div class="form__item">
                                <input
                                    type="tel"
                                    class="form__input _tel"
                                    placeholder="Мобильный телефон"
                                    data-message="Введите номер телефона"
                                    required
                                >
                            </div>
                            <div class="form__item">
                                <div class="select">
                                    <div class="select__label">Город</div>
                                    <input
                                        type="hidden"
                                        value=""
                                        class="select__input"
                                        required
                                        data-message="Выберите город"
                                    >
                                    <div class="select__list">
                                        <div class="select__list-inner">
                                            <div class="select__list-item" data-val="1">Москва</div>
                                            <div class="select__list-item" data-val="2">Санкт-Петербург</div>
                                            <div class="select__list-item" data-val="3">Новосибирск</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Информация о&nbsp;вашем опыте</h4>
                            <div class="form__item">
                                <div class="select">
                                    <div class="select__label">Направление</div>
                                    <input
                                        type="hidden"
                                        value=""
                                        class="select__input"
                                        required
                                        data-message="Выберите направление"
                                    >
                                    <div class="select__list">
                                        <div class="select__list-inner">
                                            <div class="select__list-item" data-val="1">IT</div>
                                            <div class="select__list-item" data-val="2">Логистика</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__item">
                                <input
                                    type="text"
                                    class="form__input"
                                    placeholder="Ссылка на резюме, например hh.ru"
                                    required
                                    data-message="Укажите ссылку"
                                >
                            </div>
                            <div class="form__item">
                                <textarea
                                    class="form__input _js-autosize" placeholder="Сопроводительное письмо"
                                ></textarea>
                            </div>
                            <div class="form__submit">
                                <button class="btn-cta" type="submit">Отправить</button>
                                <p class="form__submit-agreement">Нажимая на кнопку «Отправить», вы принимаете согласие
                                    на
                                    <a href="policy.html" target="_blank">обработку персональных данных</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
