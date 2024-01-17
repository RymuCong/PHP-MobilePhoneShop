<?php
require_once ('lib/db_for_rating.php');
include_once 'account-validate.php';
// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id

$userId  = isset($_SESSION['CUS_LOGGED']) ? $_SESSION['CUS_LOGGED'] : 0;

if (isset($_POST["index"], $_POST["product_id"])) {
    
    $restaurantId = $_POST["product_id"];
    $rating = $_POST["index"];
    
    $checkIfExistQuery = "select * from rating where customer_id = '" . $userId . "' and product_id = '" . $restaurantId . "'";
    if ($result = mysqli_query($conn, $checkIfExistQuery)) {
        $rowcount = mysqli_num_rows($result);
    }
    
    if ($rowcount == 0) {
        $insertQuery = "INSERT INTO rating(customer_id,product_id, rating) VALUES ('" . $userId . "','" . $restaurantId . "','" . $rating . "') ";
        $result = mysqli_query($conn, $insertQuery);
        echo "Đánh giá sản phẩm thành công";
    } else {
        echo "Bạn đã đánh giá sản phẩm này !";
    }
}
