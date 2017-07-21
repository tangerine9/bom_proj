<?php
  require_once('../dbconfig.php');
  $cid=$_GET['id'];

  $sql = 'select id from user where id="'.$cid.'"';
  $result=$db->query($sql);
 $row = $result->fetch_assoc();
if($row['id']==$cid ) {
		?>
		<span style="color: red">해당 아이디는 사용불가능합니다.</span>
		<?
	}else {
		?>
		<span style="color: blue">해당 아이디는 사용가능합니다.</span>
		<?
	}
?>
<hr/>
<a href="javascript:self.close()">닫기</a>
