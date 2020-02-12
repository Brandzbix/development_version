<?php 
	defined('BASEPATH') or die('No Direct Script Allow');
	class ProductModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		 // Fetch records
	  	public function getData($rowno,$rowperpage,$search="",$pro_status) {
		  $this->db->select(
			'
				category.category_id_pk,
				category.category,
				tbl_subcategory.subcategory_id_pk,
				tbl_subcategory.category_id_fk,
				tbl_subcategory.subcategory_name,
				products.product_id_pk,
				products.productname,
				products.category_id_fk,
				products.packsize,
				products.composition,
				products.subcategory,
				products.indications,
				products.dosage,
				products.sideeffects,
				products.photobig,
				products.is_trending
			'
		);
		$this->db->from('products');
		$this->db->join('category','category.category_id_pk = products.category_id_fk');		
		$this->db->join('tbl_subcategory','tbl_subcategory.subcategory_id_pk = products.subcategory');
		$this->db->order_by('product_id_pk','DESC');
		if($search != ''){
			$this->db->like('productname',$search);
		}
		$this->db->limit($rowperpage, $rowno); 
		$query = $this->db->get();
		return $query->result_array();
		   
	  	}
	  // Select total records
	  public function getrecordCount($search = '') {
	   $this->db->select('count(*) as allcount');
	   $this->db->from('products');
	   if($search != ''){
	      $this->db->like('productname', $search);
	      /*$this->db->or_like('content', $search);*/
	   }
	   $query = $this->db->get();
	   $result = $query->result_array();
	   return $result[0]['allcount'];
	  }


	/*get data by felids name and where condition*/
		public function selectWhereAll($felidName,$tbl_name,$where){
			$this->db->select($felidName)
			->from($tbl_name)
			->where($where);
			$query = $this->db->get();
			return $query->result_array();
		}
		/**/
		public function selectAll($tbl_name){
			$this->db->select("*")
			->from($tbl_name);
			$query = $this->db->get();
			return $query->result_array();
		}
		/*Here we created final registration*/
		public function insert($tbl_name,$data){
			$this->db->insert($tbl_name,$data);
			$insert_id = $this->db->insert_id();
			return  $insert_id;

		}
		public function getProductDetails($id){
			$this->db->select(
			'	category.category_id_pk,
				category.category,
				tbl_subcategory.subcategory_id_pk,
				tbl_subcategory.subcategory_name,
				products.product_id_pk,
				products.productname,
				products.category_id_fk,
				products.packsize,
				products.composition,
				products.subcategory,
				products.indications,
				products.dosage,
				products.sideeffects,
				products.photobig,
				products.is_trending,
				tbl_meta.product_id_fk,
				tbl_meta.url_slug,
				tbl_meta.meta_title,
				tbl_meta.meta_description,
				tbl_meta.meta_keyword
			'
		);
			$this->db->from('products');
			$this->db->join('tbl_meta','tbl_meta.product_id_fk=products.product_id_pk');
			$this->db->join('category','products.category_id_fk=category.category_id_pk');
			$this->db->join('tbl_subcategory','products.subcategory=tbl_subcategory.subcategory_id_pk');

			$this->db->where('products.product_id_pk',$id);
			$query = $this->db->get();
	        $data = $query->row();
	        return $data;

		}
		/*Update Profile Code After Registration Created*/
		public function updateProduct($whereCondition,$tbl_name,$data){
			$this->db->where($whereCondition);
		$this->db->update($tbl_name,$data);
		echo $this->db->last_query();
		return TRUE;
		}
		/*Delete Products*/
		public function delete($where,$tbl_name){
			$this->db->where($where);
			$this->db->delete($tbl_name);
			return true;
		}
	}
?>