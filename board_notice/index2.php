

<html>

<head>
    <meta charset="utf-8">
    <?php
    session_start();
    if(!isset($_SESSION['pin'])){
      $branch='./noti/notice.php';
  }else if($_SESSION['pin']==11){
   $branch='./noti/notice.php';
 }else if($_SESSION['pin']==12){
   $branch='./noti/write.php';
 }else if($_SESSION['pin']==13){
   $branch='./noti/view.php?no='.$num;
 } else if($_SESSION['pin']==21){
   $branch='./qa/notice_qa.php';
 }else if($_SESSION['pin']==22){
   $branch='./qa/updateform.php';
 }else if($_SESSION['pin']==23){
   $branch='./qa/delete.php';
  }
  ?>
    <title>bom_tv_test</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
    <style type="text/css">
        body,
        html,
        body {
            padding: 0;
            margin: 0;
        }
	div{
 	padding: 0;
	margin: 0;
	display: block;
	border: 1px solid;
	}

        .wrap {
            width: auto;
            height: auto;
        }

        .header {
            width: 100%;
            height: 10%;
            background-color: #FFA2A2;
        }

        .menu {
            float: left;
            width: 80px;
            height: auto;
        }

        .main {
            margin-left: 80px;
            width: 100%;
            height: auto;
        }

        .footer {
            width: 100%;
            height: auto;
        }

    </style>

     <script type="text/javascript">
       function qa(index){
         if (index==1) {

           location.replace('./index2.php');
         } else if (index==2){

           location.replace('./index2.php');
         }
       }
     </script>

</head>

<body>
    <div class="wrap">

        <div class="header">
            <!--navigation line  login ,회원가입,회원에 대한 수정 ,광고..  -->
            <?php //include''  ?>
        </div>

        <!-- navigation  -->
        <div class="menu" align="center">
            <button type="button" name="button" onclick="qa(1)"> 공지사항 <?php
             $_SESSION['pin']=11;
             ?> </button>
            <button type="button" name="button" onclick="qa(2)"> Q&A        <?php
                    $_SESSION['pin']=21;
                    ?></button>
        </div>

        <div class="main">
            <!-- content list 등 타켓자료 -->
            <?php echo $branch;
            include $branch ?>

        </div>

        <div class="footer">
            <!-- 회사 내용 등 저작권 내용 -->
            <?php //include''  ?>
        </div>

    </div>

</body>

</html>
