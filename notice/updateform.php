<html>
<head>
	<title>자유게시판 글쓰기</title>
  <link rel="stylesheet" href="/css/notice_qa/normalize.css" />
	<link rel="stylesheet" href="/css/notice_qa/board.css" />
</head>
<body>
	<article class="boardArticle" >
		<h3>자유게시판 글쓰기</h3>
		<div id="boardWrite">
			<form action="./update.php" method="post">
        <th><input type="radio" name="chk_info" value="주문">주문</th>
        <th><input type="radio" name="chk_info" value="업로드">업로드</th>
        <th><input type="radio" name="chk_info" value="시안">시안</th>
        <th><input type="radio" name="chk_info" value="배송">배송</th>
        <th><input type="radio" name="chk_info" value="기타">기타</th>
				<table id="boardWrite" style="border : 2px solid; ">
					<caption class="readHide">자유게시판 수정</caption>
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
				<div class="btnSet">
					<button type="submit" class="btnSubmit btn">수정</button>
					<a href="./notice_pa.php" class="btnList btn">목록</a>
				</div>
			</form>
		</div>
	</article>
</body>
</html>
