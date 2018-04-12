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
                <a href="post_jobs.php" class="list-group-item text-center post_jobs">
                  <h4 class="glyphicon glyphicon-bullhorn"></h4><br>Post New Job
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
                <a href="admin_pf.php" class="list-group-item text-center admin_profile active">
                  <h4 class="glyphicon glyphicon-cog"></h4><br>Admin Profile
                </a>
              </div>
        </div>

        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
          <div class="bhoechie-tab-content active">
            <div class="row">
              <div class="head_title">
                <h3>Admin Profile Details :</h3>
              </div>
              <!-- start of Adjunct professor details section -->
              <div class="container-fluid admin_pf">
                <div class="row">
                  <div class="al_image">
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                      <img src="img/admin.jpg" alt="Admin Image" class="img-circle">
                      <br>
                      <br>
                      <form action="">
                        <div class="form-group">
                          <input type="file" class="ch_pic" value="Change">
                        </div>
                      </form>
                    </div>
                    <div class="col-md-4">
                      
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2"></div>
                  <div class="col-md-8 ad_details">
                    <form action="">
                      <div class="form-group">
                        <label for="admin id"><h4>Admin ID :</h4></label>
                        <input type="text" name="admin_id" class="form-control">
                        <label for="admin name"><h4>Name :</h4></label>
                        <input type="text" name="admin_name" class="form-control">
                        <label for="email id"><h4>Email Id :</h4></label>
                        <input type="text" name="emial_id" class="form-control">
                        <label for="contact no"><h4>Contact No :</h4></label>
                        <input type="text" name="contact_no" class="form-control">
                        <label for="address"><h4>Address :</h4></label>
                        <input type="text" name="address" class="form-control">
                        <label for="password"><h4>Password :</h4></label>
                        <input type="text" name="password" class="form-control">
                        
                      </div>
                   </form> 
                   <div class="row btn_list">
                     <div class="col-sm-4 col-xs-4">
                       <a href="#" class="btn btn-primary btn-group-justified">Save</a>
                     </div>
                     <div class="col-sm-4 col-xs-4">
                       <a href="#" class="btn btn-warning btn-group-justified">Update</a>
                     </div>
                     <div class="col-sm-4 col-xs-4">
                       <a href="#" class="btn btn-danger btn-group-justified">Delete</a>
                     </div>
                   </div>          
                  </div>
                  <div class="col-md-2"></div>
                </div>
              </div>
             <!-- end of admin profile section -->
        
            </div><!-- end of row -->
          </div>
          </div><!-- end of col-lg-9 -->
        </div><!-- end of row -->
    </div><!-- end of list group -->
   </div> <!-- end of wrapper class -->

       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>