<?php
/**
 * Copyright C2009G
 *
 * Trang so sánh sản phẩm
 */
// Cấu hình hệ thống
include_once 'configs.php';
if(!isset($_SESSION['CUS_LOGGED'])){
    header('location: /login.php');
}else{
// Thư viện hàm
include_once 'lib/table/table.category.php';
include_once 'lib/table/table.product.php';
include_once 'lib/tool.image.php';
include_once 'product-wishlist-session.php';

include_once 'lib/table/table.wishlist.php';


//echo 'hello boy';
if (isset($_REQUEST['remove'])) {
    productWishlistRemove($_REQUEST['remove']);
}

$wishlist_products = productWishlistGetProductsWithFormat();
$customer_id = isset($_SESSION['CUS_LOGGED']);

// foreach($wishlist_products as $pro){
//     wishlistadd($pro['product_id'] , $customer_id);
// }

// Nội dung riêng của trang...
$web_title = 'So Sánh Sản Phẩm';
$web_content = "view/view-wishlist.php";

// ...được đặt vào bố cục chung của toàn site.
include_once $web_layout;	
					
}
