<?php
  require_once("../dbconfig.php");

  if (isset($_POST['box'])) {
    $count = count($_POST['box']);
    for ($i=0; $i < $count; $i++) {
      $val = $_POST['box'];
    }

    for ($i=0; $i < $count ; $i++) {
      $sql = 'delete from zz_basket where ip='.$val[$i];
      $result = $db->query($sql);

      if ($result==null) {
        ?>
        <script>
          alert("실패");
          location.replace("../index.php?pin=14");
        </script>
        <?
        exit;
      }
    }

    ?>
    <script>
      alert("삭제가 완료되었습니다.");
      location.replace("../index.php?pin=14");
    </script>
    <?
  }
 ?>
