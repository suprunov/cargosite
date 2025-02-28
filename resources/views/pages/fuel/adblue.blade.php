@extends('layouts.base')
@section('title', 'Главная')
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
            <a href="fuel-services" class="pathBar__item">Сервисы</a> <span class="pathBar__sep"></span> <span
                class="pathBar__item _active"
            >Adblue</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a href="fuel-services" class="pathBar__item _back"><img
                    src="/local/templates/main/assets/img/icons/pathbar-back.svg" inline alt=""
                >Назад</a>
        </div>
    </div>

    <section class="content-hero adblue__hero">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Adblue напрямую от&nbsp;Tatneft в&nbsp;Москве</h1>
                        <p class="content-hero__copy">Сэкономьте на&nbsp;топливе до&nbsp;30% с&nbsp;помощью топливных
                            карт.</p>
                        <p class="content-hero__cta">
                            <a href="#apply" class="btn-cta">Сократить расходы</a>
                        </p>
                    </div>
                    <div class="content-hero__image"><img src="/local/templates/main/assets/img/fuel/adblue/hero.jpg"
                                                          alt="" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-regions _regions">
        <div class="fuel-regions__inner">
            <h2 class="fuel-regions__heading">Экономия в&nbsp;разных регионах</h2>
            <div class="tabs-select">
                <div class="tabs-select__select">
                    <div class="select">
                        <div class="select__label">Направление</div>
                        <input type="hidden" value="" class="select__input">
                        <div class="select__list">
                            <div class="select__list-inner">
                                <div class="select__list-item" data-val="1">Россия</div>
                                <div class="select__list-item" data-val="2">Центральный</div>
                                <div class="select__list-item" data-val="3">Северо-Западный</div>
                                <div class="select__list-item" data-val="4">Уральский</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs__item" data-rel="1">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Южный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Кавказский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Приволжский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="2">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Центральный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="3">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Северо-Западный </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="4">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                Уральский </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="vacancies-us fuel-pros">
        <div class="vacancies-us__inner">
            <div class="vacancies-us__body">
                <h2 class="vacancies-us__heading">Преимущества покупки топлива с&nbsp;топливной картой</h2>
                <div class="vacancies-us__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Бесплатное обслуживание</h3>
                                        <p class="vacancies-us__item-copy">Нет скрытых платежей и&nbsp;комиссий, в&nbsp;том
                                            числе плат за&nbsp;транзакции, штрафов и&nbsp;сервисных сборов.</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/fuel/cards/cards-pro.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Электронный документооборот</h3>
                                        <p class="vacancies-us__item-copy">Экономим время и&nbsp;деньги на&nbsp;доставке
                                            документов.</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-4.png" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Снижение финансовых рисков</h3>
                                        <p class="vacancies-us__item-copy">Заключайте договор напрямую с&nbsp;Tatneft, а&nbsp;не&nbsp;с&nbsp;дилером</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-3.png" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Скидка на&nbsp;товары и&nbsp;услуги</h3>
                                        <p class="vacancies-us__item-copy">На&nbsp;все сопутствующие товары&nbsp;— 10%.
                                            На&nbsp;услуги шиномонтажа, автомойки и&nbsp;автосервиса&nbsp;— 15%</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-2.png" alt="">
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

    <section class="fuel-business">
        <div class="fuel-business__inner">
            <h2 class="fuel-business__heading">Какому бизнесу будет полезен</h2>
            <div class="fuel-business__list">
                <article class="fuel-business__item">
                    <h3 class="fuel-business__item-heading">
                        <img
                            src="/local/templates/main/assets/img/fuel/adblue/business-construction.png" alt=""
                            loading="lazy"
                        > Строительным компаниям </h3>
                    <p class="fuel-business__item-copy">Компаниям, которые строят различные объекты в&nbsp;нашей стране,
                        с&nbsp;помощью собственного грузового автопарка и&nbsp;строительной техники</p>
                </article>
                <article class="fuel-business__item">
                    <h3 class="fuel-business__item-heading">
                        <img src="/local/templates/main/assets/img/fuel/adblue/business-logistics.png" alt=""
                             loading="lazy"> Грузоперевозчикам </h3>
                    <p class="fuel-business__item-copy">Индивидуальным предпринимателями транспортным компаниям
                        зарегистрированным на&nbsp;территории РФ.</p>
                </article>
                <article class="fuel-business__item">
                    <h3 class="fuel-business__item-heading">
                        <img src="/local/templates/main/assets/img/fuel/adblue/business-production.png" alt=""
                             loading="lazy"> Производителям товаров
                    </h3>
                    <p class="fuel-business__item-copy">Компаниям, которые производят различные товары в&nbsp;РФ и&nbsp;доставляют
                        их&nbsp;с&nbsp;помощью собственного грузового автопарка.</p>
                </article>
            </div>
        </div>
    </section>

    <section class="home-apply fuel-apply" id="apply">
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

                            <div class="form-apply-form-step" data-step="1" data-title="Заполните контактные данные">
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
                                class="form-apply-form-step" data-step="2" data-title="Заполните данные о&nbsp;компании"
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
                                        href="policy" target="_blank"
                                    >обработку персональных данных</a></p>
                            </div>

                            <div class="form-apply__back">
                                <span class="form-apply__back-link"><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="24"
                                        height="24"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                    >
                                        <path
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
        </div>
    </section>

    <div class="seo">
        <div class="seo__inner">
            <h2>SEO-текст</h2>
            <p>Топливная карта для юр&nbsp;лиц и&nbsp;ИП&nbsp;— современное безналичное средство расчета за&nbsp;топливо
                (бензин, ДТ, газ) и&nbsp;контроля Ваших денежных средств. Топливная карта (заправочная) представляет
                собой пластиковый носитель с&nbsp;чипом для оплаты горючего в&nbsp;сети приема АЗС. Каждая карта имеет
                свой уникальный номер, закрепленный за&nbsp;определенном эмитентом, и&nbsp;денежный баланс.</p>
        </div>

    </div>
@endsection
