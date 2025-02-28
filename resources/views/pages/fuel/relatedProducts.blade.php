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
            <span class="pathBar__item _active">сопутствующие товары</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a
                href="fuel" class="pathBar__item _back"
            ><img src="/local/templates/main/assets/img/icons/pathbar-back.svg" inline alt="">Назад</a>
        </div>
    </div>


    <section class="content-hero fuel-related-products__hero">
        <div class="folder-white">
            <div class="folder-white__body">
                <div class="content-hero__inner">
                    <div class="content-hero__body">
                        <h1 class="content-hero__heading">Оплачивайте товары на АЗС с&nbsp;единого счета ППР</h1>
                        <p class="content-hero__copy">На&nbsp;АЗС Лукойл и&nbsp;Росфнеть можно с&nbsp;того&nbsp;же
                            единого счета&nbsp;— собирать чеки больше не&nbsp;придется.</p>
                        <p class="content-hero__cta">
                            <a href="#apply" class="btn-cta">Сократить расходы</a>
                        </p>
                    </div>
                    <div class="content-hero__image"><img
                            src="/local/templates/main/assets/img/fuel/related-products/hero.jpg"
                            alt=""
                            loading="lazy"
                        ></div>
                </div>
            </div>
        </div>
    </section>

    <section class="fuel-categories">
        <div class="fuel-categories__inner">
            <h2 class="fuel-categories__heading">Категории товаров</h2>
            <div class="fuel-categories__list">
                <article class="fuel-categories__item">
                    <h3 class="fuel-categories__item-heading">Кофе и&nbsp;горячие закуски</h3>
                    <p class="fuel-categories__item-image"><img
                            src="/local/templates/main/assets/img/fuel/related-products/cat-1.jpg"
                            alt=""
                            loading="lazy"
                        ></p>
                </article>
                <article class="fuel-categories__item">
                    <h3 class="fuel-categories__item-heading">Моторные масла и&nbsp;автохимия</h3>
                    <p class="fuel-categories__item-image"><img
                            src="/local/templates/main/assets/img/fuel/related-products/cat-2.jpg"
                            alt=""
                            loading="lazy"
                        ></p>
                </article>
                <article class="fuel-categories__item">
                    <h3 class="fuel-categories__item-heading">Напитки и&nbsp;снеки</h3>
                    <p class="fuel-categories__item-image"><img
                            src="/local/templates/main/assets/img/fuel/related-products/cat-3.jpg"
                            alt=""
                            loading="lazy"
                        ></p>
                </article>
                <article class="fuel-categories__item">
                    <h3 class="fuel-categories__item-heading">Хозяйственные товары</h3>
                    <p class="fuel-categories__item-image"><img
                            src="/local/templates/main/assets/img/fuel/related-products/cat-4.jpg"
                            alt=""
                            loading="lazy"
                        ></p>
                </article>
            </div>
        </div>
    </section>

    <section class="vacancies-us fuel-pros fuel-related-services__pros">
        <div class="vacancies-us__inner">
            <div class="vacancies-us__body">
                <h2 class="vacancies-us__heading">Почему это удобно</h2>
                <div class="vacancies-us__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Лимит на&nbsp;траты</h3>
                                        <p class="vacancies-us__item-copy">Установите отдельный рублевый лимит, чтобы
                                            избежать непредвиденных трат</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="/local/templates/main/assets/img/vacancies/us-3.png" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Контролируйте расходы водителя</h3>
                                        <p class="vacancies-us__item-copy">Информация о&nbsp;приобретенных товарах будет
                                            в&nbsp;отчетных документах</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="/local/templates/main/assets/img/vacancies/us-2.png" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Возмещайте НДС</h3>
                                        <p class="vacancies-us__item-copy">Мы&nbsp;предоставляем полный пакет
                                            документов, чтобы вы&nbsp;могли возместить НДС</p>
                                        <div class="vacancies-us__item-image">
                                            <img src="/local/templates/main/assets/img/vacancies/us-4.png" alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Экономьте время</h3>
                                        <p class="vacancies-us__item-copy">Мы&nbsp;предоставляем полный пакет
                                            документов, чтобы вы&nbsp;могли возместить НДС</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/fuel/cards/cards-pro.png"
                                                alt=""
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
        </div>
    </section>

    <section class="home-faq">
        <div class="home-faq__inner">
            <div class="home-faq__body">
                <h2 class="home-faq__heading">Ответы <br>на&nbsp;вопросы</h2>
            </div>
            <div class="home-faq__list">
                <div class="accordeon">
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Смогу&nbsp;ли я&nbsp;самостоятельно отказаться от&nbsp;экосистемы?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте
                                <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами в&nbsp;рабочие
                                часы.
                            </p>
                        </div>
                    </article>
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Как начать использовать экосистему?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте
                                <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами в&nbsp;рабочие
                                часы.
                            </p>
                        </div>
                    </article>
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Могу&nbsp;я стать партнером компании?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте
                                <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами в&nbsp;рабочие
                                часы.
                            </p>
                        </div>
                    </article>
                    <article class="accordeon__item">
                        <div class="accordeon__heading">
                            <h4>Как мне рассчитать экономию?</h4>
                        </div>
                        <div class="accordeon__body">
                            <p>Оставьте
                                <a href="#apply">заявку на&nbsp;подключение</a>, специалист свяжется с&nbsp;вами в&nbsp;рабочие
                                часы.
                            </p>
                        </div>
                    </article>
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
            <div class="seo__discount">
                <div class="seo__discount-item">
                    <h3>0%</h3>
                    <p>За&nbsp;счет скидки на&nbsp;дизельное топливо и&nbsp;газ в&nbsp;сети АЗС «Татнефть» и&nbsp;Neste
                        по&nbsp;всей территории РФ</p>
                </div>
                <div class="seo__discount-item">
                    <h3>20%</h3>
                    <p>За&nbsp;счет возмещения НДС*если компания использует общую систему налогообложения</p>
                </div>
                <div class="seo__discount-item">
                    <h3>4%</h3>
                    <p>Экономия за&nbsp;счет оптимизации маршрутов</p>
                </div>
            </div>
        </div>
    </div>
@endsection
