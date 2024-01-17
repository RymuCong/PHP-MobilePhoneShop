<section>
    <div id="container">
        <p id="back-top" style="display: block;"> <a href="#top"><span></span></a> </p>
        <div class="container">
            <div id="notification"> </div>
            <div class="row">
                <div class="span9">
                    <div class="row">
                        <div class="span9" id="content">
                            <div class="breadcrumb">
                                <a href="/home.php">Trang Chủ</a> » <a href="/account.php">Tài Khoản</a> » <a href="/register.php" class="last">Đăng Kí</a>
                            </div>
                            <h1><?php echo $form_title;?></h1>
                            <style>
                                .register{
                                    background: -webkit-linear-gradient(left, #d70018, black);
                                    margin-top: 3%;
                                    padding: 3%;
                                }
                                .register-left{
                                    text-align: center;
                                    color: #fff;
                                    margin-top: 10%;
                                    float: left;
                                    width: 25%;
                                }
                                .register-left input{
                                    border: none;
                                    border-radius: 1.5rem;
                                    padding: 2%;
                                    width: 60%;
                                    background: #f8f9fa;
                                    font-weight: bold;
                                    color: #383d41;
                                    margin-top: 30%;
                                    margin-bottom: 3%;
                                    cursor: pointer;
                                }
                                .register-right{
                                    float: right;
                                    width: 80%;
                                    height: 500px !important;
                                    background: #f8f9fa;
                                    border-top-left-radius: 10% 50%;
                                    border-bottom-left-radius: 10% 50%;
                                }
                                .register-left img{
                                    margin-top: 15%;
                                    margin-bottom: 5%;
                                    width: 20%;
                                    -webkit-animation: mover 2s infinite  alternate;
                                    animation: mover 1s infinite  alternate;
                                }
                                @-webkit-keyframes mover {
                                    0% { transform: translateY(0); }
                                    100% { transform: translateY(-20px); }
                                }
                                @keyframes mover {
                                    0% { transform: translateY(0); }
                                    100% { transform: translateY(-20px); }
                                }
                                .register-left p{
                                    font-weight: lighter;
                                    padding: 12%;
                                    margin-top: -9%;
                                }
                                .register .register-form{
                                    padding: 10% 10% 0 10%;
                                    margin-top: 10%;
                                }
                                .btnRegister{
                                    text-align: center;
                                    /* margin-left: 10px;
                                    margin-top: 10%; */
                                    margin: 10px 10px 10px 40px;
                                    border: none;
                                    border-radius: 1.5rem;
                                    padding: 2%;
                                    background: #2dcde0;
                                    color: #fff;
                                    /* font-weight: 600; */
                                    width: 300px !important;
                                    height: 50px !important;
                                    cursor: pointer;
                                    margin-left: 50%;
                                    font-size: 17px !important;
                                }
                                .register .nav-tabs{
                                    margin-top: 3%;
                                    border: none;
                                    background: #0062cc;
                                    border-radius: 1.5rem;
                                    width: 28%;
                                    float: right;
                                }
                                .register .nav-tabs .nav-link{
                                    padding: 2%;
                                    height: 34px;
                                    font-weight: 600;
                                    color: #fff;
                                    border-top-right-radius: 1.5rem;
                                    border-bottom-right-radius: 1.5rem;
                                }
                                .register .nav-tabs .nav-link:hover{
                                    border: none;
                                }
                                .register .nav-tabs .nav-link.active{
                                    width: 100px;
                                    color: #0062cc;
                                    border: 2px solid #0062cc;
                                    border-top-left-radius: 1.5rem;
                                    border-bottom-left-radius: 1.5rem;
                                }
                                .register-heading{
                                    text-align: center;
                                    margin-top: 8%;
                                    margin-bottom: -15%;
                                    color: #495057;
                                }
                                .col-md-9 {
                                    -ms-flex: 0 0 75%;
                                    flex: 0 0 75%;
                                    max-width: 75%;
                                }
                                /* .form-regis input{
                                    margin-left: 20%;
                                    
                                } */
                                .form-regis{
                                    margin-top: 6%;
                                }
                                .regis-left{
                                    width: 45%;
                                    float: left;
                                    padding-left: 3%;
                                }
                                .regis-right{
                                    width: 45%;
                                    float: left;
                                    /* padding-left: 5%; */
                                }
                                 .regis-label input{
                                    width: 60%;
                                    margin-top: 10%;
                                    height: 30px !important;
                                    margin-left: 5%;
                                }
                                .regis-right input{
                                    width: 65%;
                                    margin-top: 10%;
                                    height: 30px !important;
                                }
                                .form-group-regis input{
                                    margin-top: 5%;
                                    margin-left: 35%;
                                }
                                .regis-label label{
                                    float: left;
                                    margin-left: 3%;
                                    margin-top: 13% !important;
                                    width: 22%;
                                    font-size: 14px;
                                }
                                .text-label{
                                    text-align: right;
                                    display: block;
                                    float: left ;
                                }
                            </style>

                            <div class="container register">
                                <div class="row">
                                    <div class="col-md-3 register-left">
                                        <img src="/images/catalog/icons/icon-wishlist.png" alt=""/>
                                        <h2>Welcome</h2>
                                        <!-- <p>Mày có 30s để đăng nhập</p> -->
                                        <!-- <input type="submit" name="" value="Login"/><br/> -->
                                    </div>
                                    <div class="col-md-9 register-right">
                                        
                                        <div class="form-regis" >
                                            <h1 style="color: red; text-align: center;">Đăng Kí Thành Viên</h1>
                                            <form id="register" action="<?php echo $url_action; ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <div class="regis-left">
                                                    <div class="regis-label">
                                                        <label class="text-label" style="margin-top: 8%;"> <i style="color: red;">*</i> Họ và Tên</label>
                                                        <input name="fullname" value="<?php echo $fullname; ?>" placeholder="Tên" id="input-fullname" class="form-control" type="text" style = "background-color: #E8F0FE;">
                                                    </div>
                                                    <div class="regis-label">
                                                        <label class="text-label" style="margin-top: 8%;"> <i style="color: red;">*</i> Điện Thoại</label>
                                                        <input name="telephone" value="<?php echo $telephone; ?>" placeholder="Điện thoại" id="input-telephone" class="form-control" type="tel" style="background-color: #E8F0FE;">
                                                    </div>
                                                    <div class="regis-label">
                                                        <label class="text-label" style="margin-top: 8%;"> <i style="color: red;">*</i>Địa Chỉ</label>
                                                        <input name="address" value="<?php echo $address; ?>" placeholder="Địa chỉ" id="input-address-1" type="text" style="background-color: #E8F0FE;">
                                                    </div>                                                    
                                                </div>
                                                <div class="regis-right">
                                                    <div class="regis-label">
                                                        <label class="text-label" style="margin-top: 8%;"> <i style="color: red;">*</i> Email</label>
                                                        <input name="email" value="<?php echo $email; ?>" placeholder="Email" id="input-email" class="form-control" type="email" style = "background-color: #E8F0FE;">
                                                    </div>
                                                    <div class="regis-label">    
                                                        <label class="text-label" style="margin-top: 8%;"> <i style="color: red;">*</i> Mật Khẩu</label>
                                                        <input name="password" value="<?php echo $password;?>" placeholder="Password" id="input-password" class="form-control" type="password" style = "background-color: #E8F0FE;">
                                                    </div>
                                                    <div class="regis-label">    
                                                        <label class="text-label" style="margin-top: 8%;"> <i style="color: red;">*</i> Xác Nhận</label>
                                                        <input name="confirm_password" value="<?php echo $confirm_password;?>" placeholder="Xác nhận mật khẩu" id="input-confirm" class="form-control" type="password" style="background-color: #E8F0FE;">
                                                    </div>
                                                </div>
                                                <!-- <div class="button-regis">
                                                    <input value="Tiếp Tục" class="button" type="submit" style="background-color: red !important; color: white;	width : 100px;height: 30px;">
                                                </div> -->
                                                <div class= "form-group-regis">
                                                    <input type="submit" class="btnRegister"  value="Đăng Kí"/>
                                                </div>
                                            </form>
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                
                                                
                                                <div class= "form-group">
                                                    <input type="submit" class="btnRegister"  value="Register"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>