<?php 
	defined('BASEPATH') or exit ('No Direct Script Allow');
	/**
	 *  User Authenticate Controller
	 */
	class Authenticate extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$tbl_login = "tbl_login";
		}
		/*
			User Login Controller
		*/
		
		public function userLogin(){
			$this->load->view('client-login');
		}
	}
?>