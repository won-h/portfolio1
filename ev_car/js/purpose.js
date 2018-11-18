$(document).ready(function(){

	$('#case1').click(function(){
		$('.purpose_art1 .wrap ul li a').removeClass('on');
		$(this).addClass('on');
	});
	$('#case2').click(function(){
		$('.purpose_art1 .wrap ul li a').removeClass('on');
		$(this).addClass('on');
	});
	$('#case3').click(function(){
		$('.purpose_art1 .wrap ul li a').removeClass('on');
		$(this).addClass('on');
	});
//
//
	$('#case1').click(function(){
		$('.purpose_art2').hide();
		$('.case1').show();
	});
	$('#case2').click(function(){
		$('.purpose_art2').hide();
		$('.case2').show();
	});
	$('#case3').click(function(){
		$('.purpose_art2').hide();
		$('.case3').show();
	});
});