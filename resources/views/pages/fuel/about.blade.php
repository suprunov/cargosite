@extends('layouts.base')
@section('title', 'Cargo.Fuel')
@section('content')
    <style>
        section {
            --c-accent: var(--c-fuel);
            --c-btn-cta: var(--c-accent);
        }

        .pathBar__sep {
            background: url(/local/templates/main/assets/img/icons/pathbar-sep.svg) 0px 0px / contain no-repeat;
        }

        .btn-cta:after {
            background: url(/local/templates/main/assets/img/icons/btn-cta-arrow.svg) 0 0 no-repeat;
        }

        .folder:before {
            background: url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
        }

        .folder-white:before {
            background: url(/local/templates/main/assets/img/folder-intro-top.svg) 0 100% no-repeat;
        }
    </style>

    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">топливо</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a href="fuel" class="pathBar__item _back"><img
                    src="/local/templates/main/assets/img/icons/pathbar-back.svg" inline alt="">Назад</a>
        </div>
    </div>

    <section class="content-hero fuel-about__hero">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Топливо напрямую от&nbsp;Tatneft в&nbsp;Москве</h1>
                        <p class="content-hero__copy">Сэкономьте на&nbsp;топливе до&nbsp;30% с&nbsp;помощью
                            топливных карт</p>
                        <p class="content-hero__cta">
                            <a href="#calculate" class="btn-cta">Оставить заявку</a>
                        </p>
                    </div>
                    <div class="content-hero__image"><img src="/local/templates/main/assets/img/fuel/about/hero.jpg"
                                                          alt="" loading="lazy"></div>
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
                                    <div class="form__input-range" data-min="500" data-max="40000" data-step="500">
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
                                    <a href="policy" target="_blank">обработку персональных данных</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-types">
        <div class="fuel-types__inner">
            <h2 class="fuel-types__heading">Какое топливо можно приобрести</h2>
            <div class="fuel-types__list">
                <div class="fuel-types__item">
                    <div class="fuel-types__item-inner">
                        <h2 class="fuel-types__item-heading">Дизель</h2>
                        <div class="fuel-types__item-image"><img
                                src="/local/templates/main/assets/img/fuel/about/diesel.png" alt=""></div>
                    </div>
                </div>
                <div class="fuel-types__item">
                    <div class="fuel-types__item-inner">
                        <h2 class="fuel-types__item-heading">Метан</h2>
                        <div class="fuel-types__item-image"><img
                                src="/local/templates/main/assets/img/fuel/about/methane.png" alt=""></div>
                    </div>
                </div>
                <div class="fuel-types__item">
                    <div class="fuel-types__item-inner">
                        <h2 class="fuel-types__item-heading">Adblue</h2>
                        <div class="fuel-types__item-image"><img
                                src="/local/templates/main/assets/img/fuel/about/propane.png" alt=""></div>
                    </div>
                </div>
                <div class="fuel-types__item">
                    <div class="fuel-types__item-inner">
                        <h2 class="fuel-types__item-heading">Пропан</h2>
                        <div class="fuel-types__item-image"><img
                                src="/local/templates/main/assets/img/fuel/about/adblue.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="content-hero fuel__hero fuel-direct">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Покупайте дизельное топливо напрямую
                            от&nbsp;производителя</h1>
                        <p class="content-hero__copy">Топливная карта для юридических лиц, без скрытых платежей и&nbsp;комиссий
                            с&nbsp;отсрочкой платежа на&nbsp;30&nbsp;дней.</p>
                        <p class="content-hero__cta">
                            <a href="#calculate" class="btn-cta">Оставить заявку</a>
                        </p>
                    </div>
                    <div class="content-hero__image"><img src="/local/templates/main/assets/img/fuel/hero.png"
                                                          alt="" loading="lazy"></div>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-2.png" alt=""> Новатек </h3>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть </h3>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-2.png" alt=""> Новатек </h3>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть </h3>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-2.png" alt=""> Новатек </h3>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть </h3>
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
                                <img src="/local/templates/main/assets/img/fuel/logo-1.svg" alt=""> Tatneft </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price"><span>53.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-4.svg" alt=""> Газпром </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                        <article class="fuel-comparison__item">
                            <h3 class="fuel-comparison__item-heading">
                                <img src="/local/templates/main/assets/img/fuel/logo-5.svg" alt=""> Роснефть </h3>
                            <div class="fuel-comparison__item-price">
                                <div class="fuel-price _disabled"><span>54.53 ₽/л.</span></div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-regions">
        <div class="fuel-regions__inner">
            <h2 class="fuel-regions__heading">Экономия в разных регионах</h2>
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

    <div class="seo">
        <div class="seo__inner">
            <h2>SEO-текст</h2>
            <p>Топливная карта для юр&nbsp;лиц и&nbsp;ИП&nbsp;— современное безналичное средство расчета за&nbsp;топливо
                (бензин, ДТ, газ) и&nbsp;контроля Ваших денежных средств. Топливная карта (заправочная) представляет
                собой пластиковый носитель с&nbsp;чипом для оплаты горючего в&nbsp;сети приема АЗС. Каждая карта
                имеет свой уникальный номер, закрепленный за&nbsp;определенном эмитентом, и&nbsp;денежный
                баланс.</p>
        </div>
    </div>
@endsection
