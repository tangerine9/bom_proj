<!DOCTYPE html>	
<head>
	<!------------------------------------------------------------------
	Project : 상상굿쯔
	-------------------------------------------------------------------->
	<? include "../config.db" ?>		
	<!------------------------------------------------------------------
	[ 메타태그 설정 ]
	-------------------------------------------------------------------->
	<base href="/">
	<title>상상굿쯔</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<meta name="description" content="상상굿쯔" />
	<meta name="keywords" content="상상굿쯔" />
	<meta name="Robots" content="ALL">
	<meta name="Copyright" content="mysite">
	<!------------------------------------------------------------------
	[ 라이브러리 ]
	-------------------------------------------------------------------->
	<!-- 라이브러리 | jQuery | v3.1.1 -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<!-- 라이브러리 | BootStrap | v3.3.2 -->
	<link rel="stylesheet" href="assets/lib/bootstrap3.3.2/css/bootstrap.min.css">	
	<script src="assets/lib/bootstrap3.3.2/js/bootstrap.min.js"></script>
	<!-- 라이브러리 | Slick | v1.6.0 -->		
	<link rel="stylesheet" href="assets/lib/slick-1.6.0/slick/slick.css">		
	<script src="assets/lib/slick-1.6.0/slick/slick.js"></script>
	<!-- 라이브러리 | jQueryUI | v1.11.4 -->		
	<link rel="stylesheet" href="assets/lib/jquery-ui-1.11.4/jquery-ui.css">					
	<script src="assets/lib/jquery-ui-1.11.4/jquery-ui.js"></script>	
	<!-- 라이브러리 | OwlCarousel2-2.2.1 | v2.2.1 -->
	<link rel="stylesheet" href="assets/lib/OwlCarousel2-2.2.1/dist/assets/owl.carousel.css">
	<link rel="stylesheet" href="assets/lib/OwlCarousel2-2.2.1/dist/assets/owl.theme.default.css">
	<script src="assets/lib/OwlCarousel2-2.2.1/dist/owl.carousel.js"></script>
	<!-- 라이브러리 | Follower | -->
	<!--<script src="assets/lib/follower/follower.js"></script>-->
	<!-- 라이브러리 | AwesomeFont | -->
	<link rel="stylesheet" href="assets/lib/FontAwesome/css/font-awesome.css">
	<!-- 라이브러리 | WheelColorPicker | -->
	<link rel="stylesheet" href="assets/lib/wheelcolorpicker/wheelcolorpicker.css">
	<script src="assets/lib/wheelcolorpicker/jquery.wheelcolorpicker-3.0.2.min.js">
	</script>
	
	<!-- 라이브러리 | ColorPicker | -->	
	<link rel="stylesheet" href="assets/lib/colorpicker/css/colorpicker.css" type="text/css" />
    <link rel="stylesheet" media="screen" type="text/css" href="assets/lib/colorpicker/css/layout.css" />
	
	<!--<script type="text/javascript" src="assets/lib/colorpicker/js/jquery.js"></script>-->
	<script type="text/javascript" src="assets/lib/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="assets/lib/colorpicker/js/eye.js"></script>
    <script type="text/javascript" src="assets/lib/colorpicker/js/utils.js"></script>
    <script type="text/javascript" src="assets/lib/colorpicker/js/layout.js?ver=1.0.2"></script>
    
    
	<!------------------------------------------------------------------
	[ 설정 ]
	-------------------------------------------------------------------->
	<!-- CSS -->		
	<link rel="stylesheet" href="assets/css/layout.css">
	<!-- LESS -->
	<link rel="stylesheet/less" type="text/css" href="assets/less/detail.less">
	<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.2/less.min.js"></script>
	<!-- JS -->	
	<script src="assets/js/script.js"></script>
	<!-- 파비콘 -->
	<link rel="shortcut icon" href="assets/favicon.png">
	<link rel="icon" href="assets/favicon.png">		
	<link rel="apple-touch-icon-precomposed" href="assets/favicon.png">
	<!-- 콘솔 -->
	<script>
	console.log("%c상상굿쯔", "font-size:4em; color:#FFC01F; font-family:'Open Sans', Arial, sans-serif; text-transform:uppercase;");
	</script>
</head>
	<? 
	$todate = date("Y-m-d");
	// 현재 날짜 시간 (24시간)
	$todatetime24 = date("Y-m-d H:i:s");
	// 현재 날짜 시간 (12시간)
	$todatetime12 = date("Y-m-d h:i:sa");
	// 현재 IP
	$nowip = $_SERVER['REMOTE_ADDR'];
	// 에이전트
	$userAgent = $_SERVER["HTTP_USER_AGENT"];
	
	// 접속 로그 기록
	mysql_query("
		INSERT INTO 
		VIEW_LOG
		(VIEW_LOG_IP, VIEW_LOG_PAGE, VIEW_LOG_CATE, VIEW_LOG_NUM, VIEW_LOG_TIME, VIEW_LOG_AGENT)
		VALUES
		('$nowip','$getpage','$_GET[cate]', '$_GET[num]', '$todatetime24', '$userAgent')
	");
	?>
<body class="clearfix">

	<div id="loading"></div>       
	
	<!-- 헤더 -->
	<? include "header.php";?>
	<!-- 사이드 -->
	<? include "side.php";?>
	<!-- 메인 -->
	<div id="main"> 
		  <? 
			if (!$_GET["page"] or $_GET["page"] == 'home') {
				include "page/home.php";
			} else {
				include "page/$_GET[page].php";
			}
          ?>
	</div>
	<!-- 풋터 -->
	<? include "footer.php";?>
</body>

<script>
$(document).ready(function(){
	$("#loading").fadeOut();
});
</script>
</html>