@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <style>
        .pathBar__sep {
            background: url(/local/templates/main/assets/img/icons/pathbar-sep.svg) 0 0 no-repeat;
        }

        .folder-white:before {
            background: url(/local/templates/main/assets/img/folder-intro-top.svg) 0 100% no-repeat;
        }

        .main {
            --c-accent: var(--c-fuel);
            --c-btn-cta: var(--c-accent);
        }

        .btn-cta:after {
            background: url(/local/templates/main/assets/img/icons/btn-cta-arrow.svg) 0 0 no-repeat;
        }

        .folder-sm::before {
            background: url(/local/templates/main/assets/img/folder-top.svg) 0px 100% / auto 100% no-repeat;
        }

        .folder::before {
            background: url(/local/templates/main/assets/img/folder-top.svg) 0px 100% / auto 100% no-repeat;
        }

        .home-reviews__item-person:before {
            background: url(/local/templates/main/assets/img/home/review-line.svg) 0 0 no-repeat;
        }
    </style>
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">Топливные карты</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a href="fuel" class="pathBar__item _back">
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
                        <h1 class="content-hero__heading">Топливные карты для транспортных компаний</h1>
                        <p class="content-hero__copy">Используйте платформу для продвижения своей компании и&nbsp;товаров
                            без лишних затрат.</p>
                        <p class="content-hero__cta">
                            <a href="#apply" class="btn-cta">Сократить расходы</a>
                        </p>
                    </div>
                    <div class="content-hero__image">
                        <img src="/local/templates/main/assets/img/fuel/hero.png" alt="" loading="lazy">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="fuel-discount">
        <div class="fuel-discount__inner">
            <h2 class="fuel-discount__heading">Какие скидки дает <br>топливная карта</h2>
            <div class="fuel-discount__list">
                <article class="fuel-discount__item">
                    <h3 class="fuel-discount__item-heading">20%</h3>
                    <p class="fuel-discount__item-copy">На&nbsp;топливо от&nbsp;Tatneft</p>
                    <div class="fuel-discount__item-image">
                        <img src="/local/templates/main/assets/img/fuel/cards/20.jpg" alt=""></div>
                </article>
                <article class="fuel-discount__item">
                    <h3 class="fuel-discount__item-heading">15%</h3>
                    <p class="fuel-discount__item-copy">Услуги шиномонтажа, автомойкии автосервиса</p>
                    <div class="fuel-discount__item-image">
                        <img src="/local/templates/main/assets/img/fuel/cards/15.jpg" alt=""></div>
                </article>
                <article class="fuel-discount__item">
                    <h3 class="fuel-discount__item-heading">10%</h3>
                    <p class="fuel-discount__item-copy">Все сопутствующие товары, кроме табачной и&nbsp;молочной
                        продукции</p>
                    <div class="fuel-discount__item-image">
                        <img src="/local/templates/main/assets/img/fuel/cards/10.jpg" alt=""></div>
                </article>
            </div>
        </div>
    </div>

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
                                        <div class="vacancies-us__item-image">
                                            <img
                                                src="/local/templates/main/assets/img/fuel/cards/cards-pro.png"
                                                alt=""
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
                                                src="/local/templates/main/assets/img/vacancies/us-4.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Снижение финансовых рисков</h3>
                                        <p class="vacancies-us__item-copy">Заключайте договор напрямую с&nbsp;Tatneft, а&nbsp;не&nbsp;с&nbsp;дилером</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-3.png" alt=""
                                            ></div>
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
                                                src="/local/templates/main/assets/img/vacancies/us-2.png" alt=""
                                            ></div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-regions">
        <div class="fuel-regions__inner">
            <h2 class="fuel-regions__heading">Размер скидки в&nbsp;разных регионах</h2>
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
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-diesel.png" alt=""
                                > Дизель </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-methane.png" alt=""
                                > Метан </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-propane.png" alt=""
                                > Пропан </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-adblue.png" alt=""
                                > Adblue </h3>
                            <div class="fuel-price"><span>55.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="2">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-diesel.png" alt=""
                                > Дизель </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-methane.png" alt=""
                                > Метан </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-propane.png" alt=""
                                > Пропан </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-adblue.png" alt=""
                                > Adblue </h3>
                            <div class="fuel-price"><span>45.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
                <div class="tabs__item" data-rel="3">
                    <div class="fuel-regions__list">
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-diesel.png" alt=""
                                > Дизель </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-methane.png" alt=""
                                > Метан </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-propane.png" alt=""
                                > Пропан </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                        <article class="fuel-regions__item">
                            <h3 class="fuel-regions__item-heading">
                                <img
                                    src="/local/templates/main/assets/img/fuel/icon-adblue.png" alt=""
                                > Adblue </h3>
                            <div class="fuel-price"><span>35.53 ₽/л.</span></div>
                            <div class="fuel-price__old">65.53 ₽/л.</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="home-ecosystem fuel-ecosystem">
        <div class="home-ecosystem__inner">
            <h2 class="home-ecosystem__heading">Продукты, входящие <br>в&nbsp;экосистему</h2>
            <div class="home-ecosystem__body">
                <div class="home-ecosystem__list">
                    <article class="home-ecosystem__item _active">
                        <div class="home-ecosystem__item-heading">Безбумажный <br>документооборот</div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Вся бухгалтерская отчетность через ЭДО напрямую с&nbsp;компанией
                                Татнефть</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">Уведомления</div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность управление
                                логистикой и&nbsp;автопарком.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">Контроль затрат</div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность управление
                                логистикой и&nbsp;автопарком.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">Управление лимитами</div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность управление
                                логистикой и&nbsp;автопарком.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="/local/templates/main/assets/img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="suppliers-partners">
        <div class="suppliers-partners__inner">
            <h2 class="suppliers-partners__heading">Компании партнеры</h2>
            <ul class="suppliers-partners__list">
                <li><img
                        src="/local/templates/main/assets/img/suppliers/clients-dpd.svg" alt="" loading="lazy"
                    ></li>
                <li><img
                        src="/local/templates/main/assets/img/suppliers/clients-gazprom.svg"
                        alt=""
                        loading="lazy"
                    ></li>
                <li><img
                        src="/local/templates/main/assets/img/suppliers/clients-sber.svg" alt="" loading="lazy"
                    ></li>
                <li><img
                        src="/local/templates/main/assets/img/suppliers/clients-5.svg" alt="" loading="lazy"
                    ></li>
                <li><img
                        src="/local/templates/main/assets/img/suppliers/clients-dpd.svg" alt="" loading="lazy"
                    ></li>
            </ul>
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
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря
                            сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в развитие
                            автопарка.</p>
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
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря
                            сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в развитие
                            автопарка.</p>
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
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря
                            сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в развитие
                            автопарка.</p>
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
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel. Благодаря
                            сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в развитие
                            автопарка.</p>
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
                            <source
                                src="/local/templates/main/assets/video/home-intro-m.mp4" type="video/mp4"
                            >
                        </video>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
