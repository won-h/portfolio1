<!DOCTYPE html>
<html>
<head>
	<title>맵핑 - 새로운 여행플랫폼</title>
	<link rel="icon" href="http://www.won-h.com/portfolio/mapping/img//favicon_n1.ico" type="image/ico" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../font/font.css" />
	<link rel="stylesheet" type="text/css" href="./css/main.css" />
	<!--link rel="stylesheet" type="text/css" href="./css/m.css" /-->
	<script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<!--header-->
	<header>
		<nav>
			<ul>
				<a href="#mainText" class="blind">본문 바로가기</a>
				<li><a href="/portfolio/mapping/airline.php">항공권</a></li>
				<li><a href="/portfolio/mapping/hotel.php">호텔</a></li>
				<!--
				<li><a href="/portfolio/mapping/travel_review.php">여행리뷰</a></li>
				<li><a href="/portfolio/mapping/hotel_review.php">호텔리뷰</a></li>
				-->
			</ul>
			<ul class="nav_right">
				<li><a href="javascript:void(0);" class="logbox" onclick="$('.blindBackground').show();$('#log_box').fadeIn();" alt="로그인">로그인</a></li>
			</ul>
		</nav>
		<div class="headLine">
			<img src="http://www.won-h.com/portfolio/mapping/img/main_logo2.png" alt="mapping_logo" />
			<h1>새로운 여행플랫폼 맵핑</h1>
			<h3>항공권 및 호텔 예약부터 다른 회원들의 리얼한 후기까지<br />
			맵핑에서 자신에게 맞는 여행일정 관리를 짜보세요.</h3>
		</div>
	</header>

	<!--log_box-->
	<div class="blindBackground"></div>
	<div id="log_box">
		<div class="log_box_title">
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
				<p>아이디 혹은 비밀번호를 잊으셨거나 변경이 필요하신가요?</p>
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
		<?php include_once './choice_box.php';?>
	<!--choice_box-->

	<!--article-->
	<article>
		<div class="airline">
			<ul>
				<li class="line1"><a href="javascript:void(0);" name="mainText">편도</a></li>
				<li class="line2 on"><a href="javascript:void(0);">왕복</a></li>
				<li class="line3"><a href="/portfolio/mapping/airline.php">다구간</a></li>
			</ul>

			<div class="airline_start" onclick="$('.start_option').show();">
				<button id="start_btn" class="start_btn" label="출발지" value="출발지" type="submit">
					<span class="stext1">출발지를 선택해주세요.</span>
					<span class="stext2">출발지</span>
					<span class="stext3">인천<span class="blue">ICN</span></span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_arrive">
				<button id="arrive_btn" class="arrive_btn" label="도착지" value="도착지" type="submit">
					<span class="stext1">도착지를 선택해주세요.</span>
					<span class="stext2">도착지</span>
					<span class="stext3">인천<span class="blue">ICN</span></span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_day">
				<button id="day_btn" class="day_btn" label="기간" value="기간" type="submit">
					<span class="stext1">날짜를 선택해주세요.</span>
					<span class="stext2">날짜</span>
					<span class="stext3">2018.10.24 - 2018.10.31</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_person">
				<button id="person_btn" class="person_btn" label="인원" value="인원" type="submit">
					<span class="stext3">성인 1명</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_seat">
				<button id="seat_btn" class="seat_btn" label="좌석" value="좌석" type="submit">
					<span class="stext3">일반석</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<a class="airline_seat_dt" href="javascript:void(0);">직항</a>

			<button id="check_search" label="검색" value="검색" type="submit">
				<span>항공권 검색</span>
			</button>

		</div>


		<div class="hotel">
			<form action="" id="hotelCheck" name="hotelCheck">
				<ul>
					<li class="star all on"><input type="checkbox" name="star" id="star_all"/><label for="star_all">전체</label></li>
					<li class="star num12"><input type="checkbox" name="star"  id="star_12"/><label for="star_12">★ 1~2</label></li>
					<li class="star num3"><input type="checkbox" name="star"  id="star_3"/><label for="star_3">★ 3</label></li>
					<li class="star num45"><input type="checkbox" name="star"  id="star_45"/><label for="star_45">★ 4~5</label></li>
				</ul>
			</form>

			<div class="hotel_city">
				<button id="city_btn" label="도시" value="도시" type="submit">
					<span class="stext1">지역명, 명소 또는 호텔명 검색</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="hotel_checkin">
				<button id="checkin_btn" label="체크인" value="체크인" type="submit">
					<span class="stext1">체크인</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="hotel_checkout">
				<button id="checkout_btn" label="체크아웃" value="체크아웃" type="submit">
					<span class="stext1">체크아웃</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="hotel_person">
				<button id="hotel_person_btn" label="인원" value="인원" type="submit">
					<span class="stext3">성인 1명</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<button id="hotel_check_search" label="검색" value="검색" type="submit">
				<span>호텔 검색</span>
			</button>
		</div>

	</article>

	<!--aside travel-->
	<aside id="travel_review">
		<div class="reviews">
			<div class="review_head">
				<h4>Review</h4>
				<div class="check">
					<span class="first on">최신순</span>
					<span>조회순</span>
				</div>
			</div>
			<div class="review_search">
				<input id="review_search" type="text" placeholder="여행지 또는, 도시명을 검색해주세요." />
				<button id="review_search_enter" label="검색" value="검색" type="submit"><span>검색</span></button>
			</div>
			<a href="javascript:void(0);" class="banner"><img src="http://www.won-h.com/portfolio/mapping/img/banner13.png" alt="" /></a>
			<a href="javascript:void(0);" class="banner"><img src="http://www.won-h.com/portfolio/mapping/img/banner14.png" alt="" /></a>
		</div>

		<div class="reviews_content">

			<div class="member_r">
				<div class="img_wrap">
					<img src="http://www.won-h.com/portfolio/mapping/img/review_content1.png" alt="" />
				</div>
				<div class="text_wrap">
					<p>베네치아</p>
					<span>신행 자유여행으로 베네치아 다녀왔어요~ 가나다라마바사아자차카타파하 ABCDE</span>
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

			<!--loading-->
			<div id="loading">
				<span>16명이 리뷰 작성 중</span>
				<div class="i1"></div>
				<div class="i2"></div>
				<div class="i3"></div>
				<a href="javascript:void(0);">더 많은 여행리뷰 보기</a>
			</div>

		</div>
	</aside>

	<!--aside hotel-->
	<aside id="hotel_review">
		<div class="reviews">
			<div class="review_head">
				<h4>Review</h4>
				<div class="check">
					<span class="first on">최신순</span>
					<span>조회순</span>
				</div>
			</div>
			<div class="hotel_review_search">
				<input id="hotel_review_search" type="text" placeholder="여행지 또는, 도시명을 검색해주세요." />
				<button id="hotel_review_search_enter" label="검색" value="검색" type="submit"><span>검색</span></button>
			</div>
			<a href="javascript:void(0);" class="banner"><img src="http://www.won-h.com/portfolio/mapping/img/banner11.png" alt="" /></a>
			<a href="javascript:void(0);" class="banner"><img src="http://www.won-h.com/portfolio/mapping/img/banner12.png" alt="" /></a>
		</div>

		<div class="reviews_content">

			<div class="member_r">
				<div class="img_wrap">
					<img src="http://www.won-h.com/portfolio/mapping/img/review_content1.png" alt="" />
				</div>
				<div class="text_wrap">
					<p>베네치아</p>
					<span>신행 자유여행으로 베네치아 다녀왔어요~ 가나다라마바사아자차카타파하 ABCDE</span>
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

			<!--loading-->
			<div id="loading2">
				<span>13명이 리뷰 작성 중</span>
				<div class="i1"></div>
				<div class="i2"></div>
				<div class="i3"></div>
				<a href="javascript:void(0);">더 많은 호텔리뷰 보기</a>
			</div>

		</div>
	</aside>

	<!--footer-->
	<footer>
	<button class="top_arrow"></button>
		<ul class="info">
			<li><a href="javascript:void(0);">이용약관</a></li>
			<li><a href="javascript:void(0);">개인정보처리방침</a></li>
			<li><a href="javascript:void(0);">책임의 한계와 법적고지</a></li>
			<li><a href="javascript:void(0);">고객의 권리 안내</a></li>
			<li><a href="javascript:void(0);">항공권 고객센터</a></li>
			<li><a href="javascript:void(0);">호텔 고객센터</a></li>
		</ul>
		<div class="friend_logo">
			<img src="http://www.won-h.com/portfolio/mapping/img/friend_logo.png" alt="" />
		</div>
		<div class="advise">
			<p>맵핑은 제휴사에서 제공하는 항공권 및 호텔 스케줄 및 가격정보를 비교, 중개하는 서비스로서 당사는 통신판매의 당사자가 아니며,</p>
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