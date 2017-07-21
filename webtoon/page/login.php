<style>
/* 회원가입 */

/* table */
table.tb_reg{width:100%;border-collapse:collapse;letter-spacing:-0.5px;text-align:left;}
table.tb_reg th{background:#fafafa;border-bottom:1px solid #d5d5d5;border-left:1px solid #d5d5d5;border-right:1px solid #d5d5d5;border-top:1px solid #d5d5d5;padding-left:20px;width:150px;color:#3b3b3c;text-align:left;}
table.tb_reg td{border-bottom:1px solid #d5d5d5;padding:7px 5px 8px 25px;font-size:13px;}
table.tb_reg .br_top{border-top:1px solid #d5d5d5;}
table.tb_reg span.btn2 a{font-size:11px;margin-left:10px;text-align:center;padding:3px 15px 6px;border-radius:1px;background:#666666;color:#fff;}
table.tb_reg span.txt{padding-left:10px;display:inline-block;font-size:11px;}
table.tb_reg span.txt1{display:block;font-size:11px;padding:2px 0 8px;border-right:1px solid #d5d5d5;}
table.tb_reg span.txt2{display:block;font-size:12px;padding:11px 0 8px;}
table.tb_reg span.txt2 input{vertical-align:middle;}
table.tb_reg ul.select{overflow:hidden;padding:7px 0 9px;}
table.tb_reg ul.select li{display:inline-block;padding-right:50px;}
table.tb_reg ul.select li input{vertical-align:middle;}
table.tb_reg th.input{color:#db0f32;}
table input{vertical-align:middle;}

.agree_sec{overflow:hidden;border-top:1px solid #ececec;text-align:left;padding-top:30px;padding-bottom:45px;}
.agree_sec p.title1{float:left;width:315px;}
.agree_sec .floatR{float:left;width:1000px;overflow:hidden;}
.agree_sec dl{width:490px;border:1px solid #cdcdcd;}
.agree_sec dl.term{float:left}
.agree_sec dl.privacy{float:right}
.agree_sec dl dt{border-bottom:1px solid #cdcdcd;background:#f0f0f0;padding:10px 0 12px 15px;color:#3b3b3c;}
.agree_sec dl dt input{vertical-align:middle;}
.agree_sec dl dd{overflow-y:scroll;height:160px;padding:10px;white-space:pre-wrap;}
.agree_sec p.check{text-align:right;padding-bottom:12px;padding-right:4px;font-weight:bold;color:#171718;}
.agree_sec p.check input{vertical-align:middle;}

.write_sec{overflow:hidden;border-top:1px solid #eaedf0;padding-top:40px;padding-bottom: 45px;}
.write_sec p.title1{float:left;width:315px;}
.write_sec .floatR{float:left;width:1000px;}
.write_sec p.input{text-align:right;padding-bottom:12px;padding-right:4px;}
.write_sec p.input span.input{color:#db0f32;}

.btn_sec{clear:both;margin:40px auto 30px;text-align:center;}
.btn_sec a.conform{display:inline-block;margin:0 10px;background:#db0f32;color:#fff;font-size:16px;padding:12px 50px 12px;border-radius:25px;border:1px solid #d92e68;}
.btn_sec a.cancel{display:inline-block;margin:0 10px;background:#535353;color:#fff;font-size:16px;padding:12px 50px 12px;border-radius:25px;border:1px solid #444444;}

.form3{font-family:"Open Sans","맑은 고딕","Malgun Gothic","나눔 고딕","Nanum Gothic","dotum";font-size:12px;width:200px;border:1px solid #d9d9d9;padding:5px 10px 6px;}

/* 로그인 */

#login{width:1000px;margin:0 auto;padding-bottom:50px;letter-spacing:-1px;}
#login input{vertical-align:middle;}
#login .info_txt{padding-top:52px;}
#login .info_txt p{text-align:center;}
#login .info_txt p.pic1{padding-bottom:15px;}
#login .sec1{overflow:hidden;margin-top:30px;margin:0 auto;padding-left:200px;background:url(../images/common/login_img2_bg.gif) no-repeat 240px 65px;min-height:180px;}
#login .sec1 p.pic{float:left;width:400px;padding-left:5px;}
#login .sec1 .form_sec{float:left;padding-left:80px;padding-top:10px;padding-bottom:5px;position:relative;}
#login .sec1 .form_sec dl{overflow:hidden;clear:both;text-align:left;padding-bottom:8px;}
#login .sec1 .form_sec dl dt{float:left;background:url(../images/common/bl_dot1.gif) no-repeat 0 15px;padding-left:8px;padding-top:5px;font-size:13px;width:65px;}
#login .sec1 .form_sec dl dd{float:left;}
#login .sec1 .form_sec p.rmb{clear:both;padding:5px 0 0 65px;font-size:11px;}
#login .sec1 .form_sec p.rmb span{display:inline-block;padding-right:25px;}
#login .sec1 .form_sec p.btn a{position: absolute;
left: 390px;
top: 10px;
background: #50c3f8;
border: 1px solid #36aae0;
border-radius: 3px;
color: #fff;
text-align: center;
width: 100px;
height: 42px;
padding: 28px 0 43px 0px;
display: block;
font-size: 14px;
transition: 0.3s;
}
#login .sec1 .form_sec p.btn a:hover {
	background: #36aae0;
	border: 1px solid #50c3f8;
}
#login .sec2{background:#f8f8f8;border:1px solid #dfdfdf;margin-bottom:8px;margin-top:5px;padding:20px 0 18px 90px}
#login .sec2 ul{overflow:hidden;text-align:left;font-size:13px;}
#login .sec2 li.id{float:left;width:440px;}
#login .sec2 li.pw{float:left;}
#login .sec2 li span.btn{display:inline-block;margin-left:20px;}
#login .sec2 li span.btn a{background:#50c3f8;color:#fff;display:block;padding:2px 20px 2px;text-align:center;border-radius:10px;font-size:12px;}


#login .sec3{background:#f8f8f8;border:1px solid #dfdfdf;padding:25px 0 30px 90px;text-align:left;margin-bottom:60px;}
#login .sec3 dt{font-size:13px;float:left;}
#login .sec3 dd.btn {float:left;display:inline-block;margin-left:20px;}
#login .sec3 dd.btn a{background:#50c3f8;color:#fff;display:block;padding:2px 20px 2px;text-align:center;border-radius:20px;font-size:12px;}
#login .sec3 dd.txt{clear:both;padding-top:15px;font-size:12px;line-height:19px;color:#848689;}
	#login .sec3 .font_c2 {display: block;
width: 120px;
}
/* idpw 
#idpw{width:1100px;margin:100px auto 130px;overflow:hidden;background:url(../images/common/idpw_img1_bg.gif) no-repeat 25px 110px;text-align:left;min-height:330px;} */

#idpw{width:1000px;overflow:hidden;text-align:left;min-height:330px;}
#idpw .id{float:left;width:490px;}
#idpw .pw{float:left;border-left:1px solid #c2c2c2;padding-left:77px;}
#idpw p.title1{padding-top:15px;padding-bottom:16px;}
#idpw p.title2{font-size:14px;letter-spacing:-0.5px;}
#idpw ul.form{margin-top:35px;height:140px;}
#idpw ul.form li{padding-bottom:9px;}
#idpw p.btn a{background:#f49d3f;color:#fff;text-align:center;border:1px solid #d87b16;padding:8px 35px 8px;border-radius:25px;font-size:13px;font-size:14px;}

.title{
	position:relative;
	text-align:center;
}
.title h1 {
	border-top: 5px solid #50c3f8;
}
</style>


<div class="inner bgW">
	<div class="title">
		<h1><img style="width:120px;" src="assets/favicon.png"/></h1>
	</div>
	<div id="login">
		<div class="sec1">
			<div class="form_sec">
				<dl>
				<dt>아이디</dt>
				<dd><input type="text" id="loginid" name="memberId" class="form3" onkeydown="if(event.keyCode==13){goLogin();}" style="width:222px;"></dd>
				</dl>
				<dl>
				<dt>비밀번호</dt>
				<dd><input type="password" id="loginpwd" name="passWord" class="form3" onkeydown="if(event.keyCode==13){goLogin();}" style="width:222px;"></dd>
				</dl>
				<p class="btn">
					<a href="javascript:goLogin();">로그인</a>
				</p>
				<div style="display:none;">					
					<a href="#" id="facebook_Btn" class="social_login">페이스북 로그인</a>
					<a href="#" id="naver_Btn" class="social_login">네이버 로그인</a>
					<a href="#" id="kakao_Btn" class="social_login">카카오 로그인</a>
				</div>
			</div>
		</div>
		<div class="sec2">
			<ul>
			<li class="id"><span class="font_c2">아이디</span>를 잊으셨나요? <span class="btn"><a href="?page=idpw">아이디 찾기</a></span></li>
			<li class="pw"><span class="font_c2">비밀번호</span>를 잊으셨나요? <span class="btn"><a href="?page=idpw">비밀번호 찾기</a></span></li>
			</ul>
		</div>
		<div class="sec3">
			<dl>
			<dt><span class="font_c2">상상굿쯔 회원이</span>아니신가요?</dt>
			<dd class="btn"><a href="?page=join">회원가입</a></dd>
			<dd class="txt">상상굿쯔 회원이 되시면 상상굿쯔의 서비스를 이용하실 수 있습니다. <br></dd>
			</dl>
		</div>
	</div>
</div>


<script>
	function goLogin() {
		var loginid  = $("#loginid").val();
		var loginpwd = $("#loginpwd").val();
	
		
		$.ajax({										
			type: 'POST',
			url: 'post/process.php',
			dataType:'jsonp',
			contentType: 'application/json',
			async: false,
			headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
			data: {	
				mode			 : 'login',
				MEMBER_ID		 : loginid,
				MEMBER_PW		 : loginpwd
			},
			success: function(json) {
				if(json[0].chk == 'y'){
					var alertText =	'방문을 환영합니다.';
					alert(alertText);
					location.href= "index.php";
				} else {
					alert('로그인정보가 올바르지 않습니다.');
				}
			},
			error: function() {
					//alert('통신에 이상이 발생하였습니다.');
			}
		});	
	}
</script>