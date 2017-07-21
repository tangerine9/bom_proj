

<html>

<head>
    <meta charset="utf-8">


    <?php
    session_start();
    if(!isset($_SESSION['pin'])){
   echo $_SESSION['pin'];
  }else{
   $branch='./qa/updateform.php';
  }
  ?>

    <title>bom_tv_test</title>
	<link rel="stylesheet" href="./css/normalize.css" />
	<link rel="stylesheet" href="./css/board.css" />
    <style type="text/css">
        body,
        html,
        body,
	form {
            padding: 0;
            margin: 0;
		height:auto;
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
          display: block;
            width: 100%;
            height: 13%;
            background-color: #FFA2A2;
        }

        .menu {
            width: auto;
            height: auto;
        }

        .main {
		min-height:200px;
            width: 100%;
            height: auto;
        }

        .footer {

            width: 100%;
            height: auto;
        }

    </style>
    <?php

        if($_GET['pin'] ==null){
          $branch='./noti/notice.php';
        } else if ($_GET['pin'] == 1){
          $branch='./qa/notice_qa.php';
        } else if ($_GET['pin'] == 2) {
          $branch='./qa/writeform.php';
        } else if ($_GET['pin'] == 3) {
          $branch='./noti/view.php';
        }else if ($_GET['pin'] == 4) {
          $branch='./qa/updateform.php';
        }else if ($_GET['pin'] == 5) {
          $branch='./qa/delete.php';
        }else if ($_GET['pin'] == 6) {
          $branch='./noti/write.php';
        }else if ($_GET['pin'] == 7) {
          $branch='./noti/delete_update.php';
        }else if ($_GET['pin'] == 8) {
          $branch='./category/pro_cate_form.php';
        }else if ($_GET['pin'] == 10) {
          $branch='./category/pro_reg.php';
        }else if ($_GET['pin'] == 11) {
          $branch='./login/join_user_type.php';
        }

     ?>
     <script type="text/javascript">
       function qa(index){
         if (index==1) {
           location.replace('./index.php');
         } else if (index==2){
           location.replace('./index.php?pin=1');
         } else if (index==3){
           location.replace('./index.php?pin=8');
         } else if (index==4){
           location.replace('./index.php?pin=10');
         }
       }
     </script>
</head>

<body>
    <div class="wrap">

        <div class="header">
            <!--navigation line  login ,회원가입,회원에 대한 수정 ,광고..  -->
            <?php include'./login/header.php'  ?>
        </div>

        <!-- navigation  -->
        <div class="menu">
        <?php include './topmenu/topnav.php' ?>
        </div>

        <div class="main">
            <!-- content list 등 타켓자료 -->

            <?php include $branch ?>

        </div>

        <div class="footer" align="center">
            <!-- 회사 내용 등 저작권 내용 -->
	<b>HJ&SM &nbsp; entertainment (crop) &nbsp;&nbsp;&nbsp; Shopping Test Page</b>
            <?php //include''  ?>
        </div>

    </div>

</body>

</html>
