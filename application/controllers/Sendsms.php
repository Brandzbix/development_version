<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sendsms extends CI_Controller {
 	
	public function __construct(){
		parent::__construct();
		$this->load->library('setupfile');
	}
    function index()
    {
		$this->load->library('setupfile');
		$this->setupfile->send("9999138810", "Hello there this is message");
    }
    function contactus(){
    	$this->load->view('contact-us');
    }
    public function storeContact(){
    	$phone = $this->input->post('phone');
		// Account details
		$apiKey = urlencode('poh8x7Trw7U-5tLRXRCvdBe6BvmiVj4yjaa6qPOAdQ	');
		// Message details
		$numbers = array('9999138810');
		$sender 	= urlencode('TXTLCL');
		$message = rawurlencode('2566');
		 
		$numbers = implode(',', $numbers);
		 
		// Prepare data for POST request
		$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
		// Send the POST request with cURL
		$ch = curl_init('https://api.textlocal.in/send/');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$response = curl_exec($ch);
		curl_close($ch);
		// Process your response here
		echo $response;

	}
}

