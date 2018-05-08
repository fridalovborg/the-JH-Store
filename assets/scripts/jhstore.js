(function($) {

	// mobile menu
	$('.menu-toggle').click(function() {

		$('body').toggleClass('menu-active');

		$('.menu-bg').toggleClass('active');
		
		if ($('.menu-bg').hasClass( 'active' )) {

			$('.menu-bg').fadeIn();
		} else {
			$('.menu-bg').fadeOut();
		}
	});

	// color filter
	$('.filter-btn').click(function() {
		
		$('body').toggleClass('filter-active');

		$('.filter-colors').toggleClass('active');

		if ($('.filter-colors').hasClass('active')) {
			$('.filter-colors').show();
		} else {
			$('.filter-colors').hide();
		}
	});

	$('.carousel').carousel({
		interval: 4000
	});
	
})(jQuery);