
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 글쓰기</title>
  <link rel="stylesheet" href="/css/notice_qa/normalize.css" />
	<link rel="stylesheet" href="/css/notice_qa/board.css" />
</head>
<body>
	<article class="boardArticle" >
		<h2>자유게시판 글쓰기</h2>
		<div id="boardWrite" style="border : 1px solid; width:100%;">
			<form action="./qa/write_proc.php" method="post">

        <th><input type="radio" name="chk_info" value="스마트폰초대장">스마트폰초대장</th>
        <th><input type="radio" name="chk_info" value="사진업로드">사진업로드</th>
        <th><input type="radio" name="chk_info" value="수정문의">수정문의</th>
        <th><input type="radio" name="chk_info" value="제작문의">제작문의</th>
        <th><input type="radio" name="chk_info" value="기타">기타</th>

				<table id="boardWrite" style="border : 2px solid; ">
					<tbody >
						<tr>
							<th scope="row"><label for="bTitle">제목</label></th>
							<td class="title"><input type="text" name="bTitle" id="bTitle"></td>
						</tr>
						<tr>
							<th scope="row"><label for="bContent">내용</label></th>
							<td class="content"><textarea rows="14" cols="80" name="bContent" id="bContent"></textarea></td>
						</tr>
					</tbody>
				</table>
				<div class="btnSet" align="center">
					<button type="submit" class="btnSubmit btn">작성</button>
					<a href="../index.php?pin=1" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>
