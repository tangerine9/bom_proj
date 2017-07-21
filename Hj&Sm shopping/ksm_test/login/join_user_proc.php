<?php
$rgid=$_POST['id'];
$rgpass=$_POST['pass'];
$rgname=$_POST['name'];
$rgidtype=($_POST['idtype']/1000);
$rgender=$_POST['gender'];
$rgbirth=$_POST['birth'];
$rgaddress=$_POST['address'];
$rgnum=$_POST['tel'];


if(strcmp("$rgid","")==0){
  ?><script> alert("ID를 넣으시오"); history.back(); </script><?
}elseif (strcmp("$rgpass","")==0) {
  ?><script> alert("암호를 넣으시오"); history.back(); </script><?
}elseif (strcmp("$rgname","")==0) {
  ?><script> alert("이름을 넣으시오"); history.back(); </script><?
}elseif (strcmp("$rgender","")==0) {
  ?><script> alert("성별를 넣으시오"); history.back(); </script><?
}elseif (strcmp("$rgbirth","")==0) {
  ?><script> alert("생년월일를 넣으시오"); history.back(); </script><?
}elseif (strcmp("$rgaddress","")==0) {
  ?><script> alert("주소를 넣으시오"); history.back(); </script><?
}elseif (strcmp("$rgnum","")==0) {
  ?><script> alert("연락처를 넣으시오"); history.back(); </script><?
}else{

require_once("../dbconfig.php");

$sql='insert into user(`id`, `pwd`, `name`, `type`, `gander`, `birth`, `address`,`telnum`)
values(
"'.$rgid.'",
"'.$rgpass.'",
"'.$rgname.'",
"'.$rgidtype.'",
"'.$rgender.'",
"'.$rgbirth.'",
"'.$rgaddress.'",
"'.$rgnum.'"
)';
$result=$db->query($sql);
if($result !=null){
   echo("<script>alert('성공'); location.replace('../index.php'); </script>");
}else{
   echo("<script>alert('실패'); history.back(); </script>");
}
}
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>

   </body>
 </html>
