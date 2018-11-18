<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>fullPage</title>
	<link rel="stylesheet" type="text/css" href="./css/fullpage.min.css" />
	<link rel="stylesheet" type="text/css" href="./css/examples.css" />
	<script type="text/javascript" src="./js/fullpage.js"></script>

</head>
<body>

<ul id="menu">
	<li data-menuanchor="firstPage"><a href="#firstPage">First slide</a></li>
	<li data-menuanchor="secondPage"><a href="#secondPage">Second slide</a></li>
	<li data-menuanchor="3rdPage"><a href="#3rdPage">Third slide</a></li>
	<li data-menuanchor="4thpage"><a href="#4thpage">Fourth slide</a></li>
</ul>

<div id="myContainer">

	<div class="section" id="section1">
		<div class="slide" id="slide1-1">
			<video data-autoplay loop="loop">
				<source src="http://www.mini.co.kr/content/dam/MINI/common/Range/lci_f57/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4">
				<!--source src="./img/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4"-->
			</video>
		</div>
		<div class="slide" id="slide1-2">
		<?php if(false) { ?>
			<div class="fp-bg"></div>
			<div class="intro">
				<h1>fullPage.js</h1>
				<img src="https://alvarotrigo.com/fullPage/extensions/imgs/parallax/trusted.png" />
			</div>
		<?php } else { ?>
			<video data-autoplay loop="loop">
				<source src="http://www.mini.co.kr/content/dam/MINI/common/Range/lci_f57/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4">
				<!--source src="./img/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4"-->
			</video>
		<?php } ?>
		</div>
		<div class="slide" id="slide1-3">
			<div class="fp-bg"></div>
			<div class="intro">
				<h1>Free support</h1>
				<p>Extension issues are supported at no extra cost!</p>
			</div>
		</div>
	</div>

	<div class="section" id="section2">
			<video data-autoplay loop="loop">
				<source src="http://www.mini.co.kr/content/dam/MINI/common/Range/lci_f57/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4">
				<!--source src="./img/MINI_LCI_F57_wide_Motion_Video.mp4" type="video/mp4"-->
			</video>
	</div>

	<div class="section" id="section3">
		<div class="slide" id="slide3-1">
			<div class="fp-bg"></div>
			<div class="intro">
				<h1>TAKE CONTROL</h1>
				<p>Totally configurable.</p>
				<p>For sections & slides! </p>
			</div>
		</div>
		<div class="slide" id="slide3-2">
			<div class="fp-bg"></div>
			<div class="intro">
				<h1>GUARRANTEE</h1>
				<p>30 days money back guarratee if no domain was activated.</p>
			</div>
		</div>
		<div class="slide" id="slide3-3">
			<div class="intro">
				<div class="fp-bg"></div>
				<h1>TRUSTED</h1>
				<p>Join thoudands of other developers who trusted fullPage.js extensions!</p>
			</div>
		</div>
		<div class="slide" id="slide3-4">
			<div class="fp-bg"></div>
			<div class="intro">
				<h1>DOCUMENTED</h1>
				<p>If fullPage.js is known for one thing it's for its great documentation!</p>
			</div>
		</div>
	</div>

	<div class="section" id="section4">
		<div class="fp-bg"></div>
		<div class="intro">
			<h1>IMPRESS</h1>
			<p>Take it to the next level!</p>
		</div>
	</div>
</div>

<script type="text/javascript">
	function initialize(){
		new fullpage('#myContainer', {
		anchors: ['page1', 'page2', 'page3', 'page4'],
		menu: '#menu',
			slidesNavigation: true,
			scrollingSpeed: 900,
			autoScrolling: true,
			scrollBar: false,
			fitToSection:false

		});
	}
	initialize(false);

</script>

</body>
</html>
