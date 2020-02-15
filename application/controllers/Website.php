<?php 
	defined('BASEPATH') or exit ('No Direct script allow');
	class Website extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('NewsModel');
		}
		public function index()
		{
			
			$result["trendingNews"]	=	$this->NewsModel->getTrendingNews();
			$this->load->view('index',$result);
		}
		public function fetch(){
			echo "hello";
		}
	}
?>