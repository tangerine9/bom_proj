<script>$(document).ready(function(){$("#loading").fadeOut();});</script>
<script type="text/javascript" src="assets/lib/nsm_editor/js/HuskyEZCreator.js" charset="utf-8"></script>

<div class="main-content-inner">
	<div class="breadcrumbs ace-save-state" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="main.php">홈</a>
			</li>
			<li>
				배너
			</li>
			<li class="active">배너 수정</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1>
				배너
				<small>
					<i class="ace-icon fa fa-angle-double-right"></i>
					배너 수정
				</small>
			</h1>
		</div><!-- /.page-header -->

		<div>
				<form id="shop_add" name="shop_add" action="post/process.php?mode=banner_modi" method="post" enctype="multipart/form-data">
					
					<!-- 상세정보 수정 -->
					<div class="col-xs-12">
						<div class="well well-sm">배너 이미지 수정</div>
						<h5>배너 이미지 크기 280px X 130px</h5>
					</div>	
					<div class="col-xs-12">	
						<div id="para_input_area">
							
						<?
							$query = mysql_query("SELECT * FROM BANNER WHERE BANNERSEQ = '$_GET[num]'");
							$num   = mysql_num_rows($query);
							
							// 리스트 출력
							$BANNERSEQ	        =   mysql_result($query, 0, 'BANNERSEQ');
							$BANNER_IMG	   	  	= 	mysql_result($query, 0, 'BANNER_IMG');
							$BANNER_LINK   	  	= 	mysql_result($query, 0, 'BANNER_LINK');

							echo "
							<div class='para_wrap col-xs-12'>
								<div class='banner$BANNERSEQ'>
									<div class='col-xs-12 col-lg-6' style='width:300px;'>
										<div id='para_preview' class='para_preview' style='width:280px; height:130px; background-image:url(/$BANNER_IMG)'></div>
									</div>
									<div class='col-xs-12 col-lg-6'>
										<input type='file' class='form-control' id='para' name='cpic[]' onChange=\"imgprechk('para',this)\">
										<input type='text' id='para_name$para_seq' name='ctitle[]' placeholder='링크' style='width:100%' value='$BANNER_LINK'>
									</div>
								</div>
							</div>
							<input type='hidden' id='bannerseq' name='bannerseq' value='$_GET[num]'/>
							";

						?>
						
						
						</div>
						
						<input type="hidden" id="para_num" name="para_num" value="0"/>
					</div>		
					
					<!-- 등록 하기 -->
					<div class="col-xs-12" style="margin-bottom:30px;">
						<button type="button" id="add_event_btn" class="btn btn-success full" style="padding: 15px;">수정</button>
					</div>
			  </form>
					
		</div><!-- /.row -->
	</div><!-- /.page-content -->
</div><!-- main contens -->


<script type="text/javascript">	
	$(document).ready(function(){
		//전송버튼 클릭이벤트
		$("#add_event_btn").click(function(){		
			document.shop_add.submit();	
		});
	});
	
	/* 인풋 풀러오기 */
	function callFile(target) {		
		var targetId = '#'+target;
		$(target).click();
	}
	/* 이미지 프리뷰 */
	function imgprechk(target,input) {
		var fileObject = document.getElementById(target);
		var fileName = fileObject.files[0].name;    // 파일명
		var fileSize = fileObject.files[0].size;    // 파일 크기(byte)
		var fileType = fileObject.files[0].type;    // 파일 MIME Type
		
		// 형 체크
		if (fileType == 'image/jpg' || fileType == 'image/jpeg' || fileType == 'image/png' || fileType == 'image/gif') {
			// 파일 사이즈 체크
			if (fileSize > 2000000) {
				alert('이미지 용량은 2MB로 제한하고 있습니다.');
				return false;
			} else {
				var targetId = '#para_preview';
			    if (input.files && input.files[0]) {
				   var reader = new FileReader();
				   reader.onload = function (e) {
					   //$(targetId).attr('src', e.target.result);
					   var url = 'url('+e.target.result+')';
					   
					   $(targetId).css("background-image", url);  
				   }
				   reader.readAsDataURL(input.files[0]);
			    }
			}			
		} else {
			alert('이미지형식은 JPG / JPEG / PNG / GIF 만 가능합니다.');
			return false;
		}
		
	}	
		
</script>	