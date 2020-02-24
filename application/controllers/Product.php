<?php 
/**
 * 	Product Controller Holds Product Details
 */
class Product extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('ProductModel');
	}

	/*Get Product Details By Product Id*/
	public function index($id){
		$data["proDetails"]		=	$this->ProductModel->getRows($id);
		$this->load->view('e-com',$data);
	}
}

?>