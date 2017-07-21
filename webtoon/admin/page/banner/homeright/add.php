<div class="container-fluid">
	<div class="block-header">
		<h2>AD</h2>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<form id="shop_add" name="shop_add" action="post/process.php?mode=banner_add" method="post" enctype="multipart/form-data">
					<!-- 상세정보 등록 -->
					<div>
						<div class="well well-sm">광고 이미지 등록</div>
						<h5>이미지 크기 가로 280px X 자유</h5>
					</div>							
					<div>	
						<div id="para_input_area"></div>
						<input type="hidden" id="para_num" name="para_num" value="0"/>
					</div>		

					<!-- 등록 하기 -->
					<div>
						<button type="button" id="add_event_btn" class="btn btn-success full" style="padding: 15px;">등록하기</button>
					</div>
			  	</form>
			</div>
		</div>
	</div>
</div>
	



<script type="text/javascript">	
	$(document).ready(function(){
		alert();
		for ($i=0; $i<1; $i++) {
			addPara();
		};
		//전송버튼 클릭이벤트
		$("#add_event_btn").click(function(){		
			document.shop_add.submit();	
		});
	});

	
	/* 설명 추가 */
	function addPara() {
		var $para_seq = parseInt($("#para_num").val());
		
		var $mockup =
		'<div class="para_wrap col-xs-12">'+
			'<div class="para'+$para_seq+'_wrap">'+
				'<div class="col-xs-12 col-lg-6" style="width:300px;">'+
					'<div id="para'+$para_seq+'_preview" class="para_preview" style="width:280px; height:130px;"></div>'+
				'</div>'+
				'<div class="col-xs-12 col-lg-6">'+
					'<input type="file" class="form-control" id="para'+$para_seq+'" name="cpic[]" onChange="imgprechk(\'para'+$para_seq+'\',this)">'+
					'<input type="text" id="para_name'+$para_seq+'" name="ctitle[]" placeholder="링크" style="width:100%">'+
				'</div>'+
			'</div>'+
		'</div>';
		
		$("#para_num").val($para_seq+1);
		
		$("#para_input_area").append($mockup);
	}
	/* 설명 리셋 */
	function resetPara() {		
		$("#para_input_area").empty();
		$("#para_num").val(0);
	}	

	
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
				var targetId = '#'+target+'_preview';
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