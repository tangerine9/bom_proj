<?
  session_start();

  require_once("../dbconfig.php");

  unset($_SESSION['sId']);
  unset($_SESSION['sPwd']);
  unset($_SESSION['sName']);
  unset($_SESSION['sType']);
  ?>

  <script>
    alert("로그아웃 되었습니다.");
    location.replace("../index.php");
  </script>
