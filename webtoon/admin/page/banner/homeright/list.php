<script>$(document).ready(function(){$("#loading").fadeOut();});</script>
<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="main.php">홈</a>
			</li>
			<li>
				배너 관리
			</li>
			<li class="active">배너 관리</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				배너 관리
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					배너 목록
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
					<div class="col-xs-12">
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>
	
						<div class="contents_wrap">
													
							<div id="tab_container1" class="tab_container">
								<table id="list_table" class="table table-striped table-bordered table-hover">
								<thead>
									<tr>				
										<th>이미지</th>
										<th>링크</th>																				
                                        <th style="width:60px;">수정</th>
                                        <th style="width:60px;">삭제</th>
									</tr>
								</thead>

								<tbody>

									<? 
										$query= mysql_query("SELECT * FROM BANNER");
										$row = mysql_num_rows($query);
										$numbering = $row+1;
										for ($i=0; $i<$row; $i++) {
                                            
											// 리스트 출력
                                            $BANNERSEQ	        =   mysql_result($query, $i, 'BANNERSEQ');
                                            $BANNER_IMG	   	  	= 	mysql_result($query, $i, 'BANNER_IMG');
                                            $BANNER_LINK   	  	= 	mysql_result($query, $i, 'BANNER_LINK');

											
											echo "
											<tr id='banner$BANNERSEQ'>	
                                                <td><img src=../../$BANNER_IMG></td>
												<td>$BANNER_LINK</td>
                                                <td><button onclick='go_modi($BANNERSEQ)' type='button' class='btn btn-success btn-xs'>수정</button></td>
                                                <td><button onclick='go_predel($BANNERSEQ)' type='button' class='btn btn-danger btn-xs'>삭제</button></td>
											</tr>";
										}
									?>

								</tbody>
							</table>
							</div>

						</div>
					</div>
					
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- main contens -->

<script>
// 테이블 정렬
$(document).ready(function(){	
    $('#list_table').DataTable({
		"order": [ 0, 'desc' ]
	});
});
    
// 수정    
function go_modi(num) {
    location.href= '?mode=sidebanner&menu=modi&num='+num;
}
    
// 삭제
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
                mode:'banner_del',
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