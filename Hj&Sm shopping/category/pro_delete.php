<?php
  require_once("./dbconfig.php");
  session_start();

  if (isset($_POST['admin_pwd'])) {
    $aPwd = $_POST['admin_pwd'];
    $pCode = $_POST['pro_code'];

    if ($_SESSION['sPwd'] == $aPwd) {

      if (isset($pCode)) {
        $sql = 'delete from zz_product where pr_code='.$pCode.';';
        $result = $db->query($sql);

        if($result != null){
          $msg = '상품이 삭제되었습니다.';
        } else {
          $msg = '상품 삭제를 실패했습니다.';
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
          window.close("./category/admin_check.php");
          opener.window.location = "./index.php?pin=8";
        </script>
        <?

      } else {
        ?>
        <script>
          alert("삭제할 상품이 존재하지 않습니다.");
          history.back();
        </script>
        <?
      }
    } else {
      ?>
      <script>
        alert("비밀번호가 일치하지 않습니다.");
        history.back();
      </script>
      <?
    }

  }else {
    ?>
    <script>
      alert("비밀번호를 입력해주세요.");
      history.back();
    </script>
    <?
  }
?>
