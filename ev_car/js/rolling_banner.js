// * guideBanner
//
// moveType (0:left / 1:right) 
var moveType = 0; 
// 이동시간간격 3초 
var moveSpeed = 8000; 
// 움직이는 작업중 다시 명령 받지 않음 
var moveWork = false; 
// 일시정지 flag 
var movePause = false; 
function guideBanner(){ 
	if(moveWork==false){ 
	   // 0d\일경우 left방향 
	  if(moveType==0){ 
		 // 맨처음 이미지의 폭 
		 var aWidth = $(".guide > div > a:first").width(); 
		 // 롤링마지막에 맨처음의 a태그 추가 
		 $(".guide > div").append("<a href=\""+$(".guide > div > a:first").attr("href")+"\">" + $(".guide > div > a:first").html()+ "</a>"); 
		 // 맨처음이미지를 왼쪽으로 이동시킨다. 
		 $(".guide > div > a:first").animate({marginLeft:-aWidth},{duration:moveSpeed,step:function(){ 
		 // 이동중 만약 일시정지 flag가 true라면 
		 if(movePause==true){ 
			// 이동을 멈춘다 
			$(this).stop(); 
		 } 
		 },complete:function(){ 
		 // 이동을 마친후 첫번째 a태그를 지워버린다 
		 $(this).remove(); 
		 // 이미지 움직이는것을 다시 실행 
		 guideBanner(); 
	  }}); 
	  }else{ 
	  // 마지막 a태그의 폭 
	   var aWidth = $(".guide > div > a:last").width(); 
	   // a태그 앞에 마지막의 a태그를 생성한다 단 스타일은 마지막 a태그의 폭만큼 빼준다 
	   $("<a href=\"" + $(".guide > div > a:last").attr("href")+ "\" style=\"margin-left:-" + aWidth + "px\">" + $(".guide > div > a:last").html()+ "</a>").insertBefore(".guide > div > a:first") 
	   // 맨처음 a태그의 margin-left를 다시 0으로 맞춰준다. 
	  $(".guide > div > a:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){ 
	   // 이동중 만약 일시정지 flag가 true라면 
	   if(movePause==true){ 
		  // 이동을 멈춘다 
		  $(this).stop(); 
	   } 
	   },complete:function(){ 
	   // 이동을 마친후 마지막 a태그를 지워버린다 
	   $(".guide > div > a:last").remove(); 
	   // 이미지 움직이는것을 다시 실행 
	   guideBanner(); 
	}}); 
 } 
 } 
 } 
 function goMoveL(){ 
	// 일시정지가 풀려있을 경우를 대비하여 일시정지를 풀러준다 
	movePause=false; 
	// 0d\일경우 left방향 
	if(moveType==0){ 
	   guideBanner(); 
	   }else{ 
	   $(".guide > div > a:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){ 
	   // 이동중 만약 일시정지 flag가 true라면 
	   if(movePause==true){ 
		  // 이동을 멈춘다 
		  $(this).stop(); 
	  } 
	   },complete:function(){ 
	  // 이동을 마친후 마지막 a태그를 지워버린다 
	  //$(".guide > div > a:last").remove(); 
	  // 이미지 움직이는것을 다시 실행 
	  guideBanner(); 
   }}); 
}
   
}
guideBanner(); 



// * noticeBanner
//

// moveType (0:left / 1:right) 
var moveType = 0; 
// 이동시간간격 3초 
var moveSpeed = 8000; 
// 움직이는 작업중 다시 명령 받지 않음 
var moveWork = false; 
// 일시정지 flag 
var movePause = false; 
function noticeBanner(){ 
	if(moveWork==false){ 
	   // 0d\일경우 left방향 
	  if(moveType==0){ 
		 // 맨처음 이미지의 폭 
		 var aWidth = $(".notice > div > a:first").width(); 
		 // 롤링마지막에 맨처음의 a태그 추가 
		 $(".notice > div").append("<a href=\""+$(".notice > div > a:first").attr("href")+"\">" + $(".notice > div > a:first").html()+ "</a>"); 
		 // 맨처음이미지를 왼쪽으로 이동시킨다. 
		 $(".notice > div > a:first").animate({marginLeft:-aWidth},{duration:moveSpeed,step:function(){ 
		 // 이동중 만약 일시정지 flag가 true라면 
		 if(movePause==true){ 
			// 이동을 멈춘다 
			$(this).stop(); 
		 } 
		 },complete:function(){ 
		 // 이동을 마친후 첫번째 a태그를 지워버린다 
		 $(this).remove(); 
		 // 이미지 움직이는것을 다시 실행 
		 noticeBanner(); 
	  }}); 
	  }else{ 
	  // 마지막 a태그의 폭 
	   var aWidth = $(".notice > div > a:last").width(); 
	   // a태그 앞에 마지막의 a태그를 생성한다 단 스타일은 마지막 a태그의 폭만큼 빼준다 
	   $("<a href=\"" + $(".notice > div > a:last").attr("href")+ "\" style=\"margin-left:-" + aWidth + "px\">" + $(".notice > div > a:last").html()+ "</a>").insertBefore(".notice > div > a:first") 
	   // 맨처음 a태그의 margin-left를 다시 0으로 맞춰준다. 
	  $(".notice > div > a:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){ 
	   // 이동중 만약 일시정지 flag가 true라면 
	   if(movePause==true){ 
		  // 이동을 멈춘다 
		  $(this).stop(); 
	   } 
	   },complete:function(){ 
	   // 이동을 마친후 마지막 a태그를 지워버린다 
	   $(".notice > div > a:last").remove(); 
	   // 이미지 움직이는것을 다시 실행 
	   noticeBanner(); 
	}}); 
 } 
 } 
 } 
 function goMoveR(){ 
	// 일시정지가 풀려있을 경우를 대비하여 일시정지를 풀러준다 
	movePause=false; 
	// 0d\일경우 left방향 
	if(moveType==0){ 
	   noticeBanner(); 
	   }else{ 
	   $(".notice > div > a:first").animate({marginLeft:0},{duration:moveSpeed,step:function(){ 
	   // 이동중 만약 일시정지 flag가 true라면 
	   if(movePause==true){ 
		  // 이동을 멈춘다 
		  $(this).stop(); 
	  } 
	   },complete:function(){ 
	  // 이동을 마친후 마지막 a태그를 지워버린다 
	  //$(".notice > div > a:last").remove(); 
	  // 이미지 움직이는것을 다시 실행 
	  noticeBanner(); 
   }}); 
}
   
}
noticeBanner(); 
