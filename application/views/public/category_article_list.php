<ul class="category-article-list">
	<?php if(!empty($article_list)):?>
		<?php foreach($article_list as $k => $v):?>
		<li class="panel-ca-article">
			<a href="<?php echo generate_url('article', $v['id']) ;?>">
				<div class="panel-ca-left">
					<img src="http://img.mcgoldfish.com<?php echo $v['image'];?>" width="" alt="">
				</div>
				<div class="panel-ca-right">
					<h2><?php echo $v['title'];?></h2>
					<p>nginx和apache都是WEB服务器，但各有各的优缺点，搭配起来使用，最合适不过了。nginx比较轻量级，高并发能力强，对静态文件处理能力强，也能做反向代理服务器，所以将....</p>
					<ul class="ca-user-info">
						<li>
							<i class="fa fa-user-circle" aria-hidden="true"></i>
							<span><?php echo $v['addeditor'];?></span>
						</li>
						<li>
							<i class="fa fa-clock-o" aria-hidden="true"></i>
							<span><?php echo timespan(strtotime($v['addtime']), time(), 1);?>前</span>
						</li>
					</ul>
				</div>
			</a>
		</li>
		<?php endforeach;?>
	<?php else:?>
		暂无文章
	<?php endif;?>
</ul>
