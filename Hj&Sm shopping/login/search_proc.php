<?php
require_once('../dbconfig.php');
$result= $db->query('select * from zz_cate_small;');

$q=$_GET["q"];
if (strlen($q)>0) {
  $hint="";
  while($row=$result->fetch_assoc()){
    if (stristr($row['name'],$q)) {
      if ($hint=="") {
      $hint="<a href='./index.php?pin=8&first=". $row['cate_big'].
      "&second=".$row['cate_middle'].
      "&third=".$row['ip'].
      "'>" .
      $row['name']. "</a>";
      } else {
      $hint=$hint . "<br /><a href='./index.php?pin=8&first=" .$row['cate_big'].
      "&second=".$row['cate_middle'].
      "&third=".$row['ip'].
      "'>" .
      $row['name']. "</a>";
      }
    }
  }
}
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

echo $response;
 ?>
