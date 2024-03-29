<?php

/**
 * Copyright C2009G
 *
 * Trang thêm sản phẩm vào mục so sánh
 */
// Cấu hình hệ thống
include_once 'configs.php';
include_once 'lib/table/table.wishlist.php';
include_once 'cart.js';

$customer_id = isset($_SESSION['CUS_LOGGED']);
if(isset($_SESSION['CUS_LOGGED'])){

    include_once 'lib/table/table.product.php';
    include_once 'product-wishlist-session.php';
    include_once 'lib/table/table.wishlist.php';
    
    /*
     Luồng chương trình: user bấm vào nút 'So Sánh Sản Phẩm' trên giao diện html
     --> class.cart.js
     --> wishlist {add: }
     --> product-wishlist-add.php ---> cart.php, view-cart.php
     */
    
    // dữ liệu json hất về phía trình duyệt khách.
    $json = array();
    
    // Bắt id của sản phẩm mới thêm vào giỏ hàng
    // (gửi lên từ ajax post)
    if (isset($_POST['product_id']))
    {
        $product_id = (int)$_POST['product_id'];
    }
    else
    {
        $product_id = 0;
    }
    $sqlcheckdata = "SELECT COUNT(*) FROM `wishlist` WHERE `customer_id` = '{$customer_id}' AND `product_id` = '{$product_id}'";
    $checkdata = db_one($sqlcheckdata);
    $product_info = productById($product_id);
    
    if ($product_info)
    {
        
        if (!$json)
        {
            // Thêm mới sản phẩm vào mục so sánh.
            // productWishlistAdd($product_id);
            if($checkdata == 0 ){
            wishlistadd($product_id , $customer_id);
            
            // Gửi thông báo thành công sang bên view
            $json['success'] = sprintf("Bạn đã thêm thành công %s vào mục <a href=\"/product-wishlist.php\">Wishlist</a>.", $product_info['name']);
            
            // đoạn text hiển thị số sản phẩm trong giỏ hàng và tổng giá trị của chúng
            // $json['total'] = productWishlistCountProducts();
            }
            else {
                $json['success'] = sprintf("%s đã có trong mục <a href=\"/product-wishlist.php\">Wishlist</a>.", $product_info['name']);
            }
        }
        else
        {
            $json['redirect'] = '/product-info.php?product_id='.$_POST['product_id'];
        }
    }
    
    header("Content-Type: application/json;charset=UTF-8");
    echo json_encode($json);
}
