<?php

/**
 *
 */

class Address extends CI_Controller
{
  public function __construct()
  {
    // code...
    parent::__construct();
    // loading database
    $this->load->database();
    // loading modal
    $this->load->model('AddressHandler');

  }
  public function index()
  {
    // code...
    $this->load->helper('url');
    $this->load->view('address');
}  
  public function add_address()
  {
    echo "posted....";
    $mail = $_POST['mail'];
    $housename = $_POST['housename'];
    $street = $_POST['street'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $district = $_POST['district'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    echo "sent to handler";
    $result = $this->AddressHandler->add_address($mail, $housename, $street, $area, $city, $district, $state, $country);
  }

}
?>
