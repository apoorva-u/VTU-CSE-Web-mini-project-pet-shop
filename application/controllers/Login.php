<?php

/**
 *
 */
class Login extends CI_Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('LoginHandler');

	}
	public function index()
	{
		// code...
		$this->load->helper('url');
		if (strlen($this->session->userdata('email'))>0){
			redirect(base_url('/pawsome/'));
		}
		else{
			$this->load->view('login');
		}
	}

	public function handle_login()
	{
		// code...
//    $data = json_decode($this->input->raw_input_stream,true);
		$email = $_POST['email'];
		$password = $_POST['password'];
		$result = $this->LoginHandler->userexist($email);
		if(empty($result)){
			$res = "user  does not exist";
		}
		else{
			if($result[0]->password==$password){
				$res = "matched";
				$this->session->set_userdata('email',$email);
			}
			else{
				$res="incorrect password";
			}
		}
		echo $res;

	}
}
?>
