<?
  // db 추가할부분
  require_once("./dbconfig.php");

  /* 페이징 시작 */
	//페이지 get 변수가 있다면 받아오고, 없다면 1페이지를 보여준다.
	if(isset($_GET['page'])) {
		$page = $_GET['page'];
	} else {
		$page = 1;
	}

	$sql = 'select count(*) as cnt from notice where flag=1 order by date desc';
	$result = $db->query($sql);
	$row = $result->fetch_assoc();

	$allPost = $row['cnt']; //전체 게시글의 수

	$onePage = 15; // 한 페이지에 보여줄 게시글의 수.
	$allPage = ceil($allPost / $onePage); //전체 페이지의 수

	if($page < 1 || ($allPage && $page > $allPage)) {
?>
		<script>
			alert("존재하지 않는 페이지입니다.");
			history.back();
		</script>
<?php
		exit;
	}

	$oneSection = 10; //한번에 보여줄 총 페이지 개수(1 ~ 10, 11 ~ 20 ...)
	$currentSection = ceil($page / $oneSection); //현재 섹션
	$allSection = ceil($allPage / $oneSection); //전체 섹션의 수

	$firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

	if($currentSection == $allSection) {
		$lastPage = $allPage; //현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가 된다.
	} else {
		$lastPage = $currentSection * $oneSection; //현재 섹션의 마지막 페이지
	}

	$prevPage = (($currentSection - 1) * $oneSection); //이전 페이지, 11~20일 때 이전을 누르면 10 페이지로 이동.
	$nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); //다음 페이지, 11~20일 때 다음을 누르면 21 페이지로 이동.

	$paging = '<ul>'; // 페이징을 저장할 변수

	//첫 페이지가 아니라면 처음 버튼을 생성
	if($page != 1) {
		$paging .= '<li class="page page_start"><a href="./index.php?page=1">처음</a></li>';
	}
	//첫 섹션이 아니라면 이전 버튼을 생성
	if($currentSection != 1) {
		$paging .= '<li class="page page_prev"><a href="./index.php?page=' . $prevPage . '">이전</a></li>';
	}

	for($i = $firstPage; $i <= $lastPage; $i++) {
		if($i == $page) {
			$paging .= '<li class="page current">' . $i . '</li>';
		} else {
			$paging .= '<li class="page"><a href="./index.php?page=' . $i . '">' . $i . '</a></li>';
		}
	}

	//마지막 섹션이 아니라면 다음 버튼을 생성
	if($currentSection != $allSection) {
		$paging .= '<li class="page page_next"><a href="./index.php?page=' . $nextPage . '">다음</a></li>';
	}

	//마지막 페이지가 아니라면 끝 버튼을 생성
	if($page != $allPage) {
		$paging .= '<li class="page page_end"><a href="./index.php?page=' . $allPage . '">끝</a></li>';
	}
	$paging .= '</ul>';

	/* 페이징 끝 */
	$currentLimit = ($onePage * $page) - $onePage; //몇 번째의 글부터 가져오는지
	$sqlLimit = ' limit ' . $currentLimit . ', ' . $onePage; //limit sql 구문

	$sql = 'select * from notice where flag=1 order by date desc' . $sqlLimit; //원하는 개수만큼 가져온다. (0번째부터 20번째까지
	$result = $db->query($sql);
  $num = mysqli_num_rows($result);

 ?>

     <article class="boardArticle">
       <div id="boardList">
         <h2>공지사항</h2>
         <table>
           <thead>
             <tr>
               <th scope="col" class="no">번호</th>
               <th scope="col" class="type">분류</th>
               <th scope="col" class="title">제목</th>
               <th scope="col" class="writer">작성자</th>
               <th scope="col" class="date">작성일</th>
               <th scope="col" class="count">조회</th>
             </tr>
           </thead>
           <tbody>
             <?
              while($row=$result->fetch_assoc()){

             ?>
             <tr>
              <td class="no"><? echo $allPost-($onePage*($page-1))?></td>
              <td class="type"><? echo $row['type']?></td>
              <td style="display:none"><? echo $row['num']?></td>
              <td class="title">
                 <a href="./index.php?pin=3&num=<? echo $row['num']?>">
                 <? echo $row['title']?>
                </a>
              </td>
               <td class="writer"><? echo $row['writer']?></td>
               <td class="date"><? echo $row['date']?></td>
               <td class="count"><? echo $row['count']?></td>
             </tr>
             <?
             $allPost--;
              }
             ?>
           </tbody>
         </table>
         <?php
          if (isset($_SESSION['sId']) && $_SESSION['sType']==1) {
            ?>
            <div class="btnSet">
             <a href="./index.php?pin=6" style="color:black">
               <input type="button" value="글쓰기"></input>
             </a>
            </div>
            <?
          }
          ?>
        <div class="paging">
				<?php echo $paging ?>
			</div>
       </div>
     </article>
