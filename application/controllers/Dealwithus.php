<?php 
	defined('BASEPATH') or exit ('No Direct script allow');
	class Dealwithus extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		public function dealwithus()
		{
		$this->load->view('dealwithus');
		}
	}

?>