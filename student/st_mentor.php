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
            <hr>
            <!-- start of php code -->
            <?php 
              $ment_query = "SELECT * FROM `aes_mentor` ORDER BY `aes_mentor`.`mentor_id` DESC ";
              $ment_run = mysqli_query($con, $ment_query);
              if (mysqli_num_rows($ment_run) > 0) {
               // while ($ment_det = mysqli_fetch_assoc($ment_run)) {  
                 $row_count = mysqli_num_rows($ment_run);
                 for ($$row_count=0; $$row_count <12 ; $$row_count++) { 
                    # code...
                    $ment_det = mysqli_fetch_assoc($ment_run); ?>
                           
                  
             
             <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ment_image">
               <div class="thumbnail">
                 <div class="image">
                   <img src="../img/<?php echo $ment_det['image'] ?>" alt="Mentor Image">
                 </div>
                 <hr>
                 <div class="ment_descp">
                   <h6><u>Specilization -</u> <?php echo $ment_det['mentor_sp'] ?></h6>
                   <h6><u>Mentor Name -</u><?php echo $ment_det['mentor_name'] ?></h6>
                   <h6><u>Contact No - </u><?php echo $ment_det['contact_no'] ?></h6>
                   <h6><u>Available Hours -</u> <?php echo $ment_det['available_hours'] ?></h6>
                   <h6><u>Available Days -</u><?php echo $ment_det['available_days'] ?></h6>
                 </div>
                 <hr>
                 <div class="men_btn_panel">
                   <input type="submit" class="ment_select" value="Select">
                 </div>
               </div>
             </div>
             <?php     
                }
              }
              else{
                echo "data not found in the database";
              }

             ?>
             
           </div> <!-- end of row -->
            <hr>
            

       <!-- find mentor section  -->
           <div class="row find_mentor">
             <div class="page_head">
                 <h2>Find Mentor</h2>
              </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
              
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter Subject :">
              </div>
            </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
              <input type="submit" data-tggle="tab" href="#select" class="search_job">
            </div>
             
           </div><!-- end of row -->
           <hr>
           <div class="row mentor_list">
             <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ment_image">
               <div class="thumbnail">
                 <div class="image">
                   <img src="img/avatar.png" alt="Menor Image">
                 </div>
                 <hr>
                 <div class="ment_descp">
                   <h4>Specilization:</h4>
                   <h5>Contact No:</h5>
                   <h5>Email:</h5>
                   <h5>Available Hours:</h5>
                   <h5>Available Days:</h5>
                 </div>
                 <hr>
                 <div class="men_btn_panel">
                   <input type="submit" class="ment_select" value="Select">
                 </div>
               </div>
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ment_image">
               <div class="thumbnail">
                 <div class="image">
                   <img src="img/avatar.png" alt="Menor Image">
                 </div>
                 <hr>
                 <div class="ment_descp">
                   <h4>Specilization:</h4>
                   <h5>Contact No:</h5>
                   <h5>Email:</h5>
                   <h5>Available Hours:</h5>
                   <h5>Available Days:</h5>
                 </div>
                 <hr>
                 <div class="men_btn_panel">
                   <input type="submit" class="ment_select" value="Select">
                 </div>
               </div>
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ment_image">
               <div class="thumbnail">
                 <div class="image">
                   <img src="img/avatar.png" alt="Menor Image">
                 </div>
                 <hr>
                 <div class="ment_descp">
                   <h4>Specilization:</h4>
                   <h5>Contact No:</h5>
                   <h5>Email:</h5>
                   <h5>Available Hours:</h5>
                   <h5>Available Days:</h5>
                 </div>
                 <hr>
                 <div class="men_btn_panel">
                   <input type="submit" class="ment_select" value="Select">
                 </div>
               </div>
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ment_image">
               <div class="thumbnail">
                 <div class="image">
                   <img src="img/avatar.png" alt="Menor Image">
                 </div>
                 <hr>
                 <div class="ment_descp">
                   <h4>Specilization:</h4>
                   <h5>Contact No:</h5>
                   <h5>Email:</h5>
                   <h5>Available Hours:</h5>
                   <h5>Available Days:</h5>
                 </div>
                 <hr>
                 <div class="men_btn_panel">
                   <input type="submit" class="ment_select" value="Select">
                 </div>
               </div>
             </div>
           </div> <!-- end of row -->
       
         </div>  <!-- end of al mentor details -->
            

         

<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer -->

    