<style>
	#loginA {
		display: block;
		width: 100%;
		height: 40px;
		line-height: 40px;
		border-radius: 5px;
		color: #FFF;
		background-color: #50c3f8;
		text-align: center;
		font-weight: bold;
		margin: 10px 0px;
		cursor: pointer;
	}
	.pd10 {
		padding: 10px;
	}
	.show {
		display: block !important;
	}
	#loginBox {
		display: none;		
		position: absolute;
		left: 5px;
		top: 90px;
		transition: 1s;
		z-index: 300;
		background-color: #111;
		border-radius: 0px;
		width: 257px;
		border: none;
		padding: 15px !important
	}
	
</style>

<script>
function loginBoxShow(){
	if ($("#loginBox").hasClass('show')) {
		
		$("#loginBox").removeClass('show');	
	} else {
		$("#loginBox").addClass('show');
	}	
}
</script>


	<?
		session_start();
		if(!isset($_SESSION['MEMBER_ID'])) {
			echo "
			<a id='loginA' href='?page=login'>로그인</a>
			<a href='?page=join' class='login_more'>회원가입</a>
			<a href='#' class='login_more'>비밀번호찾기</a>
			";
		} else {
			$QUERY_myinfo = mysql_query("SELECT * FROM MEMBER WHERE MEMBER_ID = '$_SESSION[MEMBER_ID]'");
			$MEMBER_NICK  = mysql_result($QUERY_myinfo,0,'MEMBER_NICK');
			echo "
			<div id='mypage'>		
				<div class='my'>
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
					<ul class='mymenu'>
						<li><a href='?page=mypage'>마이페이지</a></li>
						<li><a class='loginBtn' href='?act=logout'>로그아웃</a></li>
					</ul>
				</div>
				
			</div>
			";
		}
		if ($_GET['act']=='logout') {
			session_destroy();
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			exit;
		}
	?>

 
 <!--
 기존 팝업형태 로그인
 <div class="box" class="pd10">	
	<a id="loginA" onclick="loginBoxShow()">로그인</a>	
	<a href='?page=join' class='login_more'>회원가입</a>
	<a href='#' class='login_more'>비밀번호찾기</a>
</div>
<div id='loginBox' class='box' style="padding:10px">
 	<div class="background-color:#000">
		<input type='text' placeholder='아이디'>
		<input type='password' placeholder='비밀번호'>
	 <a class='loginBtn' href='?page=mypage'>로그인</a>
	 <a class='loginBtn' href='?page=mypage' style="background-color:#3b5998">페이스북로그인</a>
	 <a class='loginBtn' href='?page=mypage' style="background-color:#FAB900">다음로그인</a>
	 </div>
</div>	
-->
