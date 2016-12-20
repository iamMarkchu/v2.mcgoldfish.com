<div class="list default-list cate-list">
	<div class="list-heading">
		<h3>
			<i class="fa fa-tasks h-icon" aria-hidden="true"></i>
			热门分类
		</h3>
	</div>
	<ul class="list-body">
		<?php foreach($hot_category as $k => $v) :?>
		     <li>
				<a href="<{$item.requestpath}>">
					<span class="label-color-<?php echo $k;?>"><?php echo $v['aliasesname'];?></span><?php echo $v['displayname'];?>(<?php echo $v['articlecount'] ?>)
				</a>
			</li>
		<?php endforeach;?>
	</ul>
</div>