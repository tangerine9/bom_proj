<?php
  require_once("../dbconfig.php");

  $pName = $_POST['pro_name'];
  $pPrice = $_POST['pro_price'];
  $pSu = $_POST['pro_su'];
  $pDetail = $_POST['pro_detail'];
  $pCateB = $_POST['pro_cateB'];
  $pCateM = $_POST['pro_cateM'];
  $pCateS = $_POST['pro_cateS'];

  if (strcmp("$pName", "")==0) {
    ?>
    <script>
      alert("상품명을 입력해주세요");
      history.back();
    </script>
    <?
  } elseif (strcmp("$pPrice", "")==0) {
    ?>
    <script>
      alert("상품단가를 입력해주세요");
      history.back();
    </script>
    <?
  } elseif (strcmp("$pSu", "")==0) {
    ?>
    <script>
      alert("상품수량을 입력해주세요");
      history.back();
    </script>
    <?
  } elseif (strcmp("$pDetail", "")==0) {
    ?>
    <script>
      alert("상품정보를 입력해주세요");
      history.back();
    </script>
    <?
  } elseif (strcmp("$pCateB", "")==0) {
    ?>
    <script>
      alert("대분류를 선택해주세요");
      history.back();
    </script>
    <?
  } elseif (strcmp("$pCateM", "")==0) {
    ?>
    <script>
      alert("중분류를 선택해주세요");
      history.back();
    </script>
    <?
  } elseif (strcmp("$pCateS", "")==0) {
    ?>
    <script>
      alert("소분류를 선택해주세요");
      history.back();
    </script>
    <?
  } else {

    $sql = 'insert into zz_product (pr_name, pr_price, pr_su, pr_detailInfo, pr_cate_big, pr_cate_middle, pr_cate_small) values (
        "'.$pName.'", '.$pPrice.', '.$pSu.', "'.$pDetail.'", "'.$pCateB.'", "'.$pCateM.'", "'.$pCateS.'"
      );';

    $result = $db->query($sql);

    if ($result!=null) {
      $msg = '정상적으로 상품이 등록되었습니다.';
      $replaceURL = '../index.php?pin=8.php';
    } else {
      $msg = '상품 등록에 실패했습니다.';
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
    alert("<? echo $result?>");
    location.replace("<? echo $replaceURL?>");
  </script>
  <?
}
?>
