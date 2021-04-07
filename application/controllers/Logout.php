<?php

class Logout extends CI_Controller{
	public function index()
	{
		$this->session->unset_userdata('email');
		$this->session->sess_destroy();
		echo "success";
	}

}

?>
