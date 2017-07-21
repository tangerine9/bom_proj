<?php
  require_once("./dbconfig.php");
  session_start();

  if (isset($_SESSION['sId'])) {
    $oId = $_SESSION['sId'];

    $sql = 'select * from zz_basket where order_id="'.$oId.'";';
    $result = $db->query($sql);
    $total = 0;
  } else {
    ?>
    <script>
      alert("로그인을 해주시기 바랍니다.");
      history.back();
    </script>
    <?
    exit;
  }
 ?>

<style>

  #basketList {
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
  <div id="basketList">
    <form name="checkForm" method="post">
      <div class="listTable">
        <table class="list">
          <thead class="listHead">
            <tr>
              <th scope="row" class="checkAll"><input type="checkbox" name="checkA" onclick="checkAll()"></th>
              <th scope="row" class="order_info">상품정보</th>
              <th scope="row" class="order_su">수량</th>
              <th scope="row" class="order_price">가격</th>
            </tr>
          </thead>
          <tbody class="listBody">
            <?
              while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                  <td><input type="checkbox" name="box[]" value="<? echo $row['ip']?>"></td>
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
              <td>
                <input type="button" value="삭제" onclick="checkSubmit()" style="border:0; background-color:white;">
              </td>
              <td>-</td>
              <td><b>총액</b></td>
              <td><? echo number_format($total)?></td>
            </tr>
            <tr style="border-top:1px solid">
              <td colspan="4">
                <span style="color:white">
                <input type="button" value="구매하기" onclick="orderSubmit()" style="border:0; background-color:red; height:40px">
                </span>
              </td>
            </tr>
          </tfoot>
        </table>
      </div>
    </form>
  </div>
</article>

<script>
var check = false;
  function checkAll(){
    var box = document.getElementsByName("box[]");
    if (check==false) {
      check = true;
      for (var i = 0; i < box.length; i++) {
        box[i].checked = true;
      }
    } else {
      check = false;
      for (var i = 0; i < box.length; i++) {
        box[i].checked = false;
      }
    }
  }

  function checkSubmit(){
    var cnt = 0;
    var frm = document.checkForm;
    var box = document.getElementsByName("box[]");
    for (var i = 0; i < box.length; i++) {
      if (box[i].checked == false) {
        cnt++;
      }

      if (cnt == box.length) {
        alert("선택된 값이 없습니다.");
        location.replace("./index.php?pin=14");
      } else {
        frm.action="./order/order_basket_delete.php";
        frm.submit();
      }
    }

  }

  function orderSubmit(){
    var cnt = 0;
    var frm = document.checkForm;
    var box = document.getElementsByName("box[]");
    for (var i = 0; i < box.length; i++) {
      if (box[i].checked == false) {
        cnt++;
      }

      if (cnt == box.length) {
        alert("선택된 상품이 없습니다.");
        location.replace("./index.php?pin=14");
      } else {
        frm.action="./index.php?pin=15";
        frm.submit();
      }
    }
  }
</script>
