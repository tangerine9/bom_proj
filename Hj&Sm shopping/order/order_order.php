<?php
  require_once("./dbconfig.php");
  session_start();

  if (isset($_SESSION['sId'])) {
    $oId = $_SESSION['sId'];

    $sql = 'select * from zz_basket where order_id="'.$oId.'";';
    $result = $db->query($sql);
    $total = 0;
  }
 ?>

 <style>

   #orderList {
     width: auto;
     height: auto;
   }
   .list{
     width: 900px;
     border: 2px solid;
     text-align: center;
   }

   table.list th {
     padding: 5px;
   }

   table.list td {
     padding: 10px;
   }

   thead.listHead tr{
     border-bottom: 2px solid;
   }

   tbody.listBody tr{
     border-bottom: 1px solid;
   }

   tfoot.listFoot tr{
     border-top: 2px solid;
   }





 </style>

 <article class="basket">
   <div id="orderList">
     <form name="orderForm" method="post">
       <!-- ///////////////////////////////////////////////////////////////////// -->
       <div class="listTable">
         <table class="list">
           <h3>주문상품</h3>
           <thead class="listHead">
             <tr>
               <th scope="col" class="order_info">상품정보</th>
               <th scope="col" class="order_su">수량</th>
               <th scope="col" class="order_price">가격</th>
             </tr>
           </thead>
           <tbody class="listBody">
             <?
               while ($row = $result->fetch_assoc()) {
                 ?>
                 <tr>
                   <td>
                     <a href="./index.php?pin=13&code=<? echo $row['pr_code']?>" target="_blank"><b><? echo $row['pr_name']?></b></a>
                   </td>
                   <td><? echo $row['order_su']?></td>
                   <td><? echo number_format($row['order_price'])?></td>
                 </tr>
                 <?
                 $total += $row['order_price'];
               }
             ?>
           </tbody>
           <tfoot class="listFoot">
             <tr>
               <td>-</td>
               <td><b>총액</b></td>
               <td><? echo number_format($total)?></td>
             </tr>
           </tfoot>
         </table>
       </div>
       <!-- ///////////////////////////////////////////////////////////////////// -->
       <div class="addrTable">
         <table class="addr">
           <h3>배송정보</h3>
             <tr>
               <th scope="col">받으시는 분</th>
               <td>
                 <input type="text" name="order_name" value="">
               </td>
             </tr>
             <tr>
               <th scope="col">배송지</th>
             </tr>
             <tr>
               <th scope="col">전화번호</th>
             </tr>
             <tr>
               <th scope="col">배송메시지</th>
             </tr>
           </table>
         </div>
       <!-- ///////////////////////////////////////////////////////////////////// -->
     </form>
   </div>
 </article>
