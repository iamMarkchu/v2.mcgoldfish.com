<?php 	
defined('BASEPATH') OR exit('No direct script access allowed');

class article extends CI_Controller
{
	public function index($id){
		$this->load->model('article_model', 'article');
		$data['article_info'] = $this->article->get_article_by_id($id);
		$breadcrumb[] = ["url"=>"/","title"=>"首页"];
		if(!empty($data['article_info']->category_info)){
			$cate_info = $data['article_info']->category_info[0];
			$parent_cate_info = $this->db->query('select * from category where id = '.$cate_info['parentcategoryid'])->row();
			$breadcrumb[] = ['url'=> base_url('/category/'.$parent_cate_info->id), 'title' => $parent_cate_info->displayname];
			$breadcrumb[] = ["url"=> base_url('/category/'.$cate_info['id']), 'title'=> $cate_info['displayname']];
		}else{
			$breadcrumb[] = ["url"=>'/all-articles.html',"title"=>'所有文章'];
		}
		$data['breadcrumb'] = $breadcrumb;
		$data['show_comment'] = true;
		$data['hot_category'] = $this->db->query('select * from category where parentcategoryid = 0 order by displayorder limit 4')->result_array();
		$data['hot_tag'] = $this->db->query('select * from tag order by displayorder limit 30')->result_array();

		/**
		 * 增加页面级别css,js,page meta
		 */
		$default_css = $this->config->item('default_css');
		$default_css =  array_merge($this->config->item('default_css'), 
									[
										'/public/css/main_v2_blog.css?ver='.VER, 
									 	'/public/plugins/syntaxhighlighter/styles/shCoreDefault.css?ver='.VER
									]);
		$default_js = $this->config->item('default_js');
		$default_js['footer'] = array_merge($default_js['footer'], 
											[
												'/public/plugins/syntaxhighlighter/scripts/shCore.js', 
											 	'/public/plugins/syntaxhighlighter/scripts/shAutoloader.js',
											 	'/public/js/article.js?ver='. VER,
											 	'/public/js/comment.js?ver='. VER,
											]);
		$page_meta = $this->db->query("select * from page_meta where modeltype = 'article' and status = 'yes' and optdataid ={$id}")->row();
		$data['page_header'] = [
									'css' => $default_css,
									'js'  => $default_js,
									'meta' => [
										'title' => isset($page_meta->pagetitle)? $page_meta->pagetitle: '',
										'description' => isset($page_meta->pagedescription)? $page_meta->pagedescription: '',
										'keyword' => isset($page_meta->pagekeyword)? $page_meta->pagekeyword: '',
									],
								];
		$this->load->view('article', $data);
	}
}