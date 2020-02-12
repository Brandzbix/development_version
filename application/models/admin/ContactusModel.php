<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class ContactusModel extends CI_Model{

  public function __construct(){
    parent::__construct(); 
  }

  // Fetch records
  public function getData($rowno,$rowperpage,$search="") {
 
    $this->db->select('*');
    $this->db->from('tbl_contact');
    $this->db->order_by('contact_id_pk DESC');
    if($search != ''){
      $this->db->like('first_name', $search);
      $this->db->or_like('last_name', $search);
      $this->db->or_like('email', $search);
      $this->db->or_like('phone', $search);
    }
    $this->db->limit($rowperpage, $rowno); 
    $query = $this->db->get();
    return $query->result_array();
  }

  // Select total records
  public function getrecordCount($search = '') {

    $this->db->select('count(*) as allcount');
    $this->db->from('tbl_contact');
 
    if($search != ''){
      $this->db->like('first_name', $search);
      $this->db->or_like('last_name', $search);
      $this->db->or_like('email', $search);
      $this->db->or_like('phone', $search);
    }

    $query = $this->db->get();
    $result = $query->result_array();
 
    return $result[0]['allcount'];
  }
   /*Select Data By Filed*/
   public function selectWhere($filedName,$tbl_name,$where_condition)
   {
      $filed = implode(',',$filedName);
      $this->db->select($filed)
               ->from($tbl_name)
               ->where($where_condition);
      $query   =   $this->db->get();
      $result  =   $query->result_array();
      return $result; 
   }
   public function delete($tbl_name,$where_condition){
      $this->db->where($where_condition);
      $this->db->delete($tbl_name); 
      return true;
   }
      public function insert($tbl_name,$data){
      $this->db->insert($tbl_name,$data);
      return true;
   }
 
}