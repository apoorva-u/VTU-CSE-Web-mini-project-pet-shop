<?php

class UserHandler extends CI_Model{

  public function get_user_id($mail)
  {
    
    $query = "SELECT id from user WHERE email='$mail'";
    $result =$this->db->query($query);
    
    return $result->result()[0]->id;
  }
}
?>
