<?php $this->load->view('head', $page_header);?>
<?php $this->load->view('header');?>
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
						<h1><?php echo $article_info->title;?></h1>
						<ul class="user-info">
							<li>
								<i class="fa fa-user-circle" aria-hidden="true"></i>
								<span>
									<?php echo $article_info->addeditor;?>
								</span>
							</li>
							<li>
								<i class="fa fa-clock-o" aria-hidden="true"></i>
								<span><?php echo $article_info->addtime;?></span>
							</li>
						</ul>
					</div>
					<div class="panel-body">
						<article>
							<?php echo stripslashes($article_info->content);?>
						</article>
					</div>
					<div class="panel-footer">
						<div class="pull-left user-info">
							<ul>
								<?php foreach($article_info->tag_info as $k => $v):?>
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
									<span><?php echo $article_info->clickcount;?></span>
								</li>
								<li class="hot-comment">
									<i class="fa fa-commenting" aria-hidden="true"></i>
									<span class="mes"><?php echo $article_info->commentcount;?></span>
								</li>
								<li class="good-vote" data-id="<{$articleInfo.id}>">
									<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
									<span class="vote"><?php echo $article_info->votecount;?></span>		
								</li>
								
							</ul>
						</div>
						<div class="clear-fix"></div>
					</div>
				</div>
				<?php if($show_comment):?>
					<div class="page-comment">
    					<div class="ds-thread" data-thread-key="<?php echo $article_info->id;?>" data-title="<?php echo $article_info->title;?>" data-url="<?php echo generate_url('article', $article_info->id); ?>"></div>
					</div>
				<?php endif;?>
			</section>
			<aside>
				<?php $this->load->view('category_list', $hot_category);?>
				<?php $this->load->view('tag_list', $hot_tag);?>
				<?php $this->load->view('friend_link_list');?>
			</aside>
			<div class="clear-fix"></div>
	    </div>
	</main>
	<?php $this->load->view('footer', $page_header['js']);?>
</body>
</html>
