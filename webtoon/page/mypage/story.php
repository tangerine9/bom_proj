<style>
	.list_wrap {
		width: 100%;
		max-width: 600px;
		margin: 0 auto;
	}
	#mypage_story {
		padding: 15px;
	}
	#mypage_story .story_card {
		width: 100%;
		float: left;
		position: relative;
		margin-top: 15px;
		border: 1px solid #DDD;
	}
	#mypage_story .story_card .writer {
		padding: 15px;
	}
	#mypage_story .story_card .nick {
		position: absolute;
		top:25px;
		left: 80px;
		font-weight: bold;
		font-size: 14px;
	}
	#mypage_story .story_card .date {
		position: absolute;
		top:45px;
		left: 80px;
		color: #AAA;
	}
	#mypage_story p {
		padding: 30px;
	}
	#mypage .con {
		padding: 15px;
	}
	#mypage .con textarea {
		width: 100%;
		height: 150px;
		padding: 10px;
		background-color: #FBFBFB;
		border: none;		
	}
	#mypage .con .addfile {
		background-color: #EEE;
		border: 1px solid #DDD;
		padding: 5px;
		display: block;
		width: 100%;		
		text-align: center;
	}
	#mypage .con .enroll {
		background-color: #7AD5FF;
		float: right;
		width: 100%;
		text-align: center;
		height: 40px;
		line-height: 40px;
		font-weight: bold;
		color: #FFF;
		font-size: 16px;
	}
</style>

<div id="mypage_story" class="mypage"> 
	<div class='list_wrap'>
		<div class="story_card">
			<div class="writer">
				<div class="avatar" style="background-image:url(assets/img/mockup/profile/avatar5.jpg);"></div>
				<span class="nick">닉네임</span>
				<span class="date">2017-08-01</span>			
			</div>
			<div class="con">
				<textarea placeholder="150자 내로 팬들에게 소식을 들려주세요 ^^"></textarea>
				<a class="addfile" href="#">파일첨부</a>
				<a class="enroll" href="#">게시</a>
			</div>
		</div>
		<hr></hr>

		<div class="story_card">
			<div class="writer">
				<div class="avatar" style="background-image:url(assets/img/mockup/profile/avatar5.jpg);"></div>
				<span class="nick">닉네임</span>
				<span class="date">2017-08-01</span>				
			</div>
			<div class="con">
				<p>오늘 너무 더워요</p>
				<img src="assets\img\mockup\fanart\fanart0.jpg"/>			
			</div>
		</div>

		<div class="story_card">
			<div class="writer">
				<div class="avatar" style="background-image:url(assets/img/mockup/profile/avatar5.jpg);"></div>
				<span class="nick">닉네임</span>
				<span class="date">2017-08-01</span>			
			</div>
			<div class="con">
				<p>으라차차</p>
				<img src="assets\img\mockup\fanart\fanart4.jpg"/>			
			</div>
		</div>
	</div>
</div>