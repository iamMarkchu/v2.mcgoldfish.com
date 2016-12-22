<div class="cate-bref">
	<div class="page-wrap">
		<div class="panel-bref">
			<h1 class="bref-body"><?php echo $category_info['displayname'];?></h1>
			<ul>
				<?php foreach($category_info['sub_category_info'] as $k => $v):?>
					<li><a href="<?php echo generate_url('category', $v['id']);?>"><?php echo $v['displayname'] ;?></a></li>
				<?php endforeach;?>
			</ul>
		</div>
	</div>
</div>