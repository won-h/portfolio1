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

	//호텔 체크박스 클릭시 동작
	$('#star_all').on('click', function(){
		//var chk = $(this).is(':checked');
		if ($(this).is(':checked')) {
			$('.star input').prop('checked', true);
		} else {
			$('.star input').prop('checked', false);
		};
	});
});