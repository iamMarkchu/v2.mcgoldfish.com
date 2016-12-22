<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends MY_Controller
{
	public function index($id){
		$this->load->model('article_model', 'article');
		$this->data['article_info'] = $this->article->get_article_by_id($id);

		/**
		 * 增加页面级别css,js,page meta
		 */
		$page_css = $this->data['page_header']['css'];
		$page_css =  array_merge($page_css, 
								[
									'/public/css/main_v2_blog.css?ver='.VER, 
								 	'/public/plugins/syntaxhighlighter/styles/shCoreDefault.css?ver='.VER
								]);
		$page_js = $this->data['page_header']['js'];
		$page_js['footer'] = array_merge($page_js['footer'], 
											[
												'/public/plugins/syntaxhighlighter/scripts/shCore.js', 
											 	'/public/plugins/syntaxhighlighter/scripts/shAutoloader.js',
											 	'/public/js/article.js?ver='. VER,
											 	'/public/js/comment.js?ver='. VER,
											]);
		$page_meta = $this->db->query("select * from page_meta where modeltype = 'article' and status = 'yes' and optdataid ={$id}")->row_array();
		$this->data['page_header'] = [
									'css' => $page_css,
									'js'  => $page_js,
									'meta' => [
										'title' => isset($page_meta['pagetitle'])? $page_meta['pagetitle']: '',
										'description' => isset($page_meta['pagedescription'])? $page_meta['pagedescription']: '',
										'keyword' => isset($page_meta['pagekeyword'])? $page_meta['pagekeyword']: '',
									],
								];
		$breadcrumb[] = ["url"=>"/","title"=>"首页"];
		if(!empty($this->data['article_info']['category_info'][0]['id'])){
			$cate_info = $this->data['article_info']['category_info'][0];
			$parent_cate_info = $this->db->query('select * from category where id = '.$cate_info['parentcategoryid'])->row_array();
			$breadcrumb[] = ['url'=> base_url('/category/'.$parent_cate_info['id']), 'title' => $parent_cate_info['displayname']];
			$breadcrumb[] = ["url"=> base_url('/category/'.$cate_info['id']), 'title'=> $cate_info['displayname']];
		}else{
			$breadcrumb[] = ["url"=>'/all-articles.html',"title"=>'所有文章'];
		}
		$this->data['breadcrumb'] = $breadcrumb;
		$this->load->view('page/article', $this->data);
	}

	public function search_article()
	{
		$key_word = $this->input->get('search_key');
		//搜索title中含有关键词的
		$this->data['key_word'] = $key_word;
		$this->data['article_list'] = $this->db->query("select * from article where title like '%{$key_word}%' and status = 'active'")->result_array();
		$page_css = $this->data['page_header']['css'];
		$page_js = $this->data['page_header']['js']['footer'];
		$this->data['page_header']['css'] = array_merge($page_css, ['/public/css/main_v2_category.css?ver'.VER]);
		$this->data['page_header']['js']['footer'] = array_merge($page_js, ['/public/js/page-category.js?ver'.VER]);
		$this->load->view('page/search', $this->data);
	}
}