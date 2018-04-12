<?php require_once('inc/header.php'); ?>
<?php 
  // fetch the data from student table
  if (isset($_GET['upd'])) {
    $student_id = $_GET['upd'];
    $query = "SELECT * FROM `aes_student` WHERE `aes_student`.`student_id`= $student_id";
    $run = mysqli_query($con, $query) or die("Can't fetch the data from database.".mysql_error($con));
    if($run){
      $student = mysqli_fetch_assoc($run);

    }
    else{
      echo "data not found in the database";
    }
  }
 ?>
<?php 
  // update the data 
  if (isset($_POST['btn_update'])) {
    // to check button is pressed or not
    //echo "update button is pressed";
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $date_of_birth = $_POST['date_of_birth'];
    $email_id = $_POST['email_id'];
    $address = $_POST['address'];
    $contact_no = $_POST['contact_no'];
    $stream = $_POST['stream'];
    $academic_year = $_POST['academic_year'];
    //$password = mysqli_escape_string($con,trim(md5($_POST['password'])));
    $query = "UPDATE `aes_student` SET `first_name` = '$first_name', `middle_name` = '$middle_name', `last_name` = '$last_name', `date_of_birth` = '$date_of_birth', `address` = '$address', `email_id` = '$email_id', `contact_no` = '$contact_no', `stream` = '$stream', `academic_year` = '$academic_year' WHERE `aes_student`.`student_id` = $student_id";
    $run = mysqli_query($con, $query);
    if ($run) {
      header("Location:student_list.php");
    }


  }
  

 ?>
  </head>
  <body>
  <!-- ================== start of admin header section ================== -->
  <div class="container main_wrapper">
    <?php require_once('inc/admin_head.php'); ?>
    <hr>



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
                <a href="student_list.php" class="list-group-item text-center student_det active">
                  <h4 class="glyphicon glyphicon-user"></h4><br>Student Profile
                </a>
                <a href="alumni_list.php" class="list-group-item text-center alumni_det">
                  <h4 class="glyphicon glyphicon-education"></h4><br>Alumni Profile
                </a>
                <a href="mentor_list.php" class="list-group-item text-center mentor_det">
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
                <h3 style="text-align: center; font-weight: bolder;">UPDATE STUDENT DETAILS</h3>
              </div>
              <!-- start of student details section -->
              <div class="container-fluid student_data">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2 student_upd">
                    <form action="<?php $_SERVER['PHP_SELF'] ?>" name="student_update form" method="post">
                      <div class="form-group">
                      <center>
                        <label for="student id">Student ID :</label>
                      <input type="text" name="student_id" id="student_id" value="<?php echo $student['student_id'] ?>" class="form-control" disabled="" style="width: 200px;">
                      </center>
                    </div>
                    <div class="form-group">
                      <label for="first name">First Name :</label>
                      <input type="text" name="first_name" id="first_name" value="<?php echo $student['first_name'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="middle_name">Middle Name :</label>
                      <input type="text" name="middle_name" id="middle_name" value="<?php echo $student['middle_name'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="last name">Last Name :</label>
                      <input type="text" name="last_name" id="last_name" value="<?php echo $student['last_name'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="date of birth">Date of Birth :</label>
                      <input type="date" name="date_of_birth" id="date_of_birth" value="<?php echo $student['date_of_birth'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="email">Email ID :</label>
                      <input type="email" name="email_id" id="email_id" value="<?php echo $student['email_id'] ?>" class="form-control">
                    </div>
                    <div class="for-group">
                      <label for="address">Address :</label>
                    </div>
                    <div class="form-group">
                      <textarea name="address" id="address" cols="10" rows="5" class="form-control"><?php echo $student['address']; ?></textarea>
                    </div>
                    <div class="form-group">
                      <label for="contact no">Contact No :</label>
                      <input type="text" name="contact_no" id="contact_no" value="<?php echo $student['contact_no'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="stream">Stream :</label>
                      <input type="text" name="stream" id="stream" value="<?php echo $student['stream'] ?>" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="stream">Academic Year :</label>
                      <input type="text" name="academic_year" id="academic_year" value="<?php echo $student['academic_year'] ?>" class="form-control">
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