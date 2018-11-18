$(document).ready(function() {
  $(window).scroll(function () {

   if ($(this).scrollTop() > 300) { 
		$('.introduce_art2 .wrap').addClass('ts');
   } else {
		$('.introduce_art2 .wrap').removeClass('ts');
   }

  });
});
