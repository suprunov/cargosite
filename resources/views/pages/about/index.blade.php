@extends('layouts.base')
@section('title', 'О компании')
@section('content')
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="home.html" class="pathBar__item">главная</a>
            <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">о компании</span>
        </div>
    </div>
    <section class="about-hero">
        <div class="folder-bg">
            <div class="folder-bg__back">
                <video muted autoplay loop playsinline inline>
                    <source src="video/about-hero.mp4" type="video/mp4">
                </video>
            </div>
            <div class="folder-bg__body">
                <h1 class="about-hero__heading">Оптимизация сегодня для&nbsp;роста прибыли навсегда</h1>
                <div class="about-hero__stats">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="about-hero__stats-item">
                                    <h3 class="about-hero__stats-heading">2&nbsp;149</h3>
                                    <p class="about-hero__stats-copy">Транспортных компаний ежедневно пользуются
                                        нашими продуктами</p>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="about-hero__stats-item">
                                    <h3 class="about-hero__stats-heading">13&nbsp;676</h3>
                                    <p class="about-hero__stats-copy">Сцепок подключено к&nbsp;экосистеме</p>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="about-hero__stats-item">
                                    <h3 class="about-hero__stats-heading">74</h3>
                                    <p class="about-hero__stats-copy">Сотрудников в&nbsp;команде Cargonomica</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-approach">
        <div class="about-approach__inner">
            <h2 class="about-approach__heading">Наш подход</h2>
            <div class="about-approach__list">
                <div class="about-approach__item">
                    <div class="about-approach__item-image"><img src="img/about/approach-1.png" loading="lazy"
                                                                 alt=""></div>
                    <h4 class="about-approach__item-copy">Продукты экосистемы создаются специально только для
                        транспортных компаний с&nbsp;учетом их&nbsp;потребностей и&nbsp;задач.</h4>
                </div>
                <div class="about-approach__item">
                    <div class="about-approach__item-image"><img src="img/about/approach-2.png" loading="lazy"
                                                                 alt=""></div>
                    <h4 class="about-approach__item-copy">Создаем только те&nbsp;продукты, которые помогают снижать
                        стоимость грузоперевозок.</h4>
                </div>
                <div class="about-approach__item">
                    <div class="about-approach__item-image"><img src="img/about/approach-3.png" loading="lazy"
                                                                 alt=""></div>
                    <h4 class="about-approach__item-copy">Каждая функция приложения помогает экономить. Скидки между
                        собой суммируются для получения максимальной выгоды от&nbsp;продукта.</h4>
                </div>
            </div>
        </div>
    </section>
    <section class="about-history">
        <div class="about-history__inner">
            <div class="about-history__body">
                <h2 class="about-history__heading">История</h2>
                <div class="swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <article class="about-history__item">
                                <div class="about-history__item-image"><img src="img/about/history-1.jpg"
                                                                            loading="lazy" alt=""></div>
                                <div class="about-history__item-body">
                                    <h3 class="about-history__item-year">2007</h3>
                                    <p class="about-history__item-copy">
                                        Год основания компании; <br>
                                        кредитно-лизинговый брокер; <br>
                                        алб-центр лизинг;
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="about-history__item">
                                <div class="about-history__item-image"><img src="img/about/history-2.jpg"
                                                                            loading="lazy" alt=""></div>
                                <div class="about-history__item-body">
                                    <h3 class="about-history__item-year">2010</h3>
                                    <p class="about-history__item-copy">
                                        Партнерство с&nbsp;euro leasing;<br>
                                        GMHB
                                    </p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="about-history__item">
                                <div class="about-history__item-image"><img src="img/about/history-3.jpg"
                                                                            loading="lazy" alt=""></div>
                                <div class="about-history__item-body">
                                    <h3 class="about-history__item-year">2014</h3>
                                    <p class="about-history__item-copy">Новый бренд «nova-truck» по&nbsp;продаже
                                        коммерческой техники с&nbsp;пробегом</p>
                                </div>
                            </article>
                        </div>
                        <div class="swiper-slide">
                            <article class="about-history__item">
                                <div class="about-history__item-image"><img src="img/about/history-4.jpg"
                                                                            loading="lazy" alt=""></div>
                                <div class="about-history__item-body">
                                    <h3 class="about-history__item-year">2017</h3>
                                    <p class="about-history__item-copy">Старт продаж новых полуприцепов</p>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about-products">
        <div class="about-products__inner">
            <h2 class="about-products__heading">Продукты, входящие в&nbsp;экосистему Cargonomica</h2>
            <div class="about-products__list">
                <article class="about-products__item">
                    <div class="about-products__item-image"><img src="img/about/products-1.jpg" loading="lazy"
                                                                 alt=""></div>
                    <div class="about-products__item-body">
                        <div class="about-products__item-logo"><img src="img/about/products-logo-1.svg"
                                                                    loading="lazy" alt=""></div>
                        <h3 class="about-products__item-heading">Карго лизинг</h3>
                        <p class="about-products__item-copy">Аренда и&nbsp;лизинг новых полуприцепов на&nbsp;20%
                            дешевле и&nbsp;в&nbsp;7&nbsp;раз быстрее лизингла.</p>
                    </div>
                    <p class="about-products__item-cta"><a href="#" class="btn">Перейти в&nbsp;сервис</a></p>
                </article>
                <article class="about-products__item">
                    <div class="about-products__item-image"><img src="img/about/products-2.jpg" loading="lazy"
                                                                 alt=""></div>
                    <div class="about-products__item-body">
                        <div class="about-products__item-logo"><img src="img/about/products-logo-2.svg"
                                                                    loading="lazy" alt=""></div>
                        <h3 class="about-products__item-heading">Карго логистика</h3>
                        <p class="about-products__item-copy">Платформа по&nbsp;онлайн-продаже тягачейи полуприцепов
                            с&nbsp;пробегом.</p>
                    </div>
                    <p class="about-products__item-cta"><span class="btn _disabled">Перейти в&nbsp;сервис</span></p>
                </article>
                <article class="about-products__item">
                    <div class="about-products__item-image"><img src="img/about/products-3.jpg" loading="lazy"
                                                                 alt=""></div>
                    <div class="about-products__item-body">
                        <div class="about-products__item-logo"><img src="img/about/products-logo-3.svg"
                                                                    loading="lazy" alt=""></div>
                        <h3 class="about-products__item-heading">Карго топливо</h3>
                        <p class="about-products__item-copy">Сервис по&nbsp;продаже топлива напрямую от&nbsp;нефтянной
                            компании и&nbsp;построению оптимальных маршрутов.</p>
                    </div>
                    <p class="about-products__item-cta"><a href="#" class="btn">Перейти в&nbsp;сервис</a></p>
                </article>
                <article class="about-products__item">
                    <div class="about-products__item-image"><img src="img/about/products-4.jpg" loading="lazy"
                                                                 alt=""></div>
                    <div class="about-products__item-body">
                        <div class="about-products__item-logo"><img src="img/about/products-logo-4.svg"
                                                                    loading="lazy" alt=""></div>
                        <h3 class="about-products__item-heading">Карго страхование</h3>
                        <p class="about-products__item-copy">Коробочное страхование транспортных компаний по&nbsp;подписке.</p>
                    </div>
                    <p class="about-products__item-cta"><a href="#" class="btn">Перейти в&nbsp;сервис</a></p>
                </article>
                <article class="about-products__item">
                    <div class="about-products__item-image"><img src="img/about/products-5.jpg" loading="lazy"
                                                                 alt=""></div>
                    <div class="about-products__item-body">
                        <div class="about-products__item-logo"><img src="img/about/products-logo-5.svg"
                                                                    loading="lazy" alt=""></div>
                        <h3 class="about-products__item-heading">Карго журнал</h3>
                        <p class="about-products__item-copy">Онлайн-журнал о&nbsp;том, как эффективнее управлять
                            бизнесом, логистикойи автопарком.</p>
                    </div>
                    <p class="about-products__item-cta"><a href="#" class="btn">Перейти в&nbsp;сервис</a></p>
                </article>
                <article class="about-products__item">
                    <div class="about-products__item-image"><img src="img/about/products-6.jpg" loading="lazy"
                                                                 alt=""></div>
                    <div class="about-products__item-body">
                        <div class="about-products__item-logo"><img src="img/about/products-logo-6.svg"
                                                                    loading="lazy" alt=""></div>
                        <h3 class="about-products__item-heading">Карго тех</h3>
                        <p class="about-products__item-copy">IT-компания, которая оцифровываети развивает продукты
                            экосистемы.</p>
                    </div>
                    <p class="about-products__item-cta"><span class="btn _disabled">Перейти в&nbsp;сервис</span></p>
                </article>
            </div>
        </div>
    </section>
    <section class="about-news">
        <div class="about-news__inner">
            <h2 class="about-news__heading">Новости компании</h2>
            <div class="news-list">
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>
                <article class="news-list__item">
                    <div class="news-list__item-image"><img src="img/about/news-item.jpg" loading="lazy" alt="">
                    </div>
                    <div class="news-list__item-body">
                        <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема доступна
                            во&nbsp;всех странах СНГ.</h4>
                        <p class="news-list__item-info">
                            <time datetime="2024-02-20">20.02.2024</time>
                            <i></i> Логистика
                        </p>
                        <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                    </div>
                </article>

            </div>
            <div class="show-more" data-target=".news-list">
                <button class="btn">Показать все</button>
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
    <section class="about-docs">
        <div class="about-docs__inner">
            <h2 class="about-docs__heading">Документы</h2>
            <div class="docs-list">
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
                <article class="docs-list__item _pdf">
                    <a href="#">Лицензия №23123</a>
                </article>
            </div>
            <div class="show-more" data-target=".news-list">
                <button class="btn">Показать все</button>
            </div>
        </div>
    </section>
@endsection
