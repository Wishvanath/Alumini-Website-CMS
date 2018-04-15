<?php require_once('inc/header.php'); ?>
  </head>
  <body>
  <!-- ================== start of admin header section ================== -->
  <div class="container main_wrapper">
    <?php require_once('inc/admin_head.php'); ?>
    <hr>

<?php 

// delete the information of adjunct professor
if (isset($_GET['del'])) {
 // write query for delete the data
  $del_id = $_GET['del'];
  $del_query = "DELETE FROM `aes_adjn_pf` WHERE `aes_adjn_pf`.`adjn_id` = $del_id";
  $del_run = mysqli_query($con, $del_query) or die("can not delete the data".mysqli_error($con));
  if ($del_run) {
    header("Location:adjunct_pf.php");
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
                  <h4 class="glyphicon glyphicon-bullhorn"></h4><br>Post New Job
                </a>
                <a href="student_list.php" class="list-group-item text-center student_det">
                  <h4 class="glyphicon glyphicon-user"></h4><br>Students Profile
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
                <a href="adjunct_pf.php" class="list-group-item text-center adj_professor active">
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
                <h3>Adjunct Faculty Details :</h3>
              </div>
              <!-- start of Adjunct professor details section -->
              <div class="container-fluid adjunct_pf_list">
                <table class="table table-striped table-responsive table-bordered">
                  <thead style="background-color:#18A5C3; color: white;">
                      
                      <th>Professor Name</th>
                      <th>Contact No</th>
                      <th>Email ID</th>
                      <th>Specilization</th>
                      <th>Teaching Subject</th>
                      <th>Available Hours</th>
                      <th>Available Days</th>
                      <th>Delete</th>
                  </thead>
                  <tbody>
                    <?php 
                      // fetch the data from adjucnt professor table
                    $adj_query = "SELECT * FROM `aes_adjn_pf` ORDER BY `aes_adjn_pf`.`adjn_id` ASC";
                    $run = mysqli_query($con, $adj_query) or die("can not fetch the data from database");
                    if(mysqli_num_rows($run) > 0){
                      while ($adjn = mysqli_fetch_assoc($run)) { ?>

                      <tr>
                        
                        <td><?php echo $adjn['adjn_name'] ?></td>
                        <td><?php echo $adjn['adjn_contact_no'] ?></td>
                        <td><?php echo $adjn['adjn_email'] ?></td>
                        <td><?php echo $adjn['adjn_sp'] ?></td>
                        <td><?php echo $adjn['subject'] ?></td>
                        <td><?php echo $adjn['avl_hours'] ?></td>
                        <td><?php echo $adjn['avl_days'] ?></td>
                         <td><a href="<?php $_SERVER['PHP_SELF'] ?> ?del=<?php echo $adjn['adjn_id'] ?>"><i class="fa fa-close fa-lg" style="color: #E94444;"></i></a></td>
                      </tr>
                      <?php  
                       
                      }
                    }
                    else{
                      echo "data not found ";
                    }


                     ?>
 
                      
                     
                  </tbody>
                           
                </table>
              </div>
              <!-- end of adjunct professor details section -->

              
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

       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>