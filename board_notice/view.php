<?php
require_once("./dbconfig.php");
$bNo = $_GET['bno'];

$sql = 'select * from bom_notice where num='.$bNo.' and frag=0 ' ;
$result = $db->query($sql);
$row = $result->fetch_assoc();

?>

<html>
<head>
<meta charset="utf-8" />
<title>자유게시판 </title>
<link rel="stylesheet" href="/css/notice_qa/normalize.css" />
<link rel="stylesheet" href="/css/notice_qa/board.css" />
</head>
<body>
<article class="boardArticle">
<h3>자유게시판 글쓰기</h3>
<div id="boardView">
<h3 id="boardTitle"><?php echo $row['title']?></h3>
<div id="boardInfo">
<span id="boardID">작성자: <?php echo $row['writer']?></span>
<span id="boardDate">작성일: <?php echo $row['date']?></span>
<span id="boardHit">조회: <?php echo $row['count']?></span>
</div>
<div id="boardContent"><?php echo $row['content']?></div>
</div>
</article>
<input type="button" value="글수정" onclick="location.href='./update.php?num=<?php echo $bNo?>'" />
<input type="button" value="글삭제" onclick="location.href='./delete.php?num=<?php echo $bNo?>'" />

</body>
</html>
