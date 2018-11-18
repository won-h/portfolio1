<!DOCTYPE html>
<html>
<head>
	<title>맵핑 - 새로운 여행플랫폼</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="http://www.won-h.com/portfolio/mapping/img//favicon_n1.ico" type="image/ico" sizes="16x16">
	<link rel="stylesheet" type="text/css" href="../../font/font.css" />
	<link rel="stylesheet" type="text/css" href="./css/m.css" />
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<script type="text/javascript" src="./js/m.js"></script>
</head>
<body>
	<header>
		<nav id="gnb" class="wrap">
			<a href="/portfolio/mapping/m.php" class="logo"></a>
			<li>
				<a href="javascript:void(0);">항공권</a>
				<a href="javascript:void(0);">호텔</a>
				<a href="javascript:void(0);" class="my" alt="내정보">내 정보</a>
			</li>
		</nav>
	</header>

	<!--log_box-->
	<div class="blindBackground"></div>
	<div id="log_box">
		<div class="log_box_title">
			<a href="javascript:void(0);" class="back">닫기</a>
			<img src="http://www.won-h.com/portfolio/mapping/img/login_logo.png" alt="" />
		</div>
		<div class="log_box_content">
			<div class="log_id">
				<input type="text" placeholder="아이디 혹은 이메일"/>
			</div>
			<div class="log_password">
				<input type="password" placeholder="비밀번호"/>
			</div>
			<div class="log_idSave">
				<input type="checkbox" id="log_idSave" /><label for="log_idSave">아이디 저장</label>
			</div>
			<div class="log_enter">
				<button><span>로그인</span></button>
			</div>
			<div class="log_find">
				<p>아이디 혹은 비밀번호를 잊으셨거나<br /> 변경이 필요하신가요?</p>
				<a href="javascript:void(0);">아이디 찾기 / 비밀번호 재설정하기</a>
			</div>
			<div class="log_another">
				<a href="javascript:void(0);" class="naver">네이버 로그인</a>
				<a href="javascript:void(0);" class="kakao">카카오 로그인</a>
			</div>
			<div class="log_member">
				<p>아직 맵핑의 회원이 아니신가요?</p>
				<a href="javascript:void(0);">맵핑 회원가입하기</a>
			</div>
		</div>
	</div>
	<!--log_box-->

	<!--choice_box-->
		<?php include_once './choice_box_m.php';?>
	<!--choice_box-->

	<article id="travelBanner" class="banner">
		<img src="http://www.won-h.com/portfolio/mapping/img/m/travel_banner2.png" alt="" />
	</article>

	<article id="airline">
		<ul class="line_section_box">
			<li class="list1"><a href="javascript:void(0);">편도</a></li>
			<li class="list2 on"><a href="javascript:void(0);">왕복</a></li>
			<li class="list3"><a href="javascript:void(0);">다구간</a></li>
		</ul>
		<form>
			<ul>
				<li class="start">출발지</li>
				<li class="arrive">도착지</li>
			</ul>
			<ul>
				<li class="day">날짜</li>
			</ul>
			<ul>
				<li class="person">성인1명</li>
				<li class="seat">일반석</li>
			</ul>
			<ul class="decide">
				<li class="direct">직항<span class="dirsp1"></span><span class="dirsp2"></span></li>
				<li class="enter">항공권 검색</li>
			</ul>
		</form>
	</article>

	<form>
		<article id="review">
			<div class="top">
				<p>Review</p>
				<ul>
					<li><a class="on" href="javascript:void(0);">최신순</a></li>
					<li><a href="javascript:void(0);">조회순</a></li>
				</ul>
				</div>
			<div class="top">
				<input type="text" />
				<button><span>검색</span></button>
			</div>
		</article>

		<div class="reviewBlind">
			<div class="wrap">
				<p>목록을 가져오고 있습니다. <br />잠시만 기다려주세요.</p>
				<div class="i1"></div>
				<div class="i2"></div>
				<div class="i3"></div>
			</div>
		</div>

		<!--리뷰목록 가져오기 : S-->
		<div id="loading">
			<span>16명이 리뷰 작성 중</span>
			<div class="i1"></div>
			<div class="i2"></div>
			<div class="i3"></div>
		</div>

		<div id="reviews_content">
			<div class="member_r">
				<div class="img_wrap">
					<img src="http://www.won-h.com/portfolio/mapping/img/review_content1.png" alt="" />
				</div>
				<div class="text_wrap">
					<p>베네치아</p>
					<span>신행 자유여행으로 베네치아 다녀왔어요~</span>
				</div>
			</div>
			<div class="member_r">
				<div class="img_wrap">
					<img src="http://www.won-h.com/portfolio/mapping/img/review_content1.png" alt="" />
				</div>
				<div class="text_wrap">
					<p>베네치아</p>
					<span>신행 자유여행으로 베네치아 다녀왔어요~</span>
				</div>
			</div>
			<div class="member_r">
				<div class="img_wrap">
					<img src="http://www.won-h.com/portfolio/mapping/img/review_content1.png" alt="" />
				</div>
				<div class="text_wrap">
					<p>베네치아</p>
					<span>신행 자유여행으로 베네치아 다녀왔어요~</span>
				</div>
			</div>
			<div class="member_r">
				<div class="img_wrap">
					<img src="http://www.won-h.com/portfolio/mapping/img/review_content1.png" alt="" />
				</div>
				<div class="text_wrap">
					<p>베네치아</p>
					<span>신행 자유여행으로 베네치아 다녀왔어요~</span>
				</div>
			</div>
			<a href="javascript:void(0);">리뷰 더 보기</a>
		</div>
		<!--리뷰목록 가져오기 : E-->
	</form>

	<footer>
		<ul class="info">
			<li><a href="javascript:void(0);">이용약관</a></li>
			<li><a href="javascript:void(0);">개인정보처리방침</a></li>
			<li><a href="javascript:void(0);">책임의 한계와 법적고지</a></li>
			<li><a href="javascript:void(0);">고객의 권리 안내</a></li>
			<li><a href="javascript:void(0);">항공권 고객센터</a></li>
			<li><a href="javascript:void(0);">호텔 고객센터</a></li>
		</ul>
		<div class="advise">
			<p>맵핑은 제휴사에서 제공하는 항공권 / 호텔 스케줄 및 가격정보를 비교 및 중개하는 서비스로서 당사는 통신판매의 당사자가 아닙니다.</p>
			<p>항공권 및 호텔 검색 결과, 구매 및 환불 등과 관련한 의무와 책임은 각 판매자에게 있습니다. </p>
		</div>
		<div class="info2">
			<ul>
				<li>서울시 관악구 봉천동 1633-10</li>
				<li>디자인/퍼블리싱 :  원재현</li>
				<li>사업자등록번호 : 010-8299-8169</li>
			</ul>
			<p>Copyright / won-h.com / All Rights Reserved.</p>
		</div>
	</footer>
</body>
</html>