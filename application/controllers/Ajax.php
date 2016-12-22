<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller 
{
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper('cookie');
	}
	public function action(){
		$id =  $this->input->post('id');
		$action = $this->input->post('action');

		if($action == 'do-article-vote')
		{
			if(!empty(get_cookie($action.'-'.$id)))
			{
				echo 0;
			} else{
				$succ_flag = $this->do_article_vote_action($id);	
				if($succ_flag !== 0)
				{
					set_cookie($action.'-'.$id, '1', '86000');
					echo 1;
				}else{
					echo 2;
				}
			}
		}
	}

	public function do_article_vote_action($id){
		$this->db->query('UPDATE `article` SET `votecount` = `votecount` + 1 WHERE `id` ='.$id);
		return $this->db->affected_rows();
	}
}