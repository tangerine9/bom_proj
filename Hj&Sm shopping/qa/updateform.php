<?php $num=$_GET['num'];
require_once("./dbconfig.php");

$sql = 'select * from notice where flag=3 and num='.$num;
$result = $db->query($sql);
$row=$result->fetch_assoc();
 ?>
<html>
<head>
	<meta charset="utf-8">
  <link rel="stylesheet" href="/css/notice_qa/normalize.css" />
	<link rel="stylesheet" href="/css/notice_qa/board.css" />
</head>
<body>
	<article class="boardArticle" >
		<h3>Q&A 글 수정</h3>
		<div id="boardWrite">
			<form action="./qa/updateproc.php" method="post">
				<th><input type="radio" name="chk_info" value="스마트폰초대장">스마트폰초대장</th>
				<th><input type="radio" name="chk_info" value="사진업로드">사진업로드</th>
				<th><input type="radio" name="chk_info" value="수정문의">수정문의</th>
				<th><input type="radio" name="chk_info" value="제작문의">제작문의</th>
				<th><input type="radio" name="chk_info" value="기타">기타</th>
				<table id="boardWrite" style="border : 2px solid; ">
					<tbody >
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle" placeholder="<?PHP ECHO $row['title'] ?>" >
							</td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea rows="14" cols="80" name="bContent" id="bContent"><?PHP ECHO $row['content'] ?>
							</textarea></td>
						</tr>
					</tbody>
				</table>
				<input type="hidden" name="num" value="<?php echo $num ?>">
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">수정</button>
					<a href="../index.php?pin=1" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>
