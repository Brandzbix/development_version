<?php
defined('BASEPATH') or exit('No Direct Script allow');
/**
 * Product Controller
 */
class ProductController extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('admin/MenuModel');
	}
	/**
	 * Display a listing of the resource.
	 */
	public function index() {
		//
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
			echo "sdad";
		endif;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function show(Photo $photo) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Photo $photo) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Photo $photo) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Photo  $photo
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Photo $photo) {
		//
	}
}
?>