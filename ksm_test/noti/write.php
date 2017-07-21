<?php
	require_once("./dbconfig.php");

	//$_GET['bno']이 있을 때만 $bno 선언
	if(isset($_GET['num'])) {
		$num = $_GET['num'];
	}

	if(isset($num)) {
		$sql = 'select title, writer, content from notice where num='.$num.' order by date desc;';
		$result = $db->query($sql);
		$row = $result->fetch_assoc();
	}
?>
  <script>
    function doSubmit(index){
      var frm = document.myForm;
      if(index==1){
        frm.action="./noti/write_update.php";
        frm.submit();
      } else if (index==2){
        frm.action="./index.php";
        frm.submit();
      }

    }
  </script>

	<article class="boardArticle">
		<h3>공지사항 글쓰기</h3>
		<div id="boardWrite">
			<form name="myForm" method="post">
				<?php
				if(isset($num)) {
					echo '<input type="hidden" name="num" value="' . $num . '">';
				}
				?>
				<table id="boardWrite">
					<caption class="readHide">공지사항 글쓰기</caption>
					<tbody>
						<tr>
							<th scope="row"><label for="writer">작성자</label></th>
							<td class="writer" name="bWriter" id="bWriter">
								<?php
									$writer = $_SESSION['sName'];
									echo $writer;
								?>
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="title">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" value="<?php echo isset($row['title'])?$row['title']:null?>"></td>
						</tr>
						<tr>
							<th scope="row"><label for="content">내용</label></th>
							<td class="content"><textarea name="bContent" id="bContent"><?php echo isset($row['content'])?$row['content']:null?></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet">
					<input type="button" value="<?php echo isset($num)?'수정':'작성'?>" onclick="doSubmit(1)"></input>
					<input type="button" value="취소" onclick="doSubmit(2)"></input>
				</div>
			</form>
		</div>
	</article>
