<?php 
defined('BASEPATH') or exit ('No Direct script allow');
class Store extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('StoreModel');
		        // Load cart library
        $this->load->library('cart');

	}
	public function store()
	{
		$data["bags"]	=	$this->StoreModel->getBags();
		$this->load->view('store',$data);
	}
	public function addToCart($proId){
      // Fetch specific product by ID
      $product    = $this->StoreModel->getRows($proId);
      $product[]  = $this->input->post();

      $data = array(
         'id'             => $product['product_id_pk'],
         'qty'            => '1',
         'price'          => $product['discount_price'],
         'name'           => $product['product_type'],
         'image'          => $product['pro_image']
      );
      $this->cart->insert($data);
      // Redirect to the cart page
      base_url(redirect('cart/'));
  }
}

?>