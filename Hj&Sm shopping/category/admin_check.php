<?php

  if (isset($_GET['code'])) {
    $pCode = $_GET['code'];

  }


 ?>

<article class="check">
  <div>
    <form name="admin_check" method="post">
      <table>
        <h3>관리자 확인</h3>
        <tr>
          <th scope="row">상품 번호</th>
          <td>
            <input type="text" name="pro_code" value="<? echo $pCode?>" readonly></input>
          </td>
        </tr>
        <tr>
          <th scope="row">관리자 비밀번호 확인</th>
          <td>
            <input type="password" name="admin_pwd"></input>
          </td>
        </tr>
        <tr>
          <td>
            <input type="button" name="check_submit" value="확인" onclick="checkSub(0)"></input>
            <input type="button" name="check_cancel" value="취소" onclick="checkSub(1)"></input>
          </td>
        </tr>
      </table>
    </form>
  </div>
</article>

<script>
  function checkSub(v){
    var frm = document.admin_check;
    if (v==0) {
      frm.action="../index.php?pin=12";
      frm.submit();
    } else if (v==1) {
      window.close();
    }
  }
</script>
