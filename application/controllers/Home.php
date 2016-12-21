<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$this->load->model('article_model', 'article');
		$data['recommand_list'] = $this->article->get_article_list();
		$data['hot_category'] = $this->db->query('select * from category where parentcategoryid = 0 order by displayorder limit 4')->result_array();
		$data['hot_tag'] = $this->db->query('select * from tag order by displayorder limit 30')->result_array();
		$data['new_article_list'] = $this->article->get_article_list('addtime', 10);
		$data['page_header'] = [
								'css' => $this->config->item('default_css'),
								'js'  => $this->config->item('default_js'),
								'meta' => [
									'title' => '首页',
									'description' => '123213',
									'keyword' => '23'
								],
							];
		$this->load->view('home', $data);
	}
}
