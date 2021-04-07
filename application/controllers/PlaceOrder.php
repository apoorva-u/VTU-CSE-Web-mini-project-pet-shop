<?php

/**
 *
 */
class PlaceOrder extends CI_Controller
{
	public function __construct()
	{
		// code...
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('PlaceOrderHandler');
		$this->load->model('CartHandler');

	}
    public function index()
    {
      // code...
      // code...
      $this->load->helper('url');
      $this->load->view('orderSuccessful');
    }

	public function place_order()
	{
		$data = $_POST['data'];
		$housename =  $_POST['housename'];
		echo print_r($housename);
		echo print_r($data);
		$email = $this->session->userdata('email');
		$result = $this->CartHandler->get_cart_item($email);
		$total = 0;
		foreach ($result as $val){
			$total+=$val->price;
		}
		$res = $this->PlaceOrderHandler->place_order($data,$total,$email,$housename);
		echo $res;

    }


}


 ?>
