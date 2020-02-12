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
			$result["news"]	=	$this->NewsModel->getNews();
			$result["getNewsType"]	=	$this->NewsModel->getNewsType();
			$this->load->view('index',$result);
		}
		public function fetch(){
			echo "hello";
		}
	}
?>