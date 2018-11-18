$(document).ready(function(){

	$('aside#left ul li').click(function(){
		$('aside#left ul li').removeClass('on');
		$(this).addClass('on');
	});

	$('div.check span').click(function(){
		$('div.check span').removeClass('on');
		$(this).addClass('on');
	});

	$('.airline_seat_dt').click(function(){
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
		} else {
			$(this).addClass('on');
		}
	});

	//로그인폼 접근성 확인
	$('li.line1 > a').on('focus', function(){
		$('.blindBackground').hide();
		$('#log_box').fadeOut();
	});

});