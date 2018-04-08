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

<!-- find job of student section -->




<!-- end of find job section -->

             
          <div class="container al_mentor">
           <div class="row">
            <div class="page_head">
              <h2>Job Portal</h2>
            </div>
            <div class="col-md-2 col-sm-2 col-lg-2"></div>
            <div class="col-md-8 col-sm-8 col-lg-8 al_job_search">
              <div class="search_panel">
                <form action="st_job.php" name="st_job" id="st_job" method="post">           
                  <div class="form-group">
                    <input type="text" placeholder="Job Title...." class="form-control" name="st_job_title" id="st_job_title">
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
            <div class="col-md-2 col-sm-2 col-lg-2"></div>
          </div>
          </div>

          
<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer section