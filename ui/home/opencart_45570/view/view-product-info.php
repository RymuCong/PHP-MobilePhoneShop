<section>
    <div id="container">
        <p id="back-top" style="display: none;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"> </div>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span9  " id="content">
                            <div class="breadcrumb">
                                <a href="/home.php">Trang Chủ</a> » <a href="<?php echo $product_info['href'];?>" class="last"><?php echo $product_info['name'];?></a>
                            </div>
                            <div class="product-info">
                                <div class="row">
                                    <div class="span3">
                                        <h1 class="view"><?php echo $product_info['name']; ?></h1>
                                        <script type="text/javascript">
                                            jQuery(document).ready(function() {
                                                var myPhotoSwipe = $("#gallery a").photoSwipe({
                                                    enableMouseWheel: false,
                                                    enableKeyboard: false,
                                                    captionAndToolbarAutoHideDelay: 0
                                                });
                                            });
                                        </script>
                                        <div id="full_gallery">
                                            <div class="bx-wrapper" style="max-width: 100%;">
                                                    	<ul id="gallery" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">                                                    
															<?php foreach ($product_info['product_images'] as $image) { ?>
																<li style="float: left; list-style: outside none none; position: relative; width: 100px;">
																	<a class="thumbnail" href="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" data-something="something" data-another-thing="anotherthing"> 
																		<img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
																	</a>
																</li>
															<?php } ?>                                                        
														</ul>
                                            </div>
                                        </div>
                                        <div id="default_gallery" class="left spacing">
                                        <?php foreach ($product_info['product_images'] as $image) {?>
                                        	<div class="zoom-top">
                                                <a href="<?php echo $image['popup'];?>" title="<?php echo $product_info['name']; ?>" data-gal="prettyPhoto[gallery1]">
                                                    <img src="<?php echo $image['thumb']?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>">
                                                </a>
                                            </div>
                                        <?php }?>
                                            <div class="image">
                                                <div id="wrap" style="top:0px;z-index:9999;position:relative;">
                                                    <a href="<?php echo $product_info['popup']?>" title="<?php echo $product_info['name']; ?>" class="cloud-zoom" id="zoom1" rel="position: 'right'" style="position: relative; display: block;">
                                                        <img src="<?php echo $product_info['thumb'];?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" style="display: block;">
                                                    </a>
                                                    <div class="mousetrap" style="background-image:url(&quot;.&quot;);z-index:999;position:absolute;width:270px;height:270px;left:0px;top:0px;"></div>
                                                </div>
                                                <a href="<?php echo $product_info['popup']?>" title="<?php echo $product_info['name']; ?>">

                                                </a>
                                            </div>
                                            
                                            <div class="image-additional">
                                                        <ul id="image-additional" style="width: 645%; position: relative; transition-duration: 0s; transform: translate3d(0px, 0px, 0px);">
                                                        <?php foreach ($product_info['product_images'] as $image) { ?>
						                                	<li style="float: left; list-style: outside none none; position: relative; width: 70px; margin-right: 10px;">
						                                    	<a href="#" data-image="<?php echo $image['popup']; ?>" data-zoom-image="<?php echo $image['popup']; ?>" class="cloud-zoom-gallery" rel="useZoom: 'zoom1', smallImage: '<?php echo $image['popup']?>' "> 
								       								<img src="<?php echo $image['popup']; ?>" title="<?php echo $product_info['name']; ?>" alt="<?php echo $product_info['name']; ?>" />
								      							</a>
						                                    </li>
						                                <?php } ?>
                                                        </ul>
                                                <div class="clear"></div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="span6">
                                        <h1><?php echo $product_info['name']; ?> &nbsp;&nbsp;&nbsp;&nbsp;<?= RatingAvg($product_info['product_id']); ?><div style="margin-left: 5px;" class="icon-star"></div></h1>
                                        <div class="description">
                                            <div class="product-section">
                                                <span>Thương Hiệu:</span> <a href="<?php echo $product_info['manufacturer_href'];?>"><?php echo $product_info['manufacturer'];?></a><br>
                                                <span>Model:</span> <?php echo $product_info['model'];?><br>
                                            </div>
                                            <div class="price">
                                                            <?php $dong= pricesale($product_info['product_id']);
                                                                $ps = number_format($dong['price_sale'],0,'.',',').' ₫'; ?>
                                                            <span class="price-sale"><?php
                                                            if($dong['price_sale'] != $product_info['price'] && $dong['price_sale'] != 0){
                                                                echo $ps;
                                                            } else { 
                                                                echo $product_info['price'];
                                                            }  ?></span>
                                                            <strike class="price-new"><?php if($dong['price_sale'] != $product_info['price'] && $dong['price_sale'] != 0){
                                                                echo $product_info['price'];
                                                            }
                                                            ?></strike>
                                                            <span class="price">
                                                            <?php if($dong['price_sale'] == $product['price'] && $dong['price_sale'] != 0){
                                                                echo $product_info['price_text'];
                                                            }?>
                                                            </span>
                                                        </div>
                                                        <link rel="stylesheet" href="/ui/home/opencart_45570/template_files/rating-style.css">
                                                        <body onload="showCustomer(<?= $product_info['product_id'] ?>)">
                                                        </body>
                                                        <div id="rating-product">Vui lòng đợi kết quả đánh giá ...</div>
                                            <div class="cart">
                                                <div class="prod-row">
                                                    <div class="cart-top">
                                                        <div class="cart-top-padd form-inline">
                                                            <label>Số lượng: <input class="q-mini" name="quantity" size="2" value="1" type="text">
																<input class="q-mini" name="product_id" size="2" value="<?php echo $product_info['product_id'];?>" type="hidden">
															</label>
                                                            <a id="button-cart" class="button-prod"><i class="icon-shopping-cart"></i>Thêm vào giỏ</a>
                                                            <a href="<?php if(!isset($_SESSION['CUS_LOGGED'])){echo "/login.php";}else{echo "#";} ?>" id="button-wishlist" class="button-prod"><i class="icon-heart"></i> <span> WishList</span></a>                                                      
                                                        </div>    
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            <div class="clear"></div>
                                            <!-- 
                                            <div class="review">
                                                <div>
                                                    <img src="catalog/view/theme/theme253/image/stars-0.png" alt="0 reviews">&nbsp;&nbsp;
                                                    <div class="btn-rew">
                                                        <a href="#tab-review">0 reviews</a>
                                                        <a href="#tab-review"><i class="icon-pencil"></i>Write a review</a>
                                                        <div class="clear"></div>
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                             -->
                                            <div class="clear"></div>
                                            <div class="share">

                                                <span class="st_facebook_hcount" displaytext="Facebook"></span>
                                                <span class="st_twitter_hcount" displaytext="Tweet"></span>
                                                <span class="st_googleplus_hcount" displaytext="Google +"></span>
                                                <span class="st_pinterest_hcount" displaytext="Pinterest"></span>
                                                <script type="text/javascript" src="https://w.sharethis.com/button/buttons.js"></script>
                                                <script type="text/javascript">
                                                    stLight.options({
                                                        publisher: "00fa5650-86c7-427f-b3c6-dfae37250d99",
                                                        doNotHash: false,
                                                        doNotCopy: false,
                                                        hashAddressBar: false
                                                    });
                                                </script>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tabs">
                                    <div class="tab-heading">Mô Tả </div>
                                    <div class="tab-content">
                                        <div class="std">
                                            <?php echo $product_info['description'];
                                        ?>
                                        </div>
                                    </div>
                                </div>
                                <!-- <form action="rating.php" method="post">
                                    <div class="form-inline border" id="rating_point">
                                            <input type="hidden" name="product_id" value="<?= $product_info['product_id'];?>">
                                            <span class="radio">Bad</span>&nbsp;
                                            <input name="rating" value="1" type="radio"> &nbsp;
                                            <input name="rating" value="2" type="radio"> &nbsp;
                                            <input name="rating" value="3" type="radio"> &nbsp;
                                            <input name="rating" value="4" type="radio"> &nbsp;
                                            <input name="rating" value="5" type="radio"> &nbsp; 
                                            <span class="radio">Good</span><br>
                                    </div> 
                                    <div class="buttons" >
                                        <input type="submit" value="Đánh giá">
                                    </div>
                                </form> -->
                            </div>
                            <h1 class="style-1 mt0">Sản Phẩm Nổi Bật</h1>
                            <div class="box-content">
                                <div class="box-product">
                                    <ul class="row">
                                       <?php $i=0; ?>
                                        <!-- for mo' -->
                                        <?php foreach (productFeatureds(['width' => 200, 'height' => 200, 'limit' => settings('products_featured_limit')]) as $product) { ?>
                                            <?php if($i<3){ ?>
                                            <li class="first-in-line span3">
                                                
                                                <script type="text/javascript">
                                                    $(document).ready(function() {
                                                        $("a.colorbox<?php echo $product['product_id']; ?>").colorbox({
                                                            rel: 'colorbox',
                                                            inline: true,
                                                            html: true,
                                                            width: '58%',
                                                            maxWidth: '780px',
                                                            height: '70%',
                                                            opacity: 0.6,
                                                            open: false,
                                                            returnFocus: false,
                                                            fixed: false,
                                                            title: false,
                                                            href: '.quick-view<?php echo $product['product_id']; ?>',
                                                            current: 'Product {current} of {total}'
                                                        });
                                                    });
                                                </script>
                                                

                                                <div class="image2">
                                                    <a href="<?= $product['href']; ?>">
                                                        <img id="img_43" alt="<?php echo $product['name']; ?>" src="<?php echo $product['thumb']; ?>">
                                                    </a>
                                                    <?php $pc = percent($product['product_id']);
                                            if ($pc['price_sale'] != 0) { ?>
                                            <div class="ex_pricesale">
                                                    <?php 
                                                     echo "Giảm " . floor($percent =($pc['price'] - $pc['price_sale']) / $pc['price'] * 100) . "%";
                                                    ?>
                                                    <div class="ex_pricesale_after"></div>
                                                </div>
                                            <?php } ?>
                                                <a class="colorbox<?php echo $product['product_id']; ?> quick-view-button cboxElement" href="<?php echo $product['product_id'] ?>" rel="colorbox"></a>
                                                
                                                </div>
                                                <div class="inner">
                                                    <div class="f-left">
                                                        <div style="height: 48px;" class="name maxheight-feat">
                                                            <a href="<?php echo $product['href'] ?>"><?php echo $product['name']; ?></a>
                                                        </div>
                                                        <div class="price">
                                                            <?php $dong= pricesale($product['product_id']);
                                                                $ps = number_format($dong['price_sale'],0,'.',',').' ₫'; ?>
                                                            <span class="price-sale"><?php
                                                            if($dong['price_sale'] != $product['price'] && $dong['price_sale'] != 0){
                                                                echo $ps;
                                                            } else {
                                                                echo $product['price_text'];
                                                            }?></span>
                                                            <strike class="price-new"><?php if($dong['price_sale'] != $product['price']  && $dong['price_sale'] != 0){
                                                                echo $product['price_text'];
                                                            }
                                                            ?></strike>
                                                            <span class="price_no_sale">
                                                            <?php if($dong['price_sale'] == $product['price']){
                                                                echo $product['price_text'];
                                                            } ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="cart-button">
                                                        <div class="cart">
                                                            <a onclick="cart.add(<?php echo $product['product_id']; ?>);" title="Add to cart" class="button addToCart" data-id="<?php echo $product['product_id']; ?>;"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ</span></a>
                                                        </div>
                                                        
                                                        <div class="compare">
                                                            <a data-original-title="So Sánh Sản Phẩm" title="" class="tooltip-1" onclick="compare.add('<?php echo $product['product_id'] ?>');"><i class="icon-bar-chart"></i> <span>So Sánh</span> </a>
                                                        </div>
                                                        <div class="wishlist">
                                                            <a href="<?php if(!isset($_SESSION['CUS_LOGGED'])){echo "/login.php";}else{echo "#";} ?>" data-original-title="Thêm Vào Wish List" title="" class="tooltip-1" onclick="wishlist.add('<?php echo $product['product_id'] ?>');"><i class="icon-heart"></i> <span>Ước Muốn</span> </a>
                                                        </div>
                                                        <span class="clear"></span>
                                                    </div>
                                                    <div class="clear"></div>
                                                </div>
                                                <div class="clear"></div>
                                            </li>
                                            <!-- ket thuc san pham dau tien --->

                                            <!-- for dong -->
                                        <?php } //đóng if
                                        $i++;}// đóng for 
                                        ?>



                                    </ul>
                                </div>
                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <div class="box info" id="compare" style="display: none;">
                        <div class="box-heading">Product Comparison</div>
                        <div class="box-content">
                            <div class="product-compare"><a class="button" href="https://livedemo00.template-help.com/opencart_45570/index.php?route=product/compare"><span>Product Compare</span></a></div>
                        </div>
                    </div>
                    <script type="text/javascript">
                        (function($) {
                            $.fn.equalHeights = function(minHeight, maxHeight) {
                                tallest = (minHeight) ? minHeight : 0;
                                this.each(function() {
                                    if ($(this).height() > tallest) {
                                        tallest = $(this).height()
                                    }
                                });
                                if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                                return this.each(function() {
                                    $(this).height(tallest)
                                });
                            }
                        })(jQuery)
                        $(window).load(function() {
                            if ($(".maxheight-best").length) {
                                $(".maxheight-best").equalHeights()
                            }
                        })
                    </script>
                    <div class="box bestsellers">
                        <div class="box-heading">Sản Phẩm Bán Chạy</div>
                        <div class="box featured">
                        <div class="box-content">
                            <div class="box-product">
                            
                                <ul class="row">
                                <?php foreach(productBestSellers() as $product){?>
                                    <li class="first-in-line last_line ">
                                        <div class="image2">
                                            <a href="<?php echo $product['href'];?>"><img id="img_43" src="<?php echo $product['thumb'];?>" alt="<?php echo $product['name']; ?>"></a>
                                        </div>
                                        <div class="inner">
                                            <div class="f-left">
                                                <div class="name maxheight-best" style="height: 48px;"><a href="<?php echo $product['href'];?>"><?php echo $product['name']; ?></a></div>
                                                <div class="price">
                                                            <?php $dong= pricesale($product['product_id']);
                                                                $ps = number_format($dong['price_sale'],0,'.',',').' ₫'; ?>
                                                            <span class="price-sale"><?php
                                                            if($dong['price_sale'] != $product['price'] && $dong['price_sale'] != 0){
                                                                echo $ps;
                                                            }
                                                            else {
                                                                echo $product['price_text'];
                                                            } ?></span>
                                                            <span class="price_no_sale">
                                                            <?php if($dong['price_sale'] == $product['price']){
                                                                echo $product['price_text'];
                                                            } ?>
                                                            </span>
                                                        </div>

                                            </div>
                                            <?php $pc = percent($product['product_id']);
                                            if ($pc['price_sale'] != 0) { ?>
                                            <div class="ex_pricesale">
                                                    <?php 
                                                     echo "Giảm " . floor($percent =($pc['price'] - $pc['price_sale']) / $pc['price'] * 100) . "%";
                                                    ?>
                                                    <div class="ex_pricesale_after"></div>
                                                </div>
                                            <?php } ?>
                                            <div class="cart-button">
                                                <div class="cart"><a onclick="cart.add('<?php echo $product['product_id'];?>');" title="Add to Cart" data-id="<?php echo $product['product_id'];?>;" class="button addToCart"><i class="icon-shopping-cart"></i><span>Thêm vào giỏ</span></a></div>

                                                <div class="compare">
                                                            <a data-original-title="So Sánh Sản Phẩm" title="" class="tooltip-1" onclick="compare.add('<?php echo $product['product_id'] ?>');"><i class="icon-bar-chart"></i> <span>So Sánh</span> </a>
                                                </div>
                                                <div class="wishlist">
                                                            <a href="<?php if(!isset($_SESSION['CUS_LOGGED'])){echo "/login.php";}else{echo "#";} ?>" data-original-title="Thêm Vào Wish List" title="" class="tooltip-1" onclick="wishlist.add('<?php echo $product['product_id'] ?>');"><i class="icon-heart"></i> <span>Ước Muốn</span> </a>
                                                        </div>
                                                <span class="clear"></span>
                                            </div>
                                            <div class="clear"></div>
                                            
                                        </div>
                                        <div class="clear"></div>
                                    </li>
                                <?php }?>
                                </ul>
                                
                            </div>
                        </div>
                                </div>
                    </div>
                    <script type="text/javascript">
                        (function($) {
                            $.fn.equalHeights = function(minHeight, maxHeight) {
                                tallest = (minHeight) ? minHeight : 0;
                                this.each(function() {
                                    if ($(this).height() > tallest) {
                                        tallest = $(this).height()
                                    }
                                });
                                if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                                return this.each(function() {
                                    $(this).height(tallest)
                                })
                            }
                        })(jQuery)
                        $(window).load(function() {
                            if ($(".maxheight").length) {
                                $(".maxheight").equalHeights()
                            }
                        })
                    </script>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $(function() {
                                $('.new-products  li ').last().addClass('last');
                            });
                        });
                    </script>
                    <script type="text/javascript">
                        if ($('.container').width() > 723) {
                            (function($) {
                                $.fn.equalHeights = function(minHeight, maxHeight) {
                                    tallest = (minHeight) ? minHeight : 0;
                                    this.each(function() {
                                        if ($(this).height() > tallest) {
                                            tallest = $(this).height()
                                        }
                                    });
                                    if ((maxHeight) && tallest > maxHeight) tallest = maxHeight;
                                    return this.each(function() {
                                        $(this).height(tallest)
                                    })
                                }
                            })(jQuery)
                            $(window).load(function() {
                                if ($(".maxheight-spec").length) {
                                    $(".maxheight-spec").equalHeights()
                                }
                            });
                        };
                    </script>
                     <script src="/ui/home/opencart_45570/template_files/sweetalert.js"></script>
                    <script type="text/javascript">
function showCustomer(str) {
  var xhttp;    
  if (str == "") {
    document.getElementById("rating-product").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("rating-product").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "Rating-data.php?q="+str, true);
  xhttp.send();
}

function mouseOverRating(restaurantId, rating) {

    resetRatingStars(restaurantId)

    for (var i = 1; i <= rating; i++)
    {
        var ratingId = restaurantId + "_" + i;
        document.getElementById(ratingId).style.color = "#ff6e00";

    }
}

function resetRatingStars(restaurantId)
{
    for (var i = 1; i <= 5; i++)
    {
        var ratingId = restaurantId + "_" + i;
        document.getElementById(ratingId).style.color = "#9E9E9E";
    }
}

function mouseOutRating(restaurantId, userRating) {
   var ratingId;
   if(userRating !=0) {
           for (var i = 1; i <= userRating; i++) {
                  ratingId = restaurantId + "_" + i;
              document.getElementById(ratingId).style.color = "#ff6e00";
           }
   }
   if(userRating <= 5) {
           for (var i = (userRating+1); i <= 5; i++) {
              ratingId = restaurantId + "_" + i;
          document.getElementById(ratingId).style.color = "#9E9E9E";
       }
   }
}

function addRating (restaurantId, ratingValue) {
    <?php if (!isset ($_SESSION['CUS_LOGGED'])) { ?>
	swal({
        title: "Vui lòng đăng nhập !",
        icon: "warning",
        button: "Đồng ý!",
        });
<?php } else { ?>
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function ()
        {
            if (this.readyState == 4 && this.status == 200) {

                showCustomer(<?= $product_info['product_id'] ?>);
                
                if(this.responseText != "success") {
                    swal({
                            title: this.responseText,
                            text: "Kết quả đã được lưu lại!",
                            icon: "success",
                            button: "Đồng ý!",
                            });
                }
            }
        };

        xhttp.open("POST", "/Rating-insert.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        var parameters = "index=" + ratingValue + "&product_id=" + restaurantId;
        xhttp.send(parameters);
        <?php } ?>
}
</script>
                    <script>
                        var form = $('form');
			            form.submit((e) => {

                            e.preventDefault();
                            swal({
                            title: "Cảm ơn bạn đã đánh giá!",
                            text: "Kết quả này sẽ được lưu lại!",
                            icon: "success",
                            button: "Đồng ý!",
                            });
                            setTimeout(() => {
                                            form.unbind().submit();
                                        }, 1500);
                        });

		            </script>
                    
                </aside>
                <script type="text/javascript">
                    $('#button-cart').bind('click', function() {
                        $.ajax({
                            //url: 'index.php?route=checkout/cart/add',
                            url: '/cart-add.php',
                            type: 'post',
                            data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                            dataType: 'json',
                            success: function(json) {
                                $('.success, .warning, .attention, information, .error').remove();

                                if (json['error']) {
                                    if (json['error']['option']) {
                                        for (i in json['error']['option']) {
                                            $('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
                                        }
                                    }
                                }

                                if (json['success']) {
                                    $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<span><i class="icon-remove-sign"></i></span></div>');

                                    $('.success').fadeIn('slow');

                                    $('#cart-total').html(json['total']);
                                    $('#cart-total2').html(json['total']);
                                    
                                    //$('#cart').load('index.php?route=module/cart #cart > *');
                                 	// tải lại nội dung html của giỏ hàng bằng (ajax load) lấy từ nguồn: /common/cart-info.php
                    				// chỉ lấy phần nội dung bên trong phần tử html có id="cart" 
                    				// sau đó đắp phần html đó vào bên trong phần tử id="cart" của trang hiện tại.
                    				var urlCartInfo = $('#urlCartAjax').attr('href');
                    				$('#cart').load(urlCartInfo+' #cart > *');
                    				
                                    $('html, body').animate({
                                        scrollTop: 0
                                    }, 'slow');
                                }
                                setTimeout(function() {
                                    $('.success').fadeOut(1000)
                                }, 3000)
                            }
                        });
                    });
                </script>
                <script type="text/javascript">
                    $('#button-wishlist').bind('click', function() {
                        $.ajax({
                            //url: 'index.php?route=checkout/cart/add',
                            url: '/product-wishlist-add.php',
                            type: 'post',
                            data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
                            dataType: 'json',
                            success: function(json) {
                                $('.success, .warning, .attention, information, .error').remove();

                                if (json['error']) {
                                    if (json['error']['option']) {
                                        for (i in json['error']['option']) {
                                            $('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
                                        }
                                    }
                                }

                                if (json['success']) {
                                    $('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<span><i class="icon-remove-sign"></i></span></div>');

                                    $('.success').fadeIn('slow');

                                    $('#cart-total').html(json['total']);
                                    $('#cart-total2').html(json['total']);
                                    
                                    //$('#cart').load('index.php?route=module/cart #cart > *');
                                 	// tải lại nội dung html của giỏ hàng bằng (ajax load) lấy từ nguồn: /common/cart-info.php
                    				// chỉ lấy phần nội dung bên trong phần tử html có id="cart" 
                    				// sau đó đắp phần html đó vào bên trong phần tử id="cart" của trang hiện tại.
                    				var urlCartInfo = $('#urlCartAjax').attr('href');
                    				$('#cart').load(urlCartInfo+' #cart > *');
                    				
                                    $('html, body').animate({
                                        scrollTop: 0
                                    }, 'slow');
                                }
                                setTimeout(function() {
                                    $('.success').fadeOut(1000)
                                }, 3000)
                            }
                        });
                    });
                </script>
                <script type="text/javascript">
                
                    $('#review .pagination a').live('click', function() {
                        $('#review').fadeOut('slow');

                        $('#review').load(this.href);

                        $('#review').fadeIn('slow');

                        return false;
                    });

                    $('#review').load('index.php?route=product/product/review&product_id=43');

                    $('#button-review').bind('click', function() {
                        $.ajax({
                            url: 'index.php?route=product/product/write&product_id=43',
                            type: 'post',
                            dataType: 'json',
                            data: 'name=' + encodeURIComponent($('input[name=\'name\']').val()) + '&text=' + encodeURIComponent($('textarea[name=\'text\']').val()) + '&rating=' + encodeURIComponent($('input[name=\'rating\']:checked').val() ? $('input[name=\'rating\']:checked').val() : '') + '&captcha=' + encodeURIComponent($('input[name=\'captcha\']').val()),
                            beforeSend: function() {
                                $('.success, .warning').remove();
                                $('#button-review').attr('disabled', true);
                                $('#review-title').after('<div class="attention"><img src="catalog/view/theme/theme253/image/loading.gif" alt="" /> Please Wait!</div>');
                            },
                            complete: function() {
                                $('#button-review').attr('disabled', false);
                                $('.attention').remove();
                            },
                            success: function(data) {
                                if (data['error']) {
                                    $('#review-title').after('<div class="warning">' + data['error'] + '</div>');
                                }

                                if (data['success']) {
                                    $('#review-title').after('<div class="success">' + data['success'] + '</div>');

                                    $('input[name=\'name\']').val('');
                                    $('textarea[name=\'text\']').val('');
                                    $('input[name=\'rating\']:checked').attr('checked', '');
                                    $('input[name=\'captcha\']').val('');
                                }
                            }
                        });
                    });
                    //-->
                </script>
                <script type="text/javascript">
                    
                    $('#tabs a').tabs();
                    //-->
                </script>
                <script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-timepicker-addon.js"></script>
                <script type="text/javascript">
                    
                    $(document).ready(function() {
                        if ($.browser.msie && $.browser.version == 6) {
                            $('.date, .datetime, .time').bgIframe();
                        }

                        $('.date').datepicker({
                            dateFormat: 'yy-mm-dd'
                        });
                        $('.datetime').datetimepicker({
                            dateFormat: 'yy-mm-dd',
                            timeFormat: 'h:m'
                        });
                        $('.time').timepicker({
                            timeFormat: 'h:m'
                        });
                    });
                    //-->
                </script>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>