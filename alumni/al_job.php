<!-- top nav of the page -->
<?php 
  require_once('inc/top.php');
 ?>
<!-- end of top nav  -->
    
  </head>
  <body>
    <!-- header and nav bar of the alumni page -->
    
    <?php 
      require_once('inc/head_nav.php');
     ?>
    <!--  end of the head and nav bar of page -->
             
          <div class="container al_mentor">
           <div class="row">
            <div class="page_head">
              <h2>Job Portal</h2>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6">
              <div class="aljob_image">
                <img src="img/aljob.jpg" alt="Job Image">
              </div>
              <div class="post_panel">
                <input type="submit" value="Post New Job" data-toggle="tab" href="#select1" class="post_job">
                <div class="tab-pane fade" id="select1">
                  <form action="act_job.php" name="post_job" id="post_job" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for=""></label>
                  </div>
                  <div class="form-group">
                    <label for="job_title"><h4>Job Title : *</h4></label>
                    <input type="text" name="job_title" id="job_title" required="" maxlength="100" placeholder="Add Job Title" class="form-control" value="">
                  </div>
                  <div class="form-group">
                    <label for="Message"><h4>Job Description : *</h4></label>
                  </div>
                  <div class="text-area">
                    <textarea name="job_descp" id="job_descp" class="form-control" rows="5" cols="30" style="resize: none;" placeholder="Write Your Job details here......." required="" maxlength="1000">some description</textarea>
                  </div>
                  <div class="form-group">
                    <label for="dead_line"><h4>Last Date : *</h4></label>
                    <input type="Date" name="last_date" id="last_date" placeholder="Select Date" class="form-control" required="" value="2018-03-29">
                  </div>
                  <div class="form-group">
                    <label for="apply link"><h4>Apply Link : *</h4></label>
                    <input type="text" name="apply_link" id="apply_link" placeholder="Put Apply Link" class="form-control" required="" value="not available">
                  </div>
                  <div class="form-group">
                    <span>
                      <label for="Select_image"><h4>Select a Job Image(Max Size : 200KB) : *</h4></label>
                      <input type="file" name="img" required="">
                    </span>
                  </div>
                  <div class="btn_panel">
                    <input type="submit" name="btn_save" id="btn_save" value="Submit" class="sav_btn_job">
                  </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 col-lg-6 col-xs-6 al_job_search">
               <div class="search_panel">
                <form action="al_job.php" name="st_job" id="st_job" method="post">           
                  <div class="form-group">
                    <input type="text" placeholder="Job Title...." class="form-control" name="st_job_title" id="al_job_title" required="">
                    <input type="submit" class="job_sea_button" value="Search" name="st_job_search" id="st_job_search">
                  </div>
                </form>
                
                  <div class="ser_result">
                    <?php 
  if (isset($_POST['st_job_search'])) {
   $st_job_title = $_POST['st_job_title'];
   $find_qry = "SELECT * FROM `aes_job` WHERE `job_title` LIKE '$st_job_title%'";
   $find_run = mysqli_query($con,$find_qry) or die("can't fetch the data from database".mysqli_error($con));
   if (mysqli_num_rows($find_run) > 0){
    while ($f_job = mysqli_fetch_assoc($find_run)) { ?>
                    <div class="row">
                      <div class="col-xs-4">
                        <img src="../img/<?php echo $f_job['image'] ?>" alt="Job Image">
                      </div>
                      <div class="col-xs-8 job_descp">
                        <h4 style="text-transform: uppercase;color: #7F0909;"><?php echo $f_job['job_title'] ?></h4>
                        <p>
                           <?php echo $f_job['job_descp'] ?>
                         <a href="<?php echo $f_job['apply_link'] ?>" class="btn btn-primary btn-xs apply">Apply</a>
                        </p>
                        <i class="fa fa-clock-o" style="color: #558CBD; font-size: 15px;">&nbsp;Last Date: <?php echo $f_job['last_date'] ?></i>
                      </div>
                    </div>
                    <hr>
                   <?php
     }

   }
   else{
    echo "There is not Posted any job which you looking for... ";
   } 
  }
  
 ?> 
                  </div>
               </div>
            </div>
            </div>
          </div>
          </div>

          
<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer section -->