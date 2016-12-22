<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends MY_Controller
{
	public function index($id)
	{
		$this->load->model('Category_model', 'category');
		$category_info = $this->category->get_category_by_id($id);
		$category_info['sub_category_info'] = $this->category->get_sub_category_by_pid($id);
		$this->data['category_info'] = $category_info;

		$cid_list = [];
		if(!empty($category_info['sub_category_info']))
		{
			foreach ($category_info['sub_category_info'] as $k => $v) {
				$cid_list[] = $v['id'];
			}
		}else {
			$cid_list[] = $category_info['id'];
		}
		$article_list = $this->category->get_article_by_cids($cid_list);
		$this->data['article_list'] = $article_list;
		$page_css = $this->data['page_header']['css'];
		$page_js = $this->data['page_header']['js']['footer'];
		$this->data['page_header']['css'] = array_merge($page_css, ['/public/css/main_v2_category.css?ver'.VER]);
		$this->data['page_header']['js']['footer'] = array_merge($page_js, ['/public/js/page-category.js?ver'.VER]);
		$this->load->view('page/category', $this->data);
	}
}