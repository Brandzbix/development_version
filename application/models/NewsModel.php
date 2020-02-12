<?php 
/**
 *  Website News Model
 */
class NewsModel extends CI_Model
{
	
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
	public function getNews(){
		$this->db->select('tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.news_picture,tbl_news.create_date,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name')
		->from('tbl_news')
		->join('tbl_news_type','tbl_news.news_type = tbl_news_type.news_type_id_pk');
		$result = $this->db->get();
		return $result->result_array();
		}
	}


?>