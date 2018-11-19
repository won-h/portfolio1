$(document).ready(function(){
	$('#loading').addClass('on').fadeIn(function(){
		$('html, body').css({'overflow': 'hidden', 'height': '100%'});
		$('body').on('scroll touchmove mousewheel', function(event) {
			event.preventDefault();
			event.stopPropagation();
		return false;
		});
	});

	$('#loading').delay(3000).fadeOut(function(){
		$(this).removeClass('on')
		$('body').off('scroll touchmove mousewheel');
	});
});

