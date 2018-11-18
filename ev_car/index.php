<!DOCTYPE html>
<html>
<head>
	<title>EV CAR - portfolio</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../../font/font.css" />
	<link rel="stylesheet" type="text/css" href="./css/ev_car.css" />
	<link rel="stylesheet" type="text/css" href="./css/m.css" />
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="./js/ev_car.js"></script>
</head>

<body>
	<!--header-->
	<?php include_once './header.php';?>
	<!--header-->

	<!--index-->
	<div class="index_main">
		<div class="wrap">
			<h1>스마트한 전기차 라이프! </h1>
			<h2>환경부는 2011년부터 온실가스와 대기오염물질을 줄여<br />
			대기질을 개선하고자 전기자동차 보급사업을 추진하고 있습니다.</h2>
			<a href="./introduce.php">자세히 보기 ></a>
		</div>
	</div>

	<div class="middle_banner">
		<div class="wrap">
			<a class="ne_banner" href="#">
				<span></span>
				<h2>전기차 유지비 비교</h2>
				<h3>고유가 시대, 저비용 고효율의 연비 최강 전기차! 비교자료를 통하여<br />
				휘발유·경유 차 대비 전기차 유지비 정보를 제공합니다.</h3>
			</a>
			<div class="side_menu">
				<ul>
					<li class="list1"><a href="javascript:void(0);"><span>구매 지원 안내</span></a></li>
					<li class="list2"><a href="javascript:void(0);"><span>충전소 찾기 및 안내</span></a></li>
					<li class="list3"><a href="javascript:void(0);"><span>구매 보조금 지급 현황</span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="card">
		<div class="wrap">
			<div class="cardbox">
				<h4>환경부</h4>
				<h3><span>전기차 회원카드</span><br />
				신청 및 발급</h3>
				<a href="javascript:void(0);">
					<span class="sp1"></span><span class="sp2"></span>
				</a>
			</div>
		</div>
	</div>

	<div class="notice_banner">
		<div class="wrap">
			<div class="guide">
				<span>법령/지침/가이드 라인</span>
				<a class="other" href="#"><span class="horizontal"></span><span class="vertical"></span></a>
				<div>
					<a href="javascript:void(0);"><img src="./img/guide_banner1.png" alt="가이드 배너1" /></a>
					<a href="javascript:void(0);"><img src="./img/guide_banner2.png" alt="가이드 배너2" /></a>
				</div>
			</div>
			<div class="notice">
				<span>NEXT</span>
				<!--a class="other" href="#"><span class="horizontal"></span><span class="vertical"></span></a-->
				<div>
					<a href="javascript:void(0);"><img src="./img/notice_banner1.png" alt="공지 배너1" /></a>
					<a href="javascript:void(0);"><img src="./img/notice_banner2.png" alt="공지 배너2" /></a>
				</div>
			</div>
			<div class="clear"></div>
			<div class="banner_nav">
				<?php if(false) { ?>
				<button class="left" onClick="moveType=0;"></button>  
				<button class="right" onClick="moveType=1;"></button>
				<?php } ?>
				<button class="stop" onClick="movePause=true;"></button>  
				<button class="play" onClick="goMoveL();goMoveR();"></button>  
			</div>
		</div>
	</div>
	<script type="text/javascript" src="./js/rolling_banner.js"></script>
	<!--index-->

	<!--footer-->
	<?php include_once './footer.php';?>
	<!--footer-->
</body>
</html>