<?php
   defined('BASEPATH') or exit('No Direct Script allow');
   
   	class ProductController extends CI_Controller {
   		protected $tbl_product = "tbl_product";
   		protected $tbl_product_price = "tbl_product_price";
   		protected $tbl_product_feature = "tbl_product_feature";
   		function __construct() {
   			parent::__construct();
   			$this->load->model('admin/MenuModel');
   			$this->load->model('admin/ProductModel');
   
   		}
   	/**
   	 * Display a listing of the resource.
   	 */
   	public function index($rowno = 0) {
   		if(($this->session->userdata && isset($this->session->userdata['logged_in']))){
   			 # Pagination Search Part Start From Here
               $search_text = "";
               if ($this->input->post('submit') != NULL) {
                   $search_text = $this->input->post('search');
                   $this->session->set_userdata(array(
                       "search" => $search_text
                   ));
               } else {
                   if ($this->session->userdata('search') != NULL) {
                       $search_text = $this->session->userdata('search');
                   }
               }
               # Pagination Search Part Ends From Here
               $rowperpage = 10; # database rows showing on par page 10
               if ($rowno != 0) {
                   $rowno = ($rowno - 1) * $rowperpage; # 1 multiply by 10 = 10 data show pagination number click
               }
               // All records count
               $allcount                   = $this->ProductModel->getrecordCount($search_text);
               // Get records
               $users_record               = $this->ProductModel->getData($rowno, $rowperpage, $search_text);
               // Pagination Configuration
               $config['base_url']         = base_url() . 'admin/product/listing';
               $config['use_page_numbers'] = TRUE;
               $config['total_rows']       = $allcount;
               $config['per_page']         = $rowperpage;
               $config['cur_tag_open']     = '&nbsp;<a href="javascript:void(0);" style="background-color: #2169B1; color:#fff;">';
               $config['cur_tag_close']    = '</a>';
               $config['next_link']        = 'Next';
               $config['prev_link']        = 'Previous';
               // Initialize
               $this->pagination->initialize($config);
               $data['pagination'] = $this->pagination->create_links();
               $data['result']     = $users_record;
               $data['row']        = $rowno;
               $data['search']     = $search_text;
               $data['title']      = 'News | Blogs | Apple Therapeutics';
               // Load view
   			$data["left_menu"]		=		$this->MenuModel->adminleftmenu();
   			$data["title"]			=		"Product List";
               $this->load->view('admin/product/listing', $data);
   		}else{
   			redirect(base_url().'admin/');
   		}
   	}
   
   	/**
   	 * Show the form for creating a new resource.
   	 *
   	 */
   	public function create() {
   		if (($this->session->userdata && isset($this->session->userdata['logged_in']))):
   			$data['left_menu'] = $this->MenuModel->adminleftmenu();
   			$data['title'] = 'News | Blogs | Apple Therapeutics';
   			$this->load->view('admin/product/add', $data);
   		else:
   			redirect(base_url().'admin');
   		endif;
   	}
   
   	/**
   	 * Store a newly created resource in storage.
   	 */
   	public function store() {
   		
   
   
   
   		// foreach($_FILES["multiUploade"]["tmp_name"] as $key=>$tmp_name) {
   		// 	$getImgExtn     =   explode('.',$_FILES["multiUploade"]["name"][$key]);
   		//	$getImgExtn		= 	strtolower(end($getImgExtn));
   		//  $newFile		=	uniqid().'.'.$getImgExtn;
   		// 	$target         =   "assets/img/product/".$newFile;
     		// 	move_uploaded_file($_FILES["multiUploade"]["tmp_name"][$key],$target);
     		//	$dd = $_FILES["multiUploade"]["name"];
   		// 	$List = implode(',', $dd);
   		// }
   	
   		// print_r($List);
   	
   		// die();
   		if(($this->session->userdata && isset($this->session->userdata['logged_in']))){
   			$data 	=	$this->input->post();
   				/*Product table Array*/
   				$dataProduct	=	array(
   					'brand_name'	=>		$data['proName'],			
   					'product_type'	=>		$data['proType'],			
   					'sku'			=>		$data['proSku'],			
   					'color'			=>		$data['proColor']			
   				);
   				/*Store in prodcut table*/
   				$last_id = $this->ProductModel->insert($this->tbl_product,$dataProduct);
   				if($last_id > 0){
   						/*Calculate parcentage between to numbers*/
   						$lessPrice				=		$data['item_price']-$data['discount_price'];
   						$discountPrice 			=		$lessPrice/$data['item_price'];	
   						$parcentCount			=		100*$discountPrice;
   						$discountPercent		=		explode('.',$parcentCount);
   
   						/*Product Price Array*/
   						$dataPrice	=	array(
   							'product_id_fk'			=>		$last_id,			
   							'pro_price'				=>		$data['item_price'],			
   							'discount_price'		=>		$data['discount_price'],			
   							'total_discount'		=>		$discountPercent[0]			
   						);
   					/*Data insert into product price table*/
   					if($this->ProductModel->insert($this->tbl_product_price,$dataPrice) > 0){
   						/*Product Feture Data Array*/	
   						$dataFeture				=	array(
   							'product_id_fk'		=>		$last_id,			
   							'ideal_for'			=>		$data['idealFor'],			
   							'trolley_support'	=>		$data['trolleySupport'],			
   							'laptop_sleeve'		=>		$data['laptopSleeve'],			
   							'rain_cover'		=>		$data['rainCover'],			
   							'style_code'		=>		$data['styleCode'],			
   							'material'			=>		$data['material'],			
   							'water_proof'		=>		$data['waterProof'],			
   							'capacity'			=>		$data['capacity'],			
   							'dimension'			=>		$data['dimension'],			
   							'weight'			=>		$data['weight'],			
   							'description'		=>		$data['description']			
   						);
   						/*Store Data into tbl_product_price */
   						if($this->ProductModel->insert($this->tbl_product_feature,$dataFeture) > 0){
   							$imgList = array();
   							$output_dir = "assets/img/product/";/* Path for file upload */
   							foreach($_FILES["multiUploade"]["tmp_name"] as $key=>$tmp_name) {
   				  			 	$getImgExtn     =   explode('.',$_FILES["multiUploade"]["name"][$key]);
   							    $getImgExtn		= 	strtolower(end($getImgExtn));
   							    $newFile		=	uniqid().'.'.$getImgExtn;
   								$target         =   "assets/img/product/".$newFile;
   					        	// move_uploaded_file($_FILES["multiUploade"]["tmp_name"][$key],$target);
   					        	$dd = $_FILES["multiUploade"]["name"][$key];
   								if (!file_exists($output_dir . $last_id)){
									@mkdir($output_dir . $last_id, 0777);
								}
								move_uploaded_file($_FILES["multiUploade"]["tmp_name"][$key],$output_dir.$last_id."/".$dd);
   								$imgList 	=	implode(',',$_FILES["multiUploade"]["name"]);	

   							}  
   							$imageArrya 	=	array(
   				        		"product_id_fk"		=>	$last_id,
      				       		"pro_image1"		=> 	$imgList
   				        	);	
   							$this->ProductModel->insert('tbl_product_img',$imageArrya);
   							$response 	=	array(
   								"error"		=>	"success",
   								"message"	=>	"Product listed succssfully."
   							);
   							$this->session->set_flashdata('message', $response);
                    			$this->session->set_flashdata('alert-class', 'alert-success');
                   			redirect(base_url() . "admin/product/listing");
   						}
   					}
   				}
   				$response 	=	array(
   					"error"		=>	"faild",
   					"message"	=>	"Something went wrong."
   				);
   				$this->session->set_flashdata('message', $response);
    				$this->session->set_flashdata('alert-class', 'alert-danger');
   				redirect(base_url() . "admin/product/listing");
   		}else{
   			redirect(base_url().'admin');
   		}
   	}
   
   	/**
   	 * Display the specified resource.
   	 */
   	public function show($id) {
   		if(($this->session->userdata && isset($this->session->userdata["logged_in"]))){
   			$limit	=	0;
   			$data["result"]			=	$this->ProductModel->getProductDetails($id);
   			$data["proImg"]			=	$this->ProductModel->getProImageById($id,$limit);
   			$data["left_menu"]		=	$this->MenuModel->adminleftmenu();
   			$this->load->view('admin/product/show',$data);
   		}else{
   			redirect(base_url().'admin');
   		}
   	}
   
   	/**
   	 * Show the form for editing the specified resource.
   	 *
   	 * @param  \App\Photo  $photo
   	 * @return \Illuminate\Http\Response
   	 */
   	public function edit($id){
   		$limit = 1;
   		$data["left_menu"]		=	$this->MenuModel->adminleftmenu();
   		$data["result"]			=	$this->ProductModel->getProductDetails($id);
   		$data["proImg"]			=	$this->ProductModel->getProImageById($id,$limit);
   		$data["title"]			=	"Edit Product";
   		$this->load->view('admin/product/edit',$data);
   	}
   
   	/**
   	 * Update Product Data*/
   	public function update() {
   		if(($this->session->userdata && isset($this->session->userdata['logged_in']))){
   				$data 	=	$this->input->post();
   				/*Product table Array*/
   				$dataProduct	=	array(
   					'brand_name'	=>		$data['proName'],			
   					'product_type'	=>		$data['proType'],			
   					'sku'			=>		$data['proSku'],			
   					'color'			=>		$data['proColor']			
   				);
   				$whereCon = 'product_id_pk="'.$data["proId"].'"';
   				/*Store in prodcut table*/
   				$last_id = $this->ProductModel->updateProduct($whereCon,$this->tbl_product,$dataProduct);
   				if($last_id > 0){
   						/*Calculate parcentage between to numbers*/
   						$lessPrice				=		$data['item_price']-$data['discount_price'];
   						$discountPrice 			=		$lessPrice/$data['item_price'];	
   						$parcentCount			=		100*$discountPrice;
   						$discountPercent		=		explode('.',$parcentCount);
   						/*Product Price Array*/
   						$dataPrice	=	array(
   							'pro_price'				=>		$data['item_price'],			
   							'discount_price'		=>		$data['discount_price'],			
   							'total_discount'		=>		$discountPercent[0]			
   						);
   					$whereCon = 'product_id_fk="'.$data["proId"].'"';
   					/*Data insert into product price table*/
   					if($this->ProductModel->updateProduct($whereCon,$this->tbl_product_price,$dataPrice) > 0){
   						/*Product Feture Data Array*/	
   						$dataFeture				=	array(
   							'ideal_for'			=>		$data['idealFor'],			
   							'trolley_support'	=>		$data['trolleySupport'],			
   							'laptop_sleeve'		=>		$data['laptopSleeve'],			
   							'rain_cover'		=>		$data['rainCover'],			
   							'style_code'		=>		$data['styleCode'],			
   							'material'			=>		$data['material'],			
   							'water_proof'		=>		$data['waterProof'],			
   							'capacity'			=>		$data['capacity'],			
   							'dimension'			=>		$data['dimension'],			
   							'weight'			=>		$data['weight'],			
   							'description'		=>		$data['description']			
   						);
   						$whereCon = 'product_id_fk="'.$data["proId"].'"';
   					
   						/*Store Data into tbl_product_price */
   						if($this->ProductModel->updateProduct($whereCon,$this->tbl_product_feature,$dataFeture) > 0){
   							$response 	=	array(
   								"error"		=>	"success",
   								"message"	=>	"Product listed succssfully."
   							);
   							$this->session->set_flashdata('message', $response);
                    			$this->session->set_flashdata('alert-class', 'alert-success');
                   			redirect(base_url() . "admin/product/listing");
   						}
   					}
   				}
   				$response 	=	array(
   					"error"		=>	"faild",
   					"message"	=>	"Something went wrong."
   				);
   					$this->session->set_flashdata('message', $response);
   	 				$this->session->set_flashdata('alert-class', 'alert-danger');
   					redirect(base_url() . "admin/product/listing");
   		}else{
   			redirect(base_url().'admin');
   		}
   	}
   
   	/**
   	 * Remove the specified resource from storage.
   	 *
   	 * @param  \App\Photo  $photo
   	 * @return \Illuminate\Http\Response
   	 */
   	public function destroy($id) {
   		$whereCon = 'product_id_pk="'.$id.'"';
   		if($this->ProductModel->delete($whereCon,'tbl_product') > 0){
   			$whereCon = 'product_id_fk="'.$id.'"';
   			if($this->ProductModel->delete($whereCon,'tbl_product_price') > 0){
   				$whereCon = 'product_id_fk="'.$id.'"';
   				if($this->ProductModel->delete($whereCon,'tbl_product_feature') > 0){
   					$whereCon = 'product_id_fk="'.$id.'"';
   					if($this->ProductModel->delete($whereCon,'tbl_product_img') > 0){
   						$response 	=	array(
   							"error"		=>	"faild",
   							"message"	=>	"Something went wrong."
   						);
   						$this->session->set_flashdata('message', $response);
   		 				$this->session->set_flashdata('alert-class', 'alert-danger');
   						redirect(base_url() . "admin/product/listing");
   					}
   
   				}
   			}
   
   		}
   	}
   }
   ?>