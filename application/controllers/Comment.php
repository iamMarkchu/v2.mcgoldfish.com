<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Comment extends CI_Controller
{
	public function insert()
	{
		$this->load->database();
		$data = [
			'content' => $this->input->post('comment_info'),
			'addtime' => date('Y-m-d H:i:s'),
			'username' => '游客',
			'email'  => '',
			'optdataid' => $this->input->post('optdataid'),
			'parentcommentid' => 0,
			'goodvote' => 0,
			'badvote' => 0,
			'status' => 'active',
		];

		$this->db->insert('comment', $data);
		$num = $this->db->affected_rows();
		if($num == 1)
		{
			redirect($this->input->post('url').'#comment-block');
		}
	}
}