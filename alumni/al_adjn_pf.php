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
         <!-- for mentor details  -->

         <div class="container al_mentor">
          <div class="row">
            <div class="page_head">
              <h2>Adjunct Pf.</h2>
            </div>
             <div class="col-md-6 col-lg-6 col-sm-6 adjn_image">
               <img src="img/skill.jpg" alt="Professor Image">
             </div>
             <div class="col-md-6 col-lg-6 col-sm-6 mentor_message">
               <h4>
                <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                 Teaching is a very noble profession that shapes the character, caliber, and future of an individual. If the people remember me as a good teacher, that will be the biggest honour for me. 
                 <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>     
               </h4>
             </div>
           </div> 

           <div class="row">
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
             <div class="col-sm-6 col-md-6 col-lg-6 men_reg">
               <div class="btn_pannel" >
                <!-- start of php code -->
                  <?php 
                      // fetch the data from alumni table

                      $adjn_query = "SELECT * FROM `aes_alumni` WHERE `aes_alumni`.`email_id` = '$session_id'";
                      $adjn_run = mysqli_query($con, $adjn_query) or die("can not fetch the data from database".mysqli_error($con));
                      if (mysqli_num_rows($adjn_run)>0) {
                        $adjn_det = mysqli_fetch_assoc($adjn_run);
                        //echo $mentor_det['first_name'];
                      }
                   ?>
                    <input type="submit" class="mentor_button" value="Register" data-toggle="tab" href="#select">
                    <div class="tab-pane fade" id="select">
                     <form action="act_adjn.php" name="adjn_form" id="adjn_form" method="post" enctype="multipart/form-data">
                       
                       <div class="form-group">
                         <label for="name"><h5>Professor Name :</h5></label>
                         <input type="text" class="form-control" name="adjn_name" id="adjn_name" value="<?php echo $adjn_det['first_name'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="Email"><h5>Email ID : *</h5></label>
                         <input type="email" name="adjn_email" id="adjn_email" value="<?php echo $adjn_det['email_id'] ?>" class="form-control">
                       </div>
                       <div class="form-group">
                         <label for="contact no"><h5>Contact No : *</h5></label>
                         <input type="text" class="form-control" name="adjn_contact_no" id="adjn_contact_no" value="<?php echo $adjn_det['contact_no'] ?>">
                       </div>
                       <div class="form-group">
                         <label for="contact no"><h5>Specialization : *</h5></label>
                         <input type="text" class="form-control" name="adjn_sp" id="adjn_sp" value="<?php echo $adjn_det['stream'] ?>">
                       </div>
                       
                       <div class="form-group">
                         <label for="subject"><h5>Teaching Subject : *</h5></label>
                         <input type="text" class="form-control" name="subject" id="subject">
                       </div>
                       
                       <div class="form-group">
                         <label for="available hours"><h5>Available Hours : *</h5></label>
                         <input type="text" class="form-control" name="avl_hours" id ="avl_hours">
                       </div>
                       <div class="form-group">
                         <label for="availabel days"><h5>Available Days : *</h5></label>
                         <input type="text" class="form-control" name="avl_days" id="avl_days">
                       </div>
                       <div class="btn_pannel">
                         <input type="submit" class="men_save" value="Submit" name="btn_save" id="btn_save">
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
<!-- end of the footer section -->