<?php 
	defined('BASEPATH') or exit ('No direct script allow');
/**
 * Add to cart controller
 */
class Addtocart extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	public function index(){
		$this->load->view('add-cart');
	}
}
?>