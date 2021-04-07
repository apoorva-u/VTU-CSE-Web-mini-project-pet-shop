<?php

/**
 *
 */
class Nutriaccess extends CI_Controller
{

	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('NutriaccessHandler');

	}
	public function index()
	{
		// code...
		$this->load->helper('url');
		$result = $this->NutriaccessHandler->get_product_details();
		$data['value'] = $result;
		$this->load->view('Nutriaccess',$data);
	}
}


?>
