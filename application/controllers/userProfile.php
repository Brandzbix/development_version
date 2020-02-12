<?php 
	defined('BASEPATH') or exit ('No Direct Script Allow');
	/**
	 * User Profile Controller 
	 */
	class userProfile extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		/*
			User Profile View
		*/
		public function index(){
			$this->load->view('user-profile');
		}
	}
?>