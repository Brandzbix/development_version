<?php 
	defined('BASEPATH') or die('No Direct Script Allow');
	class ProductModel extends CI_Model
	{
		protected $tbl_product 			 = "tbl_product";
		protected $tbl_product_price 	 = "tbl_product_price";
		protected $tbl_product_feature	 = "tbl_product_feature";
		protected $tbl_product_img 		 = "tbl_product_img";
		function __construct()
		{
			parent::__construct();
		}
		 // Fetch records
	  	public function getData($rowno,$rowperpage,$search="") {
		  $this->db->select(
			'
				tbl_product.product_id_pk,tbl_product.product_type,tbl_product.sku,tbl_product.status,
				tbl_product_price.product_id_fk,tbl_product_price.discount_price
			'
		);
		$this->db->from($this->tbl_product);
		$this->db->join($this->tbl_product_price,'tbl_product.product_id_pk=tbl_product_price.product_id_fk');
		$this->db->order_by('product_id_pk','DESC');
		if($search != ''){
			$this->db->like($this->tbl_product.'.'.'sku',$search);
		}
		$this->db->limit($rowperpage, $rowno); 
		$query = $this->db->get();
		return $query->result_array();
		   
	  	}
	  // Select total records
	  public function getrecordCount($search = '') {
	   $this->db->select('count(*) as allcount');
	   $this->db->from('tbl_product');
	  	if($search != ''){
	      $this->db->like('sku', $search);
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
			'
				tbl_product.product_id_pk,tbl_product.brand_name,tbl_product.product_type,tbl_product.sku,tbl_product.color,tbl_product.status,tbl_product.created_date,tbl_product_price.product_id_fk,tbl_product_price.pro_price,tbl_product_price.discount_price,tbl_product_price.total_discount,tbl_product_feature.product_id_fk,tbl_product_feature.ideal_for,tbl_product_feature.trolley_support,laptop_sleeve,tbl_product_feature.rain_cover,tbl_product_feature.style_code,tbl_product_feature.material,tbl_product_feature.water_proof,tbl_product_feature.capacity,tbl_product_feature.dimension,tbl_product_feature.weight,tbl_product_feature.description
			'
			);
			$this->db->from($this->tbl_product);
			$this->db->join($this->tbl_product_price,'tbl_product.product_id_pk=tbl_product_price.product_id_fk');
			$this->db->join($this->tbl_product_feature,'tbl_product.product_id_pk=tbl_product_feature.product_id_fk');
			$this->db->where('tbl_product.product_id_pk',$id);
			$query = $this->db->get();
	        $data = $query->result_object();
	        return $data;

		}
		/*Get product image by category*/
		public function getProImageById($id,$limit){
			$this->db->select('tbl_product_img.product_img_pk,tbl_product_img.product_id_fk,tbl_product_img.pro_image');
			$this->db->from($this->tbl_product_img);
			$this->db->where('tbl_product_img.product_id_fk',$id);
			if($limit > 0){
				$this->db->limit(1);
			}
			$query = $this->db->get();
			return $result 	=	$query->result_array();
		}
		/*Update Profile Code After Registration Created*/
		public function updateProduct($whereCondition,$tbl_name,$data){
			$this->db->where($whereCondition);
		$this->db->update($tbl_name,$data);
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