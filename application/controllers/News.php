<?php 
	defined('BASEPATH') or exit ('No Direct script allow');
	class News extends CI_Controller
	{
		function __construct(){
			parent::__construct();
			$this->load->model('NewsModel');
			      $this->load->helper("common_helper");

		}
		/*
			Display listing of resource
		*/
		public function index(){
			$news 		=  $this->uri->segment(1);
			$subNews 	=  $this->uri->segment(2);
			$subNewsWithUrl 	=  $this->uri->segment(3);
			if(!empty($news) && empty($subNews)){ // Condition View for all news
				$this->load->view('news');
			}else if(!empty($news) && !empty($subNews) && empty($subNewsWithUrl)){ // Condition for news & sub news
				$data['category']	 =     lang_vise_static_fields('eng', 'news_category');
				foreach ($data['category'] as $key => $value) {
					if($subNews == $value["cate_name"]){
						$data["fetchHeadNews"]	=	$this->NewsModel->fetchHeadNews($value["news_type_id"]);
						$data["fetchNewsBySubcategory"]	=	$this->NewsModel->fetchNewsBySubcategory($value["news_type_id"]);
						$this->load->view('india',$data);
					}
				}
			}else if(!empty($news) && !empty($subNews) && !empty($subNewsWithUrl)){
				$newsHeading 			=	$this->uri->segment(3);
				$data["newsByUrl"]		=	$this->NewsModel->getNewsByPrettryUrl($newsHeading);
				$this->load->view("full-news",$data);
			}else{
				redirect(base_url().'news');
			}
		}
	}
?>