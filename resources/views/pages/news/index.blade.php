@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span>
            <span class="pathBar__item _active">Новости</span>
        </div>
    </div>


    <div class="news">
        <div class="news__inner">
            <h1 class="news__heading">Новости</h1>
            <div class="tabs _js-tabs">
                <div class="tabs__items">
                    <div class="tabs__items-item _active" data-rel="solutions">Продукты</div>
                    <div class="tabs__items-item" data-rel="company">Компания</div>
                    <div class="tabs__items-item" data-rel="updates">Обновления</div>
                    <div class="tabs__items-item" data-rel="events">Мероприятия</div>
                </div>
                <div class="tabs__item" data-rel="solutions">
                    <div class="folder-bg news__hero">
                        <div class="folder-bg__back">
                            <img src="/local/templates/main/assets/img/news/hero.jpg" alt="" loading="lazy">
                        </div>
                        <div class="folder-bg__body">
                            <div class="news__hero-body">
                                <h2 class="news__hero-heading">Новая версия системы мониторинга. Какой функционал
                                    изменили и&nbsp;доработали</h2>
                                <p class="news-list__item-info news__hero-date">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news__hero-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list">
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                    </div>
                    <div class="show-more" data-target=".news-list">
                        <button class="btn">Показать ещё</button>
                    </div>
                </div>
                <div class="tabs__item" data-rel="company">
                    <div class="folder-bg news__hero">
                        <div class="folder-bg__back">
                            <img src="/local/templates/main/assets/img/about/news-item.jpg" alt="" loading="lazy">
                        </div>
                        <div class="folder-bg__body">
                            <div class="news__hero-body">
                                <h2 class="news__hero-heading">День рождения</h2>
                                <p class="news-list__item-info news__hero-date">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news__hero-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list">
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Теперь экосистема доступна во&nbsp;всех странах
                                    СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Теперь экосистема доступна во&nbsp;всех странах
                                    СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><!--suppress HtmlUnknownTarget -->
                                <img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Теперь экосистема доступна во&nbsp;всех странах
                                    СНГ.</h4>
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
                <div class="tabs__item" data-rel="updates">
                    <div class="folder-bg news__hero">
                        <div class="folder-bg__back">
                            <img src="/local/templates/main/assets/img/news/hero.jpg" alt="" loading="lazy">
                        </div>
                        <div class="folder-bg__body">
                            <div class="news__hero-body">
                                <h2 class="news__hero-heading">Новая версия системы мониторинга. Какой функционал
                                    изменили и&nbsp;доработали</h2>
                                <p class="news-list__item-info news__hero-date">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news__hero-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list">
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
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
                <div class="tabs__item" data-rel="events">
                    <div class="folder-bg news__hero">
                        <div class="folder-bg__back">
                            <img src="/local/templates/main/assets/img/news/hero.jpg" alt="" loading="lazy">
                        </div>
                        <div class="folder-bg__body">
                            <div class="news__hero-body">
                                <h2 class="news__hero-heading">Новая версия системы мониторинга. Какой функционал
                                    изменили и&nbsp;доработали</h2>
                                <p class="news-list__item-info news__hero-date">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news__hero-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="news-list">
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
                                <p class="news-list__item-info">
                                    <time datetime="2024-02-20">20.02.2024</time>
                                    <i></i> Логистика
                                </p>
                                <p class="news-list__item-cta"><a href="news-item.html" class="btn">Читать</a></p>
                            </div>
                        </article>
                        <article class="news-list__item">
                            <div class="news-list__item-image"><img
                                    src="/local/templates/main/assets/img/about/news-item.jpg" loading="lazy" alt=""
                                >
                            </div>
                            <div class="news-list__item-body">
                                <h4 class="news-list__item-heading">Выходим на&nbsp;новые рынки. Теперь экосистема
                                    доступна во&nbsp;всех странах СНГ.</h4>
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
            </div>
        </div>
    </div>

@endsection
