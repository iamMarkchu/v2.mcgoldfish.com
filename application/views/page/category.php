<?php $this->load->view('public/head', $page_header);?>
<?php $this->load->view('public/header');?>
<?php $this->load->view('public/category_bref', $category_info);?>
	<main>
	    <div class="page-wrap">
			<section>
				<?php $this->load->view('public/category_article_list', $article_list);?>
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
