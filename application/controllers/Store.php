<?php 
	defined('BASEPATH') or exit ('No Direct script allow');
	class Store extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		public function store()
		{
			$this->load->view('store');
		}
	}

?>