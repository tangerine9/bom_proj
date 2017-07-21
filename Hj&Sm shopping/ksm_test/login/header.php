<?
  session_start();
  require_once("./dbconfig.php");
  if(isset($_SESSION['sId'])){
    $id = $_SESSION['sId'];
  }
 ?>
    <script>
    function showResult(str) {
  if (str.length==0) {
    document.getElementById("search").innerHTML="";
    document.getElementById("search").style.border="0px";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("search").innerHTML=this.responseText;
      document.getElementById("search").style.border="1px solid #A5ACB2";
      document.getElementById("search").style.background="#FDFFEE";
    }
  }
  xmlhttp.open("GET","./login/search_proc.php?q="+str,true);
  xmlhttp.send();
}
      function doLogin(index){
        var frm=document.logForm;
        if (index==1) {
          frm.action="./login/login.php";
          frm.submit();
        } else if (index==2) {
      frm.action="./index.php?pin=11";
          frm.submit();
        } else if (index==3) {
          frm.action="./login/logout.php";
          frm.submit();
        }
      }
    </script>
    <!-- <link rel="stylesheet" href="./css/login.css"> -->

        <style>
                    @media screen and (max-width:1000px){
                        form{display: none;}
                    }

                </style>

        <h1 style="float:left; margin-left:2%; " align="left" onclick="location.replace('./index.php')">TEST shopping</h1>

          <form  style="float:left; margin-top:40px; margin-left:3%; min-width: ">
          <input type="text" size="30" onkeyup="showResult(this.value)"><button type="button" name="button" onclick="submit">검색</button>
          <div id="search" style="position:absolute; width:20%; border:0px; "></div>
          </form>
          <form name="logForm" method="post" align="right" style=" z-index: 100;">
            <? if (!isset($_SESSION['sId']) || !isset($_SESSION['sPwd'])) { ?>

                <h1 style="margin:0; padding-right: 25%;  "><label for="id">Login</label></h1>
                <input type="text" name="id"/>
                <input type="password" name="pwd"/>
                <input type="button" name="login" value="로그인" onclick="doLogin(1)"  />
                <input type="button" name="signIn" value="회원가입" onclick="doLogin(2)" />

              <? } else { ?>
                <h3 class="signUpTitle"><? echo $_SESSION['sName'] ?>님 환영합니다.</h3>
                <input type="button" name="logout" value="로그아웃" onclick="doLogin(3)" />
                <? }?>
          </form>

        
