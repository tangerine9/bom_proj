<?php
  require_once("../dbconfig.php");
  session_start();

  if (isset($_SESSION['sId'])) {
    $oId = $_SESSION['sId'];

    if (isset($_POST['pro_code'])) {
      $pCode = $_POST['pro_code'];
      $pName = $_POST['pro_name'];
      $pSu = $_POST['order_su'];
      $pPrice = $_POST['order_price'];

      $sql = 'insert into zz_basket (pr_code, pr_name, order_id, order_su, order_price) values ('.$pCode.', "'.$pName.'", "'.$oId.'", '.$pSu.', '.$pPrice.');';
      $result = $db->query($sql);

      if ($result!=null) {
        $msg = '장바구니에 등록되었습니다.';
        // $replaceURL = 장바구니 페이지
      } else {
        $msg = '장바구니 등록에 실패했습니다.';
        ?>
        <script>
          alert("<? echo $msg?>");
          history.back();
        </script>
        <?
        exit;
      }

      ?>
      <script>
        alert("<? echo $msg?>");
        // location.replace("<? echo $replaceURL?>");
        history.back();
      </script>
      <?
    }
  } else {
    ?>
    <script>
      alert("로그인을 해주시기 바랍니다.");
    </script>
    <?
    exit;
  }


 ?>
