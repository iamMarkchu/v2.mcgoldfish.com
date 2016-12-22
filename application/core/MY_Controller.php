<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        
        $data['nav_list'] = $this->db->query('select * from category where parentcategoryid = 0 order by displayorder limit 3')->result_array();
        $data['hot_category'] = $this->db->query('select * from category where parentcategoryid = 0 order by displayorder limit 4')->result_array();
		$data['hot_tag'] = $this->db->query('select * from tag order by displayorder limit 30')->result_array();
		$data['show_comment'] = true;
        $data['page_header'] = [
                                'css' => $this->config->item('default_css'),
                                'js'  => $this->config->item('default_js'),
                                'meta' => [
                                    'title' => '首页',
                                    'description' => '123213',
                                    'keyword' => '23'
                                ],
                            ];
		$this->data = $data;
    }
}