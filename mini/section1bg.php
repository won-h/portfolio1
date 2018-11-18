<style type="text/css">
#section1bg1 { left:300px; top:520px; }
#section1bg2 { left:420px; top:310px; }
#section1bg3 { right:380px; top:350px; }
.section1bg { position:absolute; }
.section1bg span { display:inline-block; background-color:#6fa6ea; border-radius:50%; position:absolute; right:0; }
.section1bg span.sp1 { width:3px; height:220px; 
	-webkit-animation-name: sp1; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp1;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp1 {
		0% { transform:translate(0,150px); }
		100% { transform:translate(0,0); height:10px; opacity:0; }
	}
.section1bg span.sp2 { width:60px; height:3px; margin-bottom:10px; left:0;
	-webkit-animation-name: sp2; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp2;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp2 {
	0% { transform:translate(0,0); width:0; }
	60% { transform:translate(0,0); width:0; }
	100% { transform:translate(30px,0); width:60px; }
}
.section1bg span.sp3 { width:60px; height:3px; margin-bottom:10px; 
	-webkit-animation-name: sp3; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp3;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp3 {
	0% { transform:translate(0,0); width:0; }
	60% { transform:translate(0,0); width:0; }
	100% { transform:translate(-30px,0); width:60px; }
}
.section1bg span.sp4 { width:3px; height:60px; margin-bottom:10px;
	-webkit-animation-name: sp4; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp4;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp4 {
	0% { transform:translate(0,0); height:0; }
	60% { transform:translate(0,0); height:0; }
	100% { transform:translate(0,30px); height:60px; }
}
.section1bg span.sp5 { width:3px; height:60px; margin-bottom:10px;
	-webkit-animation-name: sp5; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp5;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp5 {
	0% { transform:translate(0,0); height:0; }
	60% { transform:translate(0,0); height:0; }
	100% { transform:translate(0,-90px); height:60px; }
}
.section1bg span.sp6 { width:3px; height:60px; margin-bottom:10px;
	-webkit-animation-name: sp6; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp6;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp6 {
	0% { transform:translate(0,0) rotate(45deg); height:0; }
	60% { transform:translate(0,0) rotate(45deg); height:0; }
	100% { transform:translate(70px,-90px) rotate(45deg); height:60px; }
}
.section1bg span.sp7 { width:3px; height:60px; margin-bottom:10px;
	-webkit-animation-name: sp7; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp7;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp7 {
	0% { transform:translate(0,0) rotate(-45deg); height:0; }
	60% { transform:translate(0,0) rotate(-45deg); height:0; }
	100% { transform:translate(-70px,-90px) rotate(-45deg); height:60px; }
}
.section1bg span.sp8 { width:3px; height:60px; margin-bottom:10px;
	-webkit-animation-name: sp8; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp8;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp8 {
	0% { transform:translate(0,0) rotate(-45deg); height:0; }
	60% { transform:translate(0,0) rotate(-45deg); height:0; }
	100% { transform:translate(70px,50px) rotate(-45deg); height:60px; }
}
.section1bg span.sp9 { width:3px; height:60px; margin-bottom:10px;
	-webkit-animation-name: sp9; /* Safari 4.0 - 8.0 */
	-webkit-animation-duration: 3s; /* Safari 4.0 - 8.0 */
	animation-name: sp9;
	animation-duration: 3s;
	animation-iteration-count:infinite; }
	@keyframes sp9 {
	0% { transform:translate(0,0) rotate(45deg); height:0; }
	60% { transform:translate(0,0) rotate(45deg); height:0; }
	100% { transform:translate(-70px,50px) rotate(45deg); height:60px; }
}
#section1bg1 span.sp3,
#section1bg1 span.sp7 { background-color:#fff; }
#section1bg1 span {
	-webkit-animation-duration: 2.5s; /* Safari 4.0 - 8.0 */
	animation-duration: 2.5s;
}

#section1bg2 span.sp2,
#section1bg2 span.sp3 { background-color:#fff; }
#section1bg2 span {
	-webkit-animation-duration: 2.7s; /* Safari 4.0 - 8.0 */
	animation-duration: 2.7s;
}

#section1bg3 span.sp6,
#section1bg3 span.sp7 { background-color:#fff; }
#section1bg3 span {
	-webkit-animation-duration: 2.9s; /* Safari 4.0 - 8.0 */
	animation-duration: 2.9s;
}

@media all and (max-width:800px) {
#section1bg1 { left:10%; top:10%; }
#section1bg2 { display:none; }
#section1bg3 { right:15%; bottom:18%; top:auto; }
}
</style>

<div id="section1bg1" class="section1bg">
	<span class="sp1"></span>
	<span class="sp2"></span>
	<span class="sp3"></span>
	<span class="sp4"></span>
	<span class="sp5"></span>
	<span class="sp6"></span>
	<span class="sp7"></span>
	<span class="sp8"></span>
	<span class="sp9"></span>
</div>
<div id="section1bg2" class="section1bg">
	<span class="sp1"></span>
	<span class="sp2"></span>
	<span class="sp3"></span>
	<span class="sp4"></span>
	<span class="sp5"></span>
	<span class="sp6"></span>
	<span class="sp7"></span>
	<span class="sp8"></span>
	<span class="sp9"></span>
</div>
<div id="section1bg3" class="section1bg">
	<span class="sp1"></span>
	<span class="sp2"></span>
	<span class="sp3"></span>
	<span class="sp4"></span>
	<span class="sp5"></span>
	<span class="sp6"></span>
	<span class="sp7"></span>
	<span class="sp8"></span>
	<span class="sp9"></span>
</div>