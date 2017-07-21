<?
  // db 추가할부분
  require_once("./dbconfig.php");

  $result2= $db->query('select num from notice where flag=3 ;');
	$num=mysqli_num_rows($result2);

  $line=$_GET['row'];

  if($line !=0 ){
  $sql = 'select * from notice where flag=3 order by date desc limit '.$line.',10;';
  $num=($num-$line);
}else {
  $sql = 'select * from notice where flag=3 order by date desc limit 10;';
}
  $result = $db->query($sql);

  $line1=ceil(($num+$line)/10);


 ?>

    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <script src="http://code.jquery.com/jquery-1.7.1.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $(".research tr:not(.accordion)").hide();
                $(".research tr:first-child").show();
                $(".research tr.accordion").click(function() {
                    $(this).nextAll("tr").fadeToggle();
                });
            });

            function update(s, num1) {
                if (s == 1) {
                    location.replace('./index.php?pin=4');
                } else {
                    location.replace('./index.php?pin=5');
                }
            }

        </script>
        <?php
          if($_SESSION['sType']!=1){
            ?>
            <style type="text/css">
              .count{
                display: none;
              }
            </style>
            <?php
          }
           ?>
    </head>

    <body>
        <article class="boardArticle">

            <div id="boardList" style="width: 1000px;">
                <div class="" style="width:100%;">
                    <div class="" align="center" style="float:left; border: 0px; width:20%;height:65px;">
                        <h2>Q&A</h2>
                    </div>

                    <div class="count" align="center" style="float:right; width:10%; height:50px; border:0px; padding-top:15px;">
                        <a href="./index.php?pin=2" style=" height:60px;" width="100%">
                            <input type="button" value="글쓰기"></input>
                            </a>
                    </div>

                </div>

                <table style="width: 1000px;">
                    <thead>
                        <tr>
                            <th scope="col" class="no" style="width: 20px;">번호</th>
                            <th scope="col" class="type" style="width: 80px;">분류</th>
                            <th scope="col" class="title" style="width: 200px;">제목</th>
                            <th scope="col" class="writer" style="width: 80px;">작성자</th>
                            <th scope="col" class="date">작성일</th>
                            <th scope="col" class="count" style="width: 60px;">수정/삭제</th>
                        </tr>
                    </thead>
                </table>
                <?
						 while($row=$result->fetch_assoc()){

						?>
                    <table class="research" style="width: 1000px;">

                        <tr class="accordion">
                            <td class="no" style="width: 20px;">
                                <?php echo $num ?>
                            </td>
                            <td class="type" style="width: 80px;">
                                <? echo $row['type']?>
                            </td>
                            <td class="title" style="width: 200px;">
                                <? echo $row['title']?>
                            </td>
                            <td class="writer" style="width: 80px;">
                                <? echo $row['writer']?>
                            </td>
                            <td class="date">
                                <? echo $row['date']?>
                            </td>
                            <td class="count" style="width: 60px;">
                              <a href="./index.php?pin=4&num=<?php echo $row['num'] ?>">
                                <button type="button" name="button">
                                수정
                                </button>
                              </a>
                              <a href="./qa/deleteproc.php?num=<?php echo $row['num'] ?>">
                                <button type="button" name="button" >
                                  삭제
                                </button>
                              </a>
                            </td>
                        </tr>
                        <tr style="background-color:#FFA2A2;">
                            <td colspan="6" align="center">
                              <div class="" style="padding: 5px; border:0px;">
                                <? echo $row['content']?>
                              </div>

                            </td>

                        </tr>
                    </table>
                    <?
						$num--;
						 }
						?>
            <div class="" align="center">
            <?php
            for($i =0;$i<=($line1-1);$i++){?>
              <a href="./index.php?pin=1&row=<?php echo ($i*10) ?>"><?php echo ($i+1) ?></a> /
              <?php
            }
             ?>
            </div>
            </div>
        </article>

    </body>

    </html>
