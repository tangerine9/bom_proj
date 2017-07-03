<?php
	require_once("./dbconfig.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>자유게시판 </title>
	<link rel="stylesheet" href="/css/notice_qa/normalize.css" />
	<link rel="stylesheet" href="/css/notice_qa/board.css" />
</head>
<body>
	<article class="boardArticle">
		<h3>자유게시판</h3>
		<table>
			<caption class="readHide">자유게시판</caption>
			<thead>
				<tr>
					<th scope="col" class="no">번호</th>
          <th scope="col" class="no">문의유형</th>
          <th scope="col" class="title">제목</th>
					<th scope="col" class="author">작성자</th>
					<th scope="col" class="date">등록일</th>
					<th scope="col" class="hit">조회</th>
				</tr>
			</thead>
			<tbody>
					<?php
						$sql = 'select * from bom_notice where frag = 0 order by num desc;';
						$result = $db->query($sql);
						while($row = $result->fetch_assoc())
						{
							$datetime = explode(' ', $row['date']);
							$date = $datetime[0];
							$time = $datetime[1];
							if($date == Date('Y-m-d'))
								$row['date'] = $time;
							else
								$row['date'] = $date;
					?>
				<tr>
					<td class="no"> <?php echo $row['num']; ?></td>
					<td class="title"> <?php echo $row['type']?></td>
					<td class="author">
            <a href="./view.php?bno=<?php echo $row['num'] ?>">
              <?php echo $row['title']?>
            </a>
          </td>
					<td class="date"><?php echo $row['writer']?></td>
					<td class="hit"><?php echo $row['date']?></td>
          <td class="hit"><?php echo $row['count']?></td>

				</tr>
					<?php
						}
					?>
			</tbody>
		</table>
    <a href="./writer.php" style="padding-left:700px;"> 글쓰기</a>
	</article>
</body>
</html>
