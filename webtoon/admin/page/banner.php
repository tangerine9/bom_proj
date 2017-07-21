<?
	if (!$_GET["sector"]) {
		$sector = 'homeright';
	} else {
		$sector = $_GET["sector"];
	}
	// ----------------------------------------------------------
	// 배너 목록
	// ----------------------------------------------------------
	if (!$_GET["menu"] or $_GET["menu"] == "list") {		
		echo "
		<script>
			$('#mainbanner').addClass('open');
			$('#mainbanner li').removeClass('active');
			$('#mainbanner li:nth-child(2)').addClass('active');
		</script>
		";
		include "banner/$sector/list.php";
	}
	// ----------------------------------------------------------
	// 배너 추가
	// ----------------------------------------------------------
	if ($_GET["menu"] == "add") {		
		echo "
		<script>
			$('#mainbanner').addClass('open');
			$('#mainbanner li').removeClass('active');
			$('#mainbanner li:nth-child(1)').addClass('active');
		</script>
		";
		include "banner/$sector/add.php";
	}
	// ----------------------------------------------------------
	// 배너 수정
	// ----------------------------------------------------------
	if ($_GET["menu"] == "modi") {		
		echo "
		<script>
			$('#mainbanner').addClass('open');
			$('#mainbanner li').removeClass('active');
			$('#mainbanner li:nth-child(2)').addClass('active');
		</script>
		";
		include "banner/$sector/modi.php";
	}
?>