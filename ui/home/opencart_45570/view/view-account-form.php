<section>
    <div id="container">
        <p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"> </div>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span9  " id="content">
                            <div class="breadcrumb">
                                <a href="/home.php">Trang Chủ</a> » <a href="/account.php">Tài Khoản</a> » <a href="/register.php" class="last">Đăng Kí</a>
                            </div>
                            <h1><?php echo $form_title;?></h1>
						      <!-- 
						      <p>Nếu bạn đã có tài khoản, xin hãy vui lòng vào trang  <a href="/login.php">trang đăng nhập</a>.</p>
						       -->
						      <?php if ($_SESSION['ERROR_TEXT']) {?>
						      	<div class="alert alert-danger">
						        	<i class="fa fa-exclamation-circle"></i>&nbsp;<?php echo $_SESSION['ERROR_TEXT']?>
						            <button type="button" class="close" data-dismiss="alert">&times;</button>
						        </div>
						      <?php }?>
						      <?php unset($_SESSION['ERROR_TEXT']);?>
						      <div class="box-container">
						      <form id="register" action="<?php echo $url_action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
						        <fieldset id="account" style = "float: left; width: 50%;">
						          <legend style = "color: blue; width: 95%;">Thông Tin Cá Nhân</legend>
								  <div class="dep" style = "margin-right: 65px;">
						          <div class="control-group required">
						            <label class="col-sm-2 control-label" for="input-fullname">Họ và Tên</label>
						            <div class="col-sm-10">
						              <input name="fullname" value="<?php echo $fullname; ?>" placeholder="Tên" id="input-fullname" class="form-control" type="text" style = "background-color: #E8F0FE;">
						                          </div>
						          </div>
						
						          <div class="control-group required">
						            <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
						            <div class="col-sm-10">
						              <input name="email" value="<?php echo $email; ?>" placeholder="E-Mail" id="input-email" class="form-control" type="email" style = "background-color: #E8F0FE;">
						                          </div>
						          </div>
						          <div class="control-group required">
						            <label class="col-sm-2 control-label" for="input-telephone">Điện thoại</label>
						            <div class="col-sm-10">
						              <input name="telephone" value="<?php echo $telephone; ?>" placeholder="Điện thoại" id="input-telephone" class="form-control" type="tel" style="background-color: #E8F0FE;">
						                          </div>
						          </div>
						          <div class="control-group required">
						            <label class="col-sm-2 control-label" for="input-address-1">Địa chỉ</label>
						            <div class="col-sm-10">
						              <input name="address" value="<?php echo $address; ?>" placeholder="Địa chỉ" id="input-address-1" class="form-control" type="text" style="background-color: #E8F0FE;">
						                          </div>
						          </div>
								  </div>
						          </fieldset>
						        
						        <fieldset style = "width: 50%; float: right;">
						          <legend style="margin-left: 40px; color: blue;">Mật Khẩu</legend>
						          <div class="control-group required">
						            <label class="col-sm-2 control-label" for="input-password">Mật khẩu</label>
						            <div class="col-sm-10">
						              <input name="password" value="<?php echo $password;?>" placeholder="Password" id="input-password" class="form-control" type="password" style = "background-color: #E8F0FE;">
						                          </div>
						          </div>
						          <div class="control-group required">
						            <label class="col-sm-2 control-label" for="input-confirm">Xác nhận</label>
						            <div class="col-sm-10">
						              <input name="confirm_password" value="<?php echo $confirm_password;?>" placeholder="Xác nhận mật khẩu" id="input-confirm" class="form-control" type="password" style="background-color: #E8F0FE;">
						                          </div>
						          </div>
								  <div class="buttons" style= "margin-right: 120px; margin-top: 40px;">
						          <div class="pull-right">                        
						            <input value="Tiếp Tục" class="button" type="submit" style="background-color: red !important; color: white;	width : 100px;height: 30px;">
						          </div>
						        </div>
						        </fieldset>
						       
								
						        <input type="hidden" name="status" value="<?php echo $customer_status;?>" />
						       </form>
						      </div>
						      </div>
						      <div class="buttons clearfix">
						       <div class="pull-right"><a class="button" href="/home.php" class="btn btn-primary"><span>Tiếp Tục</span></a></div>
						      </div>
                        </div>
                    </div>
                </div>
                <aside class="span3" id="column-right">
                    <?php //include_once "view-account-box.php";?>
                </aside>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
</section>
