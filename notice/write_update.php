<?php
	require_once("./dbconfig.php");

  $b_ck= $_POST['chk_info'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];

	$date = date('Y-m-d H:i:s');

	$sql = 'insert into bom_notice values
  ("", 0 ,"'.$b_ck.'","' . $bTitle . '","주인",now(),1, "' . $bContent . '")';

	$result = $db->query($sql);
	if($result) {
		$msg = "정상적으로 글이 등록되었습니다.";
		$replaceURL = './notice_pa.php' ;
	} else {
		$msg = "글을 등록하지 못했습니다.";
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
