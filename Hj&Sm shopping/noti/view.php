<?php
	require_once("./dbconfig.php");

	if (isset($_GET['num'])) {
		$num = $_GET['num'];

		if(!empty($num) && empty($_COOKIE['notice' . $num])) {
			$sql = 'update notice set count = count + 1 where num = ' . $num;
			$result = $db->query($sql);
			if(empty($result)) {
				?>
				<script>
					alert('오류가 발생했습니다.');
					history.back();
				</script>
				<?php
			} else {
				setcookie('notice' . $num, TRUE, time() + (1), '/');
			}
		}

		$sql = 'select * from notice where num='.$num.';';
		$result = $db->query($sql);
		$row=$result->fetch_assoc();

	}
?>
		<script>
	    function doSubmit(index){
	      var frm = document.myForm;
	      if(index==1){
	        frm.action="./index.php?pin=6&num=<? echo $num?>";
	        frm.submit();
	      } else if (index==2) {
	        frm.action = "./index.php?pin=7&num=<? echo $num?>";
	        frm.submit();
	      } else if (index==3) {
	        frm.action = "./index.php";
	        frm.submit();
	      }
	    }
	  </script>
		<style>
			td {padding: 10px; border-bottom: 2px solid #666;}


		</style>

		<article class="boardArticle">
			<h3>공지사항</h3>
			<div id="boardView">
				<h3 id="boardTitle"><?php echo $row['title']?></h3>
			<table border="1">
				<tr>
				<div id="boardInfo">
					<td><span id="boardID">작성자: <?php echo $row['writer']?></span></td>
					<td><span id="boardDate">작성일: <?php echo $row['date']?></span></td>
					<td><span id="boardHit">조회: <?php echo $row['count']?></span></td>

				</div>
			</tr>
			<tr>
				<td colspan="3" valign="top"><div id="boardContent" style="border:0px"><?php echo nl2br($row['content'])?></div></td>
			</tr>
			</table>
	    <form name="myForm"  method="post">
	      <div class="btnSet">
					<?
					if (isset($_SESSION['sId']) && $_SESSION['sType']==1) {
						?>
						<input type="button" value="수정" onclick="doSubmit(1)" />
						<input type="button" value="삭제" onclick="doSubmit(2)" />
						<?
					}
					?>
					<input type="button" value="목록" onclick="doSubmit(3)" />
				</div>
	    </form>
			</div>
		</article>
