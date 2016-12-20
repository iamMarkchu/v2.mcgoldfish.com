<?php $this->load->view('head', $page_header);?>
<?php $this->load->view('header');?>
	<main>
	    <div class="page-wrap">
			<section>
				<?php $this->load->view('recommand_article');?>
			</section>
			<aside>
				<?php $this->load->view('category_list', $hot_category);?>
				<?php $this->load->view('tag_list', $hot_tag);?>
				<?php $this->load->view('new_article_list', $new_article_list);?>
				<?php $this->load->view('friend_link_list');?>
			</aside>
			<div class="clear-fix"></div>
	    </div>   
	</main>
	<?php $this->load->view('footer');?>
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="<?php echo base_url('/public/js/app.js?ver='.VER) ?>"></script>
</body>
</html>
