<?php require_once('inc/header.php'); ?>


  </head>
  <body>
  <!-- ================== start of admin header section ================== -->
  <div class="container main_wrapper">
    <?php require_once('inc/admin_head.php'); ?>
    <hr>
<?php 
if (isset($_GET['edit'])) {
  $mentor_id = $_GET['edit'];
  $query = "SELECT * FROM `aes_mentor` WHERE `aes_mentor`.`mentor_id` = $mentor_id";
    $run = mysqli_query($con, $query) or die("Can't fetch the data from database.".mysql_error($con));
    if($run){
      $mentor = mysqli_fetch_assoc($run);

    }
    else{
      echo "data not found in the database";
    }
}

// update the data
if (isset($_POST['btn_update'])) {
  // to check button is pressed or not
  $mentor_name = $_POST['mentor_name'];
  $email_id = $_POST['email_id'];
  $contact_no = $_POST['contact_no'];
  $mentor_pf = $_POST['mentor_pf'];
  $mentor_sp = $_POST['mentor_sp'];
  $available_hours = $_POST['available_hours'];
  $available_days = $_POST['available_days'];

  // run the query
  $query = "UPDATE `aes_mentor` SET `mentor_name` = '$mentor_name', `email_id` = '$email_id', `contact_no` = '$contact_no', `mentor_pf` = '$mentor_pf', `mentor_sp` = '$mentor_sp', `available_hours` = '$available_hours', `available_days` = '$available_days' WHERE `aes_mentor`.`mentor_id` = $mentor_id";
  $run = mysqli_query($con, $query)or die("Can not updated the data".mysqli_error($con));
  if ($run) {
    header("Location:mentor_list.php");
  }

}



 ?>


    <!-- for list group -->
    <div class="row">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
            <div class="list-group">
                
                <a href="home.php" class="list-group-item text-center chairman_msg">
                  <h4 class="fa fa-envelope"></h4><br>Chairman Message
                </a>
                <a href="post_news.php" class="list-group-item text-center post_news">
                  <h4 class="glyphicon glyphicon-comment"></h4><br>Post News
                </a>
                 <a href="post_events.php" class="list-group-item text-center post_events">
                  <h4 class="glyphicon glyphicon-calendar"></h4><br>Post Events
                </a>
                <a href="post_jobs.php" class="list-group-item text-center post_jobs">
                  <h4 class="glyphicon glyphicon-bullhorn"></h4><br>Post New Jobs
                </a>
                <a href="student_list.php" class="list-group-item text-center student_det">
                  <h4 class="glyphicon glyphicon-user"></h4><br>Student Profile
                </a>
                <a href="alumni_list.php" class="list-group-item text-center alumni_det">
                  <h4 class="glyphicon glyphicon-education"></h4><br>Alumni Profile
                </a>
                <a href="mentor_list.php" class="list-group-item text-center mentor_det active">
                  <h4 class="glyphicon glyphicon-eye-open"></h4><br>Mentor Profile
                </a>
                <a href="student_msg.php" class="list-group-item text-center mentee_det">
                  <h4 class="glyphicon glyphicon-user"></h4><br>Message for Student
                </a>
                <a href="faculty.php" class="list-group-item text-center teacher_det">
                  <h4 class="glyphicon glyphicon-king"></h4><br>Teacher Profile
                </a>
                <a href="adjunct_pf.php" class="list-group-item text-center adj_professor">
                  <h4 class="glyphicon glyphicon-star"></h4><br>Adjunct Professor
                </a>
                <a href="payment.php" class="list-group-item text-center payment_det">
                  <h4 class="glyphicon glyphicon-credit-card"></h4><br>Payment Details
                </a>
                <a href="gall_img.php" class="list-group-item text-center update_gal">
                  <h4 class="glyphicon glyphicon-picture"></h4><br>Update Gallary
                </a>
                <a href="admin_pf.php" class="list-group-item text-center admin_profile">
                  <h4 class="glyphicon glyphicon-cog"></h4><br>Admin Profile
                </a>
              </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
          <div class="bhoechie-tab-content active">
            <div class="row">
              <div class="head_title">
                <h3 style="text-align: center; font-weight: bolder;">UPDATE MENTOR DETAILS</h3>
              </div>
              <!-- start of student details section -->
              <div class="container-fluid alumni_data">

                <div class="row">
                  <div class="col-md-8 col-md-offset-2 alumni_upd">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" name="mentor_update form" method="post">
                      <div class="form-group">
                      <center>
                        <label for="mentor_id">Mentor ID :</label>
                      <input type="text" name="mentor_id" id="mentor_id" value="<?php echo $mentor['mentor_id'] ?>" class="form-control" disabled="" style="width: 200px;">
                      </center>
                    </div>
                    <div class="form-group">
                      <label for="first name">Mentor Name :</label>
                      <input type="text" name="mentor_name" id="mentor_name" value="<?php echo $mentor['mentor_name'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="Email_id">Email Id :</label>
                      <input type="email" name="email_id" id="email_id" value="<?php echo $mentor['email_id'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="Contact no">Contact No :</label>
                      <input type="text" name="contact_no" id="contact_no" value="<?php echo $mentor['contact_no'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="mentor profile">Mentor Profile :</label>
                      <input type="text" name="mentor_pf" id="mentor_pf" value="<?php echo $mentor['mentor_pf'] ?>"  class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="mentor Specialization">Mentor Specialization :</label>
                      <input type="text" name="mentor_sp" id="mentor_sp" value="<?php echo $mentor['mentor_sp'] ?>" class="form-control">
                    </div>
                    
                    <div class="form-group">
                      <label for="available hours">Available Hours :</label>
                      <input type="text" name="available_hours" id="available_hours" value="<?php echo $mentor['available_hours'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="available days">Available Days :</label>
                      <input type="text" name="available_days" id="available_days" value="<?php echo $mentor['available_days'] ?>" class="form-control">
                    </div>
                    
                                        
                    <div class="button_pane">
                      <input type="submit" name="btn_update" id="btn_update" value="Update" class="btn btn-primary" style="width: 150px; float: right;" >
                    </div>
                    </form>
                  </div>
                </div>
              </div>
           </div>
        </div>
    </div><!-- end of list group -->
   </div> <!-- end of wrapper class -->

  <!-- ================== end of admin header section =================== -->
     <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>