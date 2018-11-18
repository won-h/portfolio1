$(document).ready(function() {
    $('.menu_beautiful').focus(function(){
			$('.category').hide();
			$('.category_1').show();
			$('.category .menu1').show();
			$('.section_wrap').addClass('blind');
    });
	$('.menu_beautiful').mouseover(function(){
			$('.category').hide();
			$('.category_1').show();
			$('.category .menu1').show();
			$('.section_wrap').addClass('blind');
	});
	$('.menu_healthy').focus(function(){
		$('.category').hide();
		$('.category_2').show();
		$('.category .menu2').show();
		$('.section_wrap').addClass('blind');
	});
	$('.menu_healthy').mouseover(function(){
		$('.category').hide();
		$('.category_2').show();
		$('.category .menu2').show();
		$('.section_wrap').addClass('blind');
	});
	$('.menu_refreshing').focus(function(){
		$('.category').hide();
		$('.category_3').show();
		$('.category .menu3').show();
		$('.section_wrap').addClass('blind');
	});
	$('.menu_refreshing').mouseover(function(){
		$('.category').hide();
		$('.category_3').show();
		$('.category .menu3').show();
		$('.section_wrap').addClass('blind');
	});
	$('section').mouseover(function(){
		$('.category').hide();
		$('.section_wrap').removeClass('blind');
	});

  $(window).scroll(function () {
   if ($(this).scrollTop() > 1) { 
        $('.section_box > div').addClass('ts');
   } else {
        $('.section_box > div').removeClass('ts');
   }

   if ($(this).scrollTop() > 400) { 
        $('#a1 img.right_red').addClass('ts');
        $('#a1 img.right_gray').addClass('ts');
   } else {
        $('#a1 img.right_red').removeClass('ts');
        $('#a1 img.right_gray').removeClass('ts');
   }

   if ($(this).scrollTop() > 600) { 
        $('#a1 h2').addClass('ts');
        $('#a1 h4').addClass('ts');
   } else {
        $('#a1 h2').removeClass('ts');
        $('#a1 h4').removeClass('ts');
   }

   if ($(this).scrollTop() > 640) { 
        $('.rnd_img').addClass('ts');
   } else {
        $('.rnd_img').removeClass('ts');
   }

   if ($(this).scrollTop() > 1000) { 
        $('#a1 img.left_red').addClass('ts');
        $('#a1 img.left_gray').addClass('ts');
   } else {
        $('#a1 img.left_red').removeClass('ts');
        $('#a1 img.left_gray').removeClass('ts');
   }

   if ($(this).scrollTop() > 1300) { 
        $('#a2 h2').addClass('ts');
        $('#a2 h4').addClass('ts');
   } else {
        $('#a2 h2').removeClass('ts');
        $('#a2 h4').removeClass('ts');
   }

   if ($(this).scrollTop() > 1400) { 
        $('li.nati').addClass('ts');
        $('li.city').addClass('ts');
        $('li.comp').addClass('ts');
        $('.network_map > span').addClass('ts');
   } else {
        $('li.nati').removeClass('ts');
        $('li.city').removeClass('ts');
        $('li.comp').removeClass('ts');
        $('.network_map > span').removeClass('ts');
   }
  });

	$(document).on('click', '.group button', function(){
		if ($(this).hasClass('on')) {
			$(this).removeClass('on');
		} else {
			$(this).addClass('on');
		}
	});

	$('svg.lnr-menu').on('click', function(){
		$('.gnb_menu').show();
	});

});
