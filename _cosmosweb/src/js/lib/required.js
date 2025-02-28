$.fn.required = function(opts){
	var o = {};
	if (opts) $.extend(o,opts);
	$(this).each(function(){
		var f = $(this),
			submit = f.find('button[type="submit"]'),
			isValidatedOnce = false;

		f.find('input[required], textarea[required], select[required]').each(function(){
			var input = $(this);
			input
				.removeAttr('required')
				.addClass('_required')
				.on('check:required',function(){
					var input = $(this),
						min = input.attr('minlength') || 1,
						max = input.attr('maxlength') || 65535,
						valid = true;

					if (input.prop('tagName') == 'SELECT') {
						if (input.find('option:selected').data('placeholder') != undefined) { 
							valid = false;
						};
					} else if (input.attr('type') == ('checkbox' || 'radio') && input.attr('data-group')) {
						var groupValid = false;
						f.find('input[data-group="'+input.attr('data-group')+'"]').each(function(){
							if ($(this).is(':checked')) groupValid = true;
						});
						if (!groupValid) valid = false;
					} else if (input.attr('type') == ('checkbox' || 'radio') && !input.is(':checked')) {
						valid = false;
					} else if (input.hasClass('_tel') && input.val().indexOf('_') >= 0) {
						valid = false;
					} else if (input.hasClass('_inn') && (input.val().length != 10 || input.val().length != 12) && !input.data('success')) {
						valid = false;
					} else if (input.hasClass('textInput-placeholder') || input.val().length < min || input.val().length > max) {
						valid = false;
					} else if (input.hasClass('_email') && !Z.email.test(input.val())) {
						valid = false;
					} else if (input.hasClass('required-url') && !Z.url.test(input.val())) {
						valid = false;
					};

					input.parent().find('.form__input-error-message').remove();
					input.parent().next('.form__input-error-message').remove();
					input.parent('.checkbox').next('.form__input-error-message').remove();

					if (valid) {
						input.removeClass('_error');
						input.parent().removeClass('_error').addClass('_success');
						if (input.prop('tagName') == 'SELECT') {
							input.next().removeClass('_error');
						};
					} else {
						input.addClass('_error');
						input.parent().addClass('_error').removeClass('_success');
						if (input.prop('tagName') == 'SELECT') {
							input.next().addClass('_error');
						};
						if (input.attr('type') == 'file') {
							// input.parent().append('<div class="form__input-error-message">'+input.data('message')+'</div>');
						} else if (input.attr('type') == 'checkbox' || input.hasClass('select__input')) {
							input.parent().after('<div class="form__input-error-message">'+input.data('message')+'</div>');
						} else {
							input.after('<div class="form__input-error-message">'+input.data('message')+'</div>');
						};
					};
				});
		});

		f.on('reset.clear',function(){
			f.find('.form__input-wrapper').removeClass('_active');
			f.find('input[type="text"], input[type="tel"], input[type="email"], textarea').each(function(){
				$(this).val('').parent().removeClass('_success _error');
			});
			f.find('.select').trigger('clear');
		});
		
		function check() {
			var valid = true,
				inputs = f.find('._required'+((o.visible) ? ':visible' : ''));

			inputs.each(function(){
				$(this).trigger('check:required');
			});
			
			valid = (!inputs.filter('._error').length);

			if (valid) {
				f.removeClass('form-error-required');
				// submit.removeClass('disabled').removeAttr('disabled');
			} else {
				f.addClass('form-error-required');
				// submit.addClass('disabled').attr('disabled','disabled');
			};
		};

		function setChecker() {
			f.find('._required').on('keydown paste change', function(){
				var input = $(this);
				setTimeout(function(){
					input.trigger('check:required');
				},0);
			});
		};

		f.on('submit',function(e){
			check();
			if (f.hasClass('form-error-required')) {
				var errorInput = f.find('.form__input._error:visible').eq(0);
				if (errorInput.length) {
					errorInput.focus();
					if (errorInput.offset().top < D.scrollTop()) {
						Z.scrollBodyTo(errorInput.offset().top - 10);
					};
				};
				if (!isValidatedOnce) {
					isValidatedOnce = true;
					setChecker();
				};
				return false;
			} else {
				return true;
				// alert('GO');
				// return false;
			};
		});
	});
};