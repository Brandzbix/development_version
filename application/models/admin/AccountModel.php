<?php 
	defined('BASEPATH') or exit ('No direct script allow');
	/**
	 * 
	 */
	class AccountModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();	
		}
		// Fetch records
		public function getData($rowno,$rowperpage,$search="") {
			$this->db->select('*');
			$this->db->from('tbl_login');
			if($search != ''){
				$this->db->like('first_name',$search);
				$this->db->or_like('last_name',$search);
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
			$this->db->from('tbl_login');
			  if($search != ''){
					$this->db->like('first_name',$search);
					$this->db->or_like('last_name',$search);
					$this->db->or_like('email', $search);
					$this->db->or_like('phone', $search);
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
		public function store($array)
		{
			$this->db->insert('tbl_login',$array);
			return true;
		}
		/*Update Account Status*/
		public function updateStatus($updateData,$id)
		{
			$this->db->where('login_id_pk', $id);
			$this->db->update('tbl_login', $updateData);
			return true;
		}
		/*Get Data By Id*/
		public function getDataById($id){
			$this->db->select('*');
			$this->db->from('tbl_login');
			$this->db->where('login_id_pk',$id);
			$getRow 	= $this->db->get();
			$result	=	$getRow->result_array();
			return $result;
		}
		/*Update Account Status*/
		public function updateAccountDetails($updateData,$id)
		{
			$this->db->where('login_id_pk', $id);
			$this->db->update('tbl_login', $updateData);
			return true;
		}
		/*Delete Account Method*/
		public function delete($id)
		{
			$this->db->where('login_id_pk', $id);
			$this->db->delete('tbl_login');
			return true;
		}
	}
?>