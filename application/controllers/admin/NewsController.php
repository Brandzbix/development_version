<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class NewsController extends CI_Controller {
   protected $tbl_newsType = "tbl_news_type";
   protected $tbl_news = "tbl_news";
      public function __construct() {
        parent::__construct();
        $this->load->helper('string');
        $this->load->model('admin/MenuModel');
        $this->load->model('admin/NewsModel');
        $this->load->model('admin/QueryModel');
      }
   public function index($rowno = 0) {
      if (($this->session->userdata && isset($this->session->userdata['logged_in']))):
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
            $allcount                   = $this->NewsModel->getrecordCount($search_text);
            // Get records
            $users_record               = $this->NewsModel->getData($rowno, $rowperpage, $search_text);
            // Pagination Configuration
            $config['base_url']         = base_url() . 'admin/news/';
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
            $data['left_menu']  = $this->MenuModel->adminleftmenu();
            // Load view
            $this->load->view('admin/news/index', $data);
        else:
            redirect(base_url().'admin');
        endif;
   }

   /*
   @  Show the form for creating new resource
   */
   public function create(){
      if($this->session->userdata && isset($this->session->userdata["logged_in"])):
      $data['left_menu']       =    $this->MenuModel->adminleftmenu();
      $data["newsType"]        =     $this->NewsModel->getNewsType($this->tbl_newsType);
      $data["title"]          =     "Add News | Brandzbix";
      $this->load->view('admin/news/add',$data);
   else:
      redirect(base_url().'admin');
   endif;
   }
   /*
   @@@ Store newly create resource in storage
   */
   public function store(){
      $data             =  $this->input->post();
      $newsStatus = array(
         "topNews"       =>    $data["topNews"],
         "latestNews"    =>    $data["latestNews"],
         "suggestedNews" =>    $data["suggestedNews"]
      );
      $statusJson       =      json_encode($newsStatus);
      $title            =  strip_tags(($data["newsTitle"]));
      $titleURL         =  strtolower(url_title($title));
      $file_extention   =  pathinfo($_FILES['newsImage']['name'],PATHINFO_EXTENSION);
      $allow_image_path = array("png","jpg","jpge");

      if(!file_exists($_FILES["newsImage"]["tmp_name"])){
         $response = array(
            "type"      =>  "error",
            "message"   =>  "choose file to upload"
         );

      }else if(!in_array($file_extention, $allow_image_path)){
         $response      =  array(
            "type"      =>  "error",
            "message"   =>  "Upload valid format.  Only PNG and JPEG are allowed."
         );
      }else if($_FILES["newsImage"]["size"] > 2000000){
         $response   =  array(
            "type"      =>  "error",
            "message"   =>  "Size exceeds 2MB"
         );
      }else{
         $getImgExtension = explode(".",$_FILES["newsImage"]["name"]);
         $fileName   =  random_string('alnum',20).'.'.$getImgExtension[1];
         $path       = './assets/img/news/'.$fileName;
        if (move_uploaded_file($_FILES["newsImage"]["tmp_name"],$path)) {
            $dataArray     =     array(
               "news_type"       =>    $data["newsType"],
               "pretty_url"      =>    $titleURL,
               "news_heading"    =>    $data["newsTitle"],
               "news_description"=>    trim($data["newsDesc"]),
               "news_picture"    =>    $fileName,
               "news_flags"      =>    $statusJson,
               "create_date"     =>    date('Y-m-d H:i:s')
            );
            $this->NewsModel->store($this->tbl_news,$dataArray);
               $response = array(
                  "type" => "success",
                  "message" => "Data submitted successfully."
               );
         }else{
            $response = array(
              "type" => "error",
              "message" => "Problem in uploading image files."
            );
         }
         $this->session->set_flashdata('message',$response);
         $this->session->set_flashdata('alert-class','alert-success');
         redirect(base_url() . "admin/news");
      }
   }
   /*
    @@ Display the specified resource
   */
    public function show(int $id){
        if($this->session->userdata && isset($this->session->userdata['logged_in'])):
            $data['title']          =   'Show news details | Brandzbix';
            $data['left_menu']      =   $this->MenuModel->adminleftmenu();
            $data['result']         =   $this->NewsModel->getNewsById($id);
            $this->load->view('admin/news/show',$data);
        else:
            redirect(base_url().'admin');
        endif;
    }
    /*
    @@ Show the form for editing the specified resource.
    */
    public function edit(int $id){
        $data["title"]          =     "Edit news | Brandzbix";
        $data['result']         =   $this->NewsModel->getNewsById($id);
        $data["newsType"]        =     $this->NewsModel->getNewsType($this->tbl_newsType);

        $data["left_menu"]      =     $this->MenuModel->adminleftmenu();
        $this->load->view('admin/news/edit',$data);
    }
    /*
    @@  Update the specified resource in storage.
    */
    public function update(){
        if($this->session->userdata && isset($this->session->userdata['logged_in'])):
            $data   =   $this->input->post();
            $newsStatus = array(
               "topNews"       =>    $data["topNews"],
               "latestNews"    =>    $data["latestNews"],
               "suggestedNews" =>    $data["suggestedNews"]
            );
            $statusJson       =      json_encode($newsStatus);
            /*@@if news image is not exist or image is new*/
            if(!empty($_FILES["newsImage"]["name"])){
               $getFileExtention    =   pathinfo($_FILES["newsImage"]["name"],PATHINFO_EXTENSION);
                $allowExtention     =   array("jpg","png","jpge");
                if(!in_array($getFileExtention,$allowExtention)){
                   $response    =   array(
                        "type"      =>  "error",
                        "message"   =>  "Upload valid format. Only PNG,PDF,DOCs and JPEG are allowed."
                   );
                }else if($_FILES["newsImage"]["size"] > 2000000){
                    $response       =   array(
                        "type"      =>  "error",
                        "message"   =>  "Image size exceeds 2MB" 
                    );
                }else{
                    /*@@if news image is already exist*/
                    $removeTarget   =  'assets/img/news/'.$data["existImage"];
                    if(unlink($removeTarget) == true){ // Remove old file and update new
                        $getImgExtn     =   explode('.',$_FILES["newsImage"]["name"]);
                        $fileImgAdd     =    random_string('alnum',20).'.'.$getImgExtn[1];
                        $target         =   "assets/img/news/".$fileImgAdd;
                        if(move_uploaded_file($_FILES["newsImage"]["tmp_name"],$target)){
                           $update      =   array(
                              "news_type"       =>    $data["newsType"],
                              "pretty_url"      =>    strtolower(url_title($data["newsTitle"])),
                              "news_heading"    =>    $data["newsTitle"],
                              "news_description"=>    trim($data["newsDesc"]),
                              "news_picture"    =>    $fileImgAdd,
                              "news_flags"      =>    $statusJson,
                              "create_date"     =>    date('Y-m-d H:i:s') 
                           );
                        if($this->NewsModel->updateNews($data["newId"],$update)){
                           $response       =   array(
                                 "type"      =>  "success",
                                 "message"   =>  "News update successfully" 
                             );
                           }  
                        }
                    }
                }
            }else{
                $update    =   array(
                  "news_type"       =>    $data["newsType"],
                  "pretty_url"      =>    strtolower(url_title($data["newsTitle"])),
                  "news_heading"    =>    $data["newsTitle"],
                  "news_description"=>    trim($data["newsDesc"]),
                  "news_picture"    =>    $data["existImage"],
                  "news_flags"      =>    $statusJson,
                  "create_date"     =>    date('Y-m-d H:i:s') 
                );
               if($this->NewsModel->updateNews($data["newId"],$update)){
                    $response       =   array(
                           "type"      =>  "success",
                           "message"   =>  "News update successfully" 
                        );
                     }  
                }
            $this->session->set_flashdata('message',$response);
            $this->session->set_flashdata('alert-class','alert-'.$response["type"]);
            redirect(base_url() . "admin/news");
        endif;
    }
    /*
        @@ Remove specified resource from the storage
    */
    public function destroy(int $id){
        if($this->NewsModel->delete($id)){
            $response = array(
                "type"              =>      "danger",
                "message"           =>      "Record delete succssfully"    
            );
        }
        $this->session->set_flashdata('message',$response);
        $this->session->set_flashdata('alert-class','alert-'.$response["type"]);
        redirect(base_url().'admin/news');
    }
}
