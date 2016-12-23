<?php $this->load->view('public/head', $page_header);?>
<?php $this->load->view('public/header');?>
	<main>
	    <div class="page-wrap">
			<section>
				<div class="panel panel-default panel-test article-panel">
					<div class="panel-heading">
						<div class="breadcrumb">
							<?php foreach($breadcrumb as $k => $v): ?>
								<a href="<?php echo $v['url'];?>"><?php echo $v['title'] ?></a>
								<?php if($k+1 != count($breadcrumb)):?>
								>
								<?php endif;?>
							<?php endforeach;?>
						</div>
						<h1><?php echo $article_info['title'];?></h1>
						<ul class="user-info">
							<li>
								<i class="fa fa-user-circle" aria-hidden="true"></i>
								<span>
									<?php echo $article_info['addeditor'];?>
								</span>
							</li>
							<li>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<span><?php echo $article_info['addtime'];?></span>
							</li>
						</ul>
					</div>
					<div class="panel-body">
						<article>
							<?php echo stripslashes($article_info['content']);?>
						</article>
					</div>
					<div class="panel-footer">
						<div class="pull-left user-info">
							<ul>
								<?php foreach($article_info['tag_info'] as $k => $v):?>
									<li>
										<?php if($k == 0):?><i class="fa fa-tags" aria-hidden="true"></i><?php endif;?>
										<a href="<?php echo generate_url('category', $v['id']); ?>">
											<?php echo $v['displayname'];?>
										</a>
									</li>
								<?php endforeach;?>
							</ul>
							<div class="clear-fix"></div>
						</div>
						<div class="pull-right user-info">
							<ul>
								<li>
									<i class="fa fa-eye" aria-hidden="true"></i>
									<span><?php echo $article_info['clickcount'];?></span>
								</li>
								<li class="hot-comment">
									<i class="fa fa-commenting" aria-hidden="true"></i>
									<span class="mes"><?php echo $article_info['commentcount'];?></span>
								</li>
								<li class="good-vote" data-id="<?php echo $article_info['id'];?>">
									<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
									<span class="vote"><?php echo $article_info['votecount'];?></span>		
								</li>
								
							</ul>
						</div>
						<div class="clear-fix"></div>
					</div>
				</div>
				<div class="page-comment panel-default">
    				<h3 data-toggle="comment-block">评论区</h3>
    				<div class="reply-box">
    					<a href="" class="reply-avatar">
    						<img src="/public/images/default_user.png" class="img-circle" alt="" width="50" height="50">
    					</a>
    					<form action="/comment/insert" method="post" class="reply-form">
    						<input type="hidden" name="optdataid" value="<?php echo $article_info['id']?>">
    						<input type="hidden" name="datatype" value="article">
    						<input type="hidden" name="url" value="<?php echo current_url();?>">
    						<div class="reply-text">
	    						<textarea name="comment_info"></textarea>
	    					</div>
	    					<div class="reply-footer">
	    						<a class="pull-right reply-btn">发布</a>
	    					</div>
    					</form>
    				</div>
    				<div class="commen-list">
    					<h5>评论列表</h5>
    					<?php $this->load->view('public/block_comment', $comment_list);?>
    				</div>
				</div>
			</section>
			<aside>
				<?php $this->load->view('public/category_list', $hot_category);?>
				<?php $this->load->view('public/tag_list', $hot_tag);?>
				<?php $this->load->view('public/friend_link_list');?>
			</aside>
			<div class="clear-fix"></div>
	    </div>
	</main>
	<?php $this->load->view('public/footer', $page_header['js']);?>
</body>
</html>
