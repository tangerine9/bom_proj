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

      function goBasket(){
        var frm = document.logForm;
        frm.action = "./index.php?pin=14";
        frm.submit();
      }
    </script>
    <!-- <link rel="stylesheet" href="./css/login.css"> -->
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title></title>
        <style>
                   @media screen and (min-width:750px) and (max-width:1000px){
                        #se{display: none;}
                    }
                    @media screen  and (max-width:750px){
                         #se{display: none;}
                         #lo{display: none;}
                     }

                </style>
      </head>
      <body>
        <h1 style="float:left; margin-left:2%; " align="left" onclick="location.replace('./index.php')">TEST shopping</h1>

          <form id="se" style="float:left; margin-top:30px; margin-left:3%; min-width: ">
          <img style="float:left; margin-right:5px;" onclick="se_target1()" src="./login/search.png" width="30px" heighr="30px" alt="">
          <input  type="text" size="30" onkeyup="showResult(this.value)" placeholder="ex)티셔츠">
          <div id="search" style="position:absolute; width:20%; border:0px; "></div>
          </form>
          <form id="lo" name="logForm" method="post" align="right" style=" z-index: 100;">
            <? if (!isset($_SESSION['sId'])) { ?>

                <h1 style="margin:0; padding-right: 25%;  "><label for="id">Login</label></h1>
                <input type="text" name="id"/>
                <input type="password" name="pwd"/>
                <input type="button" name="login" value="로그인" onclick="doLogin(1)"  />
                <input type="button" name="signIn" value="회원가입" onclick="doLogin(2)" />

              <? } else { ?>
                <h3 class="signUpTitle"><? echo $_SESSION['sName'] ?>님 환영합니다.</h3>
                <input type="button" name="logout" value="로그아웃" onclick="doLogin(3)" />
                <input type="button" name="basket" value="장바구니" onclick="goBasket()">
                <? }?>
          </form>

      </body>
    </html>
