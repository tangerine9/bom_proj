<?php
$br=$_GET['br'];

if(isset($br)){
  if($br==2000){ //일반회원
  ?>
  <div align="center">
  <h2>일반회원가입</h2>
  <form name="rgform" action="./login/join_user_proc.php"  method="post">
  	<ul style="line-height: 2;  list-style:none;">
  		<li>아이디 : <input type="text" name="id"  size="10" id="cId" required autofocus/>
  					<input type="button" value="중복확인" onclick="javscript:checkid()"/>
  		</li>
  		<li>비밀번호 : <input id="ckpass1" type="password" name="pass"onkeyup="ckpassword()" required />
  		</li>
  		<li>비밀번호 재확인 : <input id="ckpass2" type="password" name="repass" onkeyup="ckpassword()"required/>
        <span id="ckpatxt" ></span>
  		</li>

  		<li>이름 : <input  type="text" name="name" size="10"  required/></li>
  		<li>성별 : <input  type="radio" name="gender" value="남자"required />남자
                <input  type="radio" name="gender" value="여자" />여자
  		</li>
  		<li>생년 : <input  type="date" name="birth" size="5" required />년
  		</li>
      <li>연락처 : <input type="tel" name="tel" placeholder="010-0000-0000"
                pattern="(010)-\d{3,4}-\d{4}" required> </li>
  		<li>주소 : <input  type="text" name="address" size="40"required />
  	</ul>
    <input type="hidden" name="idtype" value="2">
  	<input type="submit" value="가입하기"  />
  </form>
</div>
  <script>
  	function checkid() {
  		var c = document.getElementById("cId").value;
  		if(c.length==0) {
  			alert("체크할 ID 를 입력하세요.");
  			document.getElementById("cId").focus();
  			return;
  		}
  		var url ="./login/idcheck.php?id="+c;
  		window.open(url, "chk" , "width=300, height=140");
  	}

    function ckpassword(){
      var ckpass11=document.getElementById("ckpass1").value;
      var ckpass22=document.getElementById("ckpass2").value;
      if(ckpass11==ckpass22){
        document.getElementById("ckpatxt").innerHTML="암호확인 일치";
        document.getElementById("ckpatxt").style.background="#B6BCFF"
      }else{
        document.getElementById("ckpatxt").innerHTML="암호확인 불일치";
        document.getElementById("ckpatxt").style.background="#FFA2A2"
      }
    }


  </script>
  <?
}else{?>
  <!-- //기업회원 -->
  <div align="center">
  <h2>사업자 회원가입</h2>
  <form  name="rgform" action="./login/join_user_proc.php"  method="post">
    <ul style="line-height: 2;  list-style:none;">
      <li>사업자 인증 번호 : <input type="text" name="enterid"  size="10" />
      <input type="text" name="enterid"  size="10" />
    <input type="text" name="enterid"  size="10" /> </li>
    <li><p>사업자 등록번호 인증이 되지 않을 경우, 아래 방법으로 확인하실 수 있습니다.</p>
      <p>- FAX 접수 : 0303-3445-1534 로 사업자등록증 1부, 연락처 기재</p>
      <p>- 전화 문의 : NICE평가정보㈜ 고객센터로 문의 바랍니다. (02-3771-1390)</p>
      <p>- 사업자 구매회원 사업자등록</p>
      <p>- NICE 평가정보</p>
      </li>
      <li>아이디 : <input type="text" name="id"  size="10" id="cId2"/>
            <input type="button" value="중복확인" onclick="javscript:checkid()"/>
      </li>
      <li>비밀번호 : <input id="ckpass3" type="password" name="pass"onkeyup="ckpassword()" />
      </li>
      <li>비밀번호 재확인 : <input id="ckpass4" type="password" name="repass" onkeyup="ckpassword()"/>
        <span id="ckpatxt1" ></span>
      </li>

      <li>이름 : <input  type="text" name="name" size="10"  /></li>
      <li>성별 : <input  type="radio" name="gender" value="남자" />남자
                <input  type="radio" name="gender" value="여자" />여자
      </li>
      <li>생년 : <input  type="text" name="birth" size="5"  />년
      </li>
      <li>연락처 : <input type="tel" name="tel" placeholder="010-0000-0000"
                pattern="(010)-\d{3,4}-\d{4}" required> </li>
      <li>주소 : <input  type="text" name="address" size="40"  />
    </ul>
    <input type="hidden" name="idtype" value="2">
    <input type="submit" value="가입하기"  />
  </form>
</div>
  <script>
    function checkid() {
      var c = document.getElementById("cId2").value;
      if(c.length==0) {
        alert("체크할 ID 를 입력하세요.");
        document.getElementById("cId2").focus();
        return;
      }
      var url ="./login/idcheck.php?id="+c;
      window.open(url, "chk" , "width=300, height=140");
    }

    function ckpassword(){
      var ckpass11=document.getElementById("ckpass3").value;
      var ckpass22=document.getElementById("ckpass4").value;
      if(ckpass11==ckpass22){
        document.getElementById("ckpatxt1").innerHTML="암호확인 일치";
        document.getElementById("ckpatxt1").style.background="#B6BCFF"
      }else{
        document.getElementById("ckpatxt1").innerHTML="암호확인 불일치";
        document.getElementById("ckpatxt1").style.background="#FFA2A2"
      }
    }


  </script>

  <?
}
}else{
//기본화면
 ?>
 <head>
   <meta charset="utf-8"/>
   <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
   <meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, width=device-width"/>
   <script src="//developers.kakao.com/sdk/js/kakao.min.js"></script>
   <script type="text/javascript" src="https://static.nid.naver.com/js/naverLogin_implicit-1.0.3.js" charset="utf-8"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
 </head>
 <body>
      <div align="center" style="background-color:#CCCCCC; width:80%;  margin-left:8%;">
       <input style="height:80px; background-color:#FFBA64; " type="button" name="normal_buyer" value="일반구매회원" onclick="userbranch(2000)"></input>
       <input style="height:80px; background-color:#FDFF39;" type="button" name="business_buyer" value="기업구매회원"onclick="userbranch(3000)"></input>
       <input style="height:80px; background-color:#FDFF39;" type="button" name="google_lo" value="google로그인"onclick="userbranch(1)"></input>
      </div>
     <div class="" style="border:0px;" align="center">
       <a id="kakao-login-btn"></a>
       <script type='text/javascript'>
       var id;
         //<![CDATA[
           // 사용할 앱의 JavaScript 키를 설정해 주세요.
           Kakao.init('df3c556e6bfba2b0c61ef1ea87ede4fc');
           // 카카오 로그인 버튼을 생성합니다.
           Kakao.Auth.createLoginButton({
             container: '#kakao-login-btn',
             success: function(authObj) {
               // 로그인 성공시, API를 호출합니다.
               Kakao.API.request({
                 url: '/v1/user/me',
                 success: function(res) {
                   var nick=res.properties.nickname;
                    alert(nick+" 환영합니다");
                    location.href="./login/social_script_proc.php?name="+nick+"&id="+res.id;
                 },
                 fail: function(error) {
                   alert(JSON.stringify(error));
                 }
               });
             },
             fail: function(err) {
               alert(JSON.stringify(err));
             }
           });
         //]]>
       </script>
     </div>
<!--                facebook login             -->
<script>
  function statusChangeCallback(response) {
    console.log(response);

    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.

    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
  FB.init({
    appId      : '874275676058205',
    cookie     : true,  // enable cookies to allow the server to access
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.8' // use graph api version 2.8
  });

  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/ko_KR/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    //console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      location.href="./login/social_script_proc.php?name="+response.name+"&id="+response.id;
    });
  }
</script>

<div class="" align="center" style="border:0">


<div class="fb-login-button" style="border:0"
  data-width="220px"
  data-max-rows="1"
  data-size="large"
  data-button-type="continue_with"
  data-show-faces="false"
  data-auto-logout-link="false"
  data-use-continue-as="false"
   scope="public_profile,email"
   onclick="checkLoginState();"
   >
</div>
</div>

<!-- 네이버아이디로로그인 버튼 노출 영역 -->
  <div id="naver_id_login" align="center" style="border:0px;"></div>
  <!-- //네이버아이디로로그인 버튼 노출 영역 -->
  <script type="text/javascript">
  	var naver_id_login = new naver_id_login("lfftMA_wu9ziZRxYg0YK", "http://delphi16.cafe24.com/pmy/notice/login/naver_login_script_proc.html");
  	var state = naver_id_login.getUniqState();
  	naver_id_login.setButton("white", 2,40);
  	naver_id_login.setDomain("YOUR_SERVICE_URL");
  	naver_id_login.setState(state);
  	naver_id_login.setPopup();
  	naver_id_login.init_naver_id_login();
  </script>


     </body>

     <script >
       function userbranch(ck){
         if(ck==1){
        location.replace("./login/google_login.php");
      }else if (ck==2) {
location.replace("./login/test1.php");
      }
      else {
         location.replace("./index.php?pin=11&br="+ck);
       }
       }
     </script>

 <? } ?>
