
<?php 

session_start();
  if($_SESSION['admin_login']){
    //keep on same page 
    $admin_email = $_SESSION['admin_email'];
  }
  else{
    //redirect on login
    header("Location: index.php");
  }
 ?>

<div class="row">
      <div class="col-md-2 header_logo">
        <img src="img/logo.png" alt="Header Logo Image">
      </div>
      <div class="col-md-8 header_title">
        <h1>
          welcome to admin control panel
        </h1> 
      </div>
      <div class="col-md-2 header_logout">
        <a href="inc/logout.php" class="btn btn-warning">Logout</a>
      </div>
</div>