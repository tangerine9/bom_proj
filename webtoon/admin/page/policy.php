
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#loading").fadeOut();		
		$(".nav li").removeClass('active');
		$("#policy").addClass('active');
	});
</script>

<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="main.php">홈</a>
			</li>

			<li>
				이용약관설정
			</li>
			<li class="active">이용약관 관리</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				이용약관설정
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					이용약관 관리
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
					<div class="col-xs-12">
						
						<div class="well">이용약관을 수정합니다.</div>
						<div class="clearfix">
							<div class="pull-right tableTools-container"></div>
						</div>

						<form id="policy_modi" name="policy_modi" action="post/process.php?mode=policy_modi" method="post" enctype="multipart/form-data">
							<div class="contents_wrap">
								<textarea id="contents1" name="contents1" style="height:400px;">
									<?
										$query = mysql_query("SELECT * FROM DOCUMENT WHERE DOCUMENT_TYPE='policy'");
										$text  = mysql_result($query,0,'DOCUMENT_TEXT');
										echo "$text";
									?>
								</textarea>
								<a href="#" id="add_event_btn1">수정</a>
							</div>
						</form>
						
						<form id="agree_modi" name="agree_modi" action="post/process.php?mode=agree_modi" method="post" enctype="multipart/form-data">
							<div class="contents_wrap">
								<textarea id="contents2" name="contents2" style="height:400px;">
									<?
										$query = mysql_query("SELECT * FROM DOCUMENT WHERE DOCUMENT_TYPE='agree'");
										$text  = mysql_result($query,0,'DOCUMENT_TEXT');
										echo "$text";
									?>
								</textarea>
								<a href="#" id="add_event_btn2">수정</a>
							</div>
						</form>
					</div>
					
			</div><!-- /.col -->
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- main contens -->

<!-- Modal -->
<div class="modal fade" id="modi" role="dialog">
<div class="modal-dialog">

  <!-- Modal content-->
  <div class="modal-content">
	<div class="modal-header">
	  <button type="button" class="close" data-dismiss="modal">&times;</button>
	  <h4 class="modal-title">관리자 정보 수정</h4>
	</div>
	<div class="modal-body">
	  <table class="table">
		  <tr>
			  <td>이메일</td>
			  <td>이메일</td>
		  </tr>
	  </table>
	</div>
	<div class="modal-footer">
	  <button type="button" class="btn btn-default" data-dismiss="modal">닫기</button>
	</div>
  </div>

</div>
</div>
<script>
$(document).ready(function(){
		 var oEditors1 = [];
		 nhn.husky.EZCreator.createInIFrame({
		 oAppRef: oEditors1,
		 elPlaceHolder: "contents1",
		 sSkinURI: "assets/lib/nsm_editor/SmartEditor2Skin.html",
		 fCreator: "createSEditor2"
		 });	


		//전송버튼 클릭이벤트
		$("#add_event_btn1").click(function(){	
			oEditors1.getById["contents1"].exec("UPDATE_CONTENTS_FIELD", []);    	 

			document.policy_modi.submit();	
		});
	
	
		 var oEditors2 = [];
		 nhn.husky.EZCreator.createInIFrame({
		 oAppRef: oEditors2,
		 elPlaceHolder: "contents2",
		 sSkinURI: "assets/lib/nsm_editor/SmartEditor2Skin.html",
		 fCreator: "createSEditor2"
		 });	


		//전송버튼 클릭이벤트
		$("#add_event_btn2").click(function(){	
			oEditors2.getById["contents2"].exec("UPDATE_CONTENTS_FIELD", []);    	 

			document.agree_modi.submit();	
		})
});
</script>