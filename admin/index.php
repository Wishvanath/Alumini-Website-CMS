<?php require_once('inc/header.php'); ?>
  </head>
  <body>

 <!-- start for admin dashbord -->
 <div class="container admin_dashboard">
   <div class="row">
     <div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-2 col-xs-4  ad_main">
      <div class="panel panel-default">
        <h4>Login With :</h4><br>
        <span><i class="fa fa-facebook"></i></span>
        <span><i class="fa fa-twitter"></i></span>
        <span><i class="fa fa-google-plus"></i></span>
        <br><br>
        <h4>OR</h4><hr>
        <div class="panel-body">
          <form action="inc/login.php" method="post" id="admin_form">
            <div class="form-group">
              <input type="email" name="admin_email" placeholder="Enter Email...." class="form-control" required="" maxlength="50">
            </div>
            <div class="form-group">
              <input type="password" name="admin_password" placeholder="Enter Password" class="form-control" required="" maxlength="50">
            </div>
            <div class="checkbox">
              <label style="float: left; margin-bottom: 10px; font-size: 15px;" ><input type="checkbox" name="remember_me"> Remember me</label>
            </div>
            <div class="form-group">
              <input type="submit" name="login_btn" value="Login" class="btn btn-success btn-lg btn-block">
            </div>

          </form>
          
        </div><!-- panel body -->
        <div class="lock">
          <i class="fa fa-lock fa-3x"></i>
        </div>
        <div class="label">
          <h5>Admin Dashboard</h5>
        </div>
        <div class="err_msg">
          <h4 id="err_message"></h4>
        </div>
      </div><!-- panel default -->
       
     </div> <!-- end of col-md-offset-4  -->
   </div><!-- end of row  -->
 </div><!--end of container  -->
  <!-- end of the admin dashbord -->





   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>