<?php require_once('inc/header.php'); ?>
<!-- php code for delete the data  -->
<?php 
  if (isset($_GET['del'])) {
    $student_id = $_GET['del'];
    $query_img = "SELECT * FROM `aes_student` WHERE `aes_student`.`student_id`= $student_id";
    $run_img = mysqli_query($con,$query_img);
    if($run_img){
      $student_img = mysqli_fetch_assoc($run_img);
      $st_image_del = $student_img['image'];

    }
    $query = "DELETE FROM `aes_student` WHERE `aes_student`.`student_id` = $student_id";
    $run = mysqli_query($con, $query)or die("cannot delete the data from database".mysqli_error($con));
    if($run) {
      unlink("../img/".$st_image_del);
      header("Location: student_list.php");
    }
  }
  
 ?>
 <!-- end of the delete command -->
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
                <a href="mentee_list.php" class="list-group-item text-center mentee_det">
                  <h4 class="glyphicon glyphicon-user"></h4><br>Mentee Profile
                </a>
                <a href="faculty.php" class="list-group-item text-center teacher_det">
                  <h4 class="glyphicon glyphicon-king"></h4><br>Our Teacher
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
                <h3>Student Details :</h3>
              </div>
              <!-- start of student details section -->
              <div class="container-fluid student_list">
               
                      
                   
                <table class="table table-striped table-responsive table-bordered">
                  <thead style="background-color:#18A5C3; color: white;">
                    <th>S_Id</th>
                    <th>First Name</th>
                    <th>Email Id</th>
                    <th>Contact No</th>
                    <th>D-O-B</th>
                    <th>Session</th>
                    <th>Stream</th>
                    <th>Address</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </thead>
                   <!-- start of php code  -->
                <?php 
                  $query = "SELECT * FROM `aes_student`";
                  $run = mysqli_query($con, $query) or die("Can't  fetch the data from database".mysqli_error($con));
                  if ($run) {
                    while ($student = mysqli_fetch_assoc($run)) { ?>
                  <tbody>
                    <tr>
                    <td><?php echo $student['student_id']; ?></td>
                    <td><?php echo $student['first_name']; ?></td>
                    <td><?php echo $student['email_id']; ?></td>
                    <td><?php echo $student['contact_no']; ?></td>
                    <td><?php echo $student['date_of_birth']; ?></td>
                    <td><?php echo $student['academic_year']; ?></td>
                    <td><?php echo $student['stream']; ?></td>
                    <td><?php echo $student['address']; ?></td>
                    <td><a href="st_update.php?upd=<?php echo $student['student_id'] ?>"><i class="fa fa-edit fa-lg" style="color:#F8A427;"></i></a></td>
                    <td><a href="<?php $_SERVER['PHP_SELF'] ?>?del= <?php echo $student['student_id'] ?>"><i class="fa fa-close fa-lg" style="color: #E94444;"></i></a></td>
                    </tr>
                    
                  </tbody>
                  <?php
               }
                    
                  }
                  else{
                    echo "Data is not available in database";
                  }
                 ?>
                </table>

              </div>
              
              <!-- end of student details section -->

              
            </div>
            <div class="row">
               <div class="container">
                <div class="col-md-3 col-sm-3 col-xs-3"></div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                         <ul class="pagination">
                            <li><a href="#">1</a></li>
                            <li class="active"><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                         </ul> 
                     </div>
               <div class="col-md-3 col-sm-3 col-xs-3 "></div>
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