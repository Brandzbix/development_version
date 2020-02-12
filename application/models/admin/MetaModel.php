<?php 
defined('BASEPATH') or exit ('No direct script allow');
/**
 * Meta Model
 */
class MetaModel extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}
	public function insert($tbl_name,$data){
		$this->db->insert($tbl_name,$data);
		return ture;
	}
	public function pageListing(){
		$this->db->select('meta_tag_id_pk,page_id_fk,url_slug,meta_title,meta_description,meta_keyword,meta_image');
		$this->db->from('tbl_meta');
		$this->db->where('page_id_fk !=',0,FALSE);
		$query 	= $this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function getDataById($felids,$tbl_name,$condition){
		$this->db->select($felids);
		$this->db->from($tbl_name);
		$this->db->where($condition);
		$query = $this->db->get();
		return $query->row();
	}
	public function update($id,$tbl_name,$data){
		$this->db->where('meta_tag_id_pk',$id);
		$this->db->update($tbl_name,$data);
		return true;
	}
}
?>