<!DOCTYPE html>
<html>
<head>
	<title>맵핑 - 새로운 여행플랫폼</title>
	<link rel="icon" href="http://www.won-h.com/portfolio/mapping/img//favicon_n1.ico" type="image/ico" sizes="16x16">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../../font/font.css" />
	<link rel="stylesheet" type="text/css" href="./css/airline.css" />
	<!--link rel="stylesheet" type="text/css" href="./css/m.css" /-->
	<script type="text/javascript" src="./js/airline.js"></script>
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
				<li class="line1"><a href="javascript:void(0);" name="mainText">편도</a></li>
				<li class="line2 on"><a href="javascript:void(0);">왕복</a></li>
				<li class="line3"><a href="javascript:void(0);">다구간</a></li>
			</ul>

			<div class="airline_start" onclick="$('.start_option').show();">
				<button id="start_btn" label="출발지" value="출발지" type="submit">
					<span class="stext1">출발지를 선택해주세요.</span>
					<span class="stext2">출발지</span>
					<span class="stext3">인천<span class="blue">ICN</span></span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_arrive">
				<button id="arrive_btn" label="도착지" value="도착지" type="submit">
					<span class="stext1">도착지를 선택해주세요.</span>
					<span class="stext2">도착지</span>
					<span class="stext3">인천<span class="blue">ICN</span></span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_day">
				<button id="day_btn" label="기간" value="기간" type="submit">
					<span class="stext1">날짜를 선택해주세요.</span>
					<span class="stext2">날짜</span>
					<span class="stext3">2018.10.24 - 2018.10.31</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_person">
				<button id="person_btn" label="인원" value="인원" type="submit">
					<span class="stext3">성인 1명</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<div class="airline_seat">
				<button id="seat_btn" label="좌석" value="좌석" type="submit">
					<span class="stext3">일반석</span>
					<span class="emo_arrow"></span>
				</button>
			</div>

			<a href="javascript:void(0);" class="airline_seat_dt">직항</a>

			<button id="check_search" label="검색" value="검색" type="submit">
				<span>항공권 검색</span>
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
				<span>16명이 리뷰 작성 중</span>
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
