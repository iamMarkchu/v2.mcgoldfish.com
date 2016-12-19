<header>
	<div class="page-wrap">
		<div class="header-left">
			<a href="/" class="logo pull-left">
				<p class="pc-logo"><span>MC</span>GoldFish</p>
				<img src="/images/logo.png" class="mobile-logo hidden"/>
			</a>
			<ul class="some-link pull-left my-cate">
				<?php foreach($this->config->item('nav_list') as $k => $v):?>
				<li>
					<a href="<?php echo $k;?>"><?php echo $v['displayname'];?></a>
				</li>
				<?php endforeach;?>
				<div class="top-search">
					<a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
	        		<input class="search-input" type="text" name="s" id="search-input" value="" autocomplete="off" placeholder="搜索...">
	        	</div>
			</ul>
	        <div class="pull-right exp-menu" onclick="openNav()">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div class="header-right">
			<ul class="some-link pull-left">
				<li>
					<a href="/message.html">给我留言</a>
				</li>
				<li>
					<a href="#">关于我们</a>
				</li>
			</ul>
		</div>
		<div class="clear-fix"></div>
	</div>
</header>