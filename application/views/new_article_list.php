<div class="list default-list new-list">
	<div class="list-heading">
		<h3><i class="fa fa-calendar h-icon" aria-hidden="true"></i>最新文章</h3>
	</div>
	<ul class="list-body">
		<?php foreach($new_article_list as $article):?>
		    <li>
				<a href="<?php echo base_url('/article/'.$article['id']); ?>">
					<?php echo $article['title'];?>
				</a>
			</li>
		<?php endforeach;?>
	</ul>
</div>