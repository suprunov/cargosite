var headingsEntranceObserver = new IntersectionObserver(function(entries, self) {
	entries.forEach(function(entry) {
		if (entry.isIntersecting) {
			var box = $(entry.target);
			if (box.data('targets')) {
				var targets = box.data('targets');
				targets.each(function(index){
					setTimeout(function(){
						// targets.eq(index).addClass('_anim-active').trigger('show');
						// targets.eq(index).removeClass('_js-anim-entrance');
						targets.eq(index).addClass('_active');
					},200*index);
				});
			} else {
				// box.addClass('_anim-active');
				// box.removeClass('_js-anim-entrance');
				box.addClass('_active');
			};

			self.unobserve(entry.target);
		};
	});
}, {
	rootMargin: '0px',
	threshold: (mql[760]) ? 0.1 : 0.3
});
$.fn.animEntrance = function(){
	// if (!mql[760].matches) {
		$(this).each(function(){
			var box = $(this);
			var targets, offtargets;
			if (box.data('target') || box.data('offtarget')) {
				if (box.data('target')) {
					targets = box.find(box.data('target'));
				};
				if (box.data('offtarget')) {
					offtargets = targets.add($(box.data('offtarget')));
				};

				if (offtargets && offtargets.length) {
					offtargets.addClass('_js-anim-entrance');
					box.data('targets',offtargets);
				} else if (targets && targets.length) {
					targets.addClass('_js-anim-entrance');
					box.data('targets',targets);
				};

				box.removeClass('_js-anim-entrance');
			};

			headingsEntranceObserver.observe(this);
		});
	// };
};

$('._js-anim-entrance').animEntrance();


setTimeout(function(){

	$('._js-anim').each(function(){
		new IntersectionObserver(function(entries, self) {
			entries.forEach(function(entry) {
				if (entry.isIntersecting) {
					var box = $(entry.target);
					box.find('._js-anim-item').addClass('_js-anim-go');
		
					self.unobserve(entry.target);
				};
			});
		}, {
			rootMargin: '0px',
			threshold: (mql[760].matches) ? 0.4 : 0.3
		}).observe(this);
	});

},20);