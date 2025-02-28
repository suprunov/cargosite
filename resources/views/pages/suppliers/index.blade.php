@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">Поставщикам</span>
        </div>
    </div>

    <section class="content-hero suppliers__hero">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Присоединяйтесь к&nbsp;партнерской программе</h1>
                        <p class="content-hero__copy">Используйте платформу для продвижения своей компании и&nbsp;товаров
                            без лишних затрат.</p>
                        <p class="content-hero__cta">
                            <a href="#apply" class="btn-cta">Стать партнером</a>
                        </p>
                    </div>
                    <div class="content-hero__image"><img src="/local/templates/main/assets/img/suppliers/hero.jpg"
                                                          alt="" loading="lazy"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="suppliers-stats">
        <div class="suppliers-stats__inner">
            <div class="suppliers-stats__body">
                <div class="suppliers-stats__header">
                    <h2 class="suppliers-stats__header-heading">46&nbsp;155 компаний или&nbsp;405&nbsp;172 «сцепок»</h2>
                    <p class="suppliers-stats__header-copy">Целевая аудитория&nbsp;— предпринимателии малые транспортные
                        компаниис автопарком до&nbsp;15&nbsp;«сцепок».</p>
                </div>
                <ul class="suppliers-stats__chips">
                    <li class="suppliers-stats__chips-item">
                        <img src="/local/templates/main/assets/img/suppliers/users-auto.png" alt="" loading="lazy">
                        Начальники автоколонн
                    </li>
                    <li class="suppliers-stats__chips-item">
                        <img src="/local/templates/main/assets/img/suppliers/users-top.png" alt="" loading="lazy">
                        Руководители компаний
                    </li>
                    <li class="suppliers-stats__chips-item">
                        <img src="/local/templates/main/assets/img/suppliers/users-logistics.png" alt=""
                             loading="lazy"> Логисты
                    </li>
                    <li class="suppliers-stats__chips-item">
                        <img src="/local/templates/main/assets/img/suppliers/users-drivers.png" alt=""
                             loading="lazy"> Водители
                    </li>
                    <li class="suppliers-stats__chips-item">
                        <img src="/local/templates/main/assets/img/suppliers/users-accountants.png" alt=""
                             loading="lazy"> Бухгалтеры
                    </li>
                    <li class="suppliers-stats__chips-item">
                        <img src="/local/templates/main/assets/img/suppliers/users-mechanics.png" alt=""
                             loading="lazy"> Механики
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section class="suppliers-turnover">
        <div class="suppliers-turnover__inner">
            <div class="suppliers-turnover__body">
                <h2 class="suppliers-turnover__heading">Ежемесячный оборот на&nbsp;платформе</h2>

                <div class="suppliers-turnover__history">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="suppliers-turnover__history-item">
                                    <div class="suppliers-turnover__history-item-sum" style="min-height: 88px;">
                                        <strong>740</strong> МЛРД. ₽
                                    </div>
                                    <div class="suppliers-turnover__history-item-month">Апрель</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="suppliers-turnover__history-item">
                                    <div class="suppliers-turnover__history-item-sum" style="min-height: 100px;">
                                        <strong>808</strong> МЛН. USD
                                    </div>
                                    <div class="suppliers-turnover__history-item-month">Май</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="suppliers-turnover__history-item">
                                    <div class="suppliers-turnover__history-item-sum" style="min-height: 112px;">
                                        <strong>1 019</strong> МЛН. USD
                                    </div>
                                    <div class="suppliers-turnover__history-item-month">Июнь</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="suppliers-turnover__history-item">
                                    <div class="suppliers-turnover__history-item-sum" style="min-height: 124px;">
                                        <strong>1 333</strong> МЛН. USD
                                    </div>
                                    <div class="suppliers-turnover__history-item-month">Июль</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="suppliers-turnover__history-item">
                                    <div class="suppliers-turnover__history-item-sum" style="min-height: 136px;">
                                        <strong>1 680</strong> МЛН. USD
                                    </div>
                                    <div class="suppliers-turnover__history-item-month">Август</div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="suppliers-turnover__history-item">
                                    <div class="suppliers-turnover__history-item-sum" style="min-height: 148px;">
                                        <strong>2 000</strong> МЛН. USD
                                    </div>
                                    <div class="suppliers-turnover__history-item-month">Сентябрь</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="suppliers-customers">
        <div class="suppliers-customers__inner">
            <div class="suppliers-customers__box">
                <div class="suppliers-customers__body">
                    <h2 class="suppliers-customers__heading">Что покупают пользователи</h2>
                    <ul class="suppliers-customers__list">
                        <li>
                            <span class="suppliers-customers__list-color" style="background-color: #EA6024;"></span>
                            <span class="suppliers-customers__list-name">Полуприцепы</span>
                            <span class="suppliers-customers__list-percentage">34%</span>
                        </li>
                        <li>
                            <span class="suppliers-customers__list-color" style="background-color: #944B96;"></span>
                            <span class="suppliers-customers__list-name">Придорожные сервисы и&nbsp;стоянки</span> <span
                                class="suppliers-customers__list-percentage"
                            >34%</span>
                        </li>
                        <li>
                            <span class="suppliers-customers__list-color" style="background-color: #FFA041;"></span>
                            <span class="suppliers-customers__list-name">Тягачи</span>
                            <span class="suppliers-customers__list-percentage">34%</span>
                        </li>
                        <li>
                            <span class="suppliers-customers__list-color" style="background-color: #5F78DC;"></span>
                            <span class="suppliers-customers__list-name">Дизельное топливо</span>
                            <span class="suppliers-customers__list-percentage">34%</span>
                        </li>
                        <li>
                            <span class="suppliers-customers__list-color" style="background-color: #20AD83;"></span>
                            <span class="suppliers-customers__list-name">Страхование</span>
                            <span class="suppliers-customers__list-percentage">34%</span>
                        </li>
                        <li>
                            <span class="suppliers-customers__list-color" style="background-color: #00A6E2;"></span>
                            <span class="suppliers-customers__list-name">Лизинг</span>
                            <span class="suppliers-customers__list-percentage">34%</span>
                        </li>
                    </ul>
                </div>
                <div class="suppliers-customers__graph">
                    <img src="/local/templates/main/assets/img/suppliers/graph.svg" alt="">
                    <div class="suppliers-customers__graph-copy">
                        <strong>12 433 353 ₽</strong> Затраты за&nbsp;год
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="suppliers-partners">
        <div class="suppliers-partners__inner">
            <h2 class="suppliers-partners__heading">Уже стали партнерами</h2>
            <ul class="suppliers-partners__list">
                <li><img src="/local/templates/main/assets/img/suppliers/clients-dpd.svg" alt="" loading="lazy">
                </li>
                <li><img src="/local/templates/main/assets/img/suppliers/clients-gazprom.svg" alt="" loading="lazy">
                </li>
                <li><img src="/local/templates/main/assets/img/suppliers/clients-sber.svg" alt="" loading="lazy">
                </li>
                <li><img src="/local/templates/main/assets/img/suppliers/clients-5.svg" alt="" loading="lazy"></li>
                <li><img src="/local/templates/main/assets/img/suppliers/clients-dpd.svg" alt="" loading="lazy">
                </li>
            </ul>
        </div>
    </section>

    <section class="suppliers-approach">
        <div class="suppliers-approach__inner">
            <h2 class="suppliers-approach__heading">Наш подход</h2>
            <div class="suppliers-approach__list">
                <article class="suppliers-approach__item">
                    <div class="suppliers-approach__item-image"><img
                            src="/local/templates/main/assets/img/suppliers/approach-1.jpg" loading="lazy"
                            alt=""></div>
                    <h4 class="suppliers-approach__item-heading">Размещайтесь на&nbsp;площадке с&nbsp;лояльной
                        аудиторией</h4>
                </article>
                <article class="suppliers-approach__item">
                    <div class="suppliers-approach__item-image"><img
                            src="/local/templates/main/assets/img/suppliers/approach-2.jpg" loading="lazy"
                            alt=""
                        ></div>
                    <h4 class="suppliers-approach__item-heading">Получайте отзывы на&nbsp;ваши товары в&nbsp;личном
                        кабинете для улучшения продуктов</h4>
                </article>
            </div>
        </div>
    </section>

    <section class="home-apply" id="apply">
        <div class="folder">
            <div class="folder__body">
                <div class="home-apply__body">
                    <form action="#" class="form-apply form form_required">
                        <h2 class="form-apply__heading">Получить доступ к&nbsp;агрегированной базе клиентов</h2>
                        <div class="form-apply__body">
                            <div class="form__item">
                                <input
                                    data-code="name"
                                    type="text"
                                    class="form__input _text id=" one-step-apply-form""
                                placeholder="Фамилия, имя и отчество"
                                data-message="Фамилия, имя и отчество"
                                required
                                >
                            </div>
                            <div class="form__item">
                                <input
                                    type="tel"
                                    data-code="phone"
                                    class="form__input _tel id=" one-step-apply-form""
                                placeholder="Мобильный телефон"
                                data-message="Мобильный телефон"
                                required
                                >
                            </div>
                            <div class="form__submit">
                                <button class="btn-cta action-form-btn" id="one-step-apply-form" type="button">Получить
                                </button>
                                <p class="form__submit-agreement">Нажимая на&nbsp;кнопку «Получить», вы&nbsp;принимаете
                                    согласие
                                    на&nbsp;
                                    <a href="policy" target="_blank">обработку персональных данных</a>
                                </p>
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
@endsection
