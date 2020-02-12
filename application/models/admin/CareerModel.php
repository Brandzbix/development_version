<?php 
	defined('BASEPATH') or exit ('No direct script allow');
	/**
	 * 
	 */
	class CareerModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();	
		}
		// Fetch records
		public function getData($rowno,$rowperpage,$search="") {
			$this->db->select('*');
			$this->db->from('tbl_job_application');
			$this->db->order_by('job_application_id_pk','DESC');
			if($search != ''){
				$this->db->like('first_name',$search);
				$this->db->or_like('last_name',$search);
				$this->db->or_like('email', $search);
				$this->db->or_like('mobile_no', $search);
			}
			$this->db->limit($rowperpage, $rowno); 
			$query = $this->db->get();
			return $query->result_array();
		}
		// Select total records
		public function getrecordCount($search = '') {
			$this->db->select('count(*) as allcount');
			$this->db->from('tbl_job_application');
			  if($search != ''){
					$this->db->like('first_name',$search);
					$this->db->or_like('last_name',$search);
					$this->db->or_like('email', $search);
					$this->db->or_like('mobile_no', $search);
				}
				$query = $this->db->get();
				$result = $query->result_array();
			return $result[0]['allcount'];
		}
		#check email if already exits
		public function emailCheck($email){
			$this->db->select('email');
			$this->db->from('tbl_login');
			$this->db->where('email',$email);
			$getRow = $this->db->get();
			$result	=	$getRow->row_array();
			if($result > 0){
				return true;
			}else{
				return false;
			}
		}
		/*Get Data By Id*/
		public function getDataById($id){
			$this->db->select('*');
			$this->db->from('tbl_job_application');
			$this->db->where('job_application_id_pk',$id);
			$getRow 	= $this->db->get();
			$result	=	$getRow->result_array();
			return $result;
		}
		/*Delete Account Method*/
		public function delete($id)
		{
			$this->db->where('job_application_id_pk', $id);
			$this->db->delete('tbl_job_application');
			return true;
		}
		public function updateStatus($data,$id)
		{
			$this->db->where('job_application_id_pk',$id)
            ->update('tbl_job_application',$data);
       	return true;
		}
	}
?>