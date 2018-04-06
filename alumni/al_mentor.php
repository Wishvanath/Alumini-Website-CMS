<!-- top head of the page -->
<?php 
  require_once('inc/top.php');
 ?>
<!-- end of the top head the page -->
    
  </head>
  <body>
    <!-- header and navbar of the alumni page -->
    
    <?php 
      require_once('inc/head_nav.php');
     ?>
    <!-- end of head and nav of page -->
         <!-- for mentor details  -->
         <div class="container al_mentor">
          <div class="row">
            <div class="page_head">
              <h2>Mentor</h2>
            </div>
             <div class="col-md-6 col-lg-6 col-sm-6 mentor_image">
               <img src="img/mentor.jpg" alt="Mentor Image">
             </div>
             <div class="col-md-6 col-lg-6 col-sm-6 mentor_message">
               <h4>
                <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                 What you want in a mentor is someone who truly cares for you and who will look after your interests and not just their own. When you do come across the right person to mentor you, start by showing them that the time they spend with you is worthwhile.  
                 <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>     
               </h4>
               <img src="img/ment.jpg" alt="Menor scatch Image" style="width: 100%;">
             </div>
           </div> 

           <div class="row">
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
             <div class="col-sm-6 col-md-6 col-lg-6 men_reg">
               <div class="btn_pannel" >
                <!-- start of php code -->
                  <?php 
                      // fetch the data from alumni table

                      $mn_query = "SELECT * FROM `aes_alumni` WHERE `aes_alumni`.`email_id` = '$session_id'";
                      $mn_run = mysqli_query($con, $mn_query) or die("can not fetch the data from database".mysqli_error($con));
                      if (mysqli_num_rows($mn_run)>0) {
                        $mentor_det = mysqli_fetch_assoc($mn_run);
                        //echo $mentor_det['first_name'];
                      }
                   ?>
                <!-- end of php code -->
                    <input type="submit" class="mentor_button" value="Register" data-toggle="tab" href="#select">
                    <div class="tab-pane fade" id="select">
                     <form action="act_ment.php" name="ment_reg" id="ment_reg" method="post" enctype="multipart/form-data">
                       
                       <div class="form-group">
                         <label for="name"><h5>Name :</h5></label>
                         <input type="text" class="form-control" name="mentor_name" id="mentor_name" value="<?php echo $mentor_det['first_name'] ?>" >
                       </div>
                       <div class="form-group">
                         <label for="email"><h5>Email ID : *</h5></label>
                         <input type="email" name="email_id"  id="email_id" class="form-control" value="<?php echo $mentor_det['email_id'] ?>">
                       </div>                       
                       <div class="form-group">
                         <label for="contact no"><h5>Contact No : *</h5></label>
                         <input type="text" class="form-control"  name="contact_no" id="contact_no" required="" value="<?php echo $mentor_det['contact_no'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="subject">Profile : *</label>
                         <input type="text" name="mentor_pf"  id ="mentor_pf" class="form-control" value="<?php echo $mentor_det['stream'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="subject"><h5>Specialization : *</h5></label>
                         <input type="text" class="form-control" name="mentor_sp" id="mentor_sp" required="" value="" required="">
                       </div>
                       <div class="form-group">
                         <label for="available hours"><h5>Available Hours : *</h5></label>
                         <input type="text" class="form-control" name="available_hours" id="available_hours" value="" required="">
                       </div>
                       <div class="form-group">
                         <label for="availabel days"><h5>Available Days : *</h5></label>
                         <input type="text" class="form-control" name="available_days" id="available_days" value="" required="">
                       </div>
                       <div class="btn_pannel">
                         <input type="submit" class="men_save" value="Submit" name="ment_reg" id="ment_reg">
                       </div>
                     </form>
                    </div>
                </div>
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
           </div> 
        
         </div> 
            

          <!-- end of mentor details -->

<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer -->

    