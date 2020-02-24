<?php 
/**
 * Product Model Hold Product Controller Details
 */
class ProductModel extends CI_Model
{
	protected $tbl_product 				=		"tbl_product";	
	protected $tbl_product_price 		=		"tbl_product_price";	
	protected $tbl_product_img 			=		"tbl_product_img";	
	protected $tbl_product_feature 			=		"tbl_product_feature";	
	function __construct()
	{
		parent::__construct();
	}

	 public function getRows($id){
      	$this->db->select('
			tbl_product.product_id_pk,
			tbl_product.brand_name,
			tbl_product.product_type,
			tbl_product.sku,
			tbl_product.color,
			tbl_product_price.product_id_fk,
			tbl_product_price.discount_price,
			tbl_product_img.product_id_fk,
			tbl_product_img.pro_image1,
			tbl_product_feature.product_id_fk,
			tbl_product_feature.ideal_for,
			tbl_product_feature.trolley_support,
			tbl_product_feature.laptop_sleeve,
			tbl_product_feature.rain_cover,
			tbl_product_feature.style_code,
			tbl_product_feature.material,
			tbl_product_feature.water_proof,
			tbl_product_feature.capacity,
			tbl_product_feature.dimension,tbl_product_feature.weight,tbl_product_feature.description
		')
		->from($this->tbl_product)
		->join($this->tbl_product_price,'tbl_product.product_id_pk=tbl_product_price.product_id_fk')
		->join($this->tbl_product_img,'tbl_product.product_id_pk=tbl_product_img.product_id_fk')
		->join($this->tbl_product_feature,'tbl_product.product_id_pk=tbl_product_feature.product_id_fk')
		->where("tbl_product.product_id_pk",$id);
        $query = $this->db->get();
        $result = $query->result_array();
        // Return fetched data
        return $result;
    }
}

?>