<?php
	session_start();
	require_once("../dbconfig.php");

	//$_POST['bno']이 있을 때만 $bno 선언, isset -> 값이 존재하는지 체크
	if(isset($_POST['num'])) {
		$num = $_POST['num'];
	}

	//bno이 없다면(글 쓰기라면) 변수 선언, empty -> 값이 비어있는지 체크
	if(empty($num)) {
		$bWriter = $_POST['bWriter'];
		$date = date('Y-m-d H:i:s');
	}

	//항상 변수 선언
	// $bPassword = $_POST['bPassword'];
	$bTitle = $_POST['bTitle'];
	$bContent = $_POST['bContent'];

//글 수정
if(isset($num)) {
	//수정 할 글의 비밀번호가 입력된 비밀번호와 맞는지 체크
	// $sql = 'select count(b_password) as cnt from board_free where b_password=password("' . $bPassword . '") and b_no = ' . $bNo;
	// $result = $db->query($sql);
	// $row = $result->fetch_assoc();

	//비밀번호가 맞다면 업데이트 쿼리 작성
	// if($row['cnt']) {
		$sql = 'update notice set title="' . $bTitle . '", content="' . $bContent . '" where num = ' . $num;
		$msgState = '수정';
	//틀리다면 메시지 출력 후 이전화면으로
	// } else {
	// 	$msg = '비밀번호가 맞지 않습니다.';
	?>
		<!-- <script>
			alert("<?php echo $msg?>");
			history.back();
		</script> -->
	<?php
		// exit;
	// }

//글 등록
} else {
	$sql = 'insert into notice (flag, type, title, content, writer, date, count) values (1, "공지", "' . $bTitle . '", "' .$bContent. '", "'. $_SESSION['sName'] . '", "' . $date . '", 0)';
	$msgState = '등록';
}

//메시지가 없다면 (오류가 없다면)
if(empty($msg)) {
	$result = $db->query($sql);

	//쿼리가 정상 실행 됐다면,
	if($result) {
		$msg = '정상적으로 글이 ' . $msgState . '되었습니다.';
		// if(empty($bNo)) {
		// 	$bNo = $db->insert_id;
		// }
		$replaceURL = '../index.php';
	} else {
		$msg = '글을 ' . $msgState . '하지 못했습니다.';
?>
		<script>
			alert("<?php echo $msg?>");
			history.back();
		</script>
<?php
		exit;
	}
}

?>
<script>
	alert("<?php echo $msg?>");
	location.replace("<?php echo $replaceURL?>");
</script>
