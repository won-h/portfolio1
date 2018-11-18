<!DOCTYPE html>
<html>
<head>
	<title>EV CAR - Introduce</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="http://code.jquery.com/jquery-1.12.4.min.js"></script>
	<link rel="stylesheet" href="../../font/font.css" />
	<link rel="stylesheet" href="./css/ev_car.css" />
	<link rel="stylesheet" href="./css/m.css" />
	<script type="text/javascript" src="./js/ev_car.js"></script>
	<script type="text/javascript" src="./js/introduce.js"></script>
</head>

<body>
	<!--header-->
	<?php include_once './header.php';?>
	<!--header-->

	<!--article-->
	<article class="introduce_art1">
		<div class="wrap">
			<h3>합리적인 선택</h3>
			<h2>전기차의 특징</h2>
			<div class="box1">
				<p>친환경적<br /><br />
					<span>
						- <br />
						주행시 화석연료를<br />
						사용하지 않아 CO2나 NOx를<br />
						배출하지 않음<br /><br />

						-<br />
						엔진 소음이 적고, <br />
						진동이 적음
					</span>
				</p>
			</div>
			<div class="box2">
				<p>경제적<br /><br />
					<span>
						- <br />
						전기모터로만 구동할 경우<br />
						운행비용이 가장 저렴하고,<br />
						심야 전기를 이용할 경우<br />
						비용을 더 낮출 수 있음<br /><br />

						- <br />
						차량 수명이 상대적으로 김<br />
					</span>
				</p>
			</div>
			<div class="box3">
				<p>안전성<br /><br />
					<span>
						- <br />
						사고 시 폭발의 위험성이 적음
					</span>
				</p>
			</div>
			<div class="box4">
				<p>편의성<br /><br />
					<span>
						-<br />
						심야 전력으로 자택에서<br />
						충전 가능<br /><br />

						-<br />
						기어를 바꿔줄 필요가 없어<br />
						운전 조작이 간편
					</span>
				</p>
			</div>
		</div>
	</article>

	<article class="introduce_art2">
		<div class="wrap">
			<div class="wrap_left">
				<div class="l300">
					<img src="./img/article2_img1.png" alt="" />
					<p>전기차 고유의 발진 가속</p>
					<span>
					전기모터 특유의 우수한<br />
					초기 발진 토크로 혼잡한<br />
					도심에서 가속력을 높여준다.
					</span>
				</div>
				<div class="r300">
					<img src="./img/article2_img2.png" alt="" />
					<p>회생 제동</p>
					<span>
					브레이크를 밟으면 모터가<br />
					발전기로 전환되어<br />
					반대로 배터리가 충전되는<br />
					기능으로 특히 제동 횟수가<br />
					많은 도심에서 주행 효율성을<br />
					높여준다.
					</span>
				</div>
			</div>

			<div class="wrap_right">
				<div class="l300">
					<img src="./img/article2_img3.png" alt="" />
					<p>급속 충전</p>
					<span>
					주행중 배터리 잔량이 부족할<br />
					경우, 공공 충전소를 통해<br />
					24~33분 내외의 짧은 시간에<br />
					급속 충전이 가능하다.  
					</span>
				</div>
				<div class="r300">
					<img src="./img/article2_img4.png" alt="" />
					<p>완속충전 상태에서의 예냉 / 예열</p>
					<span>
					충전기 플러그인 상태에서<br />
					공조장치를 미리 가동시키면<br />
					쾌적한 상태로 드라이빙이 가능하며<br />
					출발 시 에너지 소비를 줄여 주행<br />
					거리를 연장하는데 도움이 된다.
					</span>
				</div>
			</div>
		</div>
	</article>

	<article class="introduce_art3">
		<div class="wrap">
			<div class="wrap_left">
				<p>전기차의 작동원리</p>
				<p>
				전기차는 고전압 배터리에서 전기에너지를 전기모터로 공급하여<br />
				구동력을 발생시키는 차량으로, 화석연료를 전혀 사용하지 않는<br />
				무공해 차량입니다.
				</p>
				<img src="./img/article3_img1.png" alt="" />
				<span>
				내연기관차와 달리 엔진이 없이 배터리와 모터만으로 차량 구동<br />
				엔진이 없으므로 대기오염물질과 온실가스를 배출하지 않음<br />
				배터리 용량에 따라 주행가능 거리에 차이가 있음
				</span>
			</div>
			<div class="wrap_right">
				<p>전기차의 내부구조</p>
				<img src="./img/article3_img2.png" alt="" />
				<span class="span1">
				외부 전력 공급을 통한 충전 필요<br /><br />
				급속충전기는 50kW급으로 완전방전상태에서<br />
				80%충전까지 30분이 소요되며, 완속충전기는<br />
				약 6~7kW급으로 완전방전에서 완전충전<br />
				까지4~5시간이 소요됨
				</span>
				<span class="span2">
				내연기관 엔진없이 충전된 배터리에서<br />
				공급되는 전기에너지만을 동력원으로<br />
				전기모터를 구동<br /><br />

				회생제동 기능을 이용한 운행 중 배터리<br />
				충전으로 제동횟수가 많은 도심에서<br />
				에너지 효율성 극대화<br /><br />

				* 회생제동 : 브레이크 제동 시 모터가<br />
				발전기로 전환되어 역으로 배터리를 충전<br />
				</span>
			</div>
			<div class="clear"></div>
			<p class="copy">[출처] 환경부 친환경 자동차(2015.12) (구조그림 포함)</p>
		</div>
	</article>
	<!--article-->

	<!--footer-->
	<?php include_once './footer.php';?>
	<!--footer-->
</body>
</html>