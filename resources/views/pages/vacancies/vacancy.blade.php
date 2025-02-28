@extends('layouts.base')
@section('title', 'Главная')
@section('content')
    <style>
        .pathBar__sep {
            background: url(/local/templates/main/assets/img/icons/pathbar-sep.svg) 0px 0px / contain no-repeat;
        }

        .btn-cta:after {
            background: url(/local/templates/main/assets/img/icons/btn-cta-arrow.svg) 0 0 no-repeat;
        }

        .folder:before {
            background: url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
        }

        .folder-sm:before {
            background: url(/local/templates/main/assets/img/folder-top.svg) 0 100% no-repeat;
        }
    </style>

    <div class="pathBar">
        <div class="pathBar__inner">
            <a href="/" class="pathBar__item">Главная</a> <span class="pathBar__sep"></span> <a
                href="vacancies" class="pathBar__item"
            >Карьера</a> <span class="pathBar__sep"></span> <span class="pathBar__item _active">Project Manager</span>
        </div>
    </div>
    <div class="pathBar _back">
        <div class="pathBar__inner">
            <a href="vacancies" class="pathBar__item _back"><img
                    src="/local/templates/main/assets/img/icons/pathbar-back.svg" inline alt="">Назад</a>
        </div>
    </div>

    <article class="vacancy-item">
        <div class="vacancy-item__inner">
            <header class="vacancy-item__header">
                <h1 class="vacancy-item__header-heading">Project Manager</h1>
                <p class="vacancy-item__header-info">Москва <i></i> з/п не&nbsp;указана <i></i>
                    <nobr>3-6</nobr>
                    лет
                </p>
                <p class="vacancy-item__header-cta"><a href="#apply" class="btn-cta _min">Откликнуться</a></p>
            </header>
            <div class="vacancy-item__body">
                <h4>Ключевые навыки</h4>
                <ul class="vacancy-item__tags">
                    <li><span class="tag">C++</span></li>
                    <li><span class="tag">Математический анализ</span></li>
                    <li><span class="tag">CFD</span></li>
                    <li><span class="tag">CAE</span></li>
                    <li><span class="tag">Работа с&nbsp;базами данных</span></li>
                </ul>
                <p>Мы&nbsp;разрабатываем ЭКОСИСТЕМУ для транспортных компаний. Она существенно снижает себестоимость
                    грузоперевозок и&nbsp;предоставляет транспортным компаниям конкурентные преимущества за&nbsp;счет
                    автоматизации, цифровизации бизнес-процессов и&nbsp;доступу к&nbsp;маркетплейсу с&nbsp;лучшими
                    ценами на&nbsp;товары и&nbsp;услуги.</p>
                <div class="vacancy-item__copy">
                    <h2>Что нужно делать</h2>
                    <ul>
                        <li>Участие в&nbsp;ИТ-проектах/продуктах в&nbsp;роли администратора и/или Менеджера
                            проекта/продукта
                        </li>
                        <li>Реализация и&nbsp;контроль проектов/продуктов на&nbsp;всех этапах жизненного цикла</li>
                        <li>Взаимодействие с&nbsp;Подрядными организациями, ведение договоров, контроль выполнения
                            работ
                        </li>
                        <li>Внедрение проектных и&nbsp;продуктовых практик для повышения эффективности процессов</li>
                    </ul>
                    <h2>Кого мы&nbsp;ищем</h2>
                    <ul>
                        <li>Участие в&nbsp;ИТ-проектах/продуктах в&nbsp;роли администратора и/или Менеджера
                            проекта/продукта
                        </li>
                        <li>Реализация и&nbsp;контроль проектов/продуктов на&nbsp;всех этапах жизненного цикла</li>
                        <li>Взаимодействие с&nbsp;Подрядными организациями, ведение договоров, контроль выполнения
                            работ
                        </li>
                        <li>Внедрение проектных и&nbsp;продуктовых практик для повышения эффективности процессов</li>
                    </ul>
                    <h2>Что предлагаем</h2>
                    <ul>
                        <li>Официальное трудоустройство в&nbsp;стабильную аккредитованную ИТ-компанию</li>
                        <li>Полностью белую, конкурентную заработную плату с&nbsp;ежегодной индексацией</li>
                        <li>Расширенный социальный пакет: бесплатный фитнес-зал и&nbsp;ДМС в&nbsp;лучших московских
                            клиниках с&nbsp;включенной стоматологией
                        </li>
                        <li>Современный офис в&nbsp;шаговой доступности от&nbsp;м. Румянцево со&nbsp;свободной и&nbsp;бесплатной
                            парковкой;
                        </li>
                        <li>Пятидневная рабочая неделя с&nbsp;гибким началом дня. Гибридный формат работы (1&nbsp;день
                            удаленки в&nbsp;неделю)
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </article>


    <section class="vacancies-us">
        <div class="vacancies-us__inner">
            <div class="vacancies-us__body">
                <h2 class="vacancies-us__heading">Работа у&nbsp;нас&nbsp;— это</h2>
                <div class="vacancies-us__slider">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Оплата обучения</h3>
                                        <p class="vacancies-us__item-copy">Помогаем стать экспертами
                                            <br>в&nbsp;нашей области</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-1.png"
                                                alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Безопасность</h3>
                                        <p class="vacancies-us__item-copy">Официальное трудоустройство с&nbsp;полностью
                                            белой зарплатой, включая премии</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-2.png"
                                                alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Карьерный рост</h3>
                                        <p class="vacancies-us__item-copy">90% руководителей выросли из&nbsp;рядовых
                                            сотрудников компании</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-3.png"
                                                alt="">
                                        </div>
                                    </div>
                                </article>
                            </div>
                            <div class="swiper-slide">
                                <article class="vacancies-us__item folder-sm">
                                    <div class="folder-sm__body">
                                        <h3 class="vacancies-us__item-heading">Прозрачный KPI</h3>
                                        <p class="vacancies-us__item-copy">Ничего не&nbsp;скрываем, поэтому можете
                                            самостоятельно посчитать размер зарплаты</p>
                                        <div class="vacancies-us__item-image"><img
                                                src="/local/templates/main/assets/img/vacancies/us-4.png"
                                                alt="">
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


    <section class="vacancies__apply vacancies__apply-item" id="apply">
        <div class="folder">
            <div class="folder__body">
                <div class="vacancies__apply-body">
                    <form action="#" class="vacancies__apply-form form form_required">
                        <h2 class="vacancies__apply-form-heading">Отклик на вакансию
                            <br><strong>Project manager</strong>
                        </h2>
                        <p class="vacancies__apply-form-copy">или <a
                                href="https://hh.ru/" target="_blank" rel="nofollow"
                            >оставьте отклик на <img
                                    src="/local/templates/main/assets/img/icons/hh.svg" loading="lazy"
                                    alt="HeadHunter.ru" title="HeadHunter.ru"
                                ></a></p>

                        <div class="vacancies__apply-form-body">
                            <h4>Контактные данные</h4>
                            <div class="form__item">
                                <input
                                    data-code="name"
                                    type="text"
                                    class="form__input _text vacancy-apply-form"
                                    placeholder="Фамилия, имя и отчество"
                                    data-message="Фамилия, имя и отчество"
                                    required
                                >
                            </div>
                            <div class="form__item">
                                <input
                                    data-code="phone"
                                    type="tel"
                                    class="form__input _tel vacancy-apply-form"
                                    placeholder="Мобильный телефон"
                                    data-message="Мобильный телефон"
                                    required
                                >
                            </div>
                            <div class="form__item">
                                <div class="select">
                                    <div class="select__label">Город</div>
                                    <input
                                        data-code="city"
                                        type="hidden" id="vacancy-apply-form-city" value=""
                                        class="select__input vacancy-apply-form"
                                        required data-message="Выберите город"
                                    >
                                    <div class="select__list">
                                        <div class="select__list-inner">
                                            <div class="select__list-item" data-val="Москва">Москва</div>
                                            <div class="select__list-item" data-val="Санкт-Петербург">Санкт-Петербург
                                            </div>
                                            <div class="select__list-item" data-val="Новосибирск">Новосибирск</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h4>Информация о&nbsp;вашем опыте</h4>
                            <div class="form__item">
                                <div class="select">
                                    <div class="select__label">Направление</div>
                                    <input
                                        data-code="unit"
                                        type="hidden"
                                        value=""
                                        class="select__input vacancy-apply-form"
                                        required
                                        data-message="Направление"
                                    >
                                    <div class="select__list">
                                        <div class="select__list-inner">
                                            <div class="select__list-item" data-val="IT">IT</div>
                                            <div class="select__list-item" data-val="Логистика">Логистика</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form__item">
                                <input
                                    data-code="cv"
                                    type="text"
                                    class="form__input vacancy-apply-form"
                                    placeholder="Ссылка на резюме, например hh.ru"
                                    required
                                    data-message="Ссылка на резюме, например hh.ru"
                                >
                            </div>
                            <div class="form__item">
                        <textarea class="form__input _js-autosize vacancy-apply-form"
                                  data-code="message"
                                  placeholder="Сопроводительное письмо"></textarea>
                            </div>
                            <div class="form__submit">
                                <button class="btn-cta action-form-btn" id="vacancy-apply-form" type="button">Отправить
                                </button>
                                <p class="form__submit-agreement">Нажимая на кнопку «Отправить», вы принимаете согласие
                                    на
                                    <a href="policy" target="_blank">обработку персональных данных</a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="vacancies-list" id="vacancies">
        <div class="vacancies-list__inner">
            <h2 class="vacancies-list__heading">Похожие вакансии</h2>
            <div class="vacancies-list__list">
                <article class="vacancies-list__item">
                    <h3 class="vacancies-list__item-heading">Продуктовый дизайнер (Рекламная платформа) middle</h3>
                    <p class="vacancies-list__item-info">Москва <i></i> з/п не&nbsp;указана <i></i> офис</p>
                    <p class="vacancies-list__item-cta"><a href="vacancies-item" class="btn">Подробнее</a></p>
                </article>
                <article class="vacancies-list__item">
                    <h3 class="vacancies-list__item-heading">PHP Developer (middle/senior)</h3>
                    <p class="vacancies-list__item-info">Москва <i></i> з/п не&nbsp;указана <i></i> офис</p>
                    <p class="vacancies-list__item-cta"><a href="vacancies-item" class="btn">Подробнее</a></p>
                </article>
                <article class="vacancies-list__item">
                    <h3 class="vacancies-list__item-heading">Стажер в&nbsp;Digital Innovations</h3>
                    <p class="vacancies-list__item-info">Москва <i></i> з/п не&nbsp;указана <i></i> офис</p>
                    <p class="vacancies-list__item-cta"><a href="vacancies-item" class="btn">Подробнее</a></p>
                </article>
                <article class="vacancies-list__item">
                    <h3 class="vacancies-list__item-heading">Java developer</h3>
                    <p class="vacancies-list__item-info">Москва <i></i> з/п не&nbsp;указана <i></i> офис</p>
                    <p class="vacancies-list__item-cta"><a href="vacancies-item" class="btn">Подробнее</a></p>
                </article>
                <article class="vacancies-list__item">
                    <h3 class="vacancies-list__item-heading">Стажер в&nbsp;Digital Innovations</h3>
                    <p class="vacancies-list__item-info">Москва <i></i> з/п не&nbsp;указана <i></i> офис</p>
                    <p class="vacancies-list__item-cta"><a href="vacancies-item" class="btn">Подробнее</a></p>
                </article>
            </div>
        </div>
    </section>
@endsection
