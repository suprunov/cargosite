@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <section class="home-intro">
        <div class="home-intro__inner">
            <video class="home-intro__back _desktop" muted autoplay loop playsinline inline>
                <source src="video/home-intro.mp4" type="video/mp4">
            </video>
            <video class="home-intro__back _mobile" muted autoplay loop playsinline inline>
                <source src="video/home-intro-m.mp4" type="video/mp4">
            </video>
            <div class="home-intro__folder">
                <div class="home-intro__folder-body">
                    <h1 class="home-intro__heading">Сargonomica&nbsp;— экосистема, cнижающая себестоимость
                        грузоперевозок</h1>
                    <p class="home-intro__copy">для тех, кто думает о&nbsp;будущем своего бизнеса уже сегодня.</p>
                    <p class="home-intro__cta">
                        <a href="#apply" class="btn-cta">Снизить затраты</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="home-promo">
        <div class="home-promo__inner">
            <div class="home-promo__body">
                <h2 class="home-promo__heading">Высокая конкуренция убивает тариф на&nbsp;перевозку, и, <strong>чтобы
                        обеспечить прибыль в&nbsp;будущем, надо работать над эффективностью сейчас</strong></h2>
            </div>
        </div>
    </section>
    <section class="home-services">
        <div class="folder">
            <div class="folder__body">
                <h2 class="home-services__heading">Чем Cargonomica может <br>вам помочь</h2>
                <div class="tabs _js-tabs">
                    <div class="tabs__items">
                        <div class="tabs__items-item _active" data-rel="management">Руководители</div>
                        <div class="tabs__items-item" data-rel="logistics">Логисты</div>
                        <div class="tabs__items-item" data-rel="motorcades">Начальники автоколонн</div>
                        <div class="tabs__items-item" data-rel="mechanics">Механики</div>
                    </div>
                    <div class="tabs__item" data-rel="management">
                        <div class="home-services__list">
                            <div class="home-services__list-item">
                                <article class="box-bottom">
                                    <div class="box-bottom__back">
                                        <div class="box-bottom__back-bottom"></div>
                                    </div>
                                    <div class="box-bottom__body home-services__item">
                                        <div class="home-services__item-top">
                                            <h3 class="home-services__item-heading"><img
                                                    src="img/home/services-1.png" alt="" loading="lazy">Собственные
                                                сервисы</h3>
                                            <p class="home-services__item-copy">В&nbsp;состав Сargonomica входят
                                                продукты для грузоперевозчиков: Страхование, Мониторнинг и&nbsp;покупка
                                                техники. </p>
                                        </div>
                                        <div class="home-services__item-bottom">
                                            <p class="home-services__item-stats"><strong>
                                                    <nobr>5-18%</nobr>
                                                </strong> от&nbsp;постоянных затрат
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
                                                    src="img/home/services-2.png" alt="" loading="lazy">Автоматизация
                                                автопарка</h3>
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
                            <div class="home-services__list-item _wide">
                                <article class="box-bottom">
                                    <div class="box-bottom__back">
                                        <div class="box-bottom__back-bottom"></div>
                                    </div>
                                    <div class="box-bottom__body home-services__item">
                                        <div class="home-services__item-top">
                                            <h3 class="home-services__item-heading"><img
                                                    src="img/home/services-3.png" alt="" loading="lazy">Бесплатная
                                                система мониторинга </h3>
                                            <p class="home-services__item-copy">Управление автопарком и&nbsp;логистикой
                                                происходит в&nbsp;одном приложении</p>
                                            <p class="home-services__item-cta"><a href="#apply" class="btn-cta">Снизить
                                                    затраты</a></p>
                                        </div>
                                        <div class="home-services__item-bottom">
                                            <p class="home-services__item-stats"><strong>&ndash;1500&nbsp;₽</strong>
                                                за&nbsp;1&nbsp;грузовик</p>
                                            <p class="home-services__item-cta"><a href="#apply" class="btn-cta">Снизить
                                                    затраты</a></p>
                                        </div>
                                        <div class="home-services__item-image">
                                            <img src="img/home/monitoring-map.png"
                                                 class="home-services__item-image-back" alt="">
                                            <div class="home-services__item-image-front"><img
                                                    src="img/home/monitoring-screen.png" class="" alt=""></div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__item" data-rel="logistics">
                        <div class="home-services__list">
                            <div class="home-services__list-item">
                                <article class="box-bottom">
                                    <div class="box-bottom__back">
                                        <div class="box-bottom__back-bottom"></div>
                                    </div>
                                    <div class="box-bottom__body home-services__item">
                                        <div class="home-services__item-top">
                                            <h3 class="home-services__item-heading"><img
                                                    src="img/home/services-1.png" alt="" loading="lazy">Собственные
                                                сервисы</h3>
                                            <p class="home-services__item-copy">В&nbsp;состав Сargonomica входят
                                                продукты для грузоперевозчиков: Страхование, Мониторнинг и&nbsp;покупка
                                                техники. </p>
                                        </div>
                                        <div class="home-services__item-bottom">
                                            <p class="home-services__item-stats"><strong>
                                                    <nobr>5-18%</nobr>
                                                </strong> от&nbsp;постоянных затрат
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
                                                    src="img/home/services-2.png" alt="" loading="lazy">Автоматизация
                                                автопарка</h3>
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
                        </div>
                    </div>
                    <div class="tabs__item" data-rel="motorcades">
                        <div class="home-services__list">
                            <div class="home-services__list-item">
                                <article class="box-bottom">
                                    <div class="box-bottom__back">
                                        <div class="box-bottom__back-bottom"></div>
                                    </div>
                                    <div class="box-bottom__body home-services__item">
                                        <div class="home-services__item-top">
                                            <h3 class="home-services__item-heading"><img
                                                    src="img/home/services-2.png" alt="" loading="lazy">Автоматизация
                                                автопарка</h3>
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
                                                    src="img/home/services-1.png" alt="" loading="lazy">Собственные
                                                сервисы</h3>
                                            <p class="home-services__item-copy">В&nbsp;состав Сargonomica входят
                                                продукты для грузоперевозчиков: Страхование, Мониторнинг и&nbsp;покупка
                                                техники. </p>
                                        </div>
                                        <div class="home-services__item-bottom">
                                            <p class="home-services__item-stats"><strong>
                                                    <nobr>5-18%</nobr>
                                                </strong> от&nbsp;постоянных затрат
                                            </p>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="tabs__item" data-rel="mechanics">
                        <div class="home-services__list">
                            <div class="home-services__list-item _wide">
                                <article class="box-bottom">
                                    <div class="box-bottom__back">
                                        <div class="box-bottom__back-bottom"></div>
                                    </div>
                                    <div class="box-bottom__body home-services__item">
                                        <div class="home-services__item-top">
                                            <h3 class="home-services__item-heading"><img
                                                    src="img/home/services-3.png" alt="" loading="lazy">Бесплатная
                                                система мониторинга </h3>
                                            <p class="home-services__item-copy">Управление автопарком и&nbsp;логистикой
                                                происходит в&nbsp;одном приложении</p>
                                            <p class="home-services__item-cta"><a href="#apply" class="btn-cta">Снизить
                                                    затраты</a></p>
                                        </div>
                                        <div class="home-services__item-bottom">
                                            <p class="home-services__item-stats"><strong>&ndash;1500&nbsp;₽</strong>
                                                за&nbsp;1&nbsp;грузовик</p>
                                            <p class="home-services__item-cta"><a href="#apply" class="btn-cta">Снизить
                                                    затраты</a></p>
                                        </div>
                                        <div class="home-services__item-image">
                                            <img src="img/home/monitoring-map.png"
                                                 class="home-services__item-image-back" alt="">
                                            <div class="home-services__item-image-front"><img
                                                    src="img/home/monitoring-screen.png" class="" alt=""></div>
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
    <section class="home-ecosystem home-ecosystem__home">
        <div class="home-ecosystem__inner">
            <h2 class="home-ecosystem__heading">Продукты, входящие <br>в&nbsp;экосистему</h2>
            <div class="home-ecosystem__body">
                <div class="home-ecosystem__list">
                    <article class="home-ecosystem__item _active">
                        <div class="home-ecosystem__item-heading">
                            <img src="img/about/products-logo-5.svg" alt="">
                            Cargo.Journal
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность
                                управление логистикой и&nbsp;автопарком.</p>
                            <p class="home-ecosystem__item-link"><a href="#" target="_blank">Перейти
                                    к&nbsp;продукту</a></p>
                            <figure class="home-ecosystem__item-image">
                                <img src="img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">
                            <img src="img/about/products-logo-4.svg" alt="">
                            Cargo.Insurance
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность
                                управление логистикой и&nbsp;автопарком.</p>
                            <p class="home-ecosystem__item-link"><a href="#" target="_blank">Перейти
                                    к&nbsp;продукту</a></p>
                            <figure class="home-ecosystem__item-image">
                                <img src="img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">
                            <img src="img/about/products-logo-3.svg" alt="">
                            Cargo.Fuel
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность
                                управление логистикой и&nbsp;автопарком.</p>
                            <p class="home-ecosystem__item-link"><a href="#" target="_blank">Перейти
                                    к&nbsp;продукту</a></p>
                            <figure class="home-ecosystem__item-image">
                                <img src="img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                    <article class="home-ecosystem__item">
                        <div class="home-ecosystem__item-heading">
                            <img src="img/about/products-logo-8.svg" alt="">
                            В разработке
                        </div>
                        <div class="home-ecosystem__item-body">
                            <p class="home-ecosystem__item-copy">Медиа о&nbsp;том, как повысить эффективность
                                управление логистикой и&nbsp;автопарком.</p>
                            <figure class="home-ecosystem__item-image">
                                <img src="img/home/eco-journal.png" alt="">
                            </figure>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="home-reviews">
        <div class="home-reviews__inner">
            <h2 class="home-reviews__heading">Для всех, кто стремится<br> развивать бизнес</h2>
            <div class="home-reviews__badges">
                <img src="img/home/badge-ya.svg" alt="Рейтинг Яндекса">
                <img src="img/home/badge-flamp.svg" alt="Рейтинг Флампа">
            </div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <article class="home-reviews__item">
                        <div class="home-reviews__item-person">
                            <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24"><path stroke="#A7ADC8" stroke-width="1.6"
                                                              d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172" /></svg></span>
                        </p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
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
                            <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24"><path stroke="#A7ADC8" stroke-width="1.6"
                                                              d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172" /></svg></span>
                        </p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
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
                            <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24"><path stroke="#A7ADC8" stroke-width="1.6"
                                                              d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172" /></svg></span>
                        </p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
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
                            <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
                            <h4 class="home-reviews__item-person-name">Виктор Лиев</h4>
                            <p class="home-reviews__item-person-pos">Логист CDEK</p>
                        </div>
                        <p class="home-reviews__item-copy">На&nbsp;постоянной основе используем Cargo.Fuel.
                            Благодаря сервису, сократили расходы на&nbsp;бензин&nbsp;и смогли деньги инвестировать&nbsp;в
                            развитие автопарка.</p>
                        <p class="home-reviews__item-cta"><span>Показать полностью <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24"><path stroke="#A7ADC8" stroke-width="1.6"
                                                              d="m10.243 16.243 4.172-4.172a.1.1 0 0 0 0-.142l-4.172-4.172" /></svg></span>
                        </p>
                        <div class="popup__hidden">
                            <div class="home-reviews__full">
                                <div class="home-reviews__item-person">
                                    <img src="img/home/review.jpg" alt="" class="home-reviews__item-person-image">
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
    <section class="home-faq">
        <div class="home-faq__inner">
            <div class="home-faq__body">
                <h2 class="home-faq__heading">Ответы <br>на&nbsp;вопросы</h2>
                <p class="home-faq__copy">Если не&nbsp;нашли ответ на&nbsp;интересующий вопрос, напишите в&nbsp;службу
                    поддержки.</p>
                <p class="home-faq__cta">
                    <button class="btn _js-faq-ask">Задать вопрос</button>
                </p>
                <div class="popup__hidden">
                    <div class="home-faq__ask">
                        <form action="#" class="form form_required home-faq__form">
                            <h2 class="home-faq__form-heading">Задать вопрос</h2>
                            <p class="home-faq__form-copy">Менеджер пришлет ответ на&nbsp;указанную почту</p>
                            <div class="form__item">
                                <input type="text" class="form__input _text" placeholder="Фамилия, имя и отчество"
                                       data-message="Введите фамилию и имя" required>
                            </div>
                            <div class="form__item">
                                <input type="email" class="form__input _email" placeholder="Email"
                                       data-message="Введите Email" required>
                            </div>
                            <div class="form__item">
                                    <textarea class="form__input" placeholder="Задайте свой вопрос"
                                              data-message="Задайте свой вопрос" required></textarea>
                            </div>
                            <div class="form__submit">
                                <button class="btn-cta" type="submit">Отправить</button>
                                <p class="form__submit-agreement">Нажимая на&nbsp;кнопку «Отправить», вы&nbsp;принимаете
                                    согласие на&nbsp;<a href="policy.html" target="_blank">обработку персональных
                                        данных</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="home-faq__list">
                <div class="accordeon">
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Смогу&nbsp;ли я&nbsp;самостоятельно отказаться от&nbsp;экосистемы?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами
                                в&nbsp;рабочие часы.</p>
                        </div>
                    </article>
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Как начать использовать экосистему?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами
                                в&nbsp;рабочие часы.</p>
                        </div>
                    </article>
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Могу&nbsp;я стать партнером компании?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами
                                в&nbsp;рабочие часы.</p>
                        </div>
                    </article>
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Как мне рассчитать экономию?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами
                                в&nbsp;рабочие часы.</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="home-apply" id="apply">
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
                            <div class="form-apply-form-step" data-step="1"
                                 data-title="Заполните контактные данные">
                                <div class="form__item">
                                    <input type="text" class="form__input _text"
                                           placeholder="Фамилия, имя и отчество"
                                           data-message="Введите фамилию и имя" required>
                                </div>
                                <div class="form__item">
                                    <input type="tel" class="form__input _tel" placeholder="Мобильный телефон"
                                           data-message="Введите номер телефона" required>
                                </div>
                            </div>
                            <div class="form-apply-form-step" data-step="2"
                                 data-title="Заполните данные о&nbsp;компании">
                                <div class="form__item">
                                    <input type="text" class="form__input" placeholder="Название компании"
                                           data-message="Введите название компании" required>
                                </div>
                                <div class="form__item">
                                    <input type="tel" class="form__input _digits" placeholder="ИНН"
                                           data-message="Введите ИНН" required>
                                </div>
                            </div>
                            <div class="form__submit">
                                <button class="btn-cta" type="submit">Продолжить</button>
                                <p class="form__submit-agreement">Нажимая на&nbsp;кнопку «<span
                                        class="form__submit-agreement-btn">Продолжить</span>», вы&nbsp;принимаете
                                    согласие на&nbsp;<a href="policy.html" target="_blank">обработку персональных
                                        данных</a></p>
                            </div>
                            <div class="form-apply__back">
                                    <span class="form-apply__back-link"><svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" fill="none"
                                                                             viewBox="0 0 24 24"><path fill="#20212B"
                                                                                                       fill-rule="evenodd"
                                                                                                       d="M13.09 5.777 7.527 11.34a.933.933 0 0 0 0 1.32l5.563 5.563 1.131-1.132L9.131 12l5.09-5.091-1.131-1.132Z"
                                                                                                       clip-rule="evenodd" /></svg>Назад</span>
                            </div>
                        </div>
                    </form>
                    <div class="home-apply__image">
                        <video muted autoplay loop playsinline inline>
                            <source src="video/home-intro-m.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
