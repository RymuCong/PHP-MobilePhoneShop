<!DOCTYPE html><?php include_once $_SERVER["DOCUMENT_ROOT"].'/configs.php'; ?>

<TITLE><?php echo $web_title;?></TITLE>
<link href="<?php echo web_icon_url(); ?>" rel="icon">

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/ui/adminlogin/Login_v1/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/css/util.css">
	<link rel="stylesheet" type="text/css" href="/ui/adminlogin/Login_v1/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="/ui/adminlogin/Login_v1/images/logo-nhom2.png" alt="IMG">
				</div>
				<form class="login100-form validate-form" action="/admin-login.php" method="post">
				<span class="login100-form-title">
						Admin Login
				</span>
				<?php if ($_SESSION["ERROR_TEXT"]) { ?>
		             <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
		               <button type="button" class="close" data-dismiss="alert">&times;</button>
		             </div>
		             <?php } $_SESSION["ERROR_TEXT"] = null; ?>  
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <INPUT class="input100" name="username" type="text" value="<?php echo $_SESSION['FAILED_USERNAME'];?>">	
                    <!-- <input class="input100" type="text" name="email" placeholder="Email"> -->
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<!-- <input class="input100" type="password" name="pass" placeholder="Password"> -->
                        <INPUT name="password" class="input100" type="password" value="<?php echo $_SESSION['FAILED_PASSWORD'];?>"> 
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" name="go" class="btn btn-primary btn-block" type="submit">
							Đăng nhập
						</button>
					</div>

					<!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Copyright &copy; <?php echo date('Y');?> - Nhóm 2 K35
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="/ui/adminlogin/Login_v1/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/ui/adminlogin/Login_v1/vendor/bootstrap/js/popper.js"></script>
	<script src="/ui/adminlogin/Login_v1/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/ui/adminlogin/Login_v1/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/ui/adminlogin/Login_v1/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="/ui/adminlogin/Login_v1/js/main.js"></script>

</body>
</html>