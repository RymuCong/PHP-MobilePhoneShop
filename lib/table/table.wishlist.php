<?php

function wishlistadd($pid , $cusid){

	// $customer_id  = (int)$data['customer_id'];
	// $product_id = (int)$data['product_id'];
				// $product_id = (int)$data['product_id']; 
				// $customer_id = (int)$data['customer_id'];	 	 	 
				$sql = " 
						INSERT INTO `wishlist` 
						SET  
							customer_id = '{$cusid}', 
							product_id = '{$pid}'
					";
		db_q($sql);
	$wishlist_id = db_lastID();
	return $wishlist_id;
}

function testlogin(){
	if(!isset($_SESSION['CUS_LOGGED'])){
		header("location: /login.php");
	}
}