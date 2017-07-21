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

<div id="mypage_profile" class="mypage">
	<div class="profile_bg" style="background-image:url(assets/img/mockup/fanart/fanart4.jpg);">
		<div class="my_avatar" style="background-image:url(assets/img/mockup/profile/avatar3.jpg);"></div>

	</div>

	<div style="padding:25px 30px;">
		<?
		$query = mysql_query('SELECT * FROM MEMBER WHERE MEMBER_ID="test"');
		$MEMBER_NAME = mysql_result($query, 7, 'MEMBER_NAME');
		$MEMBER_NICK = mysql_result($query, 3, 'MEMBER_NICK');
		?>
		<script>
			alert("<? echo $query?>");
		</script>
		<?

		?>

		<div class="form_wrap">
			<h1>이름</h1>
			<input type="text" value="<? echo $MEMBER_NAME?>"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r1" checked>
				<label for="r1">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r1">
				<label for="r1">비공개</label>
			</div>
		</div>

		<div class="form_wrap">
			<h1>닉네임</h1>
			<input type="text" value="<? ECHO $MEMBER_NICK?>"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r2" checked>
				<label for="r2">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r2">
				<label for="r2">비공개</label>
			</div>
		</div>

		<div class="form_wrap">
			<h1>닉네임</h1>
			<input type="text" value="침착한금손"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r3" checked>
				<label for="r3">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r3">
				<label for="r3">비공개</label>
			</div>
		</div>

		<div class="form_wrap">
			<h1>생년월일</h1>
			<input type="text" value="1984년 01월 01일"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r4" checked>
				<label for="r4">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r4">
				<label for="r4">비공개</label>
			</div>
		</div>

		<div class="form_wrap">
			<h1>전화번호</h1>
			<input type="text" value="010-1234-1234"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r5" checked>
				<label for="r5">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r5">
				<label for="r5">비공개</label>
			</div>
		</div>
		<div class="form_wrap">
			<h1>주소</h1>
			<input type="text" value="서울시 강남구 개포로"/>
			<input type="text" value="211 한신빌딩 5F"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r6" checked>
				<label for="r6">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r6">
				<label for="r6">비공개</label>
			</div>
		</div>

		<div class="form_wrap">
			<h1>가장 사랑하는 캐릭터</h1>
			<input type="text" value="상디"/>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r7" checked>
				<label for="r7">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r7">
				<label for="r7">비공개</label>
			</div>
		</div>

		<div class="form_wrap">
			<h1>자기 소개</h1>
			<textarea>여행하는 것을 좋아하고, 사진찍는걸 좋아합니다. 독창적인 그림체를 이어나가는게 목표 팔로잉 대환영
			</textarea>

			<div class="radio radio-info radio-inline">
				<input type="radio" id="inlineRadio1" value="option1" name="r8" checked>
				<label for="r8">공개</label>
			</div>
			<div class="radio radio-inline">
				<input type="radio" id="inlineRadio2" value="option2" name="r8">
				<label for="r8">비공개</label>
			</div>
		</div>
	</div>
</div>
