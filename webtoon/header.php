<style>
	#color_picker_wrap {
		display: none;
		position: fixed;
		top: 225px;
		right: 0px;
		width: 60px;
		height: 57px;
		z-index: 2000;
		background-color: rgba(51, 51, 51, 0.7);
		margin-left: 530px;
		padding: 10px;
		text-align: center;
	}
	
	#colorChk {
		background-color: #666;
		color: #FFF;
		display: block;
		width: 55px;
		left: 3px;
		position: relative;
		font-size: 13px;
		top: 8px;
		border: 1px solid #ddd;
	}

</style>
<div id="color_picker_wrap">
	<!--<input type="text" name="color" id="ColorInput" value="#ff0000" data-wheelcolorpicker />-->
	<div id="colorSelector">
		<div id="nowcolor" style="background-color: #FFC01F"></div>
	</div>

	<!--<a id="colorChk" href="#" onclick="colorChk()">변경</a>-->
</div>
<script>
	function colorChk() {
		var color = $("#nowcolor").css('background-color');
		localStorage.setItem('themeColor', color);

		alert('적용완료');
		location.reload();
	}

	$(function() {
		var nowcolor = localStorage.getItem('themeColor');
		$('#colorSelector div').css('backgroundColor', nowcolor);

		if (nowcolor == '' || nowcolor == null) {
			nowcolor = '#FFC01F';
		} else {}

		/*
	 	$('#colorSelector div').css('backgroundColor', nowcolor);				
		$("#mainMenu, .board h1, #loginBox .loginBtn, #header .search_btn").css('backgroundColor',nowcolor);
		$("#header #mainMenu li a.home, #ranking ul h1, .board li span.count, h6.rnb_title").css('color',nowcolor);
		$(".section h1, #header input").css("border-bottom-color",nowcolor);	
	 	*/

		//$('#ColorInput').wheelColorPicker();


		$('#colorSelector').ColorPicker({
			color: '#FFC01F',
			onShow: function(colpkr) {
				$(colpkr).fadeIn(500);
				return false;
			},
			onHide: function(colpkr) {
				$(colpkr).fadeOut(500);

				var color = $("#nowcolor").css('background-color');
				localStorage.setItem('themeColor', color);
				return false;
			},
			onChange: function(hsb, hex, rgb) {
				$('#colorSelector div').css('backgroundColor', '#' + hex);

				$("#mainMenu, .board h1, #loginBox .loginBtn, #header .search_btn").css('backgroundColor', '#' + hex);
				$("#header #mainMenu li a.home, #ranking ul h1, .board li span.count, h6.rnb_title").css('color', '#' + hex);
				$(".section h1, #header input").css("border-bottom-color", '#' + hex);

			}
		});
	});

</script>


<style>
	.sector_icon {
		display: none;
		width: 40px;
	}
	.onHover .sector_icon {
		display: inline-block;
	}
	
	.sector span {
		display: inline-block;
		width: 40px;
	}
	.onHover span {
		display: none;
	}
</style>
<script>
$(document).ready(function(){
	$("#mainMenu").mouseenter(function(){
		$("#mainMenu").addClass('onHover');		
	});
	$("#mainMenu").mouseleave(function(){
		$("#mainMenu").removeClass('onHover');		
	});
})
	
</script>

<? 
// 메인헤더 노출 조건
if (
	1==1
   ) {
   $menuList = "
				<li><a href='?page=home' class='home'>HOME</a></li>
				<li><a href='?page=listhome&sector=star' class='sector'>
					<img class='sector_icon' src='assets/img/emo/over_celb.png'/>
					<span>연예인</span>
				</a></li>
				<li><a href='?page=fanart&sector=star' class='cmn-t-underline'>팬아트</a></li>
				<li><a href='?page=fanfic&sector=star' class='cmn-t-underline'>팬픽</a></li>
				<li><a href='?page=listhome&sector=ani' class='sector'>
					<img class='sector_icon' src='assets/img/emo/over_ani.png'/>
					<span>애니</span>
				</a></li>
				<li><a href='?page=fanart&sector=ani' class='cmn-t-underline'>팬아트</a></li>
				<li><a href='?page=fanfic&sector=ani' class='cmn-t-underline'>팬픽</a></li>
				<li><a href='?page=made' class='sector'>
					<img class='sector_icon' src='assets/img/emo/over_char.png'/>
					<span>자작품</span>
				</a></li>
				<li><a href='?page=picrelay' class='cmn-t-underline'>그림연성</a></li>
				<li><a href='?page=ficrelay' class='cmn-t-underline'>글연성</a></li>
				<li><a href='?page=shopping' class='cmn-t-underline'>쇼핑</a></li>
			    ";
	
	$hideList = "
			<ul>
				<h1>그림</h1>
				<li><a href='#'>그림연성</a></li>
				<li><a href='#'>연예인 팬아트</a></li>
				<li><a href='#'>애니 팬아트</a></li>
				<li><a href='#'>그림톡</a></li>
			</ul>
			<ul>
				<h1>글</h1>
				<li><a href='#'>글연성</a></li>
				<li><a href='#'>연예인 팬픽</a></li>
				<li><a href='#'>애니 팬픽</a></li>
			</ul>
			<ul>
				<h1>게시판</h1>
				<li><a href='#'>연예인 잡담</a></li>
				<li><a href='#'>애니 잡담</a></li>
				<li><a href='#'>연예인 떡밥</a></li>
				<li><a href='#'>애니 떡밥</a></li>
				<li><a href='#'>코스프레 자랑</a></li>
				<li><a href='#'>애완동물 톡</a></li>
				<li><a href='#'>맛집 자랑</a></li>
			</ul>
			<ul>
				<h1>출품</h1>
				<li><a href='#'>그림연성(팬아트)출품</a></li>
				<li><a href='#'>글연성(팬픽)출품</a></li>
				<li><a href='#'>그림톡 출품</a></li>
				<li><a href='#'>금손굿쯔 출푼</a></li>
				<li><a href='#'>거래장터 출품</a></li>
			</ul>
			<ul>
				<h1>제안</h1>
				<li><a href='#'>내작품 유료전환</a></li>
				<li><a href='#'>이모티콘 제안</a></li>
				<li><a href='#'>운영자에게 제안</a></li>
			</ul>
	";
	
} else {
	$menuList = "aaaa";
}

echo "
<header id='header' class='onBg'>
	<div class='inner'>
		<!-- 로고 -->
		<a href='?index.php'>
			<img class='logo' src='assets/img/header/logo.png' alt='상상굿쯔로고'/>
		</a>		
		<!-- 검색 -->
		<input id='header_search' type='text' placeholder='누구나 작가가 될 수 있는 덕심의  모든 것'>
		<a class='search_btn' href='#'><img src='assets/img/header/magnify.png' alt='검색'/></a>
	</div>
	<div class='menu_wrap'>
		<div id='mainMenu'>
			<ul class='inner'>
				$menuList
				<li><a class='more' onclick='onPanel()'>더보기 <b class='caret'></b></a></li>
			</ul>
		</div>
		<div id='mainMenu_overlay'>
			<ul class='inner'>
				$menuList
				<li><a class='more' onclick='onPanel(\"overlay\")'>더보기 <b class='caret'></b></a></li>
			</ul>
		</div>
		<div id='morePanel_overlay' class='panel_menu'>
				$hideList
		</div>
		<div id='morePanel' class='panel_menu'>
				$hideList
		</div>
	</div>
</header>
";
?>

	<style>
		.more {
			cursor: pointer;
		}
		
		.panel_menu {
			display: none;
			position: absolute;
			width: 1080px;
			height: 285px;
			border: 1px solid #DDD;
			top: 220px;
			left: 50%;
			margin-left: -540px;
			z-index: 200;
			background-color: #FFF;
			padding: 15px;
			border-top: none;
		}
		
		.panel_menu ul {
			float: left;
			margin: 0px;
			padding: 0px 60px;
			border-right: 1px solid #DDD;
			height: 250px;
		}
		
		.panel_menu ul:last-child {
			border-right: none;
		}
		
		.panel_menu h1 {
			padding: 10px 0px;
			font-weight: bold;
		}
		
		.panel_menu ul li {
			margin: 10px 0px;
		}
		
		.panel_menu_active {
			display: block !important;
		}
		
		#morePanel_overlay {
			position: fixed;
			top: 40px;
		}

	</style>

	<script>
		function onPanel(type) {
			// 고정탭의 경우
			if (type == 'overlay') {
				if ($("#morePanel_overlay").hasClass('panel_menu_active')) {
					$("#morePanel_overlay").removeClass('panel_menu_active');
					$(".more").html("더보기 <b class='caret'>");
				} else {
					$("#morePanel_overlay").addClass('panel_menu_active');
					$(".more").html("닫기");
				}
			} else {
				// 일반 탭
				if ($("#morePanel").hasClass('panel_menu_active')) {
					$("#morePanel").removeClass('panel_menu_active');
					$(".more").html("더보기 <b class='caret'>");
				} else {
					$("#morePanel").addClass('panel_menu_active');
					$(".more").html("닫기");
				}
			}
		}

		/* 헤더배경 포커스 */
		$("#header_search").focus(function() {
			$("#header").addClass('onBg2');
			$("#header_search").attr("placeholder", "키워드를 입력해주세요");
		});
		$("#header_search").blur(function() {
			$("#header").removeClass('onBg2');
			$("#header_search").attr("placeholder", "누구나 작가가 될 수 있는 덕심의 모든 것");
		});


		/* 오버레이헤더 노출 */
		$(window).scroll(function() {
			$("#morePanel,#morePanel_overlay").removeClass('panel_menu_active');
			$(".more").html("더보기 <b class='caret'>");

			if ($(this).scrollTop() > 175) {
				$("#mainMenu_overlay").show();
			} else {
				$("#mainMenu_overlay").hide();
			}
		});

		/* 오버레이헤더 링크 */
		function moveOver(link) {
			$('html, body').animate({
				scrollTop: 0
			}, 300).queue(function() {
				location.href = link;
			});
		}


		/* 맨위로 */
		$(document).ready(function($) {
			$('.totop').click(function() {
				$('html, body').animate({
					scrollTop: 0
				}, 400);
				return false;
			});
		});

	</script>
