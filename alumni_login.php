<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>

<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>


<!-- ====================== start of alumni login window ======================= -->
<div class="alumni_login">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 alumni_window">
        <h3>Alumni Dashboard</h3>
        <form action="al_login.php" name="alumni_login" id="alumni_login" method = "post">
            <div class="form-group"> 
              <label for="email">Email address:</label>
              <input type="email" class="form-control" name="email_id" id="email_id" required="" maxlength="50">
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" name="password" id="pwd" required="" maxlength="50">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" name="re" id="re"> Remember me</label>
            </div>
            <div class="form-group">
              <a href="alumni_reg.php">
              <label for="register">New User / Registration</label>
              </a>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-block" name="al_login_btn">Login</button>
            </div>
              
        </form>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>
<!-- =============== end of alumni login window =================== -->



<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->


