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
	
})(jQuery);