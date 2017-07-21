<?php
  require_once("../dbconfig.php");

  if (isset($_GET['sNum'])) {
    $sNum = $_GET['sNum'];
  }

  $sql = 'select * from zz_cate_small;';
  $result = $db->query($sql);

  while($row = $result->fetch_assoc()){
    if ($row['cate_middle'] == $sNum) {
      ?>
      <p>
          <? echo $row['name']?>
      </p>
      <?
    }
  }
?>
