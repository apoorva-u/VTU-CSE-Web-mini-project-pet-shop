<?php

/**
 *
 */
class PetAdoption extends CI_Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('PetAdoptionHandler');

	}

	public function index()
	{
		// code...
		$this->load->helper('url');
		$result = $this->PetAdoptionHandler->get_product_details();
		$data['value'] = $result;
		$this->load->view('petAdoption',$data);
	}
	public function filter()
	{
		$this->load->helper('url');
		$subtype = $_POST['subtype'];
		$result = $this->PetAdoptionHandler->filter($subtype);
		$data['value'] = $result;
		$this->load->view('petAdoption',$data);
	}
	
}


?>
