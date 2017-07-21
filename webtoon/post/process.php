<?
ini_set('memory_limit', -1);
set_time_limit (0);
$ts = gmdate("D, d M Y H:i:s")." GMT";
header("Expires: $ts");
header("Last-Modified: $ts");
header("Pragma: no-cache");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Access-Control-Allow-Origin: *");
header("Content-Type: text/html; charset=UTF-8");

include "../../config.db";


// 오늘 날짜
$todate = date("Y-m-d");
// 현재 날짜 시간 (24시간)
$todatetime24 = date("Y-m-d H:i:s");
// 현재 날짜 시간 (12시간)
$todatetime12 = date("Y-m-d h:i:sa");
// 현재 IP
$nowip = $_SERVER['REMOTE_ADDR'];


/* BaseImg 생성 */
if($_GET["mode"] == "aaa") {

	$imgBase64_data = $_GET["imgBase64"];

	$imgBase64_array = explode(",", $imgBase64_data);

	$imgBase64 = $imgBase64_array[1];

	/*
	$strImage = str_replace('data:image/png;base64,', '', $strImage);
    $strImage = str_replace(' ', '+', $strImage);
    $strImage = base64_decode($strImage);
	*/

    // set the path name of where the image is to be stored.
    //$path = dirname(__FILE__).'/category_images/'.$category_title.".png";

    // save the image in the path.
    // file_put_contents($path, $image);
	file_put_contents('foo.png', base64_decode($imgBase64));

	$chk_text="y";

	$data[] = array('chk'=>$chk_text);

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";
}

// 회원가입
if($_POST["mode"] == "member_join") {

	$MEMBER_ID		  = $_POST['MEMBER_ID'];
	$MEMBER_NICK	  = $_POST['MEMBER_NICK'];
	$MEMBER_PW		  = $_POST['MEMBER_PW'];
	$MEMBER_NAME      = $_POST['MEMBER_NAME'];
	$MEMBER_BIRTH	  = $_POST['MEMBER_BIRTH'];
	$MEMBER_EMAIL	  = $_POST['MEMBER_EMAIL'];

	if ($MEMBER_SMS_YES == 'true') {
		$MEMBER_SMS_YES = 'y';
	} else {
		$MEMBER_SMS_YES = 'n';
	}
	if ($MEMBER_EMAIL_YES == 'true') {
		$MEMBER_EMAIL_YES = 'y';
	} else {
		$MEMBER_EMAIL_YES = 'n';
	}

	$query = mysql_query("
	INSERT INTO MEMBER (
		MEMBER_ID ,
		MEMBER_NICK ,
		MEMBER_PW ,
		MEMBER_NAME ,
		MEMBER_BIRTH ,
		MEMBER_EMAIL ,
		MEMBER_REGIDATE
	)
	VALUES (
		'$MEMBER_ID',
		'$MEMBER_NICK',
		'$MEMBER_PW',
		'$MEMBER_NAME',
		'$MEMBER_BIRTH',
		'$MEMBER_EMAIL',
		'$todate'
	)
	");
	$last_num=mysql_insert_id();
	if (!$last_num) {
		$chk_text="n";
	} else {
		$chk_text="y";
		session_start();
		$_SESSION['MEMBER_ID'] = $MEMBER_ID;
	}

	$data[] = array('chk'=>$chk_text);

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";

}

// 아이디중복검사
if($_POST["mode"] == "id_chk") {

	$MEMBER_ID		  = $_POST['MEMBER_ID'];

	$query = mysql_query("
	SELECT * FROM MEMBER
	WHERE MEMBER_ID = '$MEMBER_ID'
	");
	$num   = mysql_num_rows($query);

	if (!$num) {
		$chk_text="y";
	} else {
		$chk_text="n";
	}

	$data[] = array('chk'=>$chk_text);

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";
}

// 아이디찾기
if($_POST["mode"] == "findId") {

	$MEMBER_NAME	  = $_POST['MEMBER_NAME'];
	$MEMBER_EMAIL	  = $_POST['MEMBER_EMAIL'];

	$query = mysql_query("
	SELECT * FROM MEMBER
	WHERE
	MEMBER_NAME = '$MEMBER_NAME'
	AND
	MEMBER_EMAIL = '$MEMBER_EMAIL'
	");
	$num   = mysql_num_rows($query);

	if (!$num) {
		$chk_text="n";
		$data[] = array('chk'=>$chk_text);
	} else {
		$chk_text="y";
		$MEMBER_ID = mysql_result($query,0,'MEMBER_ID');
		$data[] = array('chk'=>$chk_text, 'MEMBER_ID'=>$MEMBER_ID);
	}
	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";
}
// 비밀번호찾기
if($_POST["mode"] == "findPw") {

	$MEMBER_ID		  = $_POST['MEMBER_ID'];
	$MEMBER_NAME	  = $_POST['MEMBER_NAME'];
	$MEMBER_EMAIL	  = $_POST['MEMBER_EMAIL'];

	$query = mysql_query("
	SELECT * FROM MEMBER
	WHERE
	MEMBER_ID = '$MEMBER_ID'
	AND
	MEMBER_NAME = '$MEMBER_NAME'
	AND
	MEMBER_EMAIL = '$MEMBER_EMAIL'
	");
	$num   = mysql_num_rows($query);

	if (!$num) {
		$chk_text="n";
		$data[] = array('chk'=>$chk_text);
	} else {
		$chk_text="y";
		$data[] = array('chk'=>$chk_text);

		$MEMBER_PW = mysql_result($query,0,'MEMBER_PW');
		// 메일전송
		$from = "ssgoodcchi@ssgoodcchi.com";
		$email_to = "$MEMBER_EMAIL";
		$email_from = $from;
		$email_subject = "비밀번호 찾기";
		$email_subject = '=?UTF-8?B?'.base64_encode($email_subject).'?=';

		$email_message = "
			<html>
			  <head/>
			  <body>
				비밀번호는 $MEMBER_PW 입니다.
			  </body>
			</html>
		";

		function died($error) {
			echo $error."<br /><br />";
			die();
		}

		function clean_string($string) {
		  $bad = array("content-type","bcc:","to:","cc:","href");
		  return str_replace($bad,"",$string);
		}

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	$headers .= 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .

	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);


	}
	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";
}
// 로그인
if($_POST["mode"] == "login") {

	$MEMBER_ID		  = $_POST['MEMBER_ID'];
	$MEMBER_PW		  = $_POST['MEMBER_PW'];

	$query = mysql_query("
	SELECT * FROM MEMBER
	WHERE
	MEMBER_ID = '$MEMBER_ID'
	AND
	MEMBER_PW = '$MEMBER_PW'
	");
	$num   = mysql_num_rows($query);

	if (!$num) {
		$chk_text="n";
	} else {
		$chk_text="y";
		session_start();
		$_SESSION['MEMBER_ID'] = $MEMBER_ID;
	}

	$data[] = array('chk'=>$chk_text);

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";

}

// 회원정보 수정
if ($_POST["mode"] == "member_update") {

	$MEMBER_ID						=	$_POST['MEMBER_ID'];
	$MEMBER_NAME					= $_POST['MEMBER_NAME'];
	$MEMBER_NICK					= $_POST['MEMBER_NICK'];
	$MEMBER_BIRTH					= $_POST['MEMBER_BIRTH'];
	$MEMBER_PHONE					= $_POST['MEMBER_PHONE'];
	$MEMBER_ADDRESS1			= $_POST['MEMBER_ADDRESS1'];
	$MEMBER_ADDRESS2			= $_POST['MEMBER_ADDRESS2'];
	$MEMBER_MOSTCHARACTER	= $_POST['MEMBER_MOSTCHARACTER'];
	$MEMBER_INTRODUCE			= $_POST['MEMBER_INTRODUCE'];

	$query = mysql_query("
	UPDATE MEMBER SET
		MEMBER_NAME						= '$MEMBER_NAME',
		MEMBER_NICK						= '$MEMBER_NICK',
		MEMBER_BIRTH					= '$MEMBER_BIRTH',
		MEMBER_PHONE					= '$MEMBER_PHONE',
		MEMBER_ADDRESS1				= '$MEMBER_ADDRESS1',
		MEMBER_ADDRESS2				= '$MEMBER_ADDRESS2',
		MEMBER_MOSTCHARACTER	= '$MEMBER_MOSTCHARACTER',
		MEMBER_INTRODUCE			= '$MEMBER_INTRODUCE'
	WHERE
		MEMBER_ID							= '$MEMBER_ID'
	");
	// $last_num=mysql_insert_id();
	if (!$query) {
		$chk_text="n";
	} else {
		$chk_text="y";
	}

	$data[] = array('chk'=>$chk_text);

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");";
}
?>
