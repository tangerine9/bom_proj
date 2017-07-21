<style>
/* 회원가입 */
.title {
		color: #4D4D4D;
		font-size: 24px;
		margin-bottom: 10px;
		font-weight: bold;
}
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
table.tb_reg th.input{color:#00a3ed;}
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
.btn_sec a.conform{display:inline-block;margin:0 10px;background:#28b8f9;color:#fff;font-size:16px;padding:12px 50px 12px;border-radius:25px;border:1px solid #28b8f9;}
.btn_sec a.cancel{display:inline-block;margin:0 10px;background:#535353;color:#fff;font-size:16px;padding:12px 50px 12px;border-radius:25px;border:1px solid #444444;}

.form3{font-family:"Open Sans","맑은 고딕","Malgun Gothic","나눔 고딕","Nanum Gothic","dotum";font-size:12px;width:200px;border:1px solid #d9d9d9;padding:5px 10px 6px;}

#goBtn {cursor: pointer;}
</style>
			
<script>
// 모두동의
function fn_allAgree() {
	if ( $('input:checkbox[id="agreeAll"]').is(":checked") == true ) {		
		$("#agreeTxt, #agreeTxt2").attr("checked", true); 
	} else {
		$("#agreeTxt, #agreeTxt2").attr("checked", false); 		
	}
}
// 중복확인
function memberIdCheck() {
	var memberId_chk    = $("#memberId").val().replace(/(\s*)/g,"");
	$.ajax({										
		type: 'POST',
		url: 'post/process.php',
		dataType:'jsonp',
		contentType: 'application/json',
		async: false,
		headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
		data: {	
			mode			 : 'id_chk',
			MEMBER_ID		 : memberId_chk
		},
		success: function(json) {
			if(json[0].chk == 'y'){
				alert('사용하실 수 있는 아이디입니다.');
				$("#id_chk").val('y');
			} else {
				alert('이미등록된 아이디입니다.');
				$("#id_chk").val('n');
			}
		},
		error: function() {
				//alert('통신에 이상이 발생하였습니다.');
		}
	});	
}
// 이메일 선택
function fn_changeEmail() {
	$("#email2").val($("#email2Select").val());
}	
// 회원가입
function submitform() {	
	// 회원약관 동의
	var agreeTxt_chk    = $('input:checkbox[id="agreeTxt"]').is(":checked");
	// 개인정보 취급방침
	var agreeTxt2_chk   = $('input:checkbox[id="agreeTxt2"]').is(":checked");
	// 회원아이디
	var memberId_chk    = $("#memberId").val().replace(/(\s*)/g,"");
	// 아이디 중복검사
	var id_chk          = $("#id_chk").val();
	// 닉네임
	var memberNick_chk  = $("#memberNick").val();
	// 비밀번호
	var passwd_chk      = $("#passwd").val().replace(/(\s*)/g,"");
	// 비밀번호확인
	var passwd2_chk     = $("#passwd2").val().replace(/(\s*)/g,"");	
	// 이름
	var memberName_chk  = $("#memberName").val();
	// 생년월일
	var memberBirth_chk	= $("#memberBirth").val();
	// 이메일
	var email1_chk      = $("#email1").val();
	var email2_chk      = $("#email2").val();
	var email_all       = email1_chk+'@'+email2_chk;
	
	/* 필수항목 검증 */
	if (agreeTxt_chk == false) {
		alert('회원약관에 동의해주세요');
		return;
	} else if (agreeTxt2_chk == false) {
		alert('개인정보취급방침에 동의해주세요');
		return;
	} else if (memberId_chk == "") {
		alert('아이디를 입력해주세요');
		$("#memberId").focus();
		return;
	} else if (id_chk == 'n') {
		alert('아이디 중복검사를 해주세요');
		return;		
	} else if (memberNick_chk == '') {
		alert('닉네임을 입력해주세요');
		return;		
	} else if (passwd_chk == "") {
		alert('비밀번호를 입력해주세요');
		$("#passwd").focus();
		return;
	} else if (passwd2_chk == "") {
		alert('비밀번호확인을 입력해주세요');
		$("#passwd2").focus();
		return;
	} else if (memberName_chk == "") {
		alert('이름을 입력해주세요');
		$("#memberName").focus();
		return;
	} else {

		$.ajax({										
			type: 'POST',
			url: 'post/process.php',
			dataType:'jsonp',
			contentType: 'application/json',
			async: false,
			headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
			data: {	
				mode			 : 'member_join',
				MEMBER_ID		 : memberId_chk,
				MEMBER_PW		 : passwd_chk,
				MEMBER_NICK		 : memberNick_chk,
				MEMBER_NAME		 : memberName_chk,
				MEMBER_BIRTH	 : memberBirth_chk,
				MEMBER_EMAIL	 : email_all
			},
			success: function(json) {
				if(json[0].chk == 'y'){
					alert('회원가입을 환영합니다.');
					location.href= "?page=mypage";
				} else {
					alert('회원가입중 에러가 발생하였습니다.');
					$("#goBtn").attr('onclick','javascript:submitform()');
				}
			},
			error: function() {
					//alert('통신에 이상이 발생하였습니다.');
			}
		});	
	}	
}
</script>

			<div class="inner">	
				<div class="box" style="padding:40px;">
<form method=post name=sw_write_form action="jiugi2.php" onSubmit="return submitform()">
<div class="title">
					<h1>회원가입</h1>
				</div>
				<div class="agree_sec">
                    <div class="floatR">
                    	<p class="check"><input name="agreeAll" id="agreeAll" type="checkbox" onclick="javaScript:fn_allAgree();"> 모두 동의</p>
                        <div>
                        	<dl class="term">
                            <dt><input name="agreeTxt" id="agreeTxt" type="checkbox"> 회원약관 동의</dt>
                            <dd>
                            	<?
								$query = mysql_query("SELECT * FROM DOCUMENT WHERE DOCUMENT_TYPE = 'policy'");
								$agree = mysql_result($query,0,'DOCUMENT_TEXT');
								echo "$agree";
								?>
                            </dd>
                            </dl>
                            <dl class="privacy">
                            <dt><input name="agreeTxt2" id="agreeTxt2" type="checkbox" value=""> 개인정보취급방침 동의</dt>
                            <dd>
                            	<?
								$query = mysql_query("SELECT * FROM DOCUMENT WHERE DOCUMENT_TYPE = 'agree'");
								$agree = mysql_result($query,0,'DOCUMENT_TEXT');
								echo "$agree";
								?>
                            </dd>
                            </dl>
                        </div>
                    </div>
                </div>
				<div class="write_sec">
                    <div class="floatR">
                    	<p class="input">* 표시가 있는 항목은 <span class="input">필수 입력 항목</span> 입니다.</p>
                        <table summary="" class="tb_reg">
                        <caption></caption>
                        <colgroup>
                        <col>
                        <col>
                        </colgroup>
                        <tbody>
                        <tr>
                        <th class="br_top input">아이디 *</th>
                        <td class="br_top"><input id="memberId" name="memberId" style="width:200px;" class="form3" type="text" value="" maxlength="13"><span class="btn2"><a style="cursor:pointer" id="mem_checkId" onclick="javascript:memberIdCheck();">증복확인</a></span></td>
                        <input type="hidden" id="id_chk" value="n"/>
                        </tr>
                        <tr>
                        <th class="input">닉네임 *</th>
                        <td><input id="memberNick" name="memberNick" style="width:200px;" class="form3" type="text" value=""></td>
                        </tr>
                        <tr>
                        <th class="input">비밀번호 *</th>
                        <td><input id="passwd" name="passwd" style="width:200px;" class="form3" type="password" value=""><span class="txt">비밀번호는 영문과 숫자의 조합으로 사용해 주세요.</span></td>
                        </tr>
                        <tr>
                        <th class="input">비밀번호 확인 *</th>
                        <td><input type="password" name="passwd2" id="passwd2" class="form3" style="width:200px;"><span class="txt">비밀번호를 한번 더 입력해 주세요.</span></td>
                        </tr>
                        <tr>
                            <th class="input">이름 *</th>
                            <td><input id="memberName" name="memberName" style="width:200px;" class="form3" type="text" value="" maxlength="25"></td>
                        </tr>
                         <tr>
                            <th>생년월일</th>
                            <td><input id="memberBirth" name="memberBirth" style="width:200px;" class="form3" type="text" value="" maxlength="25"></td>
                        </tr>
                        <tr>
                        <th class="input">E-mail *</th>
                        <td><input id="email1" name="email1" style="width:160px;" class="form3"  type="text" value=""> @ <input id="email2" name="email2" style="width:160px;" class="form3" type="text" value="">
							<select class="selectType testEmail form4" id="email2Select" name="email2Select" onchange="fn_changeEmail();">
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
							</select>
                        </td>
                        </tr>
                        
                        
                        </tbody>
                        </table>
                        <div class="btn_sec">
                        	<a id="goBtn" onclick="javascript:submitform()" class="conform">가입하기</a>
                            <a href="index.php" class="cancel">가입취소</a>
                        </div>
                    </div>
                </div>
                
		</form>   
	</div>
</div>