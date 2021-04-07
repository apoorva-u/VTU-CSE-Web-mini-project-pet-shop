<?php

/**
 *
 */
class PetAdoptionHandler extends CI_Model{

	// function __construct(argument)
	// {
	//   // code...
	// }
	public function get_product_details()
	{
		// code...
		$query = "SELECT * from product where  product_category='pet-adoption' ";
		$result =$this->db->query($query);

		return $result->result();
	}
	public function filter($subtype)
	{	
		
		$query = "SELECT * from product where product_category = 'pet-adoption' and sub_category = '$subtype'";
		$result = $this->db->query($query);
		return $result->result();
	}
	
}

?>
