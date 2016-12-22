<?php if(!empty($comment_list)):?>
	<?php foreach($comment_list as $v):?>
	<div class="reply-box">
		<a href="" class="reply-avatar">
			<img src="/public/images/default_user.png" class="img-circle" alt="" width="50" height="50">
		</a>
		<div class="reply-text">
			<span><?php echo $v['username'] ;?>:</span>
			<p><?php echo $v['content'];?></p>
		</div>
		<div class="reply-footer">
			<i class="fa fa-clock-o" aria-hidden="true"></i><span class="r-time"><?php echo $v['addtime'] ;?></span>
		</div>
	</div>
	<?php endforeach;?>
<?php else:?>
	暂无评论
<?php endif;?>