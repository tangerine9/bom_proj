<?
// 페이지 : 마이페이지
?>

<script>
$(document).ready(function(){
	/* 팔로워 로드 */
	for ($i=7; $i<10; $i++) {
		// 삽입소스
		var mockup = '<div class="avatar" style="background-image:url(assets/img/mockup/profile/avatar'+$i+'.jpg);"></div>';
		// 삽입할 대상
		$("#my_follower").append(mockup);	
	}	
	$('#my_follower').owlCarousel({
		center: true,
		loop:true,
		autoWidth:true
	});
})
</script>

<div class="inner">	
	<div id="mypage" class="box" style="padding:0px; padding-bottom:60px;">		
		<div class="side">
			<div class="my">
				<h1 class="mynick">
					<div class="avatar" style="float:left; margin-right:10px; background-image:url(assets/img/mockup/profile/avatar3.jpg);"></div>
					<span>침착한금손
						<a href="?page=mypage&menu=profile" style="font-size:14px;">
							<i class="fa fa-cog" aria-hidden="true"></i>
						</a>
					</span>
				</h1>
				<h1>내상태</h1>
				<ul class="mypoint">
					<li><img class="icon" src="../assets/img/icon/bookmark.png"><span>책갈피</span><span>12</span></li>
					<li><img class="icon" src="../assets/img/icon/message.png"><span>메시지</span><span>23</span></li>
					<li><img class="icon" src="../assets/img/icon/pen.png"><span>보유한 펜</span><span>10</span></li>
				</ul>
				<h1>팔로우 15명</h1>				
				<div id="my_follower"></div>
			</div>
			<ul>
				<!--
				profile 프로필
				story 	스토리
				uploaded 내가올린목록
				tempsave 임시저장목록
				poll 	투표함
				contents 구매한컨텐츠
				goods 	작품
				following 팔로잉
				group 	그룹
				delivery 배송정보
				commision 커미션
				handsome 존잘러 소비러
				-->
				<li><a href="?page=mypage&menu=newsfeed">뉴스피드</a></li>
				<li><a href="?page=mypage&menu=story">스토리</a></li>
				<li><a href="?page=mypage&menu=uploaded">내가올린목록</a></li>		
				<li><a href="?page=mypage&menu=tempsave">임시저장목록</a></li>
				<li><a href="?page=mypage&menu=poll">투표함</a></li>
				<li><a href="?page=mypage&menu=contents">구매한컨텐츠</a></li>
				<li><a href="?page=mypage&menu=goods">작품</a></li>
				<li><a href="?page=mypage&menu=following">팔로잉</a></li>
				<li><a href="?page=mypage&menu=group">그룹보기</a></li>
				<li><a href="?page=mypage&menu=delivery">배송정보</a></li>
				<li><a href="?page=mypage&menu=commision">커미션 받기</a></li>
				<li><a href="?page=mypage&menu=handsome">존잘러♥소비러</a></li>
			</ul>			
		</div>
		<div class="cont">
			<? 
				if (!$_GET[menu]) {
					include "page/mypage/profile.php";
				} else {
					include "page/mypage/$_GET[menu].php";
				}
			?>
		</div>
		 <div style="clear: both;"></div> 
	</div>
</div>