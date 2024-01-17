<?php
    function select($cid){
        // $sql = "SELECT * FROM `wishlist` WHERE `customer_id` = '{$cid}'";
        // db_q($sql);
        $rs = db_q("SELECT * FROM `wishlist` WHERE `customer_id` = '{$cid}'");
        if ( is_array($rs) && !empty($rs) ) 
            {
                return $rs;
            }
            
            return false;
    }
    
    $cus_id = isset($_SESSION['CUS_LOGGED']);
    $results = select($cus_id);
    // foreach($results as $result){
    //     $wishlist[] = array(
    //         'wishlist_id' => $result['wishlist_id'],
    //         'customer_id' => $result['customer_id'],
    //         'product_id'  => $result['product_id']
    
    //     );
    // }
?>
<div id="product-wishlist" class="container">
   <ul class="breadcrumb">
      <li><a href="/home.php"><i class="icon-home"></i>Trang Chủ</a></li> &gt;
      <li><a href="/product-wishlist.php"><i class="icon-star"></i>Sản Phẩm Yêu Thích</a></li>
   </ul>
   <div>
   <?php if(empty($results)){ ?>
    <div >
    <h1 style="text-align: center; margin-top: 40px;">Wishlist Rỗng!</h1>
   </div>
  <?php  } else{ ?>
      <div >
         <h1 style="text-align: center; margin-bottom: 50px;">Sản Phẩm Yêu Thích</h1>
      <div>
        <table class="table-wishlist" id="style-wishlist">
            <thead>
                <tr>
                    <th>Ảnh</th>
                    <th>Tên</th>
                    <th>Giá
                    </th>
                    <th style = "width: 50px !important;">Thao Tác</th>
                </tr>
            </thead>
            <tbody>
            
                <?php foreach($results as $kq){ $products = productInfo($kq['product_id']);?>
                    <tr style = "border: 1px solid rgb(220, 220, 220);">
                    
                <td class = "image-wishlist">
                    <div style="width: 140px; height: 140px; object-fit: contain; padding-left: 40px;">
                    <a href="<?php echo $products['href']; ?>">
                        <img id="img_43" alt="<?php echo $products['name']; ?>" src="<?php echo $products['thumb']; ?>">
                    </a>
                    </div>
                </td>
                <td style = "color: black;">
                    <?= $products['name'];?>
                </td>
                <td>
                <div class="price">
                    <?php $dong= pricesale($products['product_id']);
                        $ps = number_format($dong['price_sale'],0,'.',',').' ₫'; ?>
                    <span class="price-sale"><?php
                    if($dong['price_sale'] != $products['price'] && $dong['price_sale'] != 0){
                        echo $ps;
                    } else {
                        echo $products['price'];
                    }?></span>
                    <!-- <strike class="price-new"><?php if($dong['price_sale'] != $products['price']  && $dong['price_sale'] != 0){
                        echo $products['price'];
                    }
                    ?></strike> -->
                    
                </div>
                </td>
                <td><input value="Thêm vào giỏ" class="btn btn-primary btn-block" onclick="cart.add(<?php echo $products['product_id']?>, '1');" type="button" style ="width: 100px;margin-left: 80px;">
                     <a href="/product-wishlist.php?remove=<?php echo $products['product_id']?>" class="btn btn-danger btn-block" style ="width: 100px; margin-left: 80px; color: white;" >Bỏ</a>
                  </td></tr>
                 
                <?php } ?>
            
            </tbody>
        </table>
      </div>
      </div>
      <?php } ?>
   </div>
   <h1 style="text-align: center;">
   <?php if(!count($results)) {
      echo "Không Có Sản Phẩm Ưu Thích!";
   }?>
   </h1>
</div>
