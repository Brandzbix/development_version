<?php 
	defined('BASEPATH') or exit ('No Direct script allow');
	class News extends CI_Controller
	{
		function __construct(){
			parent::__construct();
		}
		/*
			Display listing of resource
		*/
		public function index(){
			$this->load->view('news');
		}

		
	}
?>