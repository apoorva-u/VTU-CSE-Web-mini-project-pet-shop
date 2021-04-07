<?php

class AddressHandler extends CI_Model{

  public function add_address($mail, $housename, $street, $area, $city, $district, $state, $country)
  {
    echo $mail.' '.$housename;
    $address = $street.', '.$area.', '.$city.', '.$district.', '.$state.', '.$country;
    $query = "INSERT INTO address VALUES('', '$mail','$housename','$address')";
    $result  = $this->db->query($query);
    return $result;
  }
}
?>