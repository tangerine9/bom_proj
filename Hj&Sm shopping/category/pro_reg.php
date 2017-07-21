<?php
  require_once("./dbconfig.php");

  if(isset($_GET['code'])){
    $pCode = $_GET['code'];

    $sql = 'select * from zz_product where pr_code='.$pCode.';';
    $result = $db -> query($sql);
    $row = $result->fetch_assoc();

    $cateB = $row['pr_cate_big'];
    $cateM = $row['pr_cate_middle'];
    $cateS = $row['pr_cate_small'];
  } else {
    $cateB = null;
    $cateM = null;
    $cateS = null;
  }
 ?>
    <style>
      textarea {
        resize: none;
        width: 400px;
        height: 250px;
      }

      td {
        width: 400px;
      }

      input {
        width: 200px;
      }
    </style>
    <article class="pro_reg">
      <h3>상품등록 페이지</h3>
      <div class="reg_top">
        <form name="proRegForm" method="post">
          <table>
            <tbody>
              <?
              if (isset($pCode)) {
                ?>
                <tr>
                  <th scope="row">상품 번호</th>
                  <td>
                    <input type="text" name="pro_code" id="pro_code" value="<? echo $row['pr_code']?>" style="border:0" readonly>
                  </td>
                </tr>
                <?
              }
              ?>
              <tr>
                <th scope="row"><label for="pro_name">상품 이름</label></th>
                <td class="name">
                  <input type="text" name="pro_name" id="pro_name" value="<? echo isset($row['pr_name'])?$row['pr_name']:null?>"></input>
                </td>
              </tr>
              <tr>
                <th scope="row"><label for="pro_price">상품 가격</label></th>
                <td class="price">
                  <input type="text" name="pro_price" id="pro_price" value="<? echo isset($row['pr_price'])?$row['pr_price']:null?>"></input>
                </td>
              </tr>
              <tr>
                <th scope="row"><label for="pro_su">상품 수량</label></th>
                <td class="su">
                  <input type="text" name="pro_su" id="pro_su" value="<? echo isset($row['pr_su'])?$row['pr_su']:null?>"></input>
                </td>
              </tr>
              <tr>
                <th scope="row">상품 카테고리</th>
                <td>
                <span id="get_cateB"></span>
                <span id="get_cateM"></span>
                <span id="get_cateS"></span>
                </td>
              </tr>
              <tr>
                <th scope="row"><label for="pro_detail">상품 상세정보</label></th>
                <td class="detail">
                  <textarea type="text" name="pro_detail" id="pro_detail"><? echo isset($row['pr_detailInfo'])?$row['pr_detailInfo']:null?></textarea>
                </td>
              </tr>
            </tbody>
          </table>
          <input type="button" id="proReg" name="proReg" value="<? echo isset($pCode)?'수정':'등록'?>" onclick="pro_submit(0)"></input>
          <input type="button" id="proCancel" name="proCancel" value="취소" onclick="pro_submit(1)"></input>
        </form>
      </div>
    </article>

<script>
//////////// 카테고리 셀렉트 박스 생성//////////////////////////////
  var cateB = "<?= $cateB?>";
  var cateM = "<?= $cateM?>";
  var cateS = "<?= $cateS?>";

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("get_cateB").innerHTML = this.responseText;
      }
  };
  xmlhttp.open("GET", "./category/pro_reg_selectCate.php?selectedCateB=" + cateB, true);
  xmlhttp.send();

  var xmlhttp3 = new XMLHttpRequest();
  xmlhttp3.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("get_cateM").innerHTML = this.responseText;
      }
  };
  xmlhttp3.open("GET", "./category/pro_reg_selectCate.php?cateB=" + cateB + "&selectedCateM=" + cateM, true);
  xmlhttp3.send();

  var xmlhttp4 = new XMLHttpRequest();
  xmlhttp4.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
          document.getElementById("get_cateS").innerHTML = this.responseText;
      }
  };
  xmlhttp4.open("GET", "./category/pro_reg_selectCate.php?cateM=" + cateM + "&selectedCateS=" + cateS, true);
  xmlhttp4.send();


//////////// 카테고리 셀렉트 박스 선택시 함수//////////////////////////////
  function get_cate(s, w){
    if (w==0) {
      document.getElementById("get_cateS").innerHTML = "";
      var xmlhttp1 = new XMLHttpRequest();
      xmlhttp1.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("get_cateM").innerHTML = this.responseText;
          }
      };
      xmlhttp1.open("GET", "./category/pro_reg_selectCate.php?cateB=" + s, true);
      xmlhttp1.send();
    } else if (w==1) {
      var xmlhttp2 = new XMLHttpRequest();
      xmlhttp2.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
              document.getElementById("get_cateS").innerHTML = this.responseText;
          }
      };
      xmlhttp2.open("GET", "./category/pro_reg_selectCate.php?cateM=" + s, true);
      xmlhttp2.send();
    }
  }

//////////// 등록, 수정 //////////////////////////////
  function pro_submit(h){
    var frm = document.proRegForm;
    if (h==0) {
      frm.action="./category/pro_reg_proc.php";
      frm.submit();
    } else if (h==1){
      frm.action="./index.php?pin=8";
      frm.submit();
    }
  }

</script>
