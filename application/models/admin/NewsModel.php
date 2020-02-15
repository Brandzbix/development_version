<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class NewsModel extends CI_Model {
   protected $tbl_news         =  'tbl_news';
   protected $tbl_news_type    =  'tbl_news_type';
   public function __construct() {
      parent::__construct(); 
   }

  // Fetch records
public function getData($rowno,$rowperpage,$search="") {
      $this->db->select('tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name,tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.news_picture,tbl_news.news_flags,tbl_news.create_date');
      $this->db->from($this->tbl_news);
      $this->db->join($this->tbl_news_type,'tbl_news_type.news_type_id_pk=tbl_news.news_type');
      $this->db->order_by('tbl_news.news_id_pk','DESC');
      if($search != ''){
         $this->db->like('tbl_news_type.news_type_name', $search);
      $this->db->or_like('tbl_news.news_heading', $search);
      $this->db->or_like('tbl_news.create_date', $search);
      }
   $this->db->limit($rowperpage, $rowno); 
   $query = $this->db->get();
   return $query->result_array();
}
  // Select total records
public function getrecordCount($search = '') {
    $this->db->select('count(*) as allcount,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name,tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.news_picture,tbl_news.news_flags,tbl_news.create_date');
      $this->db->from($this->tbl_news);
      $this->db->join($this->tbl_news_type,'tbl_news_type.news_type_id_pk=tbl_news.news_type');
    if($search != ''){
      $this->db->like('tbl_news_type.news_type_name', $search);
      $this->db->or_like('tbl_news.news_heading', $search);
      $this->db->or_like('tbl_news.create_date', $search);
   }
    $query = $this->db->get();
    $result = $query->result_array();
    return $result[0]['allcount'];
}

/*
@@ Store information into table
*/
public function store($tbl_name,$data){
   $this->db->insert($tbl_name,$data);
   return ture;
}
/*
    @@@-------- Get specified news by id-----------@@@ 
*/
public function getNewsById($id){
    $this->db->select('tbl_news.news_id_pk,tbl_news.news_type,tbl_news.pretty_url,tbl_news.news_heading,tbl_news.news_description,tbl_news.news_picture,tbl_news.news_flags,tbl_news.create_date,tbl_news_type.news_type_id_pk,tbl_news_type.news_type_name')
    ->from($this->tbl_news)
    ->join($this->tbl_news_type,'tbl_news.news_type = tbl_news_type.news_type_id_pk')
    ->where('tbl_news.news_id_pk',$id);
    $result = $this->db->get();
    return $result->result_array();
    }

/*
    @@@ Update News Data
*/
public function updateNews($id,$data){
    $this->db->where('news_id_pk',$id)
    ->update($this->tbl_news,$data);
    return true;
}

/*
        @@ Destroy News From Storage
*/
public function delete($id)
{
   $this->db->where('news_id_pk', $id);
   $this->db->delete($this->tbl_news);
   return true; 
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
public function updateProducts($array,$id)
{
  $this->db->where('patient_blog_id_pk', $id);
  $this->db->update('tbl_patient_blog', $array);
  return TRUE;
}
/*News Type*/
   public function getNewsType($tbl_name){
      $this->db->select("*")
      ->from($tbl_name);
      $result = $this->db->get();
      return $result->result_array();

   }

}