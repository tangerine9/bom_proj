<?php
  require_once("../dbconfig.php");

  if (isset($_GET['mNum'])) {
    $mNum = $_GET['mNum'];
  }

  if (isset($_GET['sNum'])) {
    $sNum = $_GET['sNum'];
  }

  ?>


<?
if (!isset($mNum)&&!isset($sNum)) {
        $sql = 'select * from zz_cate_big;';
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()){
          ?>
  <p>
    <input type="radio" name="cate1" value="<? echo $row['ip']?>" onclick="call_cate(this.value,0)">
      <? echo $row['name']?>
    </input>
  </p>
  <?}
}

if (isset($mNum)) {
  $sql = 'select * from ff_cate_middle;';
  $result = $db->query($sql);
  while ($row = $result->fetch_assoc()) {
  if ($row['cate_big']==$mNum) {
?>
<p>
  <input type="radio" name="cate2" value="<? echo $row['ip']?>" onclick="call_cate(0,this.value)">
    <? echo $row['name']?>
  </input>
</p>
<?
    }
  }
}
    if (isset($sNum)) {
      $sql = 'select * from zz_cate_small;';
      $result = $db->query($sql);
      while($row=$result->fetch_assoc()){
        if ($row['cate_middle']==$sNum) {
          ?>
    <p>
      <input type="radio" name="cate3" value="<? echo $row['ip']?>"
      onclick="call_pro(<? echo $row['cate_big']?>, <? echo $row['cate_middle']?>, this.value)">
        <? echo $row['name']?>
      </input>
    </p>
    <?
    }
  }
 }
  ?>
