<div class="container-fluid">
	<div class="block-header">
		<h2>ICON</h2>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						헤더 로고
						<small>사이즈 미정</small>
					</h2>			
				</div>
				<div class="body">
					<h6>로고</h6>
					<img id="c_logo_priview" src="../assets/img/header/logo.png" style="max-width:300px;">
					<form name="change_icon" action="post/process.php?mode=change_icon" method="post" enctype="multipart/form-data">
						<input id="c_logo" name="c_logo" type="file" onChange="imgprechk('c_logo',this)">					
						<button type="submit">수정</button>
					</form>
					
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="card">
				<div class="header">
					<h2>
						아이콘
						<small>150px X 150px</small>
					</h2>			
				</div>
				<div class="body">
					<h6>북마크 로고</h6>
					<img id="c_bookmark_preview" src="../assets/img/icon/bookmark.png" style="max-width:30px;">
					<form name="change_icon" action="post/process.php?mode=change_icon" method="post" enctype="multipart/form-data">
						<input id="c_bookmark" name="c_bookmark" type="file" onChange="imgprechk('c_bookmark',this)">					
						<button type="submit">수정</button>
					</form>
					
					<h6>좋아요 (비활성)</h6>
					<img id="c_heart_preview" src="../assets/img/icon/heart.png" style="max-width:30px;">
					<form name="change_icon" action="post/process.php?mode=change_icon" method="post" enctype="multipart/form-data">
						<input id="c_heart" name="c_heart" type="file" onChange="imgprechk('c_heart',this)">					
						<button type="submit">수정</button>
					</form>
					
					<h6>좋아요 (활성)</h6>
					<img id="c_heart_on_preview" src="../assets/img/icon/heart_on.png" style="max-width:30px;">
					<form name="change_icon" action="post/process.php?mode=change_icon" method="post" enctype="multipart/form-data">
						<input id="c_heart_on" name="c_heart_on" type="file" onChange="imgprechk('c_heart_on',this)">					
						<button type="submit">수정</button>
					</form>					
					
					<h6>메세지</h6>
					<img id="c_message_preview" src="../assets/img/icon/message.png" style="max-width:30px;">
					<form name="change_icon" action="post/process.php?mode=change_icon" method="post" enctype="multipart/form-data">
						<input id="c_message" name="c_message" type="file" onChange="imgprechk('c_message',this)">					
						<button type="submit">수정</button>
					</form>					
					
					<h6>펜</h6>
					<img id="c_pen_preview" src="../assets/img/icon/pen.png" style="max-width:30px;">
					<form name="change_icon" action="post/process.php?mode=change_icon" method="post" enctype="multipart/form-data">
						<input id="c_pen" name="c_pen" type="file" onChange="imgprechk('c_pen',this)">					
						<button type="submit">수정</button>
					</form>
									
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	/*
	.card button {
		width: 100%;
		height: 40px;
		line-height: 40px;
		text-align: center;
		color: #FFF;
		font-weight: bold;
		background-color: blue;
		transition: 1s;
	}
	.card button:hover {
		opacity: 0.8;
	}
	*/
</style>

<script>
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
				   var url = e.target.result;
				   $(targetId).attr("src", url);  
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