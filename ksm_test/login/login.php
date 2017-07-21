<?
session_start();
require_once("../dbconfig.php");
 $id = $_POST['id'];
 $pwd = $_POST['pwd'];

 $sql = 'select * from user where id="'.$id.'" and pwd="'.$pwd.'";';
 $result = $db->query($sql);
 $row = $result->fetch_assoc();



 if ($row['id']) {
   if ($row['pwd']) {
     ?>
     <script>
       alert("로그인 되었습니다.");
       <?
       $_SESSION['sId'] = $row['id'];
       $_SESSION['sPwd'] = $row['pwd'];
       $_SESSION['sName'] = $row['name'];
       $_SESSION['sType'] = $row['type'];
       ?>
       location.replace("../index.php");
       </script>
     <?
   }
 } else {
  ?>
  <script>
    alert("아이디나 비밀번호가 틀렸습니다.");
    history.back();
  </script>
  <?
}
?>
