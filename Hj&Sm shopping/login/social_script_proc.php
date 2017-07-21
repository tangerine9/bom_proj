<?php

require_once("../dbconfig.php");

$sql='insert into user(`id`, `name`, `type`)
values(
"'.$_GET['id'].'",
"'.$_GET['name'].'",
2
)';
$result=$db->query($sql);

session_start();
$_SESSION['sName']=$_GET['name'];
$_SESSION['sType']=2;
$_SESSION['sId']=$_GET['id'];
if($result !=null){
   echo("<script>alert('성공 ".$_GET['name']."'); location.replace('../index.php'); </script>");
}else{
   echo("<script>alert('".$_GET['name']."이미 가입을 하셨습니다.'); location.replace('../index.php'); </script>");
}

 ?>
