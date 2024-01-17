<link rel="stylesheet" href="/ui/home/opencart_45570/template_files/style-login.css">
<div class="outer-login">
  <div class="wrapper-login">
    <div class="login-text">
      <button class="cta">
        <i class="icon-chevron-up"></i>
      </button>
      <form class="text3" action="/login.php" method="post">
        <a href="">Login</a>
        <div class="hr2"></div>
        <br>
        <br>
        <?php if ($_SESSION["ERROR_TEXT"]) { ?>
          <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $_SESSION["ERROR_TEXT"]; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
          </div>
        <?php }
        $_SESSION["ERROR_TEXT"] = null; ?>
        <INPUT name="email" type="text" placeholder="Email" value="<?php echo $_SESSION['FAILED_EMAIL']; ?>">
        <br>
        <INPUT name="password" type="password" placeholder="Password" value="<?php echo $_SESSION['FAILED_PASSWORD']; ?>">
        <br>
        <button class="login-btn" name="go" type="submit">
          Đăng Nhập
        </button>
        <button class="signup-btn" formaction="/register.php">Đăng Ký</button>
      </form>
    </div>
    <div class="call-text">
      <h1>Vui lòng <span> đăng nhập </span> </h1>
      <a href="/register.php" class="register-login">Chưa có tài khoản ?</a>
    </div>

  </div>
</div>




<script>
  var cta = document.querySelector(".cta");
  var check = 0;

  cta.addEventListener('click', function(e) {
    var text = e.target.nextElementSibling;
    var loginText = e.target.parentElement;
    text.classList.toggle('show-hide');
    loginText.classList.toggle('expand');
    if (check == 0) {
      cta.innerHTML = "<i class=\"icon-chevron-up\"></i>";
      check++;
    } else {
      cta.innerHTML = "<i class=\"icon-chevron-down\"></i>";
      check = 0;
    }
  })
</script>