<div class="auth">
    <div class="auth__close-wrapper">
        <div class="auth__close">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="#07061A" stroke-linecap="round" stroke-width="2" d="M17.657 6.343 6.343 17.657"/>
                <path stroke="#07061A" stroke-linecap="round" stroke-width="2" d="m6.344 6.343 11.313 11.314"/>
            </svg>
        </div>
    </div>
    <div class="auth__side"></div>
    <div class="auth__main">
        <div class="auth__body">
            <div class="auth__logo"><img src="{{ Vite::image('logo.svg') }}" alt="Cargonomica"></div>
            <form action="index.html" class="form form_required auth__form-login">
                <h2 class="auth__heading">Войти в&nbsp;аккаунт</h2>
                <div class="form__item">
                    <input type="text" class="form__input" placeholder="Логин" data-message="Введите логин" required>
                </div>
                <div class="form__item">
                    <input type="password" class="form__input" placeholder="Пароль" data-message="Введите пароль"
                           required>
                    <div class="auth__form-login-forgot"><span class="auth__form-login-forgot-link _js-auth-forgot">Забыли пароль?</span>
                    </div>
                </div>
                <div class="form__submit">
                    <button class="btn-cta" type="submit">Войти</button>
                </div>
                <div class="auth__form-login-new">
                    Новый пользователь? <span
                        class="auth__form-login-new-link _js-auth-reg">Создать учетную запись</span>
                </div>
            </form>
            <form action="#" class="form form_required auth__form-forgot">
                <h2 class="auth__heading">Забыли пароль</h2>
                <div class="form__item">
                    <input type="email" class="form__input _email" placeholder="E-mail" data-message="Введите E-mail"
                           required>
                </div>
                <div class="form__submit">
                    <button class="btn-cta" type="submit">Восстановить пароль</button>
                </div>
                <div class="auth__form-login-new">
                    Вспомнили пароль? <span class="auth__form-login-new-link _js-auth-login">Войти</span>
                </div>
            </form>
            <form action="index.html" class="form auth__form-reg" data-steps="3">
                <h2 class="auth__heading">Создать аккаунт</h2>
                <div class="form-apply__progress">
                    <div class="form-apply__progress-label"><span>1</span> шаг <em>из 3</em></div>
                    <div class="form-apply__progress-bar">
                        <div class="form-apply__progress-handler"></div>
                    </div>
                </div>
                <p class="form-apply__label">Заполните данные пользователя</p>
                <div class="auth__form-reg-step" data-step="1" data-title="Заполните данные пользователя">
                    <div class="form__item">
                        <input type="text" class="form__input _text" placeholder="Фамилия и имя"
                               data-message="Введите фамилию и имя" required>
                    </div>
                    <div class="form__item">
                        <input type="text" class="form__input _text" placeholder="Должность"
                               data-message="Введите должность" required>
                    </div>
                    <div class="form__item">
                        <input type="tel" class="form__input _tel" placeholder="Телефон"
                               data-message="Введите номер телефона" required>
                    </div>
                </div>
                <div class="auth__form-reg-step" data-step="2" data-title="Укажите информацию о&nbsp;топливных картах">
                    <div class="form__item">
                        <div class="form__cards" data-min="1" data-max="1000">
                            <div class="form__cards-label">Количество топливных карт</div>
                            <div class="form__cards-body">
                                <div class="form__cards-btn _less"></div>
                                <input type="tel" class="form__cards-item" value="1">
                                <div class="form__cards-btn _more"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form__item">
                        <input type="text" class="form__input _text" placeholder="Кодовое слово"
                               data-message="Введите кодовое слово" required>
                        <div class="form__input-hint">Для проверки пользователя</div>
                    </div>
                </div>
                <div class="auth__form-reg-step" data-step="3" data-title="Заполните контактные данные">
                    <h4>Контактные данные</h4>
                    <div class="form__item">
                        <input type="tel" class="form__input _digits" placeholder="ИНН" data-message="Введите ИНН"
                               required>
                    </div>
                    <div class="form__item">
                        <input type="text" class="form__input _text" placeholder="Подписант" data-message="Введите имя"
                               required>
                    </div>
                    <div class="form__item">
                        <input type="email" class="form__input _email" placeholder="E-mail"
                               data-message="Введите E-mail" required>
                        <div class="form__input-hint">Будет использоваться в&nbsp;качестве логина</div>
                    </div>
                    <h4>Информация о&nbsp;счете</h4>
                    <div class="form__item">
                        <input type="tel" class="form__input _digits" placeholder="БИК" data-message="Введите БИК"
                               required>
                    </div>
                    <div class="form__item">
                        <input type="tel" class="form__input _digits" placeholder="Расчётный счет"
                               data-message="Введите расчётный счет" required>
                    </div>
                    <div class="form__item">
                        <input type="tel" class="form__input _digits" placeholder="Корреспондентский счёт"
                               data-message="Введите корреспондентский счёт" required>
                    </div>
                </div>
                <div class="form__submit">
                    <button class="btn-cta" type="submit">Продолжить</button>
                    <p class="form__submit-agreement">Создавая аккаунт, вы&nbsp;соглашаетесь с&nbsp;<a
                            href="policy.html" target="_blank">политикой конфиденциальности</a></p>
                </div>
                <div class="auth__form-login-new">
                    Есть аккаунт? <span class="auth__form-login-new-link _js-auth-login">Войдите</span>
                </div>
                <div class="auth__form-login-new auth__form-reg-back">
                    <span class="auth__form-reg-back-link _js-reg-back"><svg xmlns="http://www.w3.org/2000/svg"
                                                                             width="24" height="24" fill="none"
                                                                             viewBox="0 0 24 24"><path fill="#20212B"
                                                                                                       fill-rule="evenodd"
                                                                                                       d="M13.09 5.777 7.527 11.34a.933.933 0 0 0 0 1.32l5.563 5.563 1.131-1.132L9.131 12l5.09-5.091-1.131-1.132Z"
                                                                                                       clip-rule="evenodd"/></svg>Назад</span>
                </div>
            </form>
        </div>
    </div>
</div>
