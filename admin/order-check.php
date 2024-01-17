<?php
/**
 * Copyright C2009G
 *
 * Trang xóa đơn hàng
 */
// Cấu hình hệ thống
include_once '../configs.php';
// Thư viện hàm
include_once '../lib/table/table.order.php';

check_login();

// Nếu xóa nhiều đơn hàng cùng lúc:
// (các id được lưu trong biến mảng $_POST
if ( isset($_GET['order_id']))
{
	// Xóa sản phẩm
	checkedod($_GET['order_id']);
    $_SESSION['SUCCESS_TEXT'] = "Đã hoàn thành !";
	// Nếu như trong quá trình xóa mà có lỗi thì chỉ hiện lỗi
	// còn những bản ghi xóa thành công thì bỏ đi thông báo thành công.
	if($_SESSION['ERROR_TEXT'] != null)
	{
		$_SESSION['SUCCESS_TEXT'] = null;
	}
}
// checkedod($order_id);


header("location: /admin/order.php");
die();