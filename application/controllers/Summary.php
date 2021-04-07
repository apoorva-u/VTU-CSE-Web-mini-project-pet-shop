<?php

/**
 *
 */
class Summary extends CI_Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('SummaryHandler');

	}

	public function index()
	{
		// code...
		$this->load->helper('url');
		if (!(strlen($this->session->userdata('email'))>0)){
			redirect(base_url('/pawsome/'));
		}else{

			$email = $this->session->userdata('email');
			$res = $this->SummaryHandler->get_order_list($email);
			$data['values'] = $res;
			$this->load->view('summary',$data);
		}

	}

}


?>
