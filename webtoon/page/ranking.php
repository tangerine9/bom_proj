<style>
#ranking_tab img {
	width: 15px;
	margin-right: 5px;
}
#ranking_tab .title {
	font-weight: bold;
	font-size: 13px;
	color: #FFF;
	background-color: #adc7ce;
	padding: 3px;
	text-align: center;
	margin-bottom: 7px;
	width: 50%;
	float: left;
	cursor: pointer;
}
#ranking_tab li {
	width: 50%;
	float: left;
}
#ranking_tab .contain {
	display: none;
	background-color: #FFF;
	height: 100px;
}
#ranking_tab .active {
	display: block !important;
}
#ranking_tab .on {
	background-color: #50c3f8 !important;
}
</style>

<script>
	function tab_rank(num) {
		$("#ranking_tab .contain").removeClass('active');
		$("#ranking_tab .title").removeClass('on');
		var target = '#tab_container'+num;
		$(target).addClass('active');
		var target_title = '#tab_rank'+num;
		$(target_title).addClass('on');
	}
</script>
<div class='box'>
	<h6 class='rnb_title'>랭킹</h6>
	<div id="ranking_tab">
		<div id="tab_rank1" onclick="tab_rank(1)" class="title on">작가</div>
		<div id="tab_rank2" onclick="tab_rank(2)" class="title">키워드</div>

		<ul id="tab_container1" class='contain active'>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>시니</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>김칸비</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>니나노머신</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>서나</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>라떼</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>샤다라빠</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>시니</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>김칸비</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>니나노머신</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>서나</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>라떼</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>샤다라빠</a></li>
		</ul>
		<ul id="tab_container2" class='contain'>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>조석</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>주호민</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>하일권</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>무적핑크</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>양영순</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>이말년</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>시니</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>김칸비</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>니나노머신</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>서나</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>라떼</a></li>
			<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>샤다라빠</a></li>
		</ul>
	</div>
</div>

<div class='box'>
	 <h6 class='rnb_title'>인기있는그룹 <a href='#' class='moreBtn'>+ 더보기</a></h6>
	 <div id='group'></div>			 
 </div>



<script>
$(document).ready(function(){
	/* 그룹 로드 */
	for ($i=0; $i<6; $i++) {
		// 삽입소스
		var mockup = '<div class="group" style="background-image:url(assets/img/mockup/profile/avatar'+$i+'.jpg);"></div>';
		// 삽입할 대상
		$("#group").append(mockup);	
	}	
})
</script>