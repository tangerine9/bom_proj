<style>
	#memberTable { width: 100%; }
</style>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						회원목록
						<small>사이즈 미정</small>
					</h2>			
				</div>
				<div class="body">
				 	<div class="table_wrap">
					 <table id="memberTable" class="table table-bordered table-hover display responsive nowrap dataTable no-footer dtr-inline collapsed">
							<thead>
								<tr>
									<th>아이디</th>
									<th>이름</th>
									<th>우편번호</th>
									<th>주소</th>
									<th>상세주소</th>
									<th>전화번호</th>
									<th>SMS수신동의</th>
									<th>이메일</th>
									<th>이메일수신동의</th>
									<th>연령대</th>
									<th>성별</th>
									<th>가입일</th>
									<th>관리</th>
								</tr>
							</thead>
							<tbody>
								<?
									$query = mysql_query("SELECT * FROM MEMBER");
									$rows  = mysql_num_rows($query);

									for ($i=0; $i<$rows; $i++) {
										$MEMBERSEQ		  = mysql_result($query,$i,'MEMBERSEQ');
										$MEMBER_ID		  = mysql_result($query,$i,'MEMBER_ID');
										$MEMBER_NAME      = mysql_result($query,$i,'MEMBER_NAME');
										$MEMBER_ZIP       = mysql_result($query,$i,'MEMBER_ZIP');
										$MEMBER_ADDRESS1  = mysql_result($query,$i,'MEMBER_ADDRESS1');
										$MEMBER_ADDRESS2  = mysql_result($query,$i,'MEMBER_ADDRESS2');
										$MEMBER_PHONE     = mysql_result($query,$i,'MEMBER_PHONE');
										$MEMBER_SMS_YES   = mysql_result($query,$i,'MEMBER_SMS_YES');
										$MEMBER_EMAIL     = mysql_result($query,$i,'MEMBER_EMAIL');
										$MEMBER_EMAIL_YES = mysql_result($query,$i,'MEMBER_EMAIL_YES');
										$MEMBER_AGEGROUP  = mysql_result($query,$i,'MEMBER_AGEGROUP');
										$MEMBER_GENDER    = mysql_result($query,$i,'MEMBER_GENDER');
										$MEMBER_REGIDATE  = mysql_result($query,$i,'MEMBER_REGIDATE');
										echo "
											<tr id='row_$MEMBERSEQ'>
												<td>$MEMBER_ID</td>
												<td>$MEMBER_NAME</td>
												<td>$MEMBER_ZIP</td>
												<td>$MEMBER_ADDRESS1</td>
												<td>$MEMBER_ADDRESS2</td>
												<td>$MEMBER_PHONE</td>
												<td>$MEMBER_SMS_YES</td>
												<td>$MEMBER_EMAIL</td>
												<td>$MEMBER_EMAIL_YES</td>
												<td>$MEMBER_AGEGROUP</td>
												<td>$MEMBER_GENDER</td>
												<td>$MEMBER_REGIDATE</td>
												<td>
													<button class='btn btn-sm btn-primary'>수정</button>
													<button class='btn btn-sm btn-danger' onclick='go_predel($MEMBERSEQ)'>삭제</button>
												</td>
											</tr>
										";							
									}
									?>
							</tbody>
						</table>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
    $('#memberTable').DataTable({
		"order": [ 0, 'desc' ]
	});
});
function go_predel(num) {
    var con_test = confirm("정말 삭제 하시겠습니까?");
    if(con_test == true){ 
        var rowname = '#row_'+num;
        $.ajax({
            type: 'POST',
            url: 'post/process.php',
            dataType:'jsonp',
            contentType: 'application/json',
            async: false,
            headers: { 'Content-Type': 'application/x-www-form-urlencoded;charset=UTF-8' },
            data: {	
                mode:'member_del',
                num:num
            },
            success: function(json) {						
            if (json[0].chk=="y") {	
                    $(rowname).fadeOut();   
					location.reload();   
                }				
             else {
                    alert('실패하였습니다.');
                }				
            },
            error: function() {
                    alert('통신에 문제가 발생하였습니다.');
            }
        });
    }
    else if(con_test == false){
        return false;
    }
}
</script>
