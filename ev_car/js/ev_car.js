$(document).ready(function() {
  $(window).scroll(function () {

   if ($(this).scrollTop() > 200) { 
		$('header').addClass('ts');
		$('.gnb > li').addClass('ts');
		$('.gnb > li > a').addClass('ts');
		$('a.logo > img.ib').hide();
		$('a.logo > img.is').css('display','block');
   } else {
		$('header').removeClass('ts');
		$('.gnb > li').removeClass('ts');
		$('.gnb > li > a').removeClass('ts');
		$('a.logo > img.ib').show();
		$('a.logo > img.is').hide();
   }

   if ($(this).scrollTop() > 500) { 
		$('button.top_arrow').addClass('ts');
   } else {
		$('button.top_arrow').removeClass('ts');
   }

   if ($(this).scrollTop() > 400) { 
        $('a.ne_banner > span').addClass('ts');
   } else {
        $('a.ne_banner > span').removeClass('ts');
   }

   if ($(this).scrollTop() > 1200) { 
        $('.card .cardbox').addClass('ts');
   } else {
        $('.card .cardbox').removeClass('ts');
   }

  });

	$('button.top_arrow').click(function () {
		$('body,html').animate({scrollTop: 0}, 200);
	});

	$('.gnb > li > a').mouseenter(function(){
		$('.gnb_sub').removeClass('open');
		$(this).closest('li').each(function(){
			$(this).find('.gnb_sub').addClass('open');
		});
	});
	$('header').mouseleave(function(){
		$('.gnb_sub').removeClass('open');
	});

	$('#m_category ul > a').click(function(){
		$('#m_category ul > a').removeClass('on');
		$('#m_category li').hide();
		$(this).addClass('on');
		$(this).closest('ul').find('li').show();
	});

});
