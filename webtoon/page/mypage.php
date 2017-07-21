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
			<h6 class='rnb_title'>마이페이지</h6>
			<?
			session_start();
			$QUERY_myinfo = mysql_query("SELECT * FROM MEMBER WHERE MEMBER_ID = '$_SESSION[MEMBER_ID]'");
			$MEMBER_NICK  = mysql_result($QUERY_myinfo,0,'MEMBER_NICK');
			echo "
			<div id='mypage'>		
				<div class='my' style='border:none;'>
					<h1 class='mynick'>
						<div class='avatar' style='float:left; margin-right:10px; background-image:url(assets/img/mockup/profile/avatar3.jpg);'></div>
						<span>$MEMBER_NICK
							<a href='?page=mypage&menu=profile' style='font-size:14px;'>
								<i class='fa fa-cog' aria-hidden='true'></i>
							</a>
						</span>
					</h1>
					<ul class='mypoint'>						
						<li>
							<a href='?page=mypage&menu=message'>
								<img class='icon' src='../assets/img/icon/message.png'>
								<span>메시지</span><span class='badge'>23</span>
							</a>							
						</li>
						<li>
							<a href='?page=mypage&menu=newsfeed'>
								<img class='icon' src='../assets/img/icon/pen.png'>
								<span>뉴스피드</span><span class='badge'>10</span>
							</a>
						</li>
					</ul>
				</div>				
			</div>
			";
			?>
			
			<h6 class='rnb_title'>팔로워 <a href='#' class='moreBtn'>+ 더보기</a></h6>
			<div class="pd05">
				<div id="follower" class="owl-carousel"></div>
			</div>
			
			<h6 class='rnb_title'>팔로잉 <a href='#' class='moreBtn'>+ 더보기</a></h6>
			<div class="pd05">
				<div id="following" class="owl-carousel"></div>
			</div>
			<script>
			$(document).ready(function(){
				/* 팔로워 로드 */
				for ($i=0; $i<5; $i++) {
					// 삽입소스
					var mockup = '<div class="avatar" style="background-image:url(assets/img/mockup/profile/avatar'+$i+'.jpg);"></div>';
					// 삽입할 대상
					$("#follower").append(mockup);	
				}	
				$('#follower').owlCarousel({
					loop:true,
					autoWidth:true
				});
				/* 팔로잉 로드 */
				for ($i=5; $i<10; $i++) {
					// 삽입소스
					var mockup = '<div class="avatar" style="background-image:url(assets/img/mockup/profile/avatar'+$i+'.jpg);"></div>';
					// 삽입할 대상
					$("#following").append(mockup);	
				}	
				$('#following').owlCarousel({
					loop:true,
					autoWidth:true
				});
			})
			</script>
			<style>
				.pd05 {
					padding: 0px 5px;
				}
				#follower, #following {
					width: 155px;
					padding: 0px 0px;
					border-radius: 10px;
				}
				#follower .avatar, #following .avatar  {
					width: 40px;
					height: 40px;
				}
			</style>
			<ul class="mypageCate">
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
				
				<!--
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
				<li><a href="?page=mypage&menu=handsome">존잘러♥소비러</a></li>-->
				
				<style>
					.mypageCate .sub li {
						border: none;
						display: block;
						width: 100%;
						height: 35px;
						line-height: 35px;
						padding-left: 10px;
					}
				</style>
				<li><a href="?page=mypage&menu=newsfeed">스토리</a></li>
				<ul class="sub">
					<li><a href="">내가올린 목록</a></li>
					<li><a href="">임시저장 목록</a></li>
					<li><a href="">투표함</a></li>
					<li><a href="">구매한 컨텐츠</a></li>
					<li><a href="">히스토리</a></li>
				</ul>
				<li><a href="?page=mypage&menu=newsfeed">작품</a></li>
				<li><a href="?page=mypage&menu=newsfeed">참여그룹</a></li>
				<li><a href="?page=mypage&menu=newsfeed">커미션<br>팬미팅</a></li>
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