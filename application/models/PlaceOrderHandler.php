<?php

class PlaceOrderHandler extends CI_Model{
	public function place_order($data,$total,$email,$housename)
	{
		$date =  date("Y-m-d");
		$query = "INSERT INTO order_detail (order_date,total,user_email,house_name) VALUES ('$date','$total','$email','$housename')";
		$this->db->query($query);
		$insert_id = $this->db->insert_id();
//		echo $insert_id;
		$data_arr = array();
		foreach ($data as $row){
			$cart_id = $row['cart_id'];
			$r_query = "DELETE FROM cart WHERE id = '$cart_id'";
			$this->db->query($r_query);
			$order_total =$row['price'];
			$img = $row['image'];
			$product_id = $row['product_id'];
			$product_name = $row['product_name'];
			$data_arr[] = "($insert_id,$order_total,$product_id,'$product_name','$img')";
		}
		$query1 = "INSERT INTO order_items (order_id,price,product_id,product_name,product_img) VALUES ";
		$query1.=implode(',',$data_arr);
		$res =  $this->db->query($query1);
		return $res;
	}
}

?>
