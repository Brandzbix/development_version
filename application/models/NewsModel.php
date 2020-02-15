<?php 
/**
 *  Website News Model
 */
class NewsModel extends CI_Model
{
	protected $tbl_news 		= 	"tbl_news";
	protected $tbl_news_type	=	"tbl_news_type";
	function __construct()
	{
		parent::__construct();
	}

	public function getNewsType(){
		$this->db->select('*')
		->from('tbl_news_type')
		->order_by('news_type_id_pk','ASC');
		$query  = $this->db->get();
		return $query->result_array();
	}

	/*
		Display News Records
	*/
	public function getAllRecord(){
		$this->db->select('tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_picture,tbl_news.news_flags,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name')
		->from($this->tbl_news)
		->join($this->tbl_news_type,'tbl_news.news_type = tbl_news_type.news_type_id_pk')
		->order_by($this->tbl_news.'.'.'news_id_pk','DESC');
		// if($numResult > 0):
		// 	$this->db->limit($numResult);
		// endif;
		$result = $this->db->get();
		return $result->result_array();
	}
	public function getNewsByPrettryUrl($url){
		$this->db->select('tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.create_date,tbl_news.news_picture,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name')
		->from($this->tbl_news)
		->join($this->tbl_news_type,'tbl_news.news_type = tbl_news_type.news_type_id_pk')
		->where($this->tbl_news.'.'.'pretty_url',$url)
		->limit("1");
		$result = $this->db->get();
		return $result->result_object();
	}

	/*fetch subcategory */

	public function fetchHeadNews($url){
		$this->db->select('tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.create_date,tbl_news.news_flags,tbl_news.news_picture,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name')
		->from($this->tbl_news)
		->join($this->tbl_news_type,'tbl_news.news_type = tbl_news_type.news_type_id_pk')
		->where($this->tbl_news.'.'.'news_type',$url)
		->order_by($this->tbl_news.'.'.'news_id_pk','DESC')
		->limit("1");
		$result = $this->db->get();
		return $result->result_array();
	}
	public function fetchNewsBySubcategory($url){
		$this->db->select('tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.create_date,tbl_news.news_flags,tbl_news.news_picture,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name')
		->from($this->tbl_news)
		->join($this->tbl_news_type,'tbl_news.news_type = tbl_news_type.news_type_id_pk')
		->where($this->tbl_news.'.'.'news_type',$url)
		->order_by($this->tbl_news.'.'.'news_id_pk','DESC');
		$result = $this->db->get();
		return $result->result_array();
	}

}
?>