<style>
	.sidebar .user-info {
		height: 90px;
	}
	.sidebar {
		width: 220px;
	}
	section.content {
		margin: 100px 15px 0 245px;
	}
</style>


<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
	<!-- User Info -->
	<div class="user-info">
		<div class="image" style="display:none;">
			<img src="assets/images/user.png" width="48" height="48" alt="User" />
		</div>
		<div class="info-container">
			<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">마스터관리자</div>
			<div class="email">master@ssgoodcci.com</div>
			<div class="btn-group user-helper-dropdown">
				<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
				<ul class="dropdown-menu pull-right">
					<li><a href="javascript:void(0);"><i class="material-icons">person</i>관리자 설정</a></li>
					<div style="display:none;">
						<li role="seperator" class="divider"></li>
						<li><a href="javascript:void(0);"><i class="material-icons">group</i>Followers</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>Sales</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>Likes</a></li>
					</div>
					<li role="seperator" class="divider"></li>
					<li><a href="javascript:void(0);"><i class="material-icons">input</i>로그아웃</a></li>
				</ul>
			</div>
		</div>
	</div>
	<!-- #User Info -->
	<!-- Menu -->
	<? $nowpage = $_GET['page']; ?>
	<script>	
	$(document).ready(function(){
		var page   = <?php echo json_encode($nowpage)?>;
		var target = '#plist_'+page; 
		$(".menu .list li").removeChild('active');
		$(target).addClass('active');
	});
	</script>
	<div class="menu">
		<ul class="list">
			<li class="header" style="display:none;">MAIN NAVIGATION</li>
			<li id="plist_home">
				<a href="?page=home">
					<i class="material-icons">home</i>
					<span>홈</span>
				</a>
			</li>			
			<li id="plist_icon">
				<a href="?page=icon">
					<i class="material-icons">layers</i>
					<span>아이콘수정</span>
				</a>
			</li>
			<li id="plist_icon">
				<a href="?page=member">
					<i class="material-icons">face</i>
					<span>회원관리</span>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);" class="menu-toggle">
					<i class="material-icons">dns</i>
					<span>배너관리</span>
				</a>
				<ul class="ml-menu">
					<li>
						<a href="?page=banner&menu=add">배너추가</a>
					</li>
					<li>
						<a href="?page=banner&menu=list">배너목록</a>
					</li>
				</ul>
			</li>
			<li id="plist_icon">
				<a href="?page=icon">
					<i class="material-icons">accessibility</i>
					<span>관리자정보</span>
				</a>
			</li>
			<li id="plist_icon">
				<a href="?page=policy">
					<i class="material-icons">local_library</i>
					<span>약관관리</span>
				</a>
			</li>
		</ul>
	</div>
	<!-- #Menu -->
	<!-- Footer -->
	<div class="legal">
		<div class="copyright">
			&copy; <?=date('Y');?> <a href="javascript:void(0);">SSGOODCCI Admin</a>.
		</div>
		<div class="version">
			<b>Version: </b> 1.0.4
		</div>
	</div>
	<!-- #Footer -->
</aside>
<!-- #END# Left Sidebar -->
<!-- Right Sidebar -->
<aside id="rightsidebar" class="right-sidebar">
	<ul class="nav nav-tabs tab-nav-right" role="tablist">
		<li role="presentation" class="active"><a href="#skins" data-toggle="tab">SKINS</a></li>
		<li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
	</ul>
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane fade in active in active" id="skins">
			<ul class="demo-choose-skin">
				<li data-theme="red" class="active">
					<div class="red"></div>
					<span>Red</span>
				</li>
				<li data-theme="pink">
					<div class="pink"></div>
					<span>Pink</span>
				</li>
				<li data-theme="purple">
					<div class="purple"></div>
					<span>Purple</span>
				</li>
				<li data-theme="deep-purple">
					<div class="deep-purple"></div>
					<span>Deep Purple</span>
				</li>
				<li data-theme="indigo">
					<div class="indigo"></div>
					<span>Indigo</span>
				</li>
				<li data-theme="blue">
					<div class="blue"></div>
					<span>Blue</span>
				</li>
				<li data-theme="light-blue">
					<div class="light-blue"></div>
					<span>Light Blue</span>
				</li>
				<li data-theme="cyan">
					<div class="cyan"></div>
					<span>Cyan</span>
				</li>
				<li data-theme="teal">
					<div class="teal"></div>
					<span>Teal</span>
				</li>
				<li data-theme="green">
					<div class="green"></div>
					<span>Green</span>
				</li>
				<li data-theme="light-green">
					<div class="light-green"></div>
					<span>Light Green</span>
				</li>
				<li data-theme="lime">
					<div class="lime"></div>
					<span>Lime</span>
				</li>
				<li data-theme="yellow">
					<div class="yellow"></div>
					<span>Yellow</span>
				</li>
				<li data-theme="amber">
					<div class="amber"></div>
					<span>Amber</span>
				</li>
				<li data-theme="orange">
					<div class="orange"></div>
					<span>Orange</span>
				</li>
				<li data-theme="deep-orange">
					<div class="deep-orange"></div>
					<span>Deep Orange</span>
				</li>
				<li data-theme="brown">
					<div class="brown"></div>
					<span>Brown</span>
				</li>
				<li data-theme="grey">
					<div class="grey"></div>
					<span>Grey</span>
				</li>
				<li data-theme="blue-grey">
					<div class="blue-grey"></div>
					<span>Blue Grey</span>
				</li>
				<li data-theme="black">
					<div class="black"></div>
					<span>Black</span>
				</li>
			</ul>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="settings">
			<div class="demo-settings">
				<p>GENERAL SETTINGS</p>
				<ul class="setting-list">
					<li>
						<span>Report Panel Usage</span>
						<div class="switch">
							<label><input type="checkbox" checked><span class="lever"></span></label>
						</div>
					</li>
					<li>
						<span>Email Redirect</span>
						<div class="switch">
							<label><input type="checkbox"><span class="lever"></span></label>
						</div>
					</li>
				</ul>
				<p>SYSTEM SETTINGS</p>
				<ul class="setting-list">
					<li>
						<span>Notifications</span>
						<div class="switch">
							<label><input type="checkbox" checked><span class="lever"></span></label>
						</div>
					</li>
					<li>
						<span>Auto Updates</span>
						<div class="switch">
							<label><input type="checkbox" checked><span class="lever"></span></label>
						</div>
					</li>
				</ul>
				<p>ACCOUNT SETTINGS</p>
				<ul class="setting-list">
					<li>
						<span>Offline</span>
						<div class="switch">
							<label><input type="checkbox"><span class="lever"></span></label>
						</div>
					</li>
					<li>
						<span>Location Permission</span>
						<div class="switch">
							<label><input type="checkbox" checked><span class="lever"></span></label>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</aside>
<!-- #END# Right Sidebar -->