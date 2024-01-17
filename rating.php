<?php
/**
 * Copyright C2009G
 *
 * Trang đăng kí tài khoản khách hàng
 */
// Cấu hình hệ thống
include_once 'configs.php';

// Thư viện hàm
include_once 'lib/table/table.product.php';
include_once 'lib/table/table.customer.php';
include_once 'account-validate.php';
// include_once 'product-info.php';

if (!isset ($_SESSION['CUS_LOGGED']))
	header ("location: /login.php");

$rating_table = array();

$rating_table['customer_id']       = isset($_SESSION['CUS_LOGGED']) ? $_SESSION['CUS_LOGGED'] : 0;
$rating_table['rating'] = $_POST['rating'];
$rating_table['product_id'] = $_POST['product_id'];
     

$rating_id = RatingAdd($rating_table);

header ("location: /product-info.php?product_id=".$_POST['product_id']);
?>