<style>
/* idpw 
#idpw{width:1100px;margin:100px auto 130px;overflow:hidden;background:url(../images/common/idpw_img1_bg.gif) no-repeat 25px 110px;text-align:left;min-height:330px;} */

#idpw{width:1000px;overflow:hidden;text-align:left;min-height:330px;}
#idpw .id{float:left;width:490px;}
#idpw .pw{float:left;border-left:1px solid #c2c2c2;padding-left:77px;}
#idpw p.title1{padding-top:15px;padding-bottom:16px;}
#idpw p.title2{letter-spacing:-0.5px;}
#idpw ul.form{margin-top:35px;height:140px;}
#idpw ul.form li{padding-bottom:9px;}
#idpw p.btn a{background:#50c3f8;color:#fff;text-align:center;border:1px solid #36aae0;padding:8px 35px 8px;border-radius:25px;font-size:13px;font-size:14px;}

.style1 {font-size: 14px;
font-weight: bold;
}
.title h1 {
	border-top: 5px solid #50c3f8;
	font-size: 16px;
	padding: 20px 30px;
	font-weight: bold;
	color: #aaa;
	padding-bottom: 10px;
}
.btn {
	padding: 0px;
}
	input {
		border: 1px solid #AAA;
		text-indent: 5px;
		padding: 3px;
	}
</style>
<div class="inner bgW">	
	<div class="title">
		<h1>아이디/비밀번호 찾기</h1>
	</div>
	
	<div style="padding:0px 30px;">
		<div id="idpw">
			<div class="id">
			<p class="title1"><span class="style1">아이디 찾기</span></p>
			<p class="title2">아이디가 생각나지 않으세요?<br>
아래 정보(성명/이메일 주소)를 입력하시면 아이디를 찾아드립니다.</p>
			<ul class="form">
			<li><input name="memberNameId" id="memberNameId" type="text" class="form3" style="width:200px;" placeholder="이름"></li>
			<li><input name="email1" id="email1" type="text" class="form3" style="width:130px;" placeholder="이메일"> @ <input name="email2" id="email2" type="text" class="form3" style="width:130px;"> 
			<select class="form4" id="email1Select" name="email1Select" style="width:140px;" onchange="fn_changeEmail1();">
						<option value="" selected="selected">직접입력</option>
						<option value="daum.net">다음 (daum.net)</option>
						<option value="naver.com">네이버 (naver.com)</option>
						<option value="yahoo.co.kr">야후 (yahoo.co.kr)</option>
						<option value="nate.com">네이트(nate.com)</option>
						<option value="empas.com">엠파스(empas.com)</option>
						<option value="paran.com">파란(paran.com)</option>
						<option value="hanmir.com">한미르(hanmir.com)</option>
						<option value="freechal.com">프리챌(freechal.com)</option>
						<option value="hotmail.com">핫메일(hotmail.com)</option>
						<option value="hanafos.com">하나포스(hanafos.com)</option>
						<option value="dreamwiz.com">드림위즈(dreamwiz.com)</option>
						<option value="korea.com">코리아닷컴(korea.com)</option>
						<option value="edunet4u.net">에듀넷(edunet4u.net)</option>
					</select></li>
					<p class="pId" id="idSearch" style="display:none">
						<span class="id">
						<span class="idView" id="idFind"></span>
					</span></p>
			</ul>
			<p class="btn"><a href="javascript:clickId();">아이디 찾기</a></p>
		</div>
			<div class="pw">
			<p class="title1"><span class="style1">비밀번호 찾기</span></p>
			<p class="title2">비밀번호가 생각나지 않으세요? <br>
			  아래 정보를 입력하시면 해당 메일로 임시 비밀번호를 발송해드립니다.</p>
			<ul class="form">
			<li><input name="memberIdPw" id="memberIdPw" type="text" class="form3" style="width:150px;" placeholder="아이디"></li>
			<li><input name="memberNamePw" id="memberNamePw" type="text" class="form3" style="width:150px;" placeholder="이름"></li>
			<li><input name="email1pw" id="email1pw" type="text" class="form3" style="width:120px;" placeholder="이메일"> @ <input name="email2pw" id="email2pw" type="text" class="form3" style="width:120px;"> 
				<select name="email2Select" id="email2Select" class="form4" style="width:140px;" onchange="fn_changeEmail2();">
						<option value="" selected="selected">직접입력</option>
						<option value="daum.net">다음 (daum.net)</option>
						<option value="naver.com">네이버 (naver.com)</option>
						<option value="yahoo.co.kr">야후 (yahoo.co.kr)</option>
						<option value="nate.com">네이트(nate.com)</option>
						<option value="empas.com">엠파스(empas.com)</option>
						<option value="paran.com">파란(paran.com)</option>
						<option value="hanmir.com">한미르(hanmir.com)</option>
						<option value="freechal.com">프리챌(freechal.com)</option>
						<option value="hotmail.com">핫메일(hotmail.com)</option>
						<option value="hanafos.com">하나포스(hanafos.com)</option>
						<option value="dreamwiz.com">드림위즈(dreamwiz.com)</option>
						<option value="korea.com">코리아닷컴(korea.com)</option>
						<option value="edunet4u.net">에듀넷(edunet4u.net)</option>
					</select></li>
			</ul>
			<p class="btn"><a href="javascript:clickPwd();">비밀번호 찾기</a></p>
		</div>
		</div>
	</div>
	
</div>

<script>
// 이메일 선택
function fn_changeEmail1() {
	$("#email2").val($("#email1Select").val());
}		
function fn_changeEmail2() {
	$("#email2pw").val($("#email2Select").val());
}		
// 아이디 찾기
function clickId() {
	var memberNameId = $("#memberNameId").val();
	var email1       = $("#email1").val();
	var email2       = $("#email2").val();
	var email_all    = email1+'@'+email2;
	
	$.ajax({										
		type: 'POST',
		url: 'post/process.php',
		dataType:'jsonp',
		contentType: 'application/json',
		async: false,
		headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
		data: {	
			mode			 : 'findId',
			MEMBER_NAME		 : memberNameId,
			MEMBER_EMAIL	 : email_all
		},
		success: function(json) {
			if(json[0].chk == 'y'){
				var alertText =	'회원님의 아이디는 '+json[0].MEMBER_ID+'입니다.';
				alert(alertText);
			} else {
				alert('정보가 올바르지 않습니다.');
			}
		},
		error: function() {
				//alert('통신에 이상이 발생하였습니다.');
		}
	});	
}	
// 비밀번호 찾기
function clickPwd() {
	var memberIdPw   = $("#memberIdPw").val();
	var memberNamePw = $("#memberNamePw").val();
	var email1pw	 = $("#email1pw").val();
	var email2pw	 = $("#email2pw").val();
	var emailpw_all  = email1pw+'@'+email2pw;
	
	$.ajax({										
		type: 'POST',
		url: 'post/process.php',
		dataType:'jsonp',
		contentType: 'application/json',
		async: false,
		headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
		data: {	
			mode			 : 'findPw',
			MEMBER_ID		 : memberIdPw,
			MEMBER_NAME		 : memberNamePw,
			MEMBER_EMAIL	 : emailpw_all
		},
		success: function(json) {
			if(json[0].chk == 'y'){
				var alertText =	'해당 이메일로 비밀번호를 발송하였습니다.';
				alert(alertText);
			} else {
				alert('정보가 올바르지 않습니다.');
			}
		},
		error: function() {
				//alert('통신에 이상이 발생하였습니다.');
		}
	});	
}
</script>