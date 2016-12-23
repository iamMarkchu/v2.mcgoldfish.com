<?php $this->load->view('public/head', $page_header);?>
<?php $this->load->view('public/header', $nav_list);?>
	<main>
	    <div class="page-wrap">
			<section>
				<div class="panel panel-default panel-test type-all">
					<h1>所有文章</h1>
					<ul>
						<?php foreach($all_article_list as $k => $v):?>
						<li>
							<?php echo $k+1;?>. <a href="<?php echo generate_url('article', $v['id']);?>"><?php echo $v['title'];?></a>
						</li>
						<?php endforeach;?>
					</ul>
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
