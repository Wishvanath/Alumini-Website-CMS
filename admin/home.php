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
                
                <a href="home.php" class="list-group-item text-center chairman_msg active">
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
                <h3>Chairman Message</h3>
              </div>
              <!-- new message section -->
              <div class="col-md-7 new_message">
                <form action="action_home.php" method="post" name="ch_message" id="ch_message" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="Message"><h4>New Message : *</h4></label>
                  </div>
                  <div class="form-group">
                    <?php 
                      $old_msg_query = "SELECT * FROM `aes_message` ORDER BY `aes_message`.`upload_time` DESC ";
                      $old_run = mysqli_query($con,$old_msg_query) or die("cannot fetch the data from database" .mysqli_error($con));
                      if ($old_run) { 
                          $message = mysqli_fetch_assoc($old_run);
                           ?> 
                          <textarea name="message_descp" id="message_descp" maxlength="1000" class="form-control" rows="18" cols="30" style="resize: none;" required="" value =""><?php echo $message['message_descp']; ?></textarea>    

                        <?php                
                        }
                     ?>
                    
                    
                    <br>
                    <span>
                      <label for="Select_image"><h4>Select a Chairman's Image : *</h4></label>
                      <input type="file" name="img" id="img" accept="image/*">
                    </span>
                    <br>
                  </div>
                  <div class="button_panel">
                    <div class="row">
                      <div class="col-sm-4 col-xs-4">
                        <input type="submit" value="Save" class="btn btn-primary btn-group-justified" name="btn_save" id="btn_save">
                        
                      </div>
                      <div class="col-sm-4 col-xs-4">
                        <input type="submit" class="btn btn-warning btn-group-justified" name="btn_update" id="btn_update" value="Update" >
                        
                      </div>
                      <div class="col-sm-4 col-xs-4">
                        <input type="submit" class="btn btn-danger btn-group-justified" name="btn_delete" id="btn_delete" value="Delete">
                       
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- end of new message section -->

              <!-- for old message section -->
              <div class="col-md-5 od_msg">
                <label for="old message"><h4>Old Message :</h4></label>
                 <div class="old_message" id="nec_scroll">
                  <!-- php code  -->
                    <?php 
                      $old_msg_query = "SELECT * FROM `aes_message` ORDER BY `aes_message`.`upload_time` DESC ";
                      $old_run = mysqli_query($con,$old_msg_query) or die("cannot fetch the data from database" .mysqli_error($con));
                      if ($old_run) {
                        //echo "we got the data from database";
                        //echo mysqli_num_rows($old_run);
                        if (mysqli_num_rows($old_run) > 0) {
                          // execute this code
                          while ($message = mysqli_fetch_assoc($old_run)) { ?>
                            
                            <p>
                                <?php echo substr($message['message_descp'], 0,300). '....'?>                                             
                            </p>
                            <span class="published_date"><i class="fa fa-clock-o">&nbsp;&nbsp;<?php echo $message['upload_time']; ?></i></span>
                            <hr>
                         <?php   
                          }
                          
                        }

                        else{
                          echo "Old Message not found in database";
                        }
                      }
                     ?>
              <!-- end of pho code -->
                  
                  
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