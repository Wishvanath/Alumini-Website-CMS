<?php require_once('inc/header.php'); ?>
  </head>
  <body>
  <!-- ================== start of admin header section ================== -->
  <div class="container main_wrapper">
    <?php require_once('inc/admin_head.php'); ?>
    <hr>

<?php 
  // delete the gallary data
  if (isset($_GET['del'])) {
    $del_id = $_GET['del'];
    $img_qr = "SELECT * FROM `aes_gallary` WHERE `aes_gallary`.`gal_id` = $del_id ";
    $img_rn = mysqli_query($con, $img_qr) or die("can not fetch the data");
    if ($img_rn) {
      $old_img = mysqli_fetch_assoc($img_rn);
      $old_img1 = $old_img['img1'];
      $old_img2 = $old_img['img2'];
      $old_img3 = $old_img['img3'];
      $old_img4 = $old_img['img4'];

    }
    $del_query = "DELETE FROM `aes_gallary` WHERE `aes_gallary`.`gal_id` = $del_id";
    $del_run = mysqli_query($con, $del_query) or die("Can not deleted the data from database".mysqli_error($con));
    if ($del_run) {
      unlink("../img/".$old_img1);
      unlink("../img/".$old_img2);
      unlink("../img/".$old_img3);
      unlink("../img/".$old_img4);
      header("Location: gall_img.php");
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
                <a href="gall_img.php" class="list-group-item text-center update_gal active">
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
                <h3>Upload Image for Gallery :</h3>
              </div>
              <div class="col-md-6 col-sm-6 col-lg-6 gal_section">
                <form action="action_img.php" name="gallary_form" id="gallary_form" method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label for="gal title"><h4>Gallary Title : *</h4></label>
                    <input type="text" name="gal_title" id="gal_title" class="form-control" required="">
                  </div>
                  <div class="form-group">
                    <label for="image1"><h4>Select First Image : *</h4></label>
                    <input type="file" name="img1" id="img1" required="">
                  </div>
                  <div class="form-group">
                    <label for="image1"><h4>Select Second Image : *</h4></label>
                    <input type="file" name="img2" id="img2" required="">
                  </div>
                  <div class="form-group">
                    <label for="image1"><h4>Select Third Image : *</h4></label>
                    <input type="file" name="img3" id="img3" required="">
                  </div>
                  <div class="form-group">
                    <label for="image1"><h4>Select Fourth Image : *</h4></label>
                    <input type="file" name="img4" id="img4" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" name="btn_save" id="btn_save" class="btn btn-primary" value="Save" style="width: 100px; margin-top: 20px;">
                  </div>
                </form>
              
              </div>
              <div class="col-md-6 col-sm-6 col-lg-6 gal_descp">
                <div class="old_gal_title">
                  <h4>Old Gallary </h4>
                </div>
                  <table class="table table-bordered">
                    <thead style="background-color:#18A5C3; color: white;">
                      <tr>
                        <th>Gallary ID</th>
                        <th>Gallary Title</th>
                        <th>Publish Date</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                    <?php 
                      // fetch the gallary data from database
                    $old_gal = "SELECT * FROM `aes_gallary` ORDER BY `aes_gallary`.`post_date` DESC ";
                    $run = mysqli_query($con, $old_gal) or die("can not fetch the data".mysqli_error($con));
                    if(mysqli_num_rows($run) > 0){
                      while ($gal = mysqli_fetch_assoc($run)) { ?>

                    <tbody>
                      <tr>
                        <td><?php echo $gal['gal_id'] ?></td>
                        <td><?php echo $gal['gal_title'] ?></td>
                        <td><?php echo $gal['post_date'] ?></td>
                        <td><a href="<?php $_SERVER['PHP_SELF'] ?> ?del=<?php echo $gal['gal_id'] ?>"><i class="fa fa-close fa-lg" style="color: #E94444;"></i></a></td>
                      </tr>
                    </tbody>
                     <?php
                        
                      }
                    }
                    else{
                      echo "Data not found in the database";
                    }

                     ?>
                  </table>
                
              </div>
        
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