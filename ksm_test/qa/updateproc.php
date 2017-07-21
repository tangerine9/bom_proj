<?php
	require_once("../dbconfig.php");

  $b_ck= $_POST['chk_info'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];
	$num=$_POST['num'];

	$date = date('Y-m-d H:i:s');

	$sql = 'update notice set type="'.$b_ck.'" ,title="' . $bTitle . '" , content="' .
	$bContent . '" where flag=3 and num='.$num;


	$result = $db->query($sql);
	if($result) {
		$msg = "정상적으로 글이 등록되었습니다.";
		$replaceURL = '../index.php?pin=1' ;
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
