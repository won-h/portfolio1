<!DOCTYPE html>
<html>
<head>
	<title>맵핑 - 새로운 여행플랫폼</title>
	<link rel="icon" href="http://www.won-h.com/portfolio/mapping/img//favicon_n1.ico" type="image/ico" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../font/font.css" />
	<link rel="stylesheet" type="text/css" href="./css/hotel.css" />
	<!--link rel="stylesheet" type="text/css" href="./css/m.css" /-->
	<script type="text/javascript" src="./js/hotel.js"></script>
</head>
<body>

<!--header-->
	<header>
		<div class="wrap">
			<a href="#mainText" class="blind">본문 바로가기</a>
			<a href="/portfolio/mapping/" class="logo">
				<img src="http://www.won-h.com/portfolio/mapping/img/login_logo.png" alt="" />
			</a>
			<ul class="nb">
				<li><a href="/portfolio/mapping/airline.php">항공권</a></li>
				<li><a href="/portfolio/mapping/hotel.php">호텔</a></li>
			</ul>
			<ul class="my_menu">
				<li><a href="javascript:void(0);" class="logbox" onclick="$('.blindBackground').show();$('#log_box').fadeIn();" alt="로그인">로그인</a></li>
			</ul>
		</div>
	</header>

	<!--log_box-->
	<div class="blindBackground" onclick="$('.blindBackground').hide();$('#log_box').fadeOut();"></div>
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

	<article>
		<aside id="left">
			<ul>
				<li class="star all on"><input type="checkbox" name="star" id="star_all" /><label for="star_all">전체</label></li>
				<li class="star num12"><input type="checkbox" name="star"  id="star_12"/><label for="star_12">★ 1~2</label></li>
				<li class="star num3"><input type="checkbox" name="star"  id="star_3"/><label for="star_3">★ 3</label></li>
				<li class="star num45"><input type="checkbox" name="star"  id="star_45"/><label for="star_45">★ 4~5</label></li>
			</ul>

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
		</aside>


		<aside id="right">
			<div class="review_head">
				<h4>Review</h4>
				<div class="review_search">
					<input id="review_search" type="text" placeholder="여행지 또는, 도시명을 검색해주세요.">
					<button id="review_search_enter" label="검색" value="검색" type="submit"><span>검색</span></button>
				</div>
				<div class="check">
					<span class="first on">최신순</span>
					<span>조회순</span>
				</div>
			</div>

			<!--loading-->
			<div id="loading">
				<span>10명이 리뷰 작성 중</span>
				<div class="i1"></div>
				<div class="i2"></div>
				<div class="i3"></div>
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
			</div>
		</aside>

	</article>
</body>
</html>
