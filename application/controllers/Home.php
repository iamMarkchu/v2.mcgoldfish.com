<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function index()
	{	
		$this->load->helper('date');
		$this->load->model('article_model', 'article');
		$this->data['recommand_list'] = $this->article->get_article_list();
		$this->data['new_article_list'] = $this->article->get_article_list('addtime', 10);
		$this->data['page_header'] = [
								'css' => $this->config->item('default_css'),
								'js'  => $this->config->item('default_js'),
								'meta' => [
									'title' => '首页',
									'description' => '123213',
									'keyword' => '23'
								],
							];
		$this->load->view('page/home', $this->data);
	}
}
