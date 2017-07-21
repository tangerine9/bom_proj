<?php
  require_once("../dbconfig.php");

  $sql = 'select * from zz_cate_big;';
  $result = $db->query($sql);

  while($row = $result->fetch_assoc()){
  ?>
  <p>
    <input type="radio" name="cate1" value="<? echo $row['ip']?>" onchange="call_cate(this.value, 1)">
      <? echo $row['name']?>
    </input>
  </p>
  <?
  }
?>
