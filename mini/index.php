<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="./css/fullpage.min.css" />
	<link rel="stylesheet" href="./css/mini_main.css" />
	<link rel="stylesheet" type="text/css" href="../../font/font.css" />
	<!--[if lt IE 9]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
	<![endif]-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="./js/fullpage.js"></script>
	<script type="text/javascript" src="./js/mini_main.js"></script>
</head>
<body>

	<div id="gnb" style="display:none;">
		<div>
			<ul class="wrap">
				<li class="mouse_ico"></li>
				<li class="keyboard_ico"></li>
			</ul>
		</div>
	</div>
	<div id="loading">
		<span class="m">M</span>
		<span class="i1">I</span>
		<span class="n">N</span>
		<span class="i2">I</span>
		<img class="mini_logo" src="./img/MINI_LOGO_white2.png" alt=""/>
	</div>
	<div id="mini_wrap">
		<div class="section active" id="section1">
			<?php include_once './section1bg.php';?>
			<div class="section1_title">
				<h1><span>성년의날 기념</span> 대학생을 위한<br /><strong>드림카 지원 이벤트</strong></h1>
				<h3>만 19세 이상 대학생이라면 누구나! <span>미니 컨버터블 렌트 이벤트</span></h3>
			</div>
			<div class="mini_silhouette">
				<img src="http://www.won-h.com/portfolio/mini/img//mini_silhouette3.png" alt="" />
			</div>
			<video data-autoplay loop="loop">
				<source src="http://www.mini.co.kr/content/dam/MINI/common/Range/lci_f57/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4">
				<!--source src="http://www.won-h.com/portfolio/mini//img/MINI_wide_motion_video.mp4" type="video/mp4"-->
			</video>
		</div>

		<div class="section" id="section2">
			<div class="slide" id="slide2_1">
				<div class="wrap">
					<div class="contents">
						<div class="right"></div>
						<div class="left">
							<p class="event_title">EVENT 1</p>
							<h2>미니 컨버터블 무료 렌트</h2>
							<div class="txt">매 주 월요일 한 분을 추첨하여 <br />
							7일간 무료로 대여할 수 있는 기회를 드립니다.</div>
							<p class="foottxt">
							당첨여부는 휴대폰 번호, 이메일주소로 고지해드립니다.<br />
							차량을 대여하실 날짜를 지정 할 수있습니다.<br />
							같은 휴대폰 번호, 이메일주소의 응모는 주 1회를 초과할 수 없습니다.<br />
							본 이벤트는 프로모션형 이벤트로 사전 고지 없이 종료될 수 있습니다.<br />
							차량 대여비를 제외한 모든 금액(보험/주유/주차 등)은 자기부담입니다.<br />
							사고 발생시 당사는 어떠한 법적책임이 없음을 알려드립니다.
							</p>
						</div>
					</div>
				</div>
			</div>
			<div class="slide" id="slide2_2">
				<div class="wrap">
					<div class="contents">
						<div class="right"></div>
						<div class="left">
							<p class="event_title">EVENT 2</p>
							<h2>차량 구매 최대 15% 지원</h2>
							<div class="txt">본 이벤트에 응모하신 모든 분께<br />
							차량 구매시 구매금액의 최대 15%를 지원합니다.</div>
							<p class="foottxt">
							응모자 본인만 이벤트의 혜택을 받을 수 있습니다.<br />
							본 이벤트의 혜택은 MINI KOREA 서비스센터에서만 유효합니다.<br />
							본 이벤트의 할인 기준은 차량모델, 옵션에 따라 달라질 수 있습니다. <br />
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section active" id="section3">
			<div class="wrap">
				<form class="contents">
					<p class="input_title">이벤트 응모하기</p>
					<div class="listinput">
						<ul class="list3">
							<li>이름</li>
							<li>휴대폰 번호</li>
							<li>이메일 주소</li>
						</ul>
						<ul class="input3">
							<li><input type="text" /></li>
							<li><input type="text" /></li>
							<li><input type="email" /></li>
						</ul>
					</div>
					<div class="agree">
						<input type="checkbox" id="ch1" name="ch1"/><label for="ch1">만 19세이며, 입력한 번호/ 메일로 응모결과를 받는것에 동의합니다. </label>
						<br />
						<input type="checkbox" id="ch2" name="ch2"/><label for="ch1">모든 약관에 동의합니다. </label>
						<a class="agr1" href="javasciript:void(0);">개인정보 취급방침</a>
						<a class="agr2" href="javasciript:void(0);">기타 방침</a>
					</div>
					<button><span>응모하기</span></button>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function initialize(){
			new fullpage('#mini_wrap', {
			anchors: ['page1', 'page2', 'page3', 'page4'],
			menu: '#menu',
				slidesNavigation: true,
				scrollingSpeed: 900,
				autoScrolling: true,
				scrollBar: false,
				fitToSection:false

			});
		}
		initialize(true);

	</script>

</body>
</html>
