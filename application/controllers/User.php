<?php

class User extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->database();
    $this->load->model('UserHandler');

  }

  public function get_user_id()
  { 
    $this->load->helper('url');
    $mail = $_POST['mail'];
    $result = $this->UserHandler->get_user_id($mail);
    $data['value'] = $result;
    return $data['value'];
	  

  }

}
 ?>
