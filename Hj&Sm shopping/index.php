

<html>

<head>
    <meta charset="utf-8">

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
		min-height:200px;
            margin-left: 80px;
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
        }else if ($_GET['pin'] == 12) {
          $branch='./category/pro_delete.php';
        }else if ($_GET['pin'] == 13) {
          $branch='./category/pro_detail.php';
        }else if ($_GET['pin'] == 14) {
          $branch='./order/order_basket_list.php';
        }else if ($_GET['pin'] == 15) {
          $branch='./order/order_order.php';
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
        <div class="menu" align="center">
            <button type="button" name="button" onclick="qa(1)"> 공지사항 </button>
            <button type="button" name="button" onclick="qa(2)"> Q&A </button>
            <button type="button" name="button" onclick="qa(3)"> 카테고리 </button>
            <?
            if (isset($_SESSION['sId']) && $_SESSION['sType']==1) {
              ?>
              <button type="button" name="button" onclick="qa(4)"> 상품등록 </button>
              <?
            }
            ?>
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
    <a href="#" style="display:scroll; position:fixed; bottom:20px; right:20px;" title="top">
      <img src="./images/up-icon.png" style="width:40px; height:40px;" alt="">
    </a>
</body>

</html>
