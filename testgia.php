<?php
/**
 * Copyright C2009G
 *
 * Trang thông tin sản phẩm.
 * @todo Bổ sung danh sách các tags lên giao diện html. Học từ bài viết post.
 */
// Cấu hình hệ thống
include_once 'configs.php';

// Thư viện hàm
include_once 'lib/table/table.product.php';
include_once 'lib/tool.image.php';

if (isset($_GET['product_id'])) 
{
	$product_id = (int)$_GET['product_id'];
} 
else 
{
	$product_id = 0;
}

// Thông tin sản phẩm đổ vào view html

// Nội dung riêng của trang...
$web_title = "Chi tiết sản phẩm";
$web_content = "view/view-test.php";

// ...được đặt vào bố cục chung của toàn site
include_once $web_layout;

// [Chú Ý] Vẫn nên triển khai controller cho các trang
// nếu viết tắt quá trong view bằng các hàm php thì e khi triển khai sang các
// theme mới sẽ không dễ.
// Hơn nữa, controller có nhiệm vụ làm những công việc chung nhau giữa các bộ themes.
?>
