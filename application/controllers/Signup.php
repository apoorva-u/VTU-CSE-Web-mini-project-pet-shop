<?php

/**
 *
 */

class Signup extends CI_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    // loading database
    $this->load->database();
    // loading modal
    $this->load->model('SignUpHandler');

  }


  public function index()
  {
    // code...
    $this->load->helper('url');
    if (strlen($this->session->userdata('email'))>0){
    	redirect(base_url('/pawsome/'));
	}
    else{
		$this->load->view('signup');
	}

  }
  public function handle_register()
  {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $result = $this->SignUpHandler->userexist($email);
    if((int)$result[0]->{'COUNT(email)'}>0){
		$res = "user exists";
	}
    else{
		 $this->SignUpHandler->saverecords($name,$email,$phone,$password);
		 $res = "successful";
		$this->session->set_userdata('email',$email);
	}


    echo $res;

  }

}


 ?>
