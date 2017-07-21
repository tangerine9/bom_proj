<?php
  require_once("../dbconfig.php");

  if (isset($_GET['mNum'])) {
    $mNum = $_GET['mNum'];
  }

  $sql = 'select * from ff_cate_middle;';
  $result = $db->query($sql);

  while($row = $result->fetch_assoc()){
    if ($row['cate_big'] == $mNum) {
      ?>
      <p>
        <input type="radio" name="cate1" value="<? echo $row['ip']?>" onchange="call_cate(this.value, 2)">
          <? echo $row['name']?>
        </input>
      </p>
      <?
    }
  }
?>
