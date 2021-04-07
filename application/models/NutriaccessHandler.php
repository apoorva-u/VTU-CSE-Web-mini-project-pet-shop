<?php

/**
 *
 */
class NutriaccessHandler extends CI_Model{

	// function __construct(argument)
	// {
	//   // code...
	// }
	public function get_product_details()
	{
		// code...
		$query = "SELECT * from product where  product_category='nutriaccess'";
		$result =$this->db->query($query);

		return $result->result();
	}
	public function get_nutri()
	{
		$query = "SELECT * from product where  product_category='nutriaccess' and sub_category='food'";
		$result =$this->db->query($query);

		return $result->result();
	}
	public function get_accessories()
	{
		$query = "SELECT * from product where  product_category='nutriaccess' and sub_category='access'";
		$result =$this->db->query($query);

		return $result->result();
	}

}




?>
