@extends('layouts.base')
@section('title', 'Cargo.Fuel')
@section('content')
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">Cargo.Fuel</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item _back">
                <svg width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path
                        stroke="#20212B"
                        stroke-width="1.6"
                        d="M13.242 16.243 9.07 12.07a.1.1 0 0 1 0-.142l4.172-4.172"
                    />
                </svg>
                Назад</a>
        </div>
    </div>

    <section class="content-hero fuel__hero">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Cокращайте расходы компании с&nbsp;помощью
                            <strong>Cargo.Fuel</strong></h1>
                        <p class="content-hero__copy">за&nbsp;счет скидок, бесплатного мониторинга и&nbsp;оптимизации
                            маршрутов</p>
                        <p class="content-hero__cta">
                            <a href="#apply" class="btn-cta">Сократить расходы</a>
                        </p>
                    </div>
                    <div class="content-hero__image"><img
                            src=" /local/templates/main/assets/img/fuel/hero.png"
                            alt=""
                            loading="lazy"
                        ></div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-services fule-services">
        <div class="folder">
            <div class="folder__body">
                <div class="fule-services__header">
                    <div class="fule-services__header-body">
                        <h2 class="home-services__heading">Экономия в&nbsp;одном приложении</h2>
                        <p class="home-services__copy">Каждая функция приложения помогает экономить. Скидки между
                            собой суммируются для получения максимальной выгоды от&nbsp;продукта.</p>
                    </div>
                    <div class="fule-services__header-label">
                        <strong>30%</strong> выгоды от&nbsp;использования от&nbsp;использования всего функционала
                        приложения
                    </div>
                </div>
                <div class="home-services__list">
                    <div class="home-services__list-item">
                        <article class="box-bottom">
                            <div class="box-bottom__back">
                                <div class="box-bottom__back-bottom"></div>
                            </div>
                            <div class="box-bottom__body home-services__item">
                                <div class="home-services__item-top">
                                    <h3 class="home-services__item-heading"><img
                                            src="/local/templates/main/assets/img/home/services-2.png"
                                            alt=""
                                            loading="lazy"
                                        >Оптимизация маршрутов</h3>
                                    <p class="home-services__item-copy">Cargo.Fuel оптимизирует маршруты с&nbsp;учетом
                                        цен и&nbsp;ваших скидок на&nbsp;АЗС по&nbsp;пути следования</p>
                                </div>
                                <div class="home-services__item-bottom">
                                    <p class="home-services__item-stats"><strong>
                                            <nobr>3-5%</nobr>
                                        </strong> от&nbsp;затрат на&nbsp;топливо
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="home-services__list-item">
                        <article class="box-bottom">
                            <div class="box-bottom__back">
                                <div class="box-bottom__back-bottom"></div>
                            </div>
                            <div class="box-bottom__body home-services__item">
                                <div class="home-services__item-top">
                                    <h3 class="home-services__item-heading"><img
                                            src="/local/templates/main/assets/img/fuel/fuel-card-icon.png"
                                            alt=""
                                            loading="lazy"
                                        >Топливая карта</h3>
                                    <p class="home-services__item-copy _long">Экономия на&nbsp;заправке и&nbsp;покупке
                                        сопутствующих товаров на&nbsp;заправках партнера.</p>
                                </div>
                                <div class="home-services__item-bottom">
                                    <p class="home-services__item-stats"><strong>
                                            <nobr>15-20%</nobr>
                                        </strong> от&nbsp;постоянных затрат
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="home-services__list-item _wide">
                        <article class="box-bottom">
                            <div class="box-bottom__back">
                                <div class="box-bottom__back-bottom"></div>
                            </div>
                            <div class="box-bottom__body home-services__item">
                                <div class="home-services__item-top">
                                    <h3 class="home-services__item-heading"><img
                                            src="/local/templates/main/assets/img/home/services-3.png"
                                            alt=""
                                            loading="lazy"
                                        >Бесплатная система мониторинга </h3>
                                    <p class="home-services__item-copy">Управление автопарком и&nbsp;логистикой
                                        происходит в&nbsp;одном приложении</p>
                                    <p class="home-services__item-cta"><a
                                            href="#calculate" class="btn-cta"
                                        >Снизить затраты</a></p>
                                </div>
                                <div class="home-services__item-bottom">
                                    <p class="home-services__item-stats"><strong>&ndash;1500&nbsp;₽</strong> за&nbsp;1&nbsp;грузовик
                                    </p>
                                    <p class="home-services__item-cta"><a
                                            href="#calculate" class="btn-cta"
                                        >Снизить затраты</a></p>
                                </div>
                                <div class="home-services__item-image">
                                    <img
                                        src="/local/templates/main/assets/img/home/monitoring-map.png"
                                        class="home-services__item-image-back"
                                        alt=""
                                    >
                                    <div class="home-services__item-image-front">
                                        <img
                                            src="/local/templates/main/assets/img/home/monitoring-screen.png"
                                            class=""
                                            alt=""
                                        ></div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-regions">
        <div class="fuel-regions__inner">
            <h2 class="fuel-regions__heading">Экономия в&nbsp;разных регионах</h2>
            <div class="tabs-select">
                <div class="tabs-select__select">
                    <div class="select">
                        <div class="select__label">Направление</div>
                        <input type="hidden" value="" class="select__input">
                        <div class="select__list">
                            <div class="select__list-inner">
                                <div class="select__list-item" data-val="1">Центральный</div>
                                <div class="select__list-item" data-val="2">Северо-Западный</div>
                                <div class="select__list-item" data-val="3">Уральский</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs__item" data-rel="1">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-diesel.png" alt=""> Дизель
                            </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-methane.png" alt=""> Метан
                            </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-propane.png" alt=""> Пропан
                            </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-adblue.png" alt=""> Adblue
                            </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="2">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-diesel.png" alt=""> Дизель
                            </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-methane.png" alt=""> Метан
                            </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-propane.png" alt=""> Пропан
                            </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-adblue.png" alt=""> Adblue
                            </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="3">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-diesel.png" alt=""> Дизель
                            </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-methane.png" alt=""> Метан
                            </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-propane.png" alt=""> Пропан
                            </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/icon-adblue.png" alt=""> Adblue
                            </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-comparison">
        <div class="fuel-comparison__inner">
            <h2 class="fuel-comparison__heading">Сравнение с&nbsp;конкурентами</h2>
            <div class="tabs _js-tabs">
                <div class="tabs__items">
                    <div class="tabs__items-item _active" data-rel="diesel">ДТ</div>
                    <div class="tabs__items-item" data-rel="methane">Метан</div>
                    <div class="tabs__items-item" data-rel="propane">Пропан</div>
                    <div class="tabs__items-item" data-rel="adblue">Adblue</div>
                </div>
                <div class="tabs__item" data-rel="diesel">
                    <div class="fuel-comparison__list">
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-2.png" alt=""> Новатек
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-3.svg" alt=""> Лукоил </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="methane">
                    <div class="fuel-comparison__list">
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-2.png" alt=""> Новатек
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-3.svg" alt=""> Лукоил </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="propane">
                    <div class="fuel-comparison__list">
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-2.png" alt=""> Новатек
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-3.svg" alt=""> Лукоил </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="adblue">
                    <div class="fuel-comparison__list">
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть
                            </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="fuel__calculate" id="calculate">
        <div class="folder">
            <div class="folder__body">
                <div class="fuel__calculate-body">
                    <form action="#" class="fuel__calculate-form form" data-steps="2">
                        <h2 class="fuel__calculate-form-heading">Рассчитайте ежемесячную экономию с&nbsp;<strong>Cargo.Fuel</strong>
                        </h2>
                        <div class="form-apply__body">
                            <div class="form-apply__progress">
                                <div class="form-apply__progress-label"><span>1</span> шаг <em>из 2</em></div>
                                <div class="form-apply__progress-bar">
                                    <div class="form-apply__progress-handler" style="width: 50%;"></div>
                                </div>
                            </div>
                            <p class="form-apply__label">Заполните данные</p>

                            <div class="fuel__calculate-form-step" data-step="1" data-title="Заполните данные">
                                <div class="form__item">
                                    <input
                                        type="tel"
                                        class="form__input _digits"
                                        value="180"
                                        placeholder="Cцепок в вашем парке"
                                        data-message=""
                                        required
                                    >
                                    <div class="form__input-range" data-min="1" data-max="500" data-step="5">
                                        <input type="hidden" class="form__input-range-slider">
                                        <div class="form__input-range-legend">
                                            <span>1 сцепка</span> <span>500 спецок</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form__item">
                                    <input
                                        type="tel"
                                        class="form__input _digits"
                                        value="4500"
                                        placeholder="Среднемесячный пробег одной сцепке, км"
                                        data-message=""
                                        required
                                    >
                                    <div
                                        class="form__input-range" data-min="500" data-max="40000" data-step="500"
                                    >
                                        <input type="hidden" class="form__input-range-slider">
                                        <div class="form__input-range-legend">
                                            <span>500 км</span> <span>40 000 км</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="fuel__calculate-form-step" data-step="2" data-title="Заполните данные">
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
                            </div>

                            <div class="form__submit">
                                <button class="btn-cta" type="submit">Продолжить</button>
                                <p class="form__submit-agreement">Нажимая на кнопку «<span
                                        class="form__submit-agreement-btn">Продолжить</span>», вы принимаете
                                    согласие на
                                    <a href="policy.html" target="_blank">обработку персональных данных</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="home-ecosystem fuel-routes">
        <div class="home-ecosystem__inner">
            <h2 class="home-ecosystem__heading">Сервис построения <br>оптимальных маршрутов</h2>
            <div class="home-ecosystem__body">
                <div class="home-ecosystem__list">
                    <article class="home-ecosystem__item _active">
                        <div class="home-ecosystem__item-heading">
                            <img
                                src="/local/templates/main/assets/img/home/services-3.png"
                                alt=""
                                loading="lazy"
                            > Оптимизированные маршруты
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Cоздание маршрута с&nbsp;учетом платные дорог,
                                «Платон», цены на&nbsp;АЗС по&nbsp;пути с&nbsp;учетом персональных скидок.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/fuel/routes.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">
                            <img
                                src="/local/templates/main/assets/img/fuel/icon-limits.png"
                                alt=""
                                loading="lazy"
                            > Лимиты для водителей
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность
                                управление логистикой и&nbsp;автопарком.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">
                            <img
                                src="/local/templates/main/assets/img/fuel/icon-reports.png"
                                alt=""
                                loading="lazy"
                            > Отчет по транзакциям
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность
                                управление логистикой и&nbsp;автопарком.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/fuel/routes.png" alt="">
                            </figure>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="home-reviews">
        <div class="home-reviews__inner">
            <h2 class="home-reviews__heading">Что говорят о &nbsp;нас</h2>
        </div>

        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="home-reviews__item">
                        <div class="home-reviews__item-person">
                            <img
                                src="/local/templates/main/assets/img/home/review.jpg"
                                alt=""
                                class="home-reviews__item-person-image"
                            >
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                ><path
                                        stroke="#A7ADC8"
                                        stroke-width="1.6"
                                        d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172"
                                    /></svg></span></p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img
                                        src="/local/templates/main/assets/img/home/review.jpg"
                                        alt=""
                                        class="home-reviews__item-person-image"
                                    >
                                    <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                                    <p class="home-reviews__item-person-pos">Логист CDEK</p>
                                </div>
                                <div class="home-reviews__full-article">
                                    <p>На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря сервису, сократили
                                        расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="home-reviews__item">
                        <div class="home-reviews__item-person">
                            <img
                                src="/local/templates/main/assets/img/home/review.jpg"
                                alt=""
                                class="home-reviews__item-person-image"
                            >
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                ><path
                                        stroke="#A7ADC8"
                                        stroke-width="1.6"
                                        d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172"
                                    /></svg></span></p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img
                                        src="/local/templates/main/assets/img/home/review.jpg"
                                        alt=""
                                        class="home-reviews__item-person-image"
                                    >
                                    <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                                    <p class="home-reviews__item-person-pos">Логист CDEK</p>
                                </div>
                                <div class="home-reviews__full-article">
                                    <p>На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря сервису, сократили
                                        расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="home-reviews__item">
                        <div class="home-reviews__item-person">
                            <img
                                src="/local/templates/main/assets/img/home/review.jpg"
                                alt=""
                                class="home-reviews__item-person-image"
                            >
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                ><path
                                        stroke="#A7ADC8"
                                        stroke-width="1.6"
                                        d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172"
                                    /></svg></span></p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img
                                        src="/local/templates/main/assets/img/home/review.jpg"
                                        alt=""
                                        class="home-reviews__item-person-image"
                                    >
                                    <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                                    <p class="home-reviews__item-person-pos">Логист CDEK</p>
                                </div>
                                <div class="home-reviews__full-article">
                                    <p>На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря сервису, сократили
                                        расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="swiper-slide">
                    <article class="home-reviews__item">
                        <div class="home-reviews__item-person">
                            <img
                                src="/local/templates/main/assets/img/home/review.jpg"
                                alt=""
                                class="home-reviews__item-person-image"
                            >
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="24"
                                    height="24"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                ><path
                                        stroke="#A7ADC8"
                                        stroke-width="1.6"
                                        d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172"
                                    /></svg></span></p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img
                                        src="/local/templates/main/assets/img/home/review.jpg"
                                        alt=""
                                        class="home-reviews__item-person-image"
                                    >
                                    <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                                    <p class="home-reviews__item-person-pos">Логист CDEK</p>
                                </div>
                                <div class="home-reviews__full-article">
                                    <p>На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря сервису, сократили
                                        расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.На постоянной основе используем Cargo.Fuel. Благодаря сервису,
                                        сократили расходы на&nbsp;бензин и&nbsp;смогли деньги инвестировать в&nbsp;развитие
                                        автопарка.</p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>


    <section class="home-apply fuel-apply" id="apply">
        <!--            ----------------->
        <style>
            .pathBar__sep {
                background: url(/local/templates/main/assets/img/icons/pathbar-sep.svg) 0px 0px / contain no-repeat;
            }

            .btn-cta:after {
                background: url(/local/templates/main/assets/img/icons/btn-cta-arrow.svg) 0 0 no-repeat;
            }

            .main {
                --c-accent: var(--c-fuel);
                --c-btn-cta: var(--c-accent);
            }

            .folder:before {
                background: url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
            }

            .box-bottom__back-bottom:after {
                background: url(/local/templates/main/assets/img/box-bottom-corner.svg) 0 0 no-repeat;
            }
        </style>
        <h1 class="fuel-apply__heading">Заявка на&nbsp;подключение <strong>Cargo.Fuel</strong></h1>
        <div class="fuel-apply__steps">
            <div class="fuel-apply__steps-item">
                <div class="fuel-apply__steps-item-n">1</div>
                <p class="fuel-apply__steps-item-copy">Заполните заявку онлайн за&nbsp;2&nbsp;минуты</p>
            </div>
            <div class="fuel-apply__steps-item">
                <div class="fuel-apply__steps-item-n">2</div>
                <p class="fuel-apply__steps-item-copy">Дождитесь одобрения заявки за&nbsp;30&nbsp;минут</p>
            </div>
            <div class="fuel-apply__steps-item">
                <div class="fuel-apply__steps-item-n">3</div>
                <p class="fuel-apply__steps-item-copy">Получите доступы к&nbsp;экосистеме</p>
            </div>
        </div>
        <div class="folder">
            <div class="folder__body">
                <div class="home-apply__body">
                    <form action="#" class="form-apply form" data-steps="2">
                        <h2 class="form-apply__heading">Начните снижать себестоимость перевозок уже сегодня</h2>
                        <div class="form-apply__body">
                            <div class="form-apply__progress">
                                <div class="form-apply__progress-label"><span>1</span> шаг <em>из 2</em></div>
                                <div class="form-apply__progress-bar">
                                    <div class="form-apply__progress-handler" style="width: 50%;"></div>
                                </div>
                            </div>
                            <p class="form-apply__label">Заполните контактные данные</p>

                            <div
                                class="form-apply-form-step" data-step="1" data-title="Заполните контактные данные"
                            >
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
                            </div>
                            <div
                                class="form-apply-form-step"
                                data-step="2"
                                data-title="Заполните данные о&nbsp;компании"
                            >
                                <div class="form__item">
                                    <input
                                        type="text"
                                        class="form__input"
                                        placeholder="Название компании"
                                        data-message="Введите название компании"
                                        required
                                    >
                                </div>
                                <div class="form__item">
                                    <input
                                        type="tel"
                                        class="form__input _digits"
                                        placeholder="ИНН"
                                        data-message="Введите ИНН"
                                        required
                                    >
                                </div>
                            </div>

                            <div class="form__submit">
                                <button class="btn-cta" type="submit">Продолжить</button>
                                <p class="form__submit-agreement">Нажимая на&nbsp;кнопку «<span
                                        class="form__submit-agreement-btn">Продолжить</span>», вы&nbsp;принимаете
                                    согласие на&nbsp;<a
                                        href="policy.html" target="_blank"
                                    >обработку персональных данных</a></p>
                            </div>

                            <div class="form-apply__back">
                                    <span class="form-apply__back-link"><svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="24"
                                            height="24"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                        ><path
                                                fill="#20212B"
                                                fill-rule="evenodd"
                                                d="M13.09 5.777 7.527 11.34a.933.933 0 0 0 0 1.32l5.563 5.563 1.131-1.132L9.131 12l5.09-5.091-1.131-1.132Z"
                                                clip-rule="evenodd"
                                            /></svg>Назад</span>
                            </div>
                        </div>
                    </form>
                    <div class="home-apply__image">
                        <video muted autoplay loop playsinline inline>
                            <source src="/local/templates/main/assets/video/home-intro-m.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>

            </div>
        </div>            <!--            ------------->
    </section>
@endsection
