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
			/*How many records fetch from database using query*/
			$numResult = "4";
			$result["trendingNews"]	=	$this->NewsModel->getAllRecord($numResult);
			$this->load->view('index',$result);
		}
		public function fetch(){
			echo "hello";
		}
	}
?>