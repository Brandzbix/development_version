<?php
	defined('BASEPATH') or exit ('No direct script allow');
	/**
	 * Client Order Controller
	 */
	class Myorders extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index(){
			$this->load->view('myorder');
		}

		/*@@
			Return Product Method
		@@*/
		public function returnProduct(){
			$this->load->view('return-product');
		}
	}
?>