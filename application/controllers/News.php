<?php 
	defined('BASEPATH') or exit ('No Direct script allow');
	class News extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('NewsModel');
		}
		/*
			Display listing of resource
		*/
		public function index(){
			$this->load->view('news');
		}
		/*
			Display listing of resource
		*/
		public function india(){
			$this->load->view('india');
		}
		public function international(){
			$this->load->view('international');
		}
		public function business(){
			$this->load->view('business');
		}
		public function entertainment(){
			$this->load->view('entertainment');
		}
		public function tech(){
			$this->load->view('tech');
		}
		public function sports(){
			$this->load->view('sports');
		}
		/*
			Full News
		*/
		public function trending(){
			$newsHeading 			=	$this->uri->segment(2);
			$data["newsByUrl"]		=	$this->NewsModel->getNewsByPrettryUrl($newsHeading);
			$this->load->view("full-news",$data);
		}

		
	}
?>