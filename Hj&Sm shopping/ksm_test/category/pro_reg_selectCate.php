<?php
  require_once("../dbconfig.php");

  if (isset($_GET['selectedCateB'])) {
    $selectedCateB = $_GET['selectedCateB'];
    $selectedCateM = $_GET['selectedCateM'];
    $selectedCateS = $_GET['selectedCateS'];
  }

  if (isset($_GET['cateB'])) {
    $cateB = $_GET['cateB'];
  }

  if (isset($_GET['cateM'])) {
    $cateM = $_GET['cateM'];
  }

 ?>

 <?php
  if (!isset($cateB)&&!isset($cateM)) {
    ?>
    <select name="pro_cateB" id="pro_cateB" onchange="get_cate(this.value, 0)">
      <option value="">대분류</option>
      <?php
        $sql = 'select * from zz_cate_big;';
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            ?>
            <option id="<? echo $row['ip']?>" value="<? echo $row['ip']?>"><? echo $row['name']?></option>
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
