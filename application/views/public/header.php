<header>
	<div class="page-wrap">
		<div class="header-left">
			<a href="/" class="logo pull-left">
				<p class="pc-logo"><span>MC</span>GoldFish</p>
				<img src="/images/logo.png" class="mobile-logo hidden"/>
			</a>
			<ul class="some-link pull-left my-cate">
				<?php foreach($nav_list as $k => $v):?>
				<li>
					<a href="<?php echo generate_url('category', $v['id']);?>"><?php echo $v['displayname'];?></a>
				</li>
				<?php endforeach;?>
				<div class="top-search">
					<form action="/article/search_article" method="get" class="search_form">
						<a class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></a>
	        			<input class="search-input" type="text" name="search_key" value="" autocomplete="off" placeholder="搜索...">
					</form>
	        	</div>
			</ul>
	        <div class="pull-right exp-menu" onclick="openNav()">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div class="header-right">
			<ul class="some-link pull-left login">
				<li class="dropdown">
					<a href="/message.html" class="dropbtn">登录</a>
					<div class="dropdown-content">
					   <!-- <a href="javascript:void(0);" onclick='toLogin();'><i class="fa fa-qq" aria-hidden="true"></i></a> -->
					   <a href="#"><i class="fa fa-weixin" aria-hidden="true"></i></a>
					   <a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
					   <a href="#"><i class="fa fa-weibo" aria-hidden="true"></i></a>
					</div>
				</li>
			</ul>
		</div>
		<div class="clear-fix"></div>
	</div>
</header>