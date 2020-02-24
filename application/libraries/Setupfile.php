<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setupfile {
  function send($number, $message){
      $ci = & get_instance();
      $data=array("username"=>'appletherapeutics@gmail.com',"hash"=>'apple2018!@#','apikey'=>'ga/zI07Aors-fW2EhcWzZIHOwu7bGH0qEeyJS5Ozs2');
      $sender  = "TXTLCL";
      $numbers = array($number);
      $ci->load->library('textlocal',$data);
      $response = $ci->textlocal->sendSms($numbers, $message, $sender);
      return $response;
  }
}
