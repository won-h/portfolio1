$(document).ready(function(){

	//메인 리뷰 최신/조회순
	$('.review_head span').click(function(){
		$('.review_head span').removeClass('on');
		$(this).addClass('on');
	});
	
	//편도 왕복 다구간
	$('.airline ul li').click(function(){
		$('.airline ul li').removeClass('on');
		$(this).addClass('on');
	});

	//직항 버튼 동작
	$('article .airline .airline_seat_dt').click(function(){
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
		} else {
			$(this).addClass('on');
		}
	});

	//블라인드 모두 닫기
	$('.blindBackground').click(function(){
		$('.blindBackground').hide();
		$('#log_box').fadeOut();
		$('#choice_box').fadeOut();
	});


	//로그인폼 접근성 확인
	$('li.line1 > a').on('focus', function(){
		$('.blindBackground').hide();
		$('#log_box').fadeOut();
	});



	// 항공권 클릭시 동작
	$('.airline > div > button').click(function(){
		if ($(this).hasClass('start_btn')) {
			$('.blindBackground').show();
			$('#choice_box').fadeIn();
			$('#choice_box > div').hide();
			$('.start_ch').show();
		} else if ($(this).hasClass('arrive_btn')) {
			$('.blindBackground').show();
			$('#choice_box').fadeIn();
			$('#choice_box > div').hide();
			$('.arrive_ch').show();
		} else if ($(this).hasClass('day_btn')) {
			$('.blindBackground').show();
			$('#choice_box').fadeIn();
			$('#choice_box > div').hide();
			$('.calendar_ch').show();
		} else if ($(this).hasClass('person_btn')) {
			$('.blindBackground').show();
			$('#choice_box').fadeIn();
			$('#choice_box > div').hide();
			$('.person_ch').show();
		} else if ($(this).hasClass('seat_btn')) {
			$('.blindBackground').show();
			$('#choice_box').fadeIn();
			$('#choice_box > div').hide();
			$('.seat_ch').show();
		} else {
			$('.blindBackground').hide();
			$('#choice_box').hide();
		};
	});

	//선택박스에서 돌아가는 시점
	$('.start_ch_table td').click(function(){
		$('.blindBackground').hide();
		$('#choice_box').fadeOut();
		if ($(this).hasClass('ch1')) {
			$('#start_btn .stext3').html('제주<span class="blue">CJU</span>');
		} else if ($(this).hasClass('ch2')) {
			$('#start_btn .stext3').html('김해/부산<span class="blue">PUS</span>');
		} else if ($(this).hasClass('ch3')) {
			$('#start_btn .stext3').html('울산<span class="blue">USN</span>');
		} else if ($(this).hasClass('ch4')) {
			$('#start_btn .stext3').html('광주<span class="blue">KWJ</span>');
		} else if ($(this).hasClass('ch5')) {
			$('#start_btn .stext3').html('김포<span class="blue">GMP</span>');
		} else if ($(this).hasClass('ch6')) {
			$('#start_btn .stext3').html('여수<span class="blue">RSU</span>');
		}
	});

	$('.arrive_ch_table td').click(function(){
		$('.blindBackground').hide();
		$('#choice_box').fadeOut();
		$('#arrive_btn .stext1').hide();
		$('#arrive_btn .stext2').show();
		$('#arrive_btn .stext3').show();
		if ($(this).hasClass('ch1')) {
			$('#arrive_btn .stext3').html('제주<span class="blue">CJU</span>');
		} else if ($(this).hasClass('ch2')) {
			$('#arrive_btn .stext3').html('김해/부산<span class="blue">PUS</span>');
		} else if ($(this).hasClass('ch3')) {
			$('#arrive_btn .stext3').html('울산<span class="blue">USN</span>');
		} else if ($(this).hasClass('ch4')) {
			$('#arrive_btn .stext3').html('광주<span class="blue">KWJ</span>');
		} else if ($(this).hasClass('ch5')) {
			$('#arrive_btn .stext3').html('김포<span class="blue">GMP</span>');
		} else if ($(this).hasClass('ch6')) {
			$('#arrive_btn .stext3').html('여수<span class="blue">RSU</span>');
		}
	});

	$('.seat_box > p').click(function(){
		$('.seat_box > p').removeClass('on');
		$(this).addClass('on');
		$('.blindBackground').hide();
		$('#choice_box').fadeOut();
		if ($(this).hasClass('normal')) {
			$('#seat_btn .stext3').text('일반석');
		} else if ($(this).hasClass('premium')) {
			$('#seat_btn .stext3').text('프리미엄 일반석');
		} else if ($(this).hasClass('business')) {
			$('#seat_btn .stext3').text('비즈니스석');
		} else if ($(this).hasClass('first')) {
			$('#seat_btn .stext3').text('일등석');
		}
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

	$(window).scroll(function () {
		if ($(this).scrollTop() > 500) { 
			$('button.top_arrow').addClass('ts');
		} else {
			$('button.top_arrow').removeClass('ts');
		}
	});
	$('button.top_arrow').click(function () {
		$('body,html').animate({scrollTop: 0}, 200);
	});

});

