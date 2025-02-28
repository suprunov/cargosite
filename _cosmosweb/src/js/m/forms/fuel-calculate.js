$('.fuel__calculate-form').each(function(){
    var f = $(this),
        stepsMax = f.data('steps'),
        bar = f.find('.form-apply__progress-handler'),
        currentStep = 1,
        steps = f.find('.fuel__calculate-form-step'),
        title = f.find('.form-apply__label');
    
    function setStep() {
        bar.css({
            width: 100 / stepsMax * currentStep + '%'
        });
        steps.hide().filter('[data-step="'+ currentStep +'"]').show();
        f.find('.form-apply__progress-label span').text(currentStep);
        title.html(steps.filter('[data-step="'+ currentStep +'"]').data('title'));
        if (currentStep == stepsMax) {
            f.find('.form__submit .btn-cta').text('Отправить');
            f.find('.form__submit-agreement-btn').text('Отправить');
        } else {
            f.find('.form__submit .btn-cta').text('Продолжить');
            f.find('.form__submit-agreement-btn').text('Продолжить');
        };
    };
    setStep();

    f.required({
        visible: true
    });

    f.on('submit',function(){
        if (f.hasClass('form-error-required')) {
            return false;
        } else if (currentStep < stepsMax) {
            currentStep++;
            setStep();
            f.find('.form__input:visible:first').focus();
        } else {
            f.trigger('loading:on');

            // TODO: fetch here
            setTimeout(function(){
                // success
                f.trigger('loading:off');

                var body = f.parents('.folder__body');
                body.addClass('form-message');
                body.append(`<div class="form-message__inner"><div class="form-message__body">
                    <div class="form-message__heading">Заявка отправлена</div>
                    <div class="form-message__copy">В&nbsp;рабочие часы с&nbsp;вами свяжется менеджер</div>
                </div></div>`);
                window.scrollTo({
                    top: body.parent().offset().top,
                    behavior: 'smooth'
                });
            },500);
        };
        return false;
    });
});