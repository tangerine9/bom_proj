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

include "../../../config.db";

$toyear = date("Y");
// 오늘
$todate = date("Y-m-d");
// 현재 날짜 시간 (24시간)
$todatetime24 = date("Y-m-d H:i:s");
// 현재 날짜 시간 (12시간)
$todatetime12 = date("Y-m-d h:i:sa");
// 현재 IP
$nowip = $_SERVER['REMOTE_ADDR'];

$mk = mktime();
$randomNum = mt_rand(1, 31);


// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 로그인 페이지
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// --------------------------------
// 로그인
// --------------------------------
if($_GET["mode"] == "login") {
	$query = mysql_query("SELECT * FROM ADMIN");
	$id = mysql_result($query, 0, 'ADMIN_ID');
	$pw = mysql_result($query, 0, 'ADMIN_PW');
	
	$inputid = $_POST["idInput"];
	
	// 비밀번호가 틀렸다는 것을 알려주면 아이디가 노출되므로 두개의 값을 동시에 검사
	if ($_POST["idInput"] == $id && $_POST["pwInput"] == $pw) {
		// 로그인 성공
		
		// 로그인 관리 LOG
		mysql_query("
			INSERT INTO 
			ADMIN_LOG
			(MLOG_INPUT, MLOG_TIME, MLOG_IP, RESULT)
			VALUES
			('$inputid','$todatetime24','$nowip', 'SUCCESS')
		");
		
		// 세션시작
		session_start();
		$_SESSION['ADMIN_ID'] = $id;		
				
		echo "<meta http-equiv='refresh' content='0;url=../dashboard.php'>";		
		exit;
	} else {
		// 로그인 실패	
		
		// 로그인 관리 LOG
		mysql_query("
			INSERT INTO 
			ADMIN_LOG
			(MLOG_INPUT, MLOG_TIME, MLOG_IP, RESULT)
			VALUES
			('$inputid','$todatetime24','$nowip', 'FAIL')
		");
		
		echo "<script>alert('관리자 계정정보가 올바르지 않습니다.');</script>";
		echo "<meta http-equiv='refresh' content='0;url=../index.php'>";		
		exit;
	}	
}
// --------------------------------
// 로그아웃
// --------------------------------
if($_GET["mode"] == "logout") {
	session_start();
	session_destroy();
	echo "<meta http-equiv='refresh' content='0;url=../index.php'>";			
}

// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 관리자
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// --------------------------------
// 관리자 등록
// --------------------------------
if($_GET["mode"] == "admin_add") {
		
	//관리자 아이디
	$ADMIN_ID      = $_POST["ADMIN_ID"];
    //관리자 비밀번호
	$ADMIN_PW      = $_POST["ADMIN_PW"];
    //관리자 이름
	$ADMIN_NAME    = $_POST["ADMIN_NAME"];
    //관리자 이메일
	$ADMIN_EMAIL   = $_POST["ADMIN_EMAIL"];
    //관리자 연락처
	$ADMIN_CONTACT = $_POST["ADMIN_CONTACT"];            
        
    mysql_query("
			INSERT INTO ADMIN (
				ADMIN_ID,
				ADMIN_PW,
                ADMIN_NAME,
                ADMIN_EMAIL,
                ADMIN_CONTACT
			)
				VALUES (				
				'$ADMIN_ID',
				'$ADMIN_PW',
                '$ADMIN_NAME',
                '$ADMIN_EMAIL',
                '$ADMIN_CONTACT'
			)
			");
    
    $last_num=mysql_insert_id();
	if (!$last_num) {
		$chk_text="n";
        
        echo '<script>alert("관리자등록에 실패하였습니다.");</script>
        <META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=admin&menu=list">';
    } else {
		$chk_text="y";
        
        echo '<script>alert("관리자등록이 정상적으로 완료되었습니다.");</script>
        <META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=admin&menu=list">';
	}		
	
	
	
}
// --------------------------------
// 관리자 삭제
// --------------------------------
if($_POST["mode"] == "admin_del") {
	$num = $_POST["num"];
	
	$query = mysql_query("
			DELETE FROM ADMIN
			WHERE ADMINSEQ = '$num'
			");
	
	$chk_text="y";	
    $data[] = array('chk'=>$chk_text);	

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");"; 
}
// --------------------------------
// 관리자 수정
// --------------------------------
if($_GET["mode"] == "admin_modi") {
    //관리자 아이디
	$NUM           = $_POST["num"];		
	//관리자 아이디
	$ADMIN_ID      = $_POST["ADMIN_ID"];
    //관리자 비밀번호
	$ADMIN_PW      = $_POST["ADMIN_PW"];
    //관리자 이름
	$ADMIN_NAME    = $_POST["ADMIN_NAME"];
    //관리자 이메일
	$ADMIN_EMAIL   = $_POST["ADMIN_EMAIL"];
    //관리자 연락처
	$ADMIN_CONTACT = $_POST["ADMIN_CONTACT"];            
        
    mysql_query("
            UPDATE ADMIN
				SET
                    ADMIN_ID        = '$ADMIN_ID',
                    ADMIN_PW        = '$ADMIN_PW',
                    ADMIN_NAME      = '$ADMIN_NAME',
                    ADMIN_EMAIL     = '$ADMIN_EMAIL',
                    ADMIN_CONTACT   = '$ADMIN_CONTACT'
				WHERE ADMINSEQ = '$NUM'    
			");
    
	$chk_text="y";
        
    echo '<script>alert("관리자수정이 정상적으로 완료되었습니다.");</script>
    <META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=admin&menu=list">';
	
	
}
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// 기타
// ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// --------------------------------
// 회사소개 수정
// --------------------------------
if($_GET["mode"] == "introduce_modi") {	
	$contents = $_POST["contents"];	
	 
	$query= mysql_query("
				UPDATE INFO
				SET INFO_TEXT ='$contents'
				WHERE INFO_SECTION = 'company'
				");

	
	echo '<script>alert("수정완료");</script>
	<META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=company&menu=introduce">';
	
}
// --------------------------------
// 배너 등록
// --------------------------------
if($_GET["mode"] == "banner_add") {
		
	//업로드 위치	
	$target_dir = "../../upload/banner/";
		
	// 컨텐츠 등록
	for($i=0; $i<count($_FILES["cpic"]["tmp_name"]); $i++) {
		
		// 이미지 파일
		$tmp_name = $_FILES["cpic"]["tmp_name"][$i]; 
		
		$name = $_FILES["cpic"]["name"][$i]; 		
		$EXP = explode('.',$name);
		$NAMECNG = 'contents'.$i.$mk.$randomNum.'.'.$EXP[1];
		
		if ($name == '' || $name == null) {
		} else {
			move_uploaded_file($tmp_name, "../../upload/banner/$NAMECNG"); 			
			// 타이틀
			$dtitle = $_POST["ctitle"][$i];
			// 내용
			$dtext = $_POST["ctext"][$i];
			mysql_query("
			INSERT INTO BANNER (
				BANNER_IMG,
				BANNER_LINK
			)
				VALUES (				
				'upload/banner/$NAMECNG',
				'$dtitle'
			)
			");
		}
	}
	
	
	echo '<script>alert("업로드가 정상적으로 완료되었습니다.");</script>
	<META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=sidebanner&menu=list">';
	
}
if($_GET["mode"] == "banner_add_main") {
		
	//업로드 위치	
	$target_dir = "../../upload/banner/";
		
	// 컨텐츠 등록
	for($i=0; $i<count($_FILES["cpic"]["tmp_name"]); $i++) {
		
		// 이미지 파일
		$tmp_name = $_FILES["cpic"]["tmp_name"][$i]; 
		
		$name = $_FILES["cpic"]["name"][$i]; 		
		$EXP = explode('.',$name);
		$NAMECNG = 'contents'.$i.$mk.$randomNum.'.'.$EXP[1];
		
		if ($name == '' || $name == null) {
		} else {
			move_uploaded_file($tmp_name, "../../upload/banner/$NAMECNG"); 			
			// 타이틀
			$dtitle = $_POST["ctitle"][$i];
			// 내용
			$dtext = $_POST["ctext"][$i];
			mysql_query("
			INSERT INTO BANNER_MAIN (
				BANNER_IMG,
				BANNER_LINK
			)
				VALUES (				
				'upload/banner/$NAMECNG',
				'$dtitle'
			)
			");
		}
	}
	
	
	echo '<script>alert("업로드가 정상적으로 완료되었습니다.");</script>
	<META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=mainbanner&menu=list">';
	
}
// --------------------------------
// 배너 수정
// --------------------------------
if($_GET["mode"] == "banner_modi") {
		
	//업로드 위치	
	$target_dir = "../../upload/banner/";
		
	// 컨텐츠 등록
	for($i=0; $i<count($_FILES["cpic"]["tmp_name"]); $i++) {
		
		// 이미지 파일
		$tmp_name = $_FILES["cpic"]["tmp_name"][$i]; 
		
		$name = $_FILES["cpic"]["name"][$i]; 		
		$EXP = explode('.',$name);
		$NAMECNG = 'contents'.$i.$mk.$randomNum.'.'.$EXP[1];
		
			
		// 타이틀
		$dtitle = $_POST["ctitle"][$i];
		// 내용
		$dtext = $_POST["ctext"][$i];
		
		if ($name == '' || $name == null) {
			mysql_query("
				
			UPDATE BANNER
			SET 				
				BANNER_LINK ='$dtitle'
			WHERE BANNERSEQ = '$_POST[bannerseq]'			
			");
		} else {
			move_uploaded_file($tmp_name, "../../upload/banner/$NAMECNG"); 		
			mysql_query("
				
			UPDATE BANNER
			SET 
				BANNER_IMG = 'upload/banner/$NAMECNG',
				BANNER_LINK ='$dtitle'
			WHERE BANNERSEQ = '$_POST[bannerseq]'			
			");
		
		}
	}
	
	
	echo '<script>alert("수정이 완료되었습니다.");</script>
	<META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=sidebanner&menu=list">';

}
if($_GET["mode"] == "banner_modi_main") {
		
	//업로드 위치	
	$target_dir = "../../upload/banner/";
		
	// 컨텐츠 등록
	for($i=0; $i<count($_FILES["cpic"]["tmp_name"]); $i++) {
		
		// 이미지 파일
		$tmp_name = $_FILES["cpic"]["tmp_name"][$i]; 
		
		$name = $_FILES["cpic"]["name"][$i]; 		
		$EXP = explode('.',$name);
		$NAMECNG = 'contents'.$i.$mk.$randomNum.'.'.$EXP[1];
		
			
		// 타이틀
		$dtitle = $_POST["ctitle"][$i];
		// 내용
		$dtext = $_POST["ctext"][$i];
		
		if ($name == '' || $name == null) {
			mysql_query("
				
			UPDATE BANNER_MAIN
			SET 				
				BANNER_LINK ='$dtitle'
			WHERE BANNERSEQ = '$_POST[bannerseq]'			
			");
		} else {
			move_uploaded_file($tmp_name, "../../upload/banner/$NAMECNG"); 		
			mysql_query("
				
			UPDATE BANNER_MAIN
			SET 
				BANNER_IMG = 'upload/banner/$NAMECNG',
				BANNER_LINK ='$dtitle'
			WHERE BANNERSEQ = '$_POST[bannerseq]'			
			");
		
		}
	}
	
	
	echo '<script>alert("수정이 완료되었습니다.");</script>
	<META HTTP-EQUIV="Refresh" Content="0; URL=../main.php?mode=mainbanner&menu=list">';

}
// --------------------------------
// 배너 삭제
// --------------------------------	
if($_POST["mode"] == "banner_del") {
	$num = $_POST["num"];
	
	$query = mysql_query("
				DELETE FROM BANNER
				WHERE BANNERSEQ = '$num'
				");
	$chk_text="y";	
    $data[] = array('chk'=>$chk_text);	

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");"; 
}
if($_POST["mode"] == "banner_del_main") {
	$num = $_POST["num"];
	
	$query = mysql_query("
				DELETE FROM BANNER_MAIN
				WHERE BANNERSEQ = '$num'
				");
	$chk_text="y";	
    $data[] = array('chk'=>$chk_text);	

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");"; 
}


// --------------------------------
// 회원 삭제
// --------------------------------	
if($_POST["mode"] == "member_del") {
	$num = $_POST["num"];
	
	$query = mysql_query("
				DELETE FROM MEMBER
				WHERE MEMBERSEQ = '$num'
				");
	$chk_text="y";	
    $data[] = array('chk'=>$chk_text);	

	$callback_func=$_GET['callback'];
	header ('Content-Type:application/json');
	$echo_str = json_encode($data);
	echo $callback_func."(".$echo_str.");"; 
}



// 약관수정
if($_GET["mode"] == 'policy_modi') {		
	$contents = addslashes($_POST['contents1']);
	$query = mysql_query("
			UPDATE DOCUMENT
			SET
			DOCUMENT_TEXT = '$contents'
			WHERE DOCUMENT_TYPE = 'policy'		
	");
	echo "<script>alert('수정완료');</script>";
	echo "<meta http-equiv='refresh' content='0;url=../dashboard.php?page=policy'>";		
}
if($_GET["mode"] == 'agree_modi') {		
	$contents = addslashes($_POST['contents2']);
	$query = mysql_query("
			UPDATE DOCUMENT
			SET
			DOCUMENT_TEXT = '$contents'
			WHERE DOCUMENT_TYPE = 'agree'		
	");
	echo "<script>alert('수정완료');</script>";
	echo "<meta http-equiv='refresh' content='0;url=../dashboard.php?page=policy'>";		
}

?>