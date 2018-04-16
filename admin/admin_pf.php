<?php require_once('inc/header.php'); ?>
  </head>
  <body>
  <!-- ================== start of admin header section ================== -->
  <div class="container main_wrapper">
    <?php require_once('inc/admin_head.php'); ?>
    <hr>

<?php 
  // delete the author data
if (isset($_GET['del'])) {
 // write query for delete the author data
  $del_id = $_GET['del'];
  $del_query = "DELETE FROM `aes_admin` WHERE `aes_admin`.`admin_id` = $del_id";
  $del_run = mysqli_query($con, $del_query) or die("can not deleted the data".mysqli_error($con));
  if ($del_run) {
    header("Location: admin_pf.php");
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


                <?php 

                  // fetch the data from the admin profle
                  $admin_qr = "SELECT * FROM `aes_admin`";
                  $admin_run = mysqli_query($con, $admin_qr) or die("can not fetch the data".mysqli_error($con));
                  if (mysqli_num_rows($admin_run  ) > 0) {
                    $admin = mysqli_fetch_assoc($admin_run);
                    
                  }

                 ?>
                
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-lg-6 ad_details">
                    <div class="admin_img">
                      <img src="img/<?php echo $admin['admin_image'] ?>" alt="Admin Image">
                    </div>
                   
                    <form action="action_adpf.php" name="admin_profile" id="admin_profile" method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="admin id"><h5>Admin ID:</h5></label>
                        <input type="text" name="admin_id" id="admin_id" class="form-control" value="<?php echo $admin['admin_id'] ?>">
                        <label for="admin name"><h5>Name : *</h5></label>
                        <input type="text" name="admin_name" id="admin_name" required="" class="form-control" value="<?php echo $admin['admin_name'] ?>">
                        <label for="email id"><h5>Email Id : *</h5></label>
                        <input type="text" name="admin_email" required="" id="admin_email" class="form-control" value="<?php echo $admin['admin_email'] ?>">
                        <label for="contact no"><h5>Contact No : *</h5></label>
                        <input type="text" name="admin_contact" maxlength="10" required="" id="admin_contact" class="form-control" value="<?php echo $admin['admin_contact'] ?>">
                        <label for="address"><h5>Address : *</h5></label>
                        <input type="text" name="admin_address" required="" id="admin_address" class="form-control" value="<?php echo $admin['admin_address'] ?>">
                        <label for="profile image"><h5>Selecet Profle Image : *</h5></label>
                        <input type="file" name="admin_image" id="admin_image" required="">
                        
                      </div>
                      <div class="form-group">
                        <input type="submit" name="btn_update" id="btn_save" value="Update" class="btn btn-warning" style="width: 100px; margin-top: 20px;">
                      </div>
                   </form> 
                          
                  </div>
                  <div class="col-md-6 col-sm-6 col-lg-6 author_det">
                    <div class="author_title">
                      <h4>Create Author :</h4>
                      <hr>
                    </div>
                    <div class="author_body">
                      <form action="action_adpf.php" name="create_author" id="create_author" method="post">
                        <div class="form-group">
                          <input type="email" name="author_email" id="author_email" class="form-control" placeholder="Email id..">
                        </div>
                        <div class="form-group">
                          <input type="password" name="author_password" id="author_password" class="form-control" placeholder="Password..">
                        </div>
                        <div class="btn_panel">
                          <input type="submit" name="author_create" id="author_create" class="btn btn-warning" value="Save" style="width: 100px">
                        </div>
                      </form>
                    </div>
                    <br><br>
                    <div class="author_title">
                      <h4>Author List :</h4>
                      <hr>
                    </div>
                    <table class=" table table-bordered">
                      <thead style="background-color:#18A5C3; color: white;">
                        <tr>
                          <th>ID</th>
                          <th>Author Email</th>
                          <th>Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                          // fetch the author details from table
                          $author_qr ="SELECT * FROM `aes_admin` ";
                          $author_run = mysqli_query($con, $author_qr);
                          if (mysqli_num_rows($author_run) > 0) {
                            while ($author = mysqli_fetch_assoc($author_run)) { ?>

                        <tr>
                          <td><?php echo $author['admin_id'] ?></td>
                          <td><?php echo $author['admin_email'] ?></td>
                          <td><a href="<?php $_SERVER['PHP_SELF'] ?> ?del=<?php echo $author['admin_id'] ?>"><i class="fa fa-close fa-lg" style="color: #E94444;"></i></a></td>
                        </tr>
                      </tbody>
                       <?php
                             
                            }
                          }
                          else{
                            echo "NO Author Found in the Database";
                          }

                         ?>
                    </table>

                  </div>
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