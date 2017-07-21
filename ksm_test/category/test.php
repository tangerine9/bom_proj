<?php
header('Content-Type: text/html; charset=utf-8');
$db = new mysqli('localhost', 'delphi16', 'vada0214!', 'delphi16');

if ($db->connect_error) {
  die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
}

$db->set_charset('utf8');
$qqq=1;
// for( $i=1; $i<4;$i++){
//   for($s=1; $s<4;$s++){
    for($x=1; $x<3;$x++){
      $xx=1;
      $sss="형준이 멍청이".$xx;
      $sql='insert into zz_product
        values("",'.$sss.',10,1,"내용입니다",1,2,'.$xx.')';
      $result = $db->query($sql);
      time_nanosleep(10000,0);
      $xx=$xx+1;
  }
// }
// }
echo $result;
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     sss
   </body>
 </html>
