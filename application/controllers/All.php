<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class All extends MY_Controller
{
	public function all_article()
	{
		$this->data['all_article_list'] = $this->db->query("select id,title from article where status = 'active' order by id")->result_array();
		$page_css = $this->data['page_header']['css'];
		$this->data['page_header']['css'] = array_merge($page_css, ['/public/css/main_v2_type_all.css?ver='.VER]);
		$this->load->view('page/all_article', $this->data);
	}

	public function all_tag()
	{
		$this->data['all_tag_list'] = $this->db->query("select id,displayname from tag")->result_array();
		$page_css = $this->data['page_header']['css'];
		$this->data['page_header']['css'] = array_merge($page_css, ['/public/css/main_v2_type_all.css?ver='.VER]);
		$this->load->view('page/all_tag', $this->data);
	}	

	public function all_category()
	{
		$this->data['all_category_list'] = $this->db->query("select id,displayname from category")->result_array();
		$page_css = $this->data['page_header']['css'];
		$this->data['page_header']['css'] = array_merge($page_css, ['/public/css/main_v2_type_all.css?ver='.VER]);
		$this->load->view('page/all_category', $this->data);
	}
}