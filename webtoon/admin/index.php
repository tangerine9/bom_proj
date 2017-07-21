<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>상상굿쯔 관리자페이지</title>
    
   	<!-- 파비콘 -->
	<link rel="shortcut icon" href="assets/favicon.png">
	<link rel="icon" href="assets/favicon.png">		
	<link rel="apple-touch-icon-precomposed" href="assets/favicon.png">   
   
   
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="assets/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="assets/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/login.css" rel="stylesheet">
    
    <style>
		ul,li {list-style: none;}
	</style>
</head>

<body class="login-page">
    <!-- 로그인 배경 -->
	<ul class="cb-slideshow">
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
		<li><span></span></li>
	</ul>
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>SSgoodcci</b></a>
            <small>관리자페이지</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="loginForm" name="loginForm" method="post" action="post/process.php?mode=login">
                    <div class="msg">관리자정보를 입력하세요</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" id="idInput" name="idInput" placeholder="아이디" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" id="pwInput" name="pwInput" placeholder="비밀번호" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">아이디저장</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit">로그인</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20" style="display:none">
                        <div class="col-xs-6">
                            <a href="sign-up.html">Register Now!</a>
                        </div>
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.html">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="assets/plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="assets/plugins/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="assets/plugins/jquery-validation/localization/messages_ko.js" /></script>

    <!-- Custom Js -->
    <script src="assets/js/admin.js"></script>
    <script src="assets/js/pages/examples/sign-in.js"></script>
    
	<script>
		function loginProcess() {
			if ($("#idInput").val() == '') {					
				alert('아이디를 입력해주세요.');
				$("#idInput").focus();
				return;
			}
			if ($("#pwInput").val() == '') {					
				alert('비밀번호를 입력해주세요.');
				$("#pwInput").focus();
				return;
			}
			document.getElementById("loginForm").submit();
		}
		function enterSubmit(event) {
			console.log('key');

			if(event.keyCode == 13) {
				loginProcess();
				return false;
			}	 
		}
	</script>
</body>

</html>