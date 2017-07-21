<?
// 페이지 : 홈
?>

<style>
/* 홈 섹션 타이틀 */
.sub_cate_slide {
	width: 100%;
	height: 40px;
	line-height: 40px;
	border-top: 1px solid #DEDEDE;
	border-bottom: 1px solid #DEDEDE;
	background-color: #FFF;
	overflow: hidden;
	margin-bottom: 10px;
	cursor: pointer;
}
.sub_cate_slide div {
	float: left;
	display: block;
	height: 38px;
	line-height: 38px;
}
.sub_cate_slide span {
	border-left: 1px solid #DDD;
	padding-left: 10px;
	color: #4b4b4b;
	font-weight: bold;
}
.sub_cate_slide div a {
	padding: 0px 10px;
	transition: 0.3s;
	border-radius: 10px;
}	
.sub_cate_slide div a:hover {
	background-color: #99dfff;
}	
/* 확성기 */
.neonBoard {
	background-color: #242424;
	color: #FFF;
	border: 2px solid #99dfff;
	margin-top: 20px;
	font-size: 13px;
}
</style>
<div class="inner">	
	<div class="padding">		
		<!-- 
		///////////////////////////////////////////
			메인컨텐츠
		///////////////////////////////////////////
		-->
		<div class="col-sm-9">
			<!-- 메인배너 -->
			<div id="view_slide">	
				<div class="mainvisual" style="background-image:url(assets/img/mockup/visualarea/visualarea0.jpg);"></div>
				<div class="mainvisual" style="background-image:url(assets/img/mockup/visualarea/visualarea1.jpg);"></div>
				<div class="mainvisual" style="background-image:url(assets/img/mockup/visualarea/visualarea2.jpg);"></div>
			</div>		
			
			<div class="box">													
				<div class="board col-sm-12" style="padding:0px;">
					<!-- 공지사항 -->						
					<div>
						<h1>공지사항</h1>
						<ul>
							<li>
								<a href="#">
									<span class="text">연예인 볼링단팀의 엑소 콘서트 논란</span>
									<span class="count">877</span>
									<span class="regidate">2017-07-09</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="text">케이팝 팬들이 뽑은 한국 남녀 최고</span>
									<span class="count">601</span>
									<span class="regidate">2017-07-08</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="text">프듀2측 임영민 부정행위 확인</span>
									<span class="count">496</span>
									<span class="regidate">2017-07-07</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="text">무도 찌라시라는데</span>
									<span class="count">394</span>
									<span class="regidate">2017-07-06</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="text">트와이스 정연한테 빡친 공승연 인스타</span>
									<span class="count">312</span>
									<span class="regidate">2017-07-05</span>
								</a>
							</li>
						</ul>
				    </div>
				    <!-- 확성기 -->
				    <style>
						.neonBoard {
							position: relative;
							cursor: pointer;
							line-height: 22px;
						}
						.neonBoard img {
							width: 25px;
						}
						.neonBoard .adtext span b {
							font-size: 12px;
						}
						.neonBoard .adtext {
							margin-right: 30px;
						}
						.neonBoard .adtext {
							display: inline;
							position: relative;
							width: 300px;
						}
						/*
						.neonBoard .adtext img {
							position: absolute;
							top: 0px;
							left: 0px;
						}
						.neonBoard .adtext span {
							position: absolute;
							top: 0px;
							left: 50px;
						}
						*/
					</style>
					<div class="neonBoard">
						<marquee scrollamount="7" onmouseover=this.stop() onmouseout=this.start()>
							<div class="adtext">
								<img src="assets/img/icon/megaphone.png"/>
								<span>
								민호 오빠 생일 축하해요 불꽃카리스마 최민호의 25번째 생일을 축하합니다. 샤월일동
								<b>
								[민호럽]
								</b>
								</span>		
							</div>	
							<div class="adtext">
								<img src="assets/img/icon/megaphone.png"/>
								<span>
								민호 오빠 생일 축하해요 불꽃카리스마 최민호의 25번째 생일을 축하합니다. 샤월일동
								<b>
								[민호럽]
								</b>
								</span>		
							</div>	
							<div class="adtext">
								<img src="assets/img/icon/megaphone.png"/>
								<span>
								민호 오빠 생일 축하해요 불꽃카리스마 최민호의 25번째 생일을 축하합니다. 샤월일동
								<b>
								[민호럽]
								</b>
								</span>		
							</div>			
						</marquee>
					</div>
				</div>	
			</div>
				
			<style>
				.homebox {
					background-color: #FFF;
					padding: 10px;
					border: 1px solid #DDD;
					float: left;
					margin-top: 10px;
					width: 100%;
				}
				.homebox .section {
					margin: 0px;
				}
			</style>					
			
			<div class="homebox">													
				<!-- 연예인 팬아트 -->
				<div class="section">
					<h1>연예인 팬아트</h1>
					<div>						
						<div id="main_sub_cate1" class="sub_cate_slide">
						    <div><span style="border:none;">[일러스트]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[미완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						</div>
					</div>
					<div id="main_box1" class="main_box owl-carousel"></div>
				</div>
			</div>
			
			<div class="homebox">													
				<!-- 연예인 팬픽 -->
				<div class="section">
					<h1>연예인 팬픽</h1>
					<div id="main_sub_cate2" class="sub_cate_slide">
						    <div><span style="border:none;">[썰]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[미완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
				    </div>
					<div id="main_box2" class="main_box owl-carousel"></div>
				</div>
			</div>	
				
			<div class="homebox">		
				<!-- 애니 팬아트 -->
				<div class="section">
					<h1>애니 팬아트</h1>
					<div id="main_sub_cate3" class="sub_cate_slide">
						    <div><span style="border:none;">[일러스트]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[미완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
				    </div>
					<div id="main_box3" class="main_box owl-carousel"></div>
				</div>
			</div>	
				
			<div class="homebox">		
				<!-- 애니 팬픽 -->
				<div class="section">
					<h1>애니 팬픽</h1>
					<div id="main_sub_cate4" class="sub_cate_slide">
						    <div><span style="border:none;">[썰]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[미완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
				    </div>
					<div id="main_box4" class="main_box owl-carousel"></div>
				</div>
			</div>	
				
			<div class="homebox">		
				<!-- 자작품 그린연성 -->
				<div class="section">
					<h1>자작품 그림연성</h1>
					<div id="main_sub_cate5" class="sub_cate_slide">
						    <div><span style="border:none;">[일러스트]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[미완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
				    </div>
					<div id="main_box5" class="main_box owl-carousel"></div>
				</div>
			</div>	
				
			<div class="homebox">		
				<!-- 자작품 팬픽 -->
				<div class="section">
					<h1>자작품 팬픽</h1>
					<div id="main_sub_cate6" class="sub_cate_slide">
						    <div><span style="border:none;">[썰]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[미완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
						    <div><span>[완결]</span><a href="#">인기작</a><a href="#">최신작</a></div>
				    </div>
					<div id="main_box6" class="main_box owl-carousel"></div>
				</div>
			</div>	
				
			<div class="homebox">				
				<div class="section">
					<!-- 하단배너 -->
					<a href="#"><img style="width:100%" src="assets/img/mockup/banner/wide1.jpg" alt="하단배너" /></a>
				</div>	
			</div><!-- .box -->
								
				<!-- 메인 하단 게시판 시작 -->	
				<style>
					#main_foot_board {
						background-color: #FFF;
						float: left;
						margin: 15px 0px;
					}
				</style>
				<div id="main_foot_board" class="box col-xs-12">
					<div class="board col-sm-6" style="padding:0px;">
						<h1>연예인 잡담 실시간</h1>
						<ul class="main_mini_board">									
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>애니 잡담 실시간</h1>
						<ul class="main_mini_board">									
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>연예인 떡밥 실시간</h1>
						<ul class="main_mini_board">									
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>애니 떡밥 실시간</h1>
						<ul class="main_mini_board">	
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>요청 및 커미션</h1>
						<ul class="main_mini_board">									
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>애완반려동물 실시간</h1>
						<ul class="main_mini_board">									
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>코스프레 실시간</h1>
						<ul class="main_mini_board">									
						</ul>
					</div>	
					<div class="board col-sm-6" style="padding:0px;">
						<h1>맛집탐방 실시간</h1>
						<ul class="main_mini_board">	
						</ul>
					</div>					
				</div>
				<script>
					$(document).ready(function(){
						var $mock = 
							
							'<li>'+
								'<a href="#">'+
									'<span class="text">프듀2측 임영민 부정행위 확인</span>'+
									'<span class="count">496</span>'+
								'</a>'+
							'</li>'+
							'<li>'+
								'<a href="#">'+
									'<span class="text">무도 찌라시라는데</span>'+
									'<span class="count">394</span>'+
								'</a>'+
							'</li>'+
							'<li>'+
								'<a href="#">'+
									'<span class="text">트와이스 정연한테 빡친 공승연 인스타</span>'+
									'<span class="count">312</span>'+
								'</a>'+
							'</li>';
						$(".main_mini_board").append($mock);
					})
				</script>
		</div>		
		
		<div class="col-sm-3">			
			<!-- 로그인 영역 -->
			<? include "page/myinfo.php"; ?>		
			<!-- 랭킹 영역 -->
			<? include "page/ranking.php"; ?>	
			<!-- 배너 영역 -->
			<? include "page/banner.php"; ?>			
		</div>
		
		
	</div>
</div>

<script>
	$(document).ready(function(){
		$('#view_slide').slick({		
		  lazyLoad: 'ondemand',
		  infinite: true,
		  dots: false,
  		  infinite: true,
		  prevArrow: false,
    	  nextArrow: false,
		  fade: true,	
		  autoplay: true,
  		  autoplaySpeed: 6000
		});
		/*
		$('#view_slide').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true,
			autoplay:true,
			autoplaySpeed:6000
		});
		*/
		/* 썸네일 */
		for ($i=0; $i<10; $i++) {
			// 삽입소스
			var mockup = '<div class="card">'+
							'<ul>'+
								'<li>팬픽</li>'+
								'<li>연재</li>'+
								'<li>휴재</li>'+
							'</ul>'+	
							'<div class="like"><i class="fa fa-heart" aria-hidden="true"></i>14</div>'+
							'<div class="thumbBox" style="background-image:url(assets/img/mockup/styletype/type1/type'+$i+'.jpg);"></div>'+
							'<div class="info">'+
								'<h3>#애니 #하이큐 #BL #연애</h3>'+
								'<h2>금손조각 인기작달려라</h2>'+
								'<span>닉네임</span>'+
							'</div>'+
						 '</div>';
			// 삽입할 대상
			$("#main_box1").append(mockup);	
		}	
		
		$('#main_box1').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true
		});
		
		/* 썸네일 */
		for ($i=0; $i<10; $i++) {
			// 삽입소스
			var mockup = '<div class="thumbBox" style="background-image:url(assets/img/mockup/styletype/type2/type'+$i+'.jpg);"></div>';
			// 삽입할 대상
			
			$("#main_box2").append(mockup);	
		}
		
		$('#main_box2').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true
		});
		
		
		/* 썸네일 */
		for ($i=0; $i<10; $i++) {
			// 삽입소스
			var mockup = '<div class="card">'+
							'<ul>'+
								'<li>팬픽</li>'+
								'<li>연재</li>'+
								'<li>휴재</li>'+
							'</ul>'+	
							'<div class="like"><i class="fa fa-heart" aria-hidden="true"></i>14</div>'+
							'<div class="thumbBox" style="background-image:url(assets/img/mockup/styletype/type3/type'+$i+'.jpg);"></div>'+
							'<div class="info">'+
								'<h3>#애니 #하이큐 #BL #연애</h3>'+
								'<h2>금손조각 인기작달려라</h2>'+
								'<span>닉네임</span>'+
							'</div>'+
						 '</div>';
			// 삽입할 대상
			$("#main_box3").append(mockup);	
		}	
		
		$('#main_box3').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true
		});
		
		/* 썸네일 */
		for ($i=0; $i<10; $i++) {
			// 삽입소스
			var mockup = '<div class="thumbBox" style="background-image:url(assets/img/mockup/styletype/type4/type'+$i+'.jpg);"></div>';
			// 삽입할 대상
			$("#main_box4").append(mockup);	
		}
		
		
		$('#main_box4').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true
		});
		
		/* 썸네일 */
		for ($i=0; $i<10; $i++) {
			// 삽입소스
			var mockup = '<div class="card">'+
							'<ul>'+
								'<li>팬픽</li>'+
								'<li>연재</li>'+
								'<li>휴재</li>'+
							'</ul>'+	
							'<div class="like"><i class="fa fa-heart" aria-hidden="true"></i>14</div>'+
							'<div class="thumbBox" style="background-image:url(assets/img/mockup/styletype/type5/type'+$i+'.jpg);"></div>'+
							'<div class="info">'+
								'<h3>#애니 #하이큐 #BL #연애</h3>'+
								'<h2>금손조각 인기작달려라</h2>'+
								'<span>닉네임</span>'+
							'</div>'+
						 '</div>';
			// 삽입할 대상
			$("#main_box5").append(mockup);	
		}	
		
		$('#main_box5').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true
		});
		
		/* 썸네일 */
		for ($i=0; $i<10; $i++) {
			// 삽입소스
			var mockup = '<div class="thumbBox" style="background-image:url(assets/img/mockup/fanfic/fanfic'+$i+'.jpg);"></div>';
			// 삽입할 대상
			$("#main_box6").append(mockup);	
		}
		
		
		$('#main_box6').owlCarousel({
			center: true,
			loop:true,
			autoWidth:true
		});
		
		
		
	});
</script>