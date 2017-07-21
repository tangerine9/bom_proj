<?php
  require_once("./dbconfig.php");

  if (isset($_GET['code'])) {
    $pCode = $_GET['code'];
  }

  $sql = 'select * from zz_product where pr_code='.$pCode;
  $result = $db -> query($sql);
  $row = $result -> fetch_assoc();

 ?>
 <style>

   div.pro_detail div{
     border:0;
     padding: 5px;
   }

   .pro_detail {
     height: 500px;
   }

   .pro_pic, .pro_info {
     float: left;
     width: 300px;
   }


   .number-control {
     display: inline-block;
     height: 25px;
     vertical-align: top;
   }

   .button-up, .button-down {
     display: block;
     padding-top: 0px;
     height: 13px;
     font-size: 1px;
     vertical-align: middle;
   }

   #pro_code, #order_price, #pro_name {
     border: 0;
   }

   #pro_code {
     font-size: 17px;
   }

   #order_su {
     width: 30px;
     text-align: center;
   }

 </style>

 <article class="pro_detail_article">
   <div class="pro_detail">
     <div class="pro_pic" >
       <table>
         <tr>
           <td>여기엔</td>
         </tr>
         <tr>
           <td>사진이</td>
         </tr>
         <tr>
           <td>들어갈</td>
         </tr>
         <tr>
           <td>예정입</td>
         </tr>
         <tr>
           <td>니다아</td>
         </tr>
       </table>
     </div>
     <div class="pro_info">
       <form name="orderForm" method="post">
         <div class="pro_name">
           <h3 style="margin:0; padding:0"> <input type="text" name="pro_name" id="pro_name" value="<? echo $row['pr_name']?>"> </h3>
           상품번호 :<input type="text" name="pro_code" id="pro_code" value="<? echo $row['pr_code']?>">
         </div>
         <div class="pro_price">
           <table>
             <tr>
               <th scope="row"><span>판매가</span></th>
               <td><span><? echo $row['pr_price']?></span></td>
             </tr>

             <tr>
               <th scope="row"><span>남은수량</span></th>
               <td><span><? echo $row['pr_su']?></span></td>
             </tr>

             <tr style="height:50px;">
               <th scope="row"><span>수량</span></th>
               <td>
                 <input type="text" name="order_su" id="order_su" value="1">
                 <span class="number-control">
                   <button type="button" class="button-up" onclick="buttonDo(0)">▲</button>
                   <button type="button" class="button-down" onclick="buttonDo(1)">▼</button>
                 </span>
               </td>
             </tr>

             <tr>
               <th scope="row">가격</th>
               <td>
                 <input type="text" name="order_price" id="order_price" value="<? echo $row['pr_price']?>" readonly>
               </td>
             </tr>
           </table>
         </div>
         <div class="btn" align="right">
           <input type="button" value="장바구니" onclick="order(0)">
         </div>
       </form>
     </div>
   </div>
 </article>

 <script>
    function order(s){
      var frm = document.orderForm;
      if (s==0) {
        frm.action="./order/order_basket_add.php";
        frm.submit();
      }
    }


    function buttonDo(s){
     var num = document.getElementById("order_su").value;
     var price = <?= $row['pr_price']?>;
     if (s==0) {
       num++;
       document.getElementById("order_su").value = num;
       document.getElementById("order_price").value = num*price;
     } else if (s==1) {
       num--;
       document.getElementById("order_su").value = num;
       document.getElementById("order_price").value = num*price;
       if (num<=0) {
         num = 1;
         document.getElementById("order_su").value = num;
         document.getElementById("order_price").value = price;
       }
     }

   }
 </script>
