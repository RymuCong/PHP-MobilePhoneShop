<?php

require_once "lib/db_for_rating.php";
require_once "./Rating-functions.php";
include_once 'account-validate.php';

// Here the user id is harcoded.
// You can integrate your authentication code here to get the logged in user id

$userId  = isset($_SESSION['CUS_LOGGED']) ? $_SESSION['CUS_LOGGED'] : 0;

$sql = "SELECT product_id FROM product WHERE product_id = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id);
$stmt->fetch();
$stmt->close();

$outputString = '';
    $userRating = userRating($userId, $id, $conn);
    $totalRating = totalRating($id, $conn);
    $outputString .= '
        <div class="row-item-rating">
 <ul class="list-inline-rating"  onMouseLeave="mouseOutRating(' . $id . ',' . $userRating . ');"> ';
    
    for ($count = 1; $count <= 5; $count ++) {
        $starRatingId = $id . '_' . $count;
        
        if ($count <= $userRating) {
            
            $outputString .= '<li value="' . $count . '" id="' . $starRatingId . '" class="star selected">&#9733;</li>';
        } else {
            $outputString .= '<li value="' . $count . '"  id="' . $starRatingId . '" class="star" onclick="addRating(' . $id . ',' . $count . ');" onMouseOver="mouseOverRating(' . $id . ',' . $count . ');">&#9733;</li>';
        }
    } // endFor
    
    $outputString .= '
 </ul>
 
 <p class="review-note-rating">Tổng đánh giá : ' . $totalRating . '</p>
</div>
 ';
echo $outputString;
?>