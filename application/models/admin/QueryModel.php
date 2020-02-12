<?php 
   defined('BASEPATH') OR exit ('No Direct Script Allow');
/**
 * Query Model Insert, Update, Delete, Select All
 */
class QueryModel extends CI_Model
{
   
   function __construct()
   {
      parent::__construct();
   }
   /*Insert Query For All Methods*/
   public function insert($tbl_name,$data){
      $this->db->insert($tbl_name,$data);
      return true;
   }
   /*Update Query For All Methods*/
   public function update($field_name,$id,$tbl_name,$data)
   {
      $this->db->where($field_name,$id)
               ->update($tbl_name,$data);
      return true;
   }
   /*Delete Query For All*/
   public function delete($field_name,$id,$tbl_name)
   {
      $this->db->where($field_name,$id)
               ->delete($tbl_name);
      return true;
   }
   /*Select All Data For All Methods*/
   public function select($tbl_name)
   {
      $this->db->select('*')
               ->from($tbl_name);
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
   }
   /*Select Data By Filed*/
   public function selectByFiled($filedName,$tbl_name,$order_by)
   {
      $filed = implode(',',$filedName);
      $this->db->select($filed)
               ->from($tbl_name)
               ->order_by($order_by);
      $query   =   $this->db->get();
      $result  =   $query->result_array();
      return $result; 
   }
   /*Selete Where Data For All Methods*/
      /*Associative array method:
      $array = array('name' => $name, 'title' => $title, 'status' => $status);*/
         #Or if you want to do something other than = comparison then try this
      /*$array = array('name !=' => $name, 'id <' => $id, 'date >' => $date);*/
   public function selectWhere($tbl_name,$where_condition)
   {
      $this->db->select('*')
               ->from($tbl_name)
               ->where($where_condition);
      $query = $this->db->get();
      return $query->result_array();

   }
   # Select all with order by
   public function selectOrderbyAndLimit($tbl_name,$order_by,$limit)
   {
      $this->db->select('*')
               ->from($tbl_name)
               ->order_by($order_by)
               ->limit($limit);
      $query = $this->db->get();
      return $query->result_array();
   }
}
?>