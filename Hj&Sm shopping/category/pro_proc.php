<?php
  require_once("../dbconfig.php");
  session_start();

  $cateB = $_GET['cateB'];
  $cateM = $_GET['cateM'];
  $cateS = $_GET['cateS'];

  $sql = 'select * from zz_product where pr_cate_big='.$cateB.' and pr_cate_middle='.$cateM.' and pr_cate_small='.$cateS.';';
  $result = $db->query($sql);

 ?>
 <style type="text/css">
.pro_box{
   border-top: 1px  #9A9A9A;
  padding:40px ;
  margin: 0;
    width:100%;
    height: 8%;

}
.pro_box_child{
  float:left;
  height:auto;
  border:0px;
}

 </style>

   <h3 align="center" style="background-color:#C18372" >카테고리에 따른 상품 모오오오록</h3>
	<table height="auto">
   <?
   while ($row = $result->fetch_assoc()) {
     ?>

     <div class="pro_box" align="center">
       <div class="pro_box_child" style="width:120px; background-color:#F4B618">
          <p></p>
           <span>사진</span>
           <p></p>
       </div>
       <a href="./index.php?pin=13&code=<? echo $row['pr_code']?>">
       <div class="pro_box_child" style="width:50%;">
         <p><b><span ><? echo $row['pr_name']?></span></b></p>
       </div>
       </a>
       <div class="pro_box_child" style="width:100px;"></div>
       <div class="pro_box_child" style="width:20%; background-color:#C1C072">
         <p><b><? echo $row['pr_price']?></b></p>
       </div>
       <div class="pro_box_child" style="width:20%;">
       <?
       if (isset($_SESSION['sId']) && $_SESSION['sType']==1) {
        ?>
        <input type="button" value="수정" onclick="proFix(<? echo $row['pr_code']?> , <? echo $cateB?>, <? echo $cateM?>, <? echo $cate?>)"></input>
        <input type="button" value="삭제" onclick="adminCheck(<? echo $row['pr_code']?>)"></input>
       <?
       }
       ?>
        <input type="button" value="장바구니"></input>
       </div>
     </div>

     <?
   }
   ?>
</table>
