$(document).ready(function(){

	//마이페이지 오픈
	$('a.my').click(function(){
		$('.blindBackground').show();
		$('#log_box').fadeIn();
		$('body,html').animate({scrollTop: 0}, 200);
	});

	//블라인드 모두 닫기
	$('.blindBackground').click(function(){
		$('.blindBackground').hide();
		$('#log_box').fadeOut();
		$('#choice_box').fadeOut();
	});
	$('a.back').click(function(){
		$('.blindBackground').hide();
		$('#log_box').fadeOut();
		$('#choice_box').fadeOut();
	});

	// 편도 선택구간
	$('.line_section_box > li').click(function(){
		$('.line_section_box > li').removeClass('on');
		$(this).addClass('on');
	});
	//직항체크
	$('li.direct').click(function(){
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
			$('li.direct span').removeClass('on');
		} else {
			$(this).addClass('on');
			$('li.direct span').addClass('on');
		}
	});

	//리뷰 순서 선택
	$('#review li a').click(function(){
		$('#review li a').removeClass('on');
		$(this).addClass('on');
		//리뷰 로딩
		$('.reviewBlind').show();
		$('.reviewBlind').delay(1000).fadeOut();
	});

	// 항공권 클릭시 동작
	$('#airline form ul li').click(function(){
			$('.blindBackground').show();
			$('#choice_box').fadeIn();
			$('#choice_box > div').hide();
		if ($(this).hasClass('start')) {
			$('.start_ch').show();
		} else if ($(this).hasClass('arrive')) {
			$('.arrive_ch').show();
		} else if ($(this).hasClass('day')) {
			$('.calendar_ch').show();
		} else if ($(this).hasClass('person')) {
			$('.person_ch').show();
		} else if ($(this).hasClass('seat')) {
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
			$('.start').html('제주<span class="blue">CJU</span>');
		} else if ($(this).hasClass('ch2')) {
			$('.start').html('김해/부산<span class="blue">PUS</span>');
		} else if ($(this).hasClass('ch3')) {
			$('.start').html('울산<span class="blue">USN</span>');
		} else if ($(this).hasClass('ch4')) {
			$('.start').html('광주<span class="blue">KWJ</span>');
		} else if ($(this).hasClass('ch5')) {
			$('.start').html('김포<span class="blue">GMP</span>');
		} else if ($(this).hasClass('ch6')) {
			$('.start').html('여수<span class="blue">RSU</span>');
		}
	});

	$('.arrive_ch_table td').click(function(){
		$('.blindBackground').hide();
		$('#choice_box').fadeOut();
		if ($(this).hasClass('ch1')) {
			$('.arrive').html('제주<span class="blue">CJU</span>');
		} else if ($(this).hasClass('ch2')) {
			$('.arrive').html('김해/부산<span class="blue">PUS</span>');
		} else if ($(this).hasClass('ch3')) {
			$('.arrive').html('울산<span class="blue">USN</span>');
		} else if ($(this).hasClass('ch4')) {
			$('.arrive').html('광주<span class="blue">KWJ</span>');
		} else if ($(this).hasClass('ch5')) {
			$('.arrive').html('김포<span class="blue">GMP</span>');
		} else if ($(this).hasClass('ch6')) {
			$('.arrive').html('여수<span class="blue">RSU</span>');
		}
	});

	$('.seat_box > p').click(function(){
		$('.seat_box > p').removeClass('on');
		$(this).addClass('on');
		$('.blindBackground').hide();
		$('#choice_box').fadeOut();
		if ($(this).hasClass('normal')) {
			$('.seat').text('일반석');
		} else if ($(this).hasClass('premium')) {
			$('.seat').text('프리미엄 일반석');
		} else if ($(this).hasClass('business')) {
			$('.seat').text('비즈니스석');
		} else if ($(this).hasClass('first')) {
			$('.seat').text('일등석');
		}
	});

});