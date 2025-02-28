@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <style>
        .pathBar__sep {
            background: url(/local/templates/main/assets/img/icons/pathbar-sep.svg) 0 0 no-repeat;
        }

    </style>

    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">Сервисы</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a href="fuel" class="pathBar__item _back"><img src="../img/icons/pathbar-back.svg" inline alt="">Назад</a>
        </div>
    </div>

    <section class="fuel__services">
        <div class="fuel__services-inner">
            <h1 class="fuel__services-heading">Сервисы</h1>
            <div class="fuel__services-list">
                <article class="fuel__services-list__item">
                    <div class="fuel__services-list__item-image"><img
                            src="/local/templates/main/assets/img/fuel/services/list-1.jpg" loading="lazy" alt=""
                        ></div>
                    <div class="fuel__services-list__item-body">
                        <h4 class="fuel__services-list__item-heading">Шиномонтаж</h4>
                        <p class="fuel__services-list__item-copy">Замена шин со&nbsp;скидкой у&nbsp;партнеров
                            экосистемы</p>
                        <p class="fuel__services-list__item-cta"><a href="fuel-adblue" class="btn">Подробнее</a>
                        </p>
                    </div>
                </article>
                <article class="fuel__services-list__item">
                    <div class="fuel__services-list__item-image"><img
                            src="/local/templates/main/assets/img/fuel/services/list-2.jpg" loading="lazy" alt=""
                        ></div>
                    <div class="fuel__services-list__item-body">
                        <h4 class="fuel__services-list__item-heading">ЭДО</h4>
                        <p class="fuel__services-list__item-copy">Цифровизируем ваши документы</p>
                        <p class="fuel__services-list__item-cta"><a href="#" class="btn">Подробнее</a></p>
                    </div>
                </article>
                <article class="fuel__services-list__item">
                    <div class="fuel__services-list__item-image"><img
                            src="/local/templates/main/assets/img/fuel/services/list-3.jpg" loading="lazy" alt=""
                        ></div>
                    <div class="fuel__services-list__item-body">
                        <h4 class="fuel__services-list__item-heading">Поддержка</h4>
                        <p class="fuel__services-list__item-copy">Поможем в&nbsp;любой ситуации на&nbsp;дороге 24/7</p>
                        <p class="fuel__services-list__item-cta"><a href="#" class="btn">Подробнее</a></p>
                    </div>
                </article>
                <article class="fuel__services-list__item">
                    <div class="fuel__services-list__item-image"><img
                            src="/local/templates/main/assets/img/fuel/services/list-4.jpg" loading="lazy" alt=""
                        ></div>
                    <div class="fuel__services-list__item-body">
                        <h4 class="fuel__services-list__item-heading">Автомойка</h4>
                        <p class="fuel__services-list__item-copy">Со&nbsp;скидкой у&nbsp;партнеров экосистемы</p>
                        <p class="fuel__services-list__item-cta"><a href="#" class="btn">Подробнее</a></p>
                    </div>
                </article>
                <article class="fuel__services-list__item">
                    <div class="fuel__services-list__item-image"><img
                            src="/local/templates/main/assets/img/fuel/services/list-5.jpg" loading="lazy" alt=""
                        ></div>
                    <div class="fuel__services-list__item-body">
                        <h4 class="fuel__services-list__item-heading">Личный кабинет</h4>
                        <p class="fuel__services-list__item-copy">Контролируйте свои расходы в&nbsp;личном кабинете</p>
                        <p class="fuel__services-list__item-cta"><a href="#" class="btn">Подробнее</a></p>
                    </div>
                </article>
                <article class="fuel__services-list__item">
                    <div class="fuel__services-list__item-image"><img
                            src="/local/templates/main/assets/img/fuel/services/list-6.jpg" loading="lazy" alt=""
                        ></div>
                    <div class="fuel__services-list__item-body">
                        <h4 class="fuel__services-list__item-heading">Рассрочка</h4>
                        <p class="fuel__services-list__item-copy">Покупайте товары сейчас, а&nbsp;платите позже</p>
                        <p class="fuel__services-list__item-cta"><a href="#" class="btn">Подробнее</a></p>
                    </div>
                </article>
            </div>
        </div>
    </section>

@endsection
