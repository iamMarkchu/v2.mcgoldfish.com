<?php $this->load->view('head', $page_header);?>
<?php $this->load->view('header');?>
	<main>
	    <div class="page-wrap">
			<section>
				<?php $this->load->view('recommand_article');?>
			</section>
			<aside>
				<{include file="block_category_list.html"}>
				<{include file="block_tag_list.html"}>
				<{include file="block_new_article.html"}>
				<{include file="block_friend_link.html"}>
			</aside>
			<div class="clear-fix"></div>
	    </div>   
	</main>
	<{include file="block_footer.html"}>
	<{include file="block_login.html"}>
	<script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="/js/app.js?ver=<{$smarty.const.VER}>"></script>
</body>
</html>
