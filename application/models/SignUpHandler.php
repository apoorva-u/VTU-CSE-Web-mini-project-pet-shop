<?php

/**
 *
 */
class SignUpHandler extends CI_Model{

	// function __construct(argument)
  // {
  //   // code...
  // }
  public function userexist($email)
  {
    // code...
    $query = "SELECT COUNT(email) from user WHERE email='$email'";
    $result =$this->db->query($query);

    return $result->result();
  }
  public function saverecords($name,$email,$phone,$password)
  {
    // code...
    $query = "INSERT INTO user(`email`, `name`, `ph_no`, `password`) VALUES('$email','$name', '$phone','$password')";
    $result  = $this->db->query($query);
    return $result;
  }
}
?>
