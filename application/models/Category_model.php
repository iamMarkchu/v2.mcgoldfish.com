<?php 
class Category_model extends CI_Model
{
	public function get_category_by_id($id)
	{
		$category_info = $this->db->from('category')
								->where('id', $id)
								->get()
								->row_array();
		return $category_info;
	}

	public function get_sub_category_by_pid($pid)
	{
		$sub_category_info = $this->db->from('category')
									->where('parentcategoryid', $pid)
									->get()
									->result_array();
		return $sub_category_info;
	}

	public function get_article_by_cids($cid_list)
	{
		$article_list = $this->db->query("select a.*,c.id as cid,c.displayname from article as a left join category_mapping as cm on (a.id = cm.optdataid and cm.datatype = 'article' and cm.status = 'active') left join category as c on cm.categoryid = c.id where a.status = 'active' and c.id in (".implode(',', $cid_list).")")->result_array();
		return $article_list;
	}
}