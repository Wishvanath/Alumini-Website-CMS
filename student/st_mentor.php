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

  <!-- write code for php mail function of mentor  -->
  <?php 
    if (isset($_GET['select'])) {
      $to = $_GET['select'];
      $subject = "Mentorship mail";
      $message = "Dear"."  ". $to ."You have Selected as an Mentor by.. ". $session_id;
      $from = $session_id;
      $headers = "From: $from";
      mail($to,$subject,$message,$headers);
       echo '<script language="javascript">';
       echo 'alert("We will get back you with in 2 Working days via Email.");';
       echo 'window.location.href = "st_mentor.php";';
       echo '</script>';
     
    }

   ?>
  <!-- end of mail function of mentor -->





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
                 for ($row_count=0; $row_count <12 ; $row_count++) { 
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
                   <a href="<?php $_SERVER['PHP_SELF'] ?>?select=<?php echo $ment_det['email_id'] ?>">
                     <input type="submit" class="ment_select" value="Select">
                   </a>
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
       <form name="find_mentor" id="find_ment" method="post" action="st_mentor.php">
           <div class="row find_mentor">
             <div class="page_head">
                 <h2>Find Mentor</h2>
              </div>
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
              
            </div>
            
            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
              <div class="form-group">
                <input type="text"  name="ment_subject" id="ment_subject" class="form-control" placeholder="Enter Subject :" required="">
              </div>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-4 col-xs-4">
              <input type="submit"  class="search_job" name="find_ment" id="find_ment">
            </div>
           
           </div><!-- end of row -->
         </form>
           <hr>
           <div class="row mentor_list">
            <!-- code for find mentor  -->
<?php 

  if (isset($_POST['find_ment'])) {
    $ment_subject = $_POST['ment_subject'];
    $find_qry = "SELECT * FROM `aes_mentor` WHERE `mentor_sp` LIKE '$ment_subject%'";
    $find_run = mysqli_query($con,$find_qry) or die("can't fetch the data from database".mysqli_error($con));
    if (mysqli_num_rows($find_run) > 0) {
       while ($f_ment = mysqli_fetch_assoc($find_run)) {  ?>

             <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 ment_image">
               <div class="thumbnail">
                 <div class="image">
                   <img src="../img/<?php echo $f_ment['image'] ?>" alt="Menor Image">
                 </div>
                 <hr>
                 <div class="ment_descp">
                   <h6><u>Specilization -</u> <?php echo $f_ment['mentor_sp'] ?></h6>
                   <h6><u>Mentor Name -</u><?php echo $f_ment['mentor_name'] ?></h6>
                   <h6><u>Contact No - </u><?php echo $f_ment['contact_no'] ?></h6>
                   <h6><u>Available Hours -</u> <?php echo $f_ment['available_hours'] ?></h6>
                   <h6><u>Available Days -</u><?php echo $f_ment['available_days'] ?></h6>
                 </div>
                 <hr>
                 <div class="men_btn_panel">
                   <a href="<?php $_SERVER['PHP_SELF'] ?>?select=<?php echo $ment_det['email_id'] ?>">
                     <input type="submit" class="ment_select" value="Select">
                   </a>
                 </div>
               </div>
             </div>

       <?php  
       }
    }
    else{
      echo "No Such Mentor is available ...Please find later.";
    }
  }

 ?>
<!-- end of find mentor -->        
</div> <!-- end of row -->
       
</div>  <!-- end of al mentor details -->
            

         

<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer -->

    