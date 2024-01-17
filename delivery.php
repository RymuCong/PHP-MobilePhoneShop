<?php 
/**
 * Copyright C2009G
 *
 * Trang Liên Hệ (góp ý, phản hồi, khiếu nại, hẹn gặp)
 */
// Cấu hình hệ thống
include_once 'configs.php';



//if ( $_SERVER['REQUEST_METHOD'] == "POST" && validateContact())  
$web_content = "view/view-delivery.php";

// Nội dung riêng của trang...
$web_title = "Thông tin giao hàng";

// ...được đặt vào bố cục chung của toàn site.
include_once $web_layout;