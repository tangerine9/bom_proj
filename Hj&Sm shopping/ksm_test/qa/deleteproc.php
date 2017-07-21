<?php require_once("../dbconfig.php");
$bNo = $_GET['num'];

$sql = 'delete from notice where num='.$bNo ;
$result = $db->query($sql);

if($result) {
  $msg = "정상적으로 글이 삭제되었습니다.";
  $replaceURL = '../index.php?pin=1' ;
} else {
  $msg = "글을 삭제하지 못했습니다.";
?>
  <script>
    alert("<?php echo $msg?>");
    history.back();
  </script>
<?php
}

?>
<script>
alert("<?php echo $msg?>");
location.replace("<?php echo $replaceURL?>");
</script>
