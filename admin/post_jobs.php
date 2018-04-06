<?php require_once('inc/header.php'); ?>
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
                <a href="post_jobs.php" class="list-group-item text-center post_jobs active">
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
                <h3>Post a New JOB :</h3>
              </div>
              <!-- latest job section -->
              <div class="col-md-7 latest_jobs">
                <?php 
                     $old_job_query = "SELECT * FROM `aes_job` ORDER BY `aes_job`.`post_date` DESC";
                      $old_run = mysqli_query($con,$old_job_query) or die("cannot fetch the data from database" .mysqli_error($con));
                      if ($old_run) {
                        $job = mysqli_fetch_assoc($old_run); ?>
                <form action="action_job.php" name="job_form" id="job_form" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="job_title"><h4>Job Title : *</h4></label>
                    <input type="text" name="job_title" id="job_title" required="" maxlength="100" placeholder="Add Job Title" class="form-control" value="<?php echo $job['job_title']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="Message"><h4>Job Description : *</h4></label>
                  </div>
                  <div class="text-area">
                    <textarea name="job_descp" id="job_descp" class="form-control" rows="12" cols="30" style="resize: none;" placeholder="Write Your Job details here......." required="" maxlength="1000"><?php echo $job['job_descp']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="dead_line"><h4>Last Date : *</h4></label>
                    <input type="Date" name="last_date" id="last_date" placeholder="Select Date" class="form-control" required="" value="<?php echo $job['last_date']; ?>">
                  </div>
                  <div class="form-group">
                    <label for="apply link"><h4>Apply Link : *</h4></label>
                    <input type="text" name="apply_link" id="apply_link" placeholder="Put Apply Link" class="form-control" required="" value="<?php echo $job['apply_link']; ?>">
                  </div>
                  <div class="form-group">
                    <span>
                      <label for="Select_image"><h4>Select a Job Image : *</h4></label>
                      <input type="file" name="img">
                    </span>
                  </div>
                  <br><br>
                  <?php
                     }
                   ?>
            <!--close of php tag  -->
                  <div class="button_panel">
                    <div class="row">
                      <div class="col-sm-4 col-xs-4">
                        <input type="submit" name="btn_save" id="btn_save" class="btn btn-primary btn-group-justified" value="Save">
                        
                      </div>
                      <div class="col-sm-4 col-xs-4">
                        <input type="submit" name="btn_update" id="btn_update" class="btn btn-warning btn-group-justified" value="Update" >
                        
                      </div>
                      <div class="col-sm-4 col-xs-4">
                        <input type="submit" name="btn_delete" id="btn_delete" class="btn btn-danger btn-group-justified" value="Delete">
                       
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end of latest job section -->
              <!-- for old message section -->
              <div class="col-md-5 od_news">
                <label for="old job"><h4>Old Jobs :</h4></label>
                <div class="old_news" id="nec_scroll">
                <!-- php code  -->
                
                  <?php 
                      $old_job_query = "SELECT * FROM `aes_job` ORDER BY `aes_job`.`post_date` DESC";
                      $old_run = mysqli_query($con,$old_job_query) or die("cannot fetch the data from database" .mysqli_error($con));
                      if ($old_run) {
                        //echo "we got the data from database";
                        //echo mysqli_num_rows($old_run);
                        if (mysqli_num_rows($old_run) > 0) {
                          // execute this code
                          while ($job = mysqli_fetch_assoc($old_run)) { ?>
                          <h4 style="text-decoration: underline; color: #AF1B1B; font-size: 13px; text-transform: uppercase;"><?php echo $job['job_title']; ?></h4>
                           <p>
                                <?php echo substr($job['job_descp'], 0,300). '....'?>                                             
                            </p>
                            <span class="published_date"><i class="fa fa-clock-o">&nbsp;&nbsp;<?php echo $job['post_date']; ?></i></span>
                            <hr>
                         <?php   
                          }
                          
                        }

                        else{
                          echo "Old Message not found in database";
                        }
                      }
                     ?>
                 


                  
                </div>
              </div>
              <!-- end of old message section -->  
              
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