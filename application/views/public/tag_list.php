<div class="list label-list">
	<div class="list-heading">
		<h3><i class="fa fa-tags h-icon" aria-hidden="true"></i>热门标签</h3>
	</div>
	<ul class="list-body">
		<?php foreach($hot_tag as $tag) :?>
		<li>
			<a href="<?php echo generate_url('tag', $tag['id']);?>">
				<?php echo $tag['displayname'] ?>
			</a>
		</li>
		<?php endforeach;?>
	</ul>
	<div class="clear-fix"></div>
</div>