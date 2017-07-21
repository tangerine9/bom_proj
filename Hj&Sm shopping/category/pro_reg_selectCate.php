<?php
  require_once("../dbconfig.php");

  if (isset($_GET['selectedCateB'])) {
    $selectedCateB = $_GET['selectedCateB'];
  }

  if (isset($_GET['cateB'])) {
    $cateB = $_GET['cateB'];
    $selectedCateM = $_GET['selectedCateM'];
  }

  if (isset($_GET['cateM'])) {
    $cateM = $_GET['cateM'];
    $selectedCateS = $_GET['selectedCateS'];
  }

 ?>

 <?php
  if (isset($selectedCateB)) {
    ?>
    <select name="pro_cateB" id="pro_cateB" onchange="get_cate(this.value, 0)">
      <option value="">대분류</option>
      <?php
        $sql = 'select * from zz_cate_big;';
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
          if ($selectedCateB!=null && $selectedCateB == $row['ip']) {
            ?>
            <option value="<? echo $row['ip']?>" selected><? echo $row['name']?></option>
            <?
            } else {
            ?>
            <option value="<? echo $row['ip']?>"><? echo $row['name']?></option>
            <?
          }
        }
       ?>
    </select>
    <?
  }
  ?>

  <?php
   if (isset($cateB)) {
     ?>
     <select name="pro_cateM" onchange="get_cate(this.value, 1)">
       <option value="">중분류</option>
       <?php
         $sql = 'select * from ff_cate_middle where cate_big='.$cateB.';';
         $result = $db->query($sql);
         while ($row = $result->fetch_assoc()) {
           if($selectedCateM!=null && $selectedCateM == $row['ip']){
             ?>
             <option value="<? echo $row['ip']?>" selected><? echo $row['name']?></option>
             <?
           } else {
             ?>
             <option value="<? echo $row['ip']?>"><? echo $row['name']?></option>
             <?
           }
         }
       ?>
     </select>
     <?
   }
   ?>


  <?php
   if (isset($cateM)) {
     ?>
     <select name="pro_cateS">
       <option value="">소분류</option>
       <?php
         $sql = 'select * from zz_cate_small where cate_middle='.$cateM.';';
         $result = $db->query($sql);
         while ($row = $result->fetch_assoc()) {
           if($selectedCateS!=null && $selectedCateS == $row['ip']){
             ?>
             <option value="<? echo $row['ip']?>" selected><? echo $row['name']?></option>
             <?
           } else {
            ?>
            <option value="<? echo $row['ip']?>"><? echo $row['name']?></option>
            <?
           }
         }
        ?>
     </select>
     <?
   }
   ?>
