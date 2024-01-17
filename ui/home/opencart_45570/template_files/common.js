$(document).ready(function() {
//    $('.button-search').bind('click', function() {
//        url = $('#hidden').attr('href') + 'index.php?route=product/search';
//        var search = $('input[name=\'search\']').attr('value');
//        if (search) {
//            url += '&search=' + encodeURIComponent(search);
//        }
//        location = url;
//    });

	
//    $('#header input[name=\'search\']').bind('keydown', function(e) {
//        if (e.keyCode == 13) {
//            url = $('#hidden').attr('href') + 'index.php?route=product/search';
//            var search = $('input[name=\'search\']').attr('value');
//            if (search) {
//                url += '&search=' + encodeURIComponent(search);
//            }
//            location = url;
//        }
//    });
    $('.button-search').bind('click', search);
    $('.searchButtonhi').bind('click', search);
    
    $('#header input[name=\'search\']').bind('keydown', function(e) {
        if (e.keyCode == 13) {
            search(); // khai báo trong file common-home.js
        }
    });
    if ($('.container').width() < 980) {
        $('#cart .heading a').live("click", function() {
            if ($('#cart').hasClass('active')) {
                jQuery('#cart').removeClass('active');
            } else {
                $('#cart').addClass('active');
            }
        })
    } else {
        $('#cart > .heading a').live('mouseover', function() {
            $('#cart').addClass('active');
            //$('#cart').load('index.php?route=module/cart #cart > *');
            $('#cart').live('mouseleave', function() {
                $(this).removeClass('active');
            });
        });
    }
    $('#menu ul > li > a + div').each(function(index, element) {
        if ($.browser.msie && ($.browser.version == 7 || $.browser.version == 6)) {
            var category = $(element).find('a');
            var columns = $(element).find('ul').length;
            $(element).css('width', (columns * 143) + 'px');
            $(element).find('ul').css('float', 'left');
        }
        var menu = $('#menu').offset();
        var dropdown = $(this).parent().offset();
        i = (dropdown.left + $(this).outerWidth()) - (menu.left + $('#menu').outerWidth());
        if (i > 0) {
            $(this).css('margin-left', '-' + (i + 5) + 'px');
        }
    });
    if ($.browser.msie) {
        if ($.browser.version <= 6) {
            $('#column-left + #column-right + #content, #column-left + #content').css('margin-left', '195px');
            $('#column-right + #content').css('margin-right', '195px');
            $('.box-category ul li a.active + ul').css('display', 'block');
        }
        if ($.browser.version <= 7) {
            $('#menu > ul > li').bind('mouseover', function() {
                $(this).addClass('active');
            });
            $('#menu > ul > li').bind('mouseout', function() {
                $(this).removeClass('active');
            });
        }
    }
    $('.success img, .warning img, .attention img, .information img').live('click', function() {
        $(this).parent().fadeOut('slow', function() {
            $(this).remove();
        });
    });

    cols1 = $('#column-right, #column-left').length;
	
	if (cols1 == 2) {
		$('#content .product-layout:nth-child(2n+2)').after('<div class="clearfix visible-md visible-sm"></div>');
	} else if (cols1 == 1) {
		$('#content .product-layout:nth-child(3n+3)').after('<div class="clearfix hidden-xs"></div>');
	} else {
		$('#content .product-layout:nth-child(4n+5)').addClass('last');
	}
	
	// Highlight any found errors
	$('.text-danger').each(function() {
		var element = $(this).parent().parent();
		
		if (element.hasClass('form-group')) {
			element.addClass('has-error');
		}
	});

    $('#list-view').click(function() {
		$('#content .product-layout > .clearfix').remove();
		$(this).addClass('active');
		$('#grid-view').removeClass('active');
		$('#content .product-layout').attr('class', 'product-layout product-list col-xs-12');

		setTimeout(function () {
			$('#content .product-layout .product-thumb').css('height','auto');
		},200);
		localStorage.setItem('display', 'list');
	});

	// Product Grid
	$('#grid-view').click(function() {
		$(this).addClass('active');
		$('#list-view').removeClass('active');
		$('#content .product-layout > .clearfix').remove();


		// What a shame bootstrap does not take into account dynamically loaded columns
		cols = $('#column-right, #column-left').length;

		if (cols == 2) {
			$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
		} else if (cols == 1) {
			$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12');
		} else {
			$('#content .product-layout').attr('class', 'product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12');
		}


		 localStorage.setItem('display', 'grid');
	});

	if (localStorage.getItem('display') == 'list') {
		$('#list-view').trigger('click');
	} else {
		$('#grid-view').trigger('click');
	}

	// tooltips on hover
	$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});

	// Makes tooltips work on ajax generated content
	$(document).ajaxStop(function() {
		$('[data-toggle=\'tooltip\']').tooltip({container: 'body'});
	});
});

function getURLVar(key) {
    var value = [];
    var query = String(document.location).split('?');
    if (query[1]) {
        var part = query[1].split('&');
        for (i = 0; i < part.length; i++) {
            var data = part[i].split('=');
            if (data[0] && data[1]) {
                value[data[0]] = data[1];
            }
        }
        if (value[key]) {
            return value[key];
        } else {
            return '';
        }
    }
}

function addToCart(product_id, quantity) {
    quantity = typeof(quantity) != 'undefined' ? quantity : 1;
    $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: 'product_id=' + product_id + '&quantity=' + quantity,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information, .error').remove();
            if (json['redirect']) {
                location = json['redirect'];
            }
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;"><i class="icon-thumbs-up"></i>' + json['success'] + '<i class="icon-remove-sign"></i></div>');
                $('.success').fadeIn('slow');
                $('#cart-total').html(json['total']);
                $('#cart-total2').html(json['total']);
                $('#cart').load('index.php?route=module/cart #cart > *');
            }
            setTimeout(function() {
                $('.success').fadeOut(1000)
            }, 3000)
        }
    });
}

function addToWishList(product_id) {
    $.ajax({
        url: 'index.php?route=account/wishlist/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information').remove();
            if (json['success']) {
                $('#notification').html('<div class="success" style="display: none;"><i class="icon-thumbs-up"></i>' + json['success'] + '<span><i class="icon-remove-sign"></i></span></div>');
                $('.success').fadeIn('slow');
                $('#wishlist-total').html(json['total']);
            }
            setTimeout(function() {
                $('.success').fadeOut(1000)
            }, 3000)
        }
    });
}
$(document).ready(function() {
    if ($('#compare .compare-block').length == 0) {
        $('#compare').hide()
    } else {
        $('#compare').show()
    }
});

function addToCompare(product_id) {
    $.ajax({
        url: 'index.php?route=product/compare/add',
        type: 'post',
        data: 'product_id=' + product_id,
        dataType: 'json',
        success: function(json) {
            $('.success, .warning, .attention, .information').remove();
            if (json['success']) {
                $('#compare').load('index.php?route=module/compare #compare > *');
                $('#compare-total').html(json['total']);
                $('#notification').html('<div class="success" style="display: none;"><i class="icon-thumbs-up"></i>' + json['success'] + '<span class="close"><i class="icon-remove-sign "></i></span></div>');
                $('.success').fadeIn('slow');
                $('#compare').show();
                $('html, body').animate({
                    scrollTop: $('#compare').position().top
                }, 'slow');
            }
            setTimeout(function() {
                $('.success').fadeOut(1000)
            }, 3000)
        }
    });
}

function RemoveCompare(product_id) {
    $.ajax({
        url: 'index.php?route=module/compare&remove=' + product_id,
        success: function() {
            $('.compare-block_' + product_id).slideUp('slow', function() {
                $('#compare').load('index.php?route=module/compare #compare > *');
                if ($('#compare .compare-block').length <= 1) {
                    $('#compare').fadeOut('slow')
                } else {
                    $('#compare').fadeIn('slow')
                }
            });
        }
    });
}
