<?php
  require_once("./dbconfig.php");

  $cateB = $_POST['cate1'];
  $cateM = $_POST['cate2'];
  $cateS = $_POST['cate3'];

  $sql = 'select * from zz_product where pr_cate_big='.$cateB.' and pr_cate_middle='.$cateM.' and pr_cate_small='.$cateS.';';
  $result = $db->query($sql);

 ?>

 <table>
   <h3>!!!!!</h3>
   <tr>
     <th>이름</th>
     <th>가격</th>
     <th>수량</th>
     <th>상제정보</th>
   </tr>
   <?
   while ($row = $result->fetch_assoc()) {
     ?>
     <tr>
       <td><? echo $row['pr_name']?></td>
       <td><? echo $row['pr_price']?></td>
       <td><? echo $row['pr_su']?></td>
       <td><? echo $row['pr_detailInfo']?></td>
     </tr>
     <?
   }
   ?>

 </table>
