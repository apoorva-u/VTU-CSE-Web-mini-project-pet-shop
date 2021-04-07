<?php
class Cart extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		// loading database
		$this->load->database();
		// loading modal
		$this->load->model('CartHandler');
	}

	public function index()
	{
		$this->load->helper('url');
		if (!(strlen($this->session->userdata('email'))>0)){
			redirect(base_url('/pawsome/'));
		}
		else{
			$email = $this->session->userdata('email');
			$result = $this->CartHandler->get_cart_item($email);
			$total = 0;
			foreach ($result as $val){
				$total+=$val->price;
			}
			$result_addresses = $this->CartHandler->get_addresses($email);
			$data['values'] = ['res'=>$result,'total'=>$total,'addresses'=>$result_addresses];
			$this->load->view('cart',$data);
		}

	}

	public function remove_cart_item()
	{
		$id = $_POST['id'];
		$res = $this->CartHandler->remove_cart_item($id);
		index();
		$email = $this->session->userdata('email');
		$result = $this->CartHandler->get_cart_item($email);
		$total = 0;
		foreach ($result as $val){
				$total+=$val->price;
		}
		echo $total;
	}

	public function add_cart_item()
	{
		$id = $_POST['id'];
		$email = $this->session->userdata('email');
		$res = $this->CartHandler->add_cart_item($email,$id);
		echo $res;
	}
}

?>
