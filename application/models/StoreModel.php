<?php 
	defined('BASEPATH') or exit ("No direct script allow");
/**
 * 
 */
class StoreModel extends CI_Model
{
	protected $tbl_product 				=		"tbl_product";	
	protected $tbl_product_price 		=		"tbl_product_price";	
	protected $tbl_product_img 		=		"tbl_product_img";	
	function __construct()
	{
		parent::__construct();
	}

	public function getBags(){
		$this->db->select('
		tbl_product.product_id_pk,tbl_product.brand_name,tbl_product.product_type,tbl_product_price.product_id_fk,tbl_product_price.discount_price,tbl_product_img.product_id_fk,tbl_product_img.pro_image1
		')
		->from($this->tbl_product)
		->join($this->tbl_product_price,'tbl_product.product_id_pk=tbl_product_price.product_id_fk')
		->join($this->tbl_product_img,'tbl_product.product_id_pk=tbl_product_img.product_id_fk')
		->limit('8')
		->group_by('product_id_pk');
		$query = $this->db->get();
		return $query->result_array();

	}

	  public function getRows($id = ''){
      	$this->db->select('
			tbl_product.product_id_pk,tbl_product.brand_name,tbl_product.product_type,tbl_product_price.product_id_fk,tbl_product_price.discount_price,tbl_product_img.product_id_fk,tbl_product_img.pro_image1
		')
		->from($this->tbl_product)
		->join($this->tbl_product_price,'tbl_product.product_id_pk=tbl_product_price.product_id_fk')
		->join($this->tbl_product_img,'tbl_product.product_id_pk=tbl_product_img.product_id_fk');
       
        if($id){
            $this->db->where('tbl_product.product_id_pk', $id);
            $query = $this->db->get();
            $result = $query->row_array();
        }else{
            $this->db->order_by('tbl_product.product_id_pk', 'asc');
            $query = $this->db->get();
            $result = $query->result_array();
        }
        
        // Return fetched data
        return !empty($result)?$result:false;
     }

}

?>