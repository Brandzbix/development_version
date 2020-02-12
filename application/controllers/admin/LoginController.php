<?php 
	/**
	 * Home Page Controller
	 */
	class LoginController extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('admin/LoginModel');
			$this->load->model('admin/MenuModel');
			$this->load->model('admin/DashboardModel');
			$this->load->library('session');
		}
		# login page view
		public function loginView()
		{
			if(($this->session->userdata && isset($this->session->userdata['logged_in']))):
				$data['title'] =  'Dashboard | Brandbix';
				$data['left_menu']		 = $this->MenuModel->adminleftmenu();
				$data['total_products']	 = $this->DashboardModel->getAllProductCount();
				$this->load->view('admin/dashboard',$data);
			else:
				$this->load->view('admin/index');
			endif;
		}
		/*Create new account html view*/
		public function newAccount()
		{
			$this->load->view('admin/create-new-account');
		}
		/*Do Register New Account into database*/
		public function doRegister(){
			$data			=	$this->security->xss_clean($this->input->post());
			$tbl_name		=	"tbl_admin_login";
			$felidName		=	array("email");
			$where			=	array('email'=>$data['email']);
			$data 			=  $this->LoginModel->getRow($felidName,$tbl_name,$where);
			/*Here we check email is already exist*/
			if($data > 0):
				$response = array(
					"message"	=>	"This email is already exits !"
				);
				
	      	else:
	      		if($this->input->post('password') != $this->input->post('cpassword')){
		      			$response = array(
						"message"	=>	"Password not match!"
					);
	      		}else{
	     			$salt                         = sha1(rand());
		            $salt                         = substr($salt, 0, 10);
		            $encrypted_password           = base64_encode(sha1($this->input->post('cpassword') . $salt, true) . $salt);
					/*Here we created registration*/
					$arrayRegister = array(
						'email'				=> 		strip_tags($this->input->post('email')),
						'password'			=>		strip_tags($encrypted_password),
						'salt'				=>		strip_tags($salt),
						'create_date'		=>		date('Y-m-d h:i:s', time()),
						'ip'		=>		$this->input->ip_address()
					);
					$data	=	$this->LoginModel->RegisterStore('tbl_admin_login',$arrayRegister);
					if($data > 0){
						$response = array(
							"message"	=>	"Account create successfully"
						);
						$this->session->set_flashdata('message',$response);
    					$this->session->set_flashdata('alert-class','alert-success');
						redirect(base_url(). 'admin');						
					}
	      		}
	   		 endif;
	    	 	$this->session->set_flashdata('message',$response);
    			$this->session->set_flashdata('alert-class','alert-danger');	
    		    redirect(base_url(). 'admin/create-new-account');
		}
		# admin login authontication
		public function loginAuthontication()
		{

			$email 		=	$this->security->xss_clean($this->input->post('email'));
            $password 	=	$this->security->xss_clean($this->input->post('password'));
			$data['login_result'] = $this->LoginModel->doLogin($email);

			if($data['login_result'] == true){
				$userInfo =	$data['login_result'];
				// Encrypt User Password to verify the password
              $salt                = $userInfo->salt;
              $encrypted_password  = $userInfo->password;
              $hash                = base64_encode(sha1($password . $salt, true) . $salt); 
             // check for password equality
           if ($encrypted_password == $hash) {
               	$userData = array(
					'admin_login_id_pk'	=>		$userInfo->admin_login_id_pk,
					'email'				=>		$userInfo->email
					);
            	$this->session->set_userdata('logged_in', $userData);
       			redirect(base_url(). 'admin/dashboard');
				}else{
					$response = array(
                  'message'      => 'Your password is incorrect'
              	);
				}
    		}else{
    			$response = array(
              'message'      => 'Your email is incorrect'
            );
    		}
    		$this->session->set_flashdata('message',$response);
    		$this->session->set_flashdata('alert-class','alert-danger');		
			redirect(base_url().'admin/');

		}
		public function dashboard()
		{
			if(($this->session->userdata && isset($this->session->userdata['logged_in']))):
				$data['title'] =  'Dashboard | Apple Therapeutics';
				$data['left_menu']		 = $this->MenuModel->adminleftmenu();
				$data['total_products']	 = $this->DashboardModel->getAllProductCount();

				$this->load->view('admin/dashboard',$data);
			else:
				redirect(base_url().'admin');
			endif;
		}
		public function logout(){
		$sess_array = array(
					'login_id_pk'	=>		'',
					'first_name'	=>		'',
					'last_name'		=>		'',
					'email'			=>		''
				);
		$response	=	array(
			'message'	=>	'Logout Successfully'
		);
		$this->session->unset_userdata('logged_in', $sess_array);
		$this->session->unset_userdata('newsiteid');
		$this->session->set_flashdata('message',$response);
   		$this->session->set_flashdata('alert-class', 'alert-success');
		redirect(base_url().'admin/');
		}
	}
?>