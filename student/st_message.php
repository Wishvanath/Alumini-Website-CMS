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
            <div class="row ch_msg">
              <div class="page_head">
                <h2>Message :</h2>
              </div>
              <div class="col-md-8 col-md-offset-2">
                                 
                <div class="mes_part">
                  <?php 
                  // fetch the data from student message table
                $query = "SELECT * FROM `aes_st_msg` ORDER BY `aes_st_msg`.`post_date` DESC ";
                $run = mysqli_query($con, $query) or die("can not fetch the data".mysqli_error($con));
                if (mysqli_num_rows($run) > 0) {
                  while ($msg = mysqli_fetch_assoc($run)) { ?>

                  <p>
                    <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i> 
                    <?php echo $msg['st_message'] ?>
                    <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
                  </p>
                  <p>Post Date <i class="fa fa-clock-o" style="color: #E4AD19;"></i> <?php echo $msg['post_date'] ?></p>
                  <hr>
                   <?php
                  }
                }
                else{
                  echo "Data not found in the database";
                }


                 ?>
                </div>
                
              </div>
            </div>
       
         </div>  <!-- end of al mentor details -->
            

         

<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer -->

    