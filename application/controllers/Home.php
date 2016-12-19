<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		
		$this->load->model('Article');







		$data['page_header'] = [
								'css' => $this->config->item('default_css'),
								'js'  => [],
								'meta' => [
									'title' => '首页',
									'description' => '123213',
									'keyword' => '23'
								],
							];

		$this->load->view('home', $data);
	}
}
