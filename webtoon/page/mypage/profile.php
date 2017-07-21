<?php
	session_start();
 ?>

<style>
	#mypage .profile_bg {
		position: relative;
		display: block;
		width: 100%;
		height: 300px;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
	}
	#mypage .my_avatar {
		position: absolute;
		display: block;
		width: 200px;
		height: 200px;
		border-radius: 100%;
		background-position: center;
		background-size: cover;
		background-repeat: no-repeat;
		border: 3px solid #FFF;
		top: 50%;
		left: 50%;
		margin-top: -100px;
		margin-left: -100px;
	}
	.form_wrap {
		clear: both;
		margin: 25px 70px;
	}
	.form_wrap h1 {
		border: 1px solid #DDD;
		margin-bottom: 10px;
		font-size: 18px;
		font-weight: bold;
		color: #595959;
		background-color: #f8f8f8;
		padding: 5px 10px;
		border-radius: 5px;
	}
	.form_wrap input, .form_wrap textarea {
		border: 2px solid #FFF;
		padding: 5px 10px;
		width: 550px;
		margin-right: 20px;
		transition: 0.3s;
		cursor: pointer;
	}
	.form_wrap input:focus, .form_wrap textarea:focus {
		border: 2px solid #DDD;
	}
</style>

<script>
	//회원정보 수정
	function updateProfile(){
		// 아이디
		var memberId_chk						=	$('#memberId').val();
		// 이름
		var memberName_chk					= $('#memberName').val();
		// 닉네임
		var memberNick_chk					= $('#memberNick').val();
		// 생년월일
		var memberBirth_chk					= $('#memberBirth').val();
		// 전화번호
		var memberPhone_chk					= $('#memberPhone').val();
		// 주소1
		var memberAddress1_chk			= $('#memberAddress1').val();
		// 주소2
		var memberAddress2_chk			= $('#memberAddress2').val();
		// 좋아하는 캐릭터
		var memberMostCharacter_chk = $('#memberMostCharacter').val();
		// 자기소개
		var memberIntroduce_chk			= $('#memberIntroduce').val();

		$.ajax({
			type: 'POST',
			url: 'post/process.php',
			dataType: 'jsonp',
			contentType: 'application/json',
			async: false,
			headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
			data: {
				mode								: 'member_update',
				MEMBER_ID							: memberId_chk,
				MEMBER_NAME						: memberName_chk,
				MEMBER_NICK						: memberNick_chk,
				MEMBER_BIRTH					: memberBirth_chk,
				MEMBER_PHONE					: memberPhone_chk,
				MEMBER_ADDRESS1				: memberAddress1_chk,
				MEMBER_ADDRESS2				: memberAddress2_chk,
				MEMBER_MOSTCHARACTER	: memberMostCharacter_chk,
				MEMBER_INTRODUCE			: memberIntroduce_chk
			},
			success: function(json) {
				if (json[0].chk == 'y') {
					alert('수정이 완료되었습니다.');
					location.href= "?page=mypage";
				} else {
					alert('에러발생');

				}
			},
			error: function() {

			}
		});
	}
</script>

<div id="mypage_profile" class="mypage">
	<div class="profile_bg" style="background-image:url(assets/img/mockup/fanart/fanart4.jpg);">
		<div class="my_avatar" style="background-image:url(assets/img/mockup/profile/avatar3.jpg);"></div>

	</div>

	<form class="profileForm" action="index.html" method="post">
		<div style="padding:25px 30px;">
			<?
			$query 								= mysql_query("SELECT * FROM MEMBER WHERE MEMBER_ID = '".$_SESSION[MEMBER_ID]."'");
			$MEMBER_ID						=	$_SESSION['MEMBER_ID'];
			$MEMBER_NAME 					= mysql_result($query, 0, 'MEMBER_NAME');
			$MEMBER_NICK 					= mysql_result($query, 0, 'MEMBER_NICK');
			$MEMBER_BIRTH 				= mysql_result($query, 0, 'MEMBER_BIRTH');
			$MEMBER_ZIP 					= mysql_result($query, 0, 'MEMBER_ZIP');
			$MEMBER_ADDRESS1 			= mysql_result($query, 0, 'MEMBER_ADDRESS1');
			$MEMBER_ADDRESS2 			= mysql_result($query, 0, 'MEMBER_ADDRESS2');
			$MEMBER_PHONE 				= mysql_result($query, 0, 'MEMBER_PHONE');
			$MEMBER_MOSTCHARACTER = mysql_result($query, 0, 'MEMBER_MOSTCHARACTER');
			$MEMBER_INTRODUCE 		= mysql_result($query, 0, 'MEMBER_INTRODUCE');
			?>

			<div class="form_wrap">
				<h1>아이디</h1>
				<input type="text" id="memeberId" name="memberId" value="<? echo $MEMBER_ID?>" readonly>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r0" checked>
					<label for="r1">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r0">
					<label for="r1">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>이름</h1>
				<input type="text" id="memberName" name="memberName" value="<? echo $MEMBER_NAME?>"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r1" checked>
					<label for="r1">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r1">
					<label for="r1">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>닉네임</h1>
				<input type="text" id="memberNick" name="memberNick" value="<? echo $MEMBER_NICK?>"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r2" checked>
					<label for="r2">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r2">
					<label for="r2">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>닉네임</h1>
				<input type="text" value="침착한금손"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r3" checked>
					<label for="r3">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r3">
					<label for="r3">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>생년월일</h1>
				<input type="text" id="memberBirth" name="memberBirth" value="<? echo $MEMBER_BIRTH?>"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r4" checked>
					<label for="r4">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r4">
					<label for="r4">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>전화번호</h1>
				<input type="text" id="memberPhone" name="memberPhone" value="<? echo $MEMBER_PHONE?>"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r5" checked>
					<label for="r5">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r5">
					<label for="r5">비공개</label>
				</div>
			</div>
			<div class="form_wrap">
				<h1>주소</h1>
				<input type="text" id="memberAddress1" name="memberAddress1" value="<? echo $MEMBER_ADDRESS1?>"/>
				<input type="text" id="memberAddress2" name="memberAddress2" value="<? echo $MEMBER_ADDRESS2?>"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r6" checked>
					<label for="r6">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r6">
					<label for="r6">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>가장 사랑하는 캐릭터</h1>
				<input type="text" id="memberMostCharacter" name="memberMostCharacter" value="<? echo $MEMBER_MOSTCHARACTER?>"/>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r7" checked>
					<label for="r7">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r7">
					<label for="r7">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<h1>자기 소개</h1>
				<textarea id="memberIntroduce" name="memberIntroduce"><? echo $MEMBER_INTRODUCE?>
				</textarea>

				<div class="radio radio-info radio-inline">
					<input type="radio" id="inlineRadio1" value="y" name="r8" checked>
					<label for="r8">공개</label>
				</div>
				<div class="radio radio-inline">
					<input type="radio" id="inlineRadio2" value="n" name="r8">
					<label for="r8">비공개</label>
				</div>
			</div>

			<div class="form_wrap">
				<div class="radio radio-info radio-inline">
					<input type="button" id="inlineRadio1" name="profile_adjust" value="수정" onclick="updateProfile()" style="width:100px" >
				</div>
			</div>
		</div>
	</form>
</div>
