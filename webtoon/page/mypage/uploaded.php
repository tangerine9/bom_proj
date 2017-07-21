<div id="mypage_uploaded" class="mypage">
	<h1>내가 올린목록</h1>

	<ul>
		<li><a href="#">최신순</a></li>
		<li><a href="#">인기순</a></li>
	</ul>

	<div id="uploaded_wrap"></div>

	<!-- 페이지네이션 -->
	<ul class="pagenation">
		<li class="btn"><a href=""><img src="assets/img/icon/prev2.png" alt="처음으로"/></a></li>
		<li class="btn"><a href=""><img src="assets/img/icon/prev1.png" alt="이전"/></a></li>
		<li class="active"><a href="#">1</a></li>
		<li><a href="#">2</a></li>
		<li><a href="#">3</a></li>
		<li><a href="#">4</a></li>
		<li><a href="#">5</a></li>
		<li><a href="#">6</a></li>
		<li><a href="#">7</a></li>
		<li><a href="#">8</a></li>
		<li><a href="#">9</a></li>
		<li><a href="#">10</a></li>
		<li class="btn"><a href=""><img src="assets/img/icon/next1.png" alt="다음"/></a></li>
		<li class="btn"><a href=""><img src="assets/img/icon/next2.png" alt="맨끝으로"/></a></li>
	</ul>
</div>


<style>
	#uploaded_wrap a {
		float: left;
	}
	/* 페이지 네이션 */
	.pagenation			{ display: table; width: 520px; display: block; margin: 0 auto;	margin-top: 15px; }
	.pagenation li 		{ position: relative; float: left; text-align: center; margin: 5px; display: block; width: 25px; height: 25px; font-size: 12px; line-height: 25px; }
	.pagenation li.active, .pagenation li.btn  { border: 1px solid #DDD; background-color: #FFF; }
	.pagenation li.active a { font-weight: bold; color: #99dfff; }
	.pagenation li img  { position: absolute; top: 5px;	left: 6px; }
</style>

<script>
$(document).ready(function(){
	for ($i=0; $i<25; $i++) {
		// 삽입소스
		var mockup = '<a href="#"><div class="thumbBox" style="background-image:url(assets/img/mockup/uploaded/uploaded'+$i+'.jpg);"></div></a>';
		// 삽입할 대상
		$("#uploaded_wrap").append(mockup);	
	}	
});
</script>