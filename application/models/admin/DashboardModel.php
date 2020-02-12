<?php 
	defined('BASEPATH') or exit ('No Direct Script Allow');
	/**
	 * Dashboard Model
	 */
	class DashboardModel extends CI_Model
	{
		function __construct()
		{
			parent::__construct();
		}
		public function getAllProductCount(){
			// $query = $this->db->query("SELECT count(product_id_pk) as total_products FROM products");
			// $result	=	$query->row_array();
			// if(sizeof($result)>0):
			// 	return $result['total_products'];
			// else:
			// 	return '';
			// endif;
		}
	}
?>