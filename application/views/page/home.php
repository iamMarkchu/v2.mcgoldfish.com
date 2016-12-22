<?php $this->load->view('public/head', $page_header);?>
<?php $this->load->view('public/header', $nav_list);?>
	<main>
	    <div class="page-wrap">
			<section>
				<?php $this->load->view('public/recommand_article');?>
			</section>
			<aside>
				<?php $this->load->view('public/category_list', $hot_category);?>
				<?php $this->load->view('public/tag_list', $hot_tag);?>
				<?php $this->load->view('public/new_article_list', $new_article_list);?>
				<?php $this->load->view('public/friend_link_list');?>
			</aside>
			<div class="clear-fix"></div>
	    </div>   
	</main>
	<?php $this->load->view('public/footer');?>
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url('/public/js/app.js?ver='.VER) ?>"></script>
</body>
</html>
