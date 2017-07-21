<?php
$br=$_GET['br'];

if(isset($br)){
  if($br==200){ //일반회원
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


     <div align="center" style="background-color:#CCCCCC; width:30%;  margin-left:8%;">
       <input style="height:80px; background-color:#FFBA64; " type="button" name="normal_buyer" value="일반구매회원" onclick="userbranch(2000)"></input>
       <input style="height:80px; background-color:#FDFF39;" type="button" name="business_buyer" value="기업구매회원"onclick="userbranch(3000)"></input>
     </div>



 <script >
   function userbranch(ck){
     location.replace("./index.php?pin=11&br="+ck);
   }
 </script>

 <? } ?>
