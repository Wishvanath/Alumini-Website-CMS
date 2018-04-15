<?php require_once('inc/header.php'); ?>
  </head>
  <body>
  <!-- ================== start of admin header section ================== -->
  <div class="container main_wrapper">
    <?php require_once('inc/admin_head.php'); ?>
    <hr>

<?php 
// delete old student message
if (isset($_GET['del'])) {
  $msg_id = $_GET['del'];
  $query = "DELETE FROM `aes_st_msg` WHERE `aes_st_msg`.`st_msg_id` = $msg_id";
  $run = mysqli_query($con, $query) or die("Can not delete the data".mysqli_error($con));
  if ($run) {
    header("Location:student_msg.php");
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
                <a href="mentor_list.php" class="list-group-item text-center mentor_det">
                  <h4 class="glyphicon glyphicon-eye-open"></h4><br>Mentor Profile
                </a>
                <a href="student_msg.php" class="list-group-item text-center mentee_det active">
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
                <h3>Message for Student :</h3>
              </div>
              <!-- start of student message section -->
              <div class="student_msg">
                  <div class="col-sm-7 col-md-7 col-lg-7 new_msg">
                    <div class="msg_head">
                      <h4>NEW MESSAGE :</h4>
                    </div>
                    <div class="msg_body">
                      <form action="action_stmsg.php" name="student_message" id="student_message" method="post">
                        <div class="form-group">
                          <textarea name="st_message" id="st_message" cols="30" rows="20" class="form-control" placeholder="Type New Message" required=""></textarea>
                        </div>
                        <div class="form-group">
                          <input type="submit" name="btn_save" id="btn_save" class="btn btn-primary" value="Save" style="width: 100px; margin-top: 20px;">
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="col-sm-5 col-md-5 col-lg-5 old_message">
                    <div class="msg_head">
                      <h4>OLD MESSAGE</h4>
                    </div>
                              
                    <div class="old_msg">
                      <?php 
                      // fetch old student message data from the table
                      $st_msg_query = "SELECT * FROM `aes_st_msg` ORDER BY `aes_st_msg`.`post_date` DESC ";
                      $st_run = mysqli_query($con, $st_msg_query) or die("can not fetch the data".mysqli_error($con));
                      if (mysqli_num_rows($st_run) > 0) {
                        while ($st_msg = mysqli_fetch_assoc($st_run)) { ?>
                          
                      <p>
                        <?php echo $st_msg['st_message'] ?>
                      </p>
                      <i class="fa fa-clock-o " style="color: #D79522;"><?php echo $st_msg['post_date'] ?></i>
                      <a href="<?php $_SERVER['PHP_SELF'] ?>?del= <?php echo $st_msg['st_msg_id'] ?>">
                        <i class="fa fa-close fa-lg" style="color: #BB0B0B; float: right;"></i>
                      </a>
                      <hr>

                    <?php
                        }
                      }
                      else{
                        echo "Data not found";
                      }
                     ?>
                    </div>

                  </div>
               </div>
              <!-- end of student message section -->
             

              
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