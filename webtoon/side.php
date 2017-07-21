<?
if (!$_GET["page"] or $_GET["page"] == 'home') {
	// 따라다니는 배너 아이디 floatL / 고정 배너 아이디 floatL_fixed
	echo "
		<div id='floatL_fixed'>
			<a href='#' style='padding:5px;'>
				<img src='assets/img/mockup/banner/side1.jpg'/>
			</a>
		</div>
	";
	// 랭킹 패널
	/*
	echo "
		<div id='floatL'>
			<div id='ranking'>
				<ul class='box'>
					<h1>펜조공랭킹</h1>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>시니</a></li>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>김칸비</a></li>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>니나노머신</a></li>
					<li><a href='#'>서나</a></li>
					<li><a href='#'>라떼</a></li>
					<li><a href='#'>샤다라빠</a></li>
				</ul>
				<ul class='box'>
					<h1>팔로우랭킹</h1>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>조석</a></li>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>주호민</a></li>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>하일권</a></li>
					<li><a href='#'>무적핑크</a></li>
					<li><a href='#'>양영순</a></li>
					<li><a href='#'>이말년</a></li>
				</ul>
				<ul class='box'>
					<h1>키워드랭킹</h1>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>샤이니</a></li>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>사나</a></li>
					<li><a href='#'><img src='assets/img/icon/crown.png' alt='왕관'>킹죠</a></li>
					<li><a href='#'>연예인</a></li>
					<li><a href='#'>금요</a></li>
					<li><a href='#'>이세계</a></li>
				</ul>
			</div>		
		</div>
	";
	*/	
} else {
	
}
?>


<script>
$(document).ready(function() {
 
	// 기존 css에서 플로팅 배너 위치(top)값을 가져와 저장한다.
	var floatPosition = parseInt($("#floatL").css('top'));
	// 250px 이런식으로 가져오므로 여기서 숫자만 가져온다. parseInt( 값 );
 
	$(window).scroll(function() {		
		// 현재 스크롤 위치를 가져온다.
		var scrollTop = $(window).scrollTop();
		console.log(scrollTop);
		var newPosition = scrollTop + floatPosition + "px";
		var newPosition2 = scrollTop + 100 + "px";
 
		if (scrollTop > 220) {
			if (scrollTop > 2344) {
				
			} else {
				$("#floatL").stop().animate({
					"top" : newPosition2
				}, {
					'duration' : 1500,
					'easing' : 'easeInOutCubic',
					'complete' : function() {
						//console.log('이동 완료하였습니다.');
					}
				});		
			}			
		} else {
			$("#floatL").stop().animate({
				"top" : 240
			}, {
				'duration' : 1500,
				'easing' : 'easeInOutCubic',
				'complete' : function() {
					//console.log('이동 완료하였습니다.');
				}
			});	
		}
		
 
	}).scroll();
 
});
</script>

