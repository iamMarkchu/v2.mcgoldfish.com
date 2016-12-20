<?php 
class Article_model extends CI_Model {

    public function __construct()
    {
    	$this->load->database();
        parent::__construct();
    }

    public function get_article_by_id($id)
    {
    	$article_info = $this->db->from('article')
    					->where('id', $id)
    					->get()
    					->row();
    	$article_info->tag_info = $this->get_article_tag_list($id);
    	$article_info->category_info = $this->get_article_category_list($id);
    	return $article_info;
    }

    public function get_article_list($orderby='maintainorder', $limit=8)
    {
	    $article_list = $this->db->from('article')
	    				->where('status','active')
	    				->order_by($orderby)
	    				->limit($limit)
	    				->get()
	    				->result_array();

	   	foreach ($article_list as $key => $value) {
	   	    $article_list[$key]['tag_info'] = $this->get_article_tag_list($value['id']);
	   	    $article_list[$key]['category_info'] = $this->get_article_category_list($value['id']);	
	   	}
	   	return $article_list;
	}

	public function get_article_tag_list($id)
	{
		$sql = "select t.id,t.displayname from tag_mapping as tm left join tag as t on tm.tagid = t.id where tm.datatype = 'article' and tm.`status` = 'active' and tm.optdataid = {$id}";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_article_category_list($id)
	{
		$sql = "select c.id,c.parentcategoryid,c.displayname from category_mapping as cm left join category as c on cm.categoryid = c.id where cm.datatype = 'article' and cm.`status` = 'active' and cm.optdataid = {$id}";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}