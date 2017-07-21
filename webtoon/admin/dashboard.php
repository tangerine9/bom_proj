<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>상상굿쯔 관리자페이지</title>
	<?
		session_start();
		if(!isset($_SESSION['ADMIN_ID'])) {
			echo "<meta http-equiv='refresh' content='0;url=index.php'>";
			exit;
		}
	
		include "../../config.db";
	?>
   
    <!-- Favicon-->
    <link rel="icon" href="assets/favicon.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="assets/plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="assets/css/themes/all-themes.css" rel="stylesheet" />
    
    
    <!-- 데이터테이블 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- page specific plugin scripts -->
	<script type="text/javascript" src="assets/lib/datatables/datatables.js"></script>
	<link href="assets/lib/datatables/datatables.css" rel="stylesheet"/>
  
  	<!-- 네이버 에디터 -->
  	<script type="text/javascript" src="assets/lib/nsm_editor/js/HuskyEZCreator.js" charset="utf-8"></script>
    
</head>

<body class="theme-light-blue">
    <? include "header.php"; ?>      
    <section>
	<? include "side.php"; ?>
    </section>

    <section class="content">
        <?
		if (!$_GET[page]) {
			include "page/home.php"; 	
		} else {
			include "page/$_GET[page].php"; 
		}		
		?>
    </section>

    <!-- Jquery Core Js -->
    <!--<script src="assets/plugins/jquery/jquery.min.js"></script>-->


    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- Select Plugin Js -->
    <script src="assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>
    <!-- Slimscroll Plugin Js -->
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>
    <!-- Jquery CountTo Plugin Js -->
    <script src="assets/plugins/jquery-countto/jquery.countTo.js"></script>
    <!-- Morris Plugin Js -->
    <script src="assets/plugins/raphael/raphael.min.js"></script>
    <script src="assets/plugins/morrisjs/morris.js"></script>
    <!-- ChartJs -->
    <script src="assets/plugins/chartjs/Chart.bundle.js"></script>
    <!-- Flot Charts Plugin Js -->
    <script src="assets/plugins/flot-charts/jquery.flot.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="assets/plugins/flot-charts/jquery.flot.time.js"></script>
    <!-- Sparkline Chart Plugin Js -->
    <script src="assets/plugins/jquery-sparkline/jquery.sparkline.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="assets/js/demo.js"></script>
    

</body>

</html>


<style>
	/* 헤더 타이틀 */
	.navbar-brand {
		font-weight: bold;
	}
</style>