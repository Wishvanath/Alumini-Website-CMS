<!-- top nav of the page -->
<?php 
  require_once('inc/top.php');
 ?>
<!-- end of the top nav of page -->
    
  </head>
  <body>
    <!-- header and nav of the alumni page -->
  
    <?php 
      require_once('inc/head_nav.php');
     ?>
    <!-- end of head and nav section of the page -->
    
    <?php 
        // get blogger email and author details from database
        $bg_query = "SELECT * FROM `aes_alumni` WHERE `aes_alumni`.`email_id` = '$session_id'";
        $bg_run = mysqli_query($con, $bg_query) or die("can not fetch the data from database".mysqli_error($con));
                      if (mysqli_num_rows($bg_run)>0) {
                        $bloger_det = mysqli_fetch_assoc($bg_run);
                        // echo $bloger_det['first_name'];
                        $bloger_email = $bloger_det['email_id'];
                        $author = $bloger_det['first_name'];

                      }

     ?>
         <!-- for mentor details  -->
         <div class="container al_mentor">
          <div class="row">
            <div class="page_head">
              <h2>Blog</h2>
            </div>
             <div class="col-md-6 col-lg-6 col-sm-6 adjn_image">
               <img src="img/alblog.png" alt="Professor Image">
             </div>
             <div class="col-md-6 col-lg-6 col-sm-6 mentor_message">
               <h4>
                <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                 Blogging is a great way to show your talents and interests to prospective employers, while adding an edge to your resume. If you blog consistently it shows your dedication, passions and creativity - all of which are key attributes employers look for in job candidates.
                 <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>     
               </h4>
             </div>
           </div> 

           <div class="row">
             <div class="col-sm-2 col-md-2 col-lg-2"></div>
             <div class="col-sm-8 col-md-8 col-lg-8 men_reg">
               <div class="btn_pannel" >
                    <input type="submit" class="mentor_button" value="Write" data-toggle="tab" href="#select">
                    <div class="tab-pane fade" id="select">
                     <form action="act_blog.php" method="post" name="blog_form" id="blog_form" enctype="multipart/form-data">
                       <div class="form-group">
                         <label for="author_email"><h5>Author Email : *</h5></label>
                         <input type="text" name="bloger_email" id="bloger_email" class="form-control" value="<?php echo $bloger_email ?>">
                       </div>
                       <div class="form-group">
                         <label for="author"><h5>Author Name : *</h5></label>
                         <input type="text" name="author" id="author" class="form-control" value="<?php echo $author ?>">
                       </div>
                       <div class="form-group">
                         <label for="name"><h5>Blog Title : *</h5></label>
                         <input type="text" class="form-control" name="blog_title" id="blog_title" required="">
                       </div>
                       <div class="form-group">
                         <label for="contact no"><h5>Content : *</h5></label>
                       </div>
                       <div class="text-area">
                         <textarea name="blog_content" id="blog_content" cols="30" rows="15" class="form-control" required=""></textarea>
                       </div>
                       <div class="form-group">
                        <span>
                          <label for="Select_image"><h4>Select Blogger Image (Max Size- 200KB) : *</h4></label>
                          <input type="file" name="img" id="img" required=" ">
                        </span>
                      </div>
                       
                       <div class="btn_pannel">
                         <input type="submit" class="men_save" value="Publish" name="btn_post" id="btn_post">
                       </div>
                     </form>
                    </div>
                </div>
             </div>
             <div class="col-sm-2 col-md-2 col-lg-2"></div>
           </div> 
        
         </div> 
            

          <!-- end of mentor details -->

<!-- footer section of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of footer section -->