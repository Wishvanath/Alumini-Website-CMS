<!-- include of top nav of website --> 
<?php 
  require_once('inc/top.php');
?>
<!-- end of top nav section -->

  </head>
  <body>
    <!-- header and nav of the alumni page -->
    
    <?php 
      require_once('inc/head_nav.php');
     ?>
    <!-- end of head and nav section -->
     <?php 
                      // fetch the data from alumni table

        $pf_query = "SELECT * FROM `aes_alumni` WHERE `aes_alumni`.`email_id` = '$session_id'";
        $pf_run = mysqli_query($con, $pf_query) or die("can not fetch the data from database".mysqli_error($con));
        if (mysqli_num_rows($pf_run)>0) {
        $pf_det = mysqli_fetch_assoc($pf_run);
        //echo $mentor_det['first_name'];
        }
     ?> 

         <!-- for mentor details  -->

         <div class="container al_mentor">
          <div class="row">
            <div class="page_head">
              <h2>Profile :</h2>
            </div>
          </div> 

           <div class="row">
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
             <div class="col-sm-6 col-md-6 col-lg-6 men_reg">
              <div class="pf_image">
                <img src="../img/<?php echo $pf_det['image'] ?>" alt="">
              </div>
               <div class="btn_pannel" >
                
                <!-- end of php code -->
                    <input type="submit" class="mentor_button" value="Update" data-toggle="tab" href="#select">
                    <div class="tab-pane fade" id="select">
                     <form action="act_pf.php"  method="post" enctype="multipart/form-data">
                       <div class="form-group"> 
                          <label for="alumni_id"><h5>Alumni Id :*</h5></label>
                          <input type="text" name="alumni_id" id="alumni_id" class="form-control" value="<?php echo $pf_det['alumni_id'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="first_name"><h5>First Name :*</h5></label>
                         <input type="text" name="first_name" id="first_name" class="form-control" value="<?php echo $pf_det['first_name'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="middle_name"><h5>Middle Name :</h5></label>
                         <input type="text" name="middle_name" id="middle_name" class="form-control" value="<?php echo $pf_det['middle_name'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="last_name"><h5>Last Name :</h5></label>
                         <input type="text" name="last_name" id="last_name" class="form-control" value="<?php echo $pf_det['last_name'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="email_id"><h5>Email Id :*</h5></label>
                         <input type="email" name="email_id" id="email_id" class="form-control" value="<?php echo $pf_det['email_id'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="contact no"><h5>Contact No : *</h5></label>
                         <input type="text" name="contact_no" id="contact_no" class="form-control" value="<?php echo $pf_det['contact_no'] ?>">
                       </div>

                       <div class="form-group">
                         <label for="date_of_birth"><h5>Date of Birth : *</h5></label>
                         <input type="Date" name="date_of_birth" id="date_of_birth" class="form-control" value="<?php echo $pf_det['date_of_birth'] ?>">
                       </div>
                       
                       <div class="form-group">
                         <label for="subject"><h5>Stream : *</h5></label>
                         <input type="text" name="stream" id="stream" class="form-control" value="<?php echo $pf_det['stream'] ?>">
                       </div>
                       
                       <div class="form-group">
                         <label for="passing_year"><h5>Passing Year : *</h5></label>
                         <input type="text" name="passing_year" id="passing_year" class="form-control" value="<?php echo $pf_det['passing_year'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="job_descp"><h5>Job Description : *</h5></label>
                       </div>
                       <div class="text-area">
                         <textarea name="job_descp" id="job_descp" cols="30" rows="10" class="form-control"><?php echo $pf_det['job_descp'] ?></textarea>
                       </div>
                       <br>
                       <div class="form-group">
                        <span>
                          <label for="Select_image"><h5>Select a Profile Image(Max Size : 200KB) : *</h5></label>
                          <input type="file" name="img" id="img" required="">
                        </span>
                      </div>
                      <div class="form-group">
                        <label for="new_password"><h5>New Password :</h5></label>
                        <input type="Password" class="form-control" disabled="">
                      </div>
                       <div class="btn_pannel">
                         <input type="submit" class="men_save" value="Submit" name="al_update" id="al_update">
                       </div>
                     </form>
                    </div>
                </div>
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
           </div> 
        
         </div> 
            

          <!-- end of mentor details -->


<!-- footer section of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer section