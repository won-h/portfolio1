<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" />
	<title>fullPage</title>
	<link rel="stylesheet" type="text/css" href="./css/fullpage.min.css" />
	<link rel="stylesheet" type="text/css" href="./css/examples.css" />
	<!--link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,900" rel="stylesheet"-->


	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

	<style>
		h1{
			font-weight: 900;
			font-size: 8em;
			-webkit-text-shadow: 0 .3rem .9rem rgba(0,0,0,.4);
			text-shadow: 0 0.3rem 0.9rem rgba(0,0,0,.4);
			letter-spacing: -3px;
		}
		h1,
		.intro p{
			color: #fff;
			font-family: 'Source Sans Pro', sans-serif;
		}
		.intro p{
			text-shadow: -1px 1px 8px rgba(0,0,0,.8);
		}
		#section1 h1{
			-webkit-text-shadow: none;
			text-shadow: none;
		}
		#slide1-1 h1{
			color: #444;
		}
		/*
		* Setting the backgrounds for each section / slide
		*/
		#section4 .fp-bg:before,
		#section2 .fp-bg:before{
			content: '';
			position: absolute;
			display: block;
			background: rgba(173, 173, 173, 0.2);
			top:0;
			bottom:0;
			height: 100%;
			width: 100%;
		}
		.fp-bg{
			background-size: cover;
			transform: translate3d(0,0,0);
			-webkit-backface-visibility: hidden; /* Chrome, Safari, Opera */
    		backface-visibility: hidden;
		}
		#slide1-1 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-1-1.jpg');
			background-position: center 80%;
		}
		#slide1-2 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-3-2.jpg');
		}
		#slide1-3 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-3-3.jpg');
		}

		#section2 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-2.jpg');
			background-position: center 60%;
		}
		#section2 h1{
			color: #fff;
		}
		#section3 { background-color:#365; }
		#slide3-1 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-3.jpg');
			background-position: 50% 65%;
		}
		#slide3-2 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-3-2.jpg');
		}
		#slide3-3 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-3-3.jpg');
		}
		#slide3-4 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-3-4.jpg');
		}
		#section4 .fp-bg{
			background-image: url('https://alvarotrigo.com/fullPage/extensions/imgs/parallax/parallax-4.jpg');
		}
		.button a.button-purchase:hover {
			background-color: #3cc63c !important;
			color: #fff !important;
		}
		.button-purchase{
			background: #fff !important;
			color: #000 !important;
		}
		.documentation a{
			font-size: 13px;
			margin: 20px 0;
			padding: 0;
			color: #222;
		}
	</style>
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
		<?php if(true) { ?>
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
<input type="hidden" id="_4" value="3" />
<?php if(false) { ?>
<script type="text/javascript" src="./js/fullpage.extensions.min.js"></script>
<?php } else { ?>
<script type="text/javascript" src="./js/fullpage.js"></script>
<?php } ?>
<script type="text/javascript">
// Initializing fullpage.js
initialize(false);

function initialize(hasScrollBar){
	new fullpage('#myContainer', {
		anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage'],
		menu: '#menu',
		slidesNavigation: true,
		/*
		parallax: true,
		parallaxKey: 'YWx2YXJvdHJpZ28uY29tXzlNZGNHRnlZV3hzWVhnPTFyRQ==',
		parallaxOptions: {
			type: 'reveal',
			percentage: 62,
			property: 'translate'
		},
		*/
		scrollingSpeed: 1000,
		autoScrolling: true,
		scrollBar: hasScrollBar,
		fitToSection:false
	});
}

</script>

</body>
</html>
