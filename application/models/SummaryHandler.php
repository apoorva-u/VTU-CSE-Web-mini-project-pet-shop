<?php

class SummaryHandler extends CI_Model{
	public function get_order_list($email)
	{
		$query1 = "SELECT id FROM order_detail where user_email = '$email' ORDER BY id DESC ";
		$order_id_list = $this->db->query($query1)->result();
		$query = "
			SELECT
				o.user_email as email,o.order_date as order_date,o.total as total,
			    ol.price as price,ol.product_id as p_id,ol.product_name as product_name,
			    ol.product_img as image,o.id as order_id,o.house_name as housename  
		  	FROM
				order_detail as o
			INNER JOIN
				order_items as ol
			ON
				o.id = ol.order_id
			WHERE
				user_email = '$email'
		";
		$res = $this->db->query($query);
		$o_list = $res->result();
		$orders = array();
		foreach ($order_id_list as $val){
			$orders[$val->id]=[];
			foreach ($o_list as $product){
				if($product->order_id== $val->id){
					array_push($orders[$val->id],$product);
				}
			}
		}
		return $orders;
	}
}


?>
