<?php

class CartHandler extends CI_Model{
	public function get_cart_item($email)
	{
		$query = "
			SELECT
				c.user_email as email, p.product_name as product_name,
				p.product_image as image,p.description as description,p.price as price,
			    c.id as cart_id,p.id as product_id
		  	FROM
				cart as c
			INNER JOIN
				product as p
			ON
				p.id = c.product_id
			WHERE
				user_email = '$email'";
		$result =$this->db->query($query);
		return $result->result();
	}

	public function get_addresses($email)
	{
		$query = "SELECT * FROM address where user_email = '$email'";
		$result = $this->db->query($query);
		return $result->result();
	}

	public function remove_cart_item($id){
		$query = "DELETE FROM cart WHERE id = '$id'";
		$result = $this->db->query($query);
		return $result;
	}

	public function add_cart_item($user_email,$product_id)
	{
		$query = "INSERT INTO cart (user_email,product_id) VALUES ('$user_email','$product_id')";
		$result = $this->db->query($query);
		return $result;
	}
}

?>