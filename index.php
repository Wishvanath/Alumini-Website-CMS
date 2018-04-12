<?php require_once('inc/top.php'); ?>


  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>

<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>
<!-- =================== end of logo and menu section======================== -->



<!-- ==================== for the slider section ==================== -->
<div class="slider-section">
  <div class="container-fluid">
    <div class="row">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/slider_1.jpg" alt="first slider Image">
              <div class="carousel-caption">
                <h2>
                  <span class="text-bold">
                    Heartly welcome with
                  </span>
                  <span class="text-white">
                    A touch of rivalary
                  </span>
                  <a href="alumni_login.php" class="btn btn-lg btn-primary alumni_btn">Alumni Dashboard</a>
                </h2>
              </div>
          </div>
          <div class="item">
            <img src="img/slider_3.jpg" alt="second slider Image">
            <div class="carousel-caption">
                <h2>
                  <span class="text-bold">
                    Heartly welcome with
                  </span>
                  <span class="text-white">
                    A touch of rivalary
                  </span>
                  <a href="alumni_login.php" class="btn btn-lg btn-primary alumni_btn">Alumni Dashboard</a>
                </h2>
            </div>
          </div>
          <div class="item">
            <img src="img/slider_2.jpg" alt="Third slider Image">
            <div class="carousel-caption">
                <h2>
                  <span class="text-bold">
                    Heartly welcome with
                  </span>
                  <span class="text-white">
                    A touch of rivalary
                  </span>
                  <a href="alumni_login.php" class="btn btn-lg btn-primary alumni_btn">Alumni Dashboard</a>
                </h2>
            </div>
          </div>
      
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
  </div><!-- end of row-->
  </div>
</div><!-- end  of slider-section -->
<!-- ===================== end of the slider section =================== -->


<!-- ===================== for chairman image and message==================== -->
<!-- fetch the data from chairman table  -->
<?php 
  $ch_query = "SELECT * FROM `aes_message` ORDER BY `aes_message`.`upload_time` DESC ";
  $ch_run = mysqli_query($con, $ch_query) or die("Can't fetch the data from database.".mysql_error($con));
  if (mysqli_num_rows($ch_run)>0) {
    $message = mysqli_fetch_assoc($ch_run);?>
    

<div class="chairman_desk">
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-5 col-sm-5 chairman_image animated fadeInLeft">
        <img src="img/<?php echo $message['image'] ?>" alt=" Chairman Image">
      </div>
      <div class="col-md-7 col-lg-7 col-sm-7 chairman_message animated fadeInRight">
        <h3>Chairman Message</h3>
        <i class="fa  fa-quote-left" id="left_arr"></i>
        <p>
          <?php echo $message['message_descp']; ?>
        </p>
        <i class="fa fa fa-quote-right" id="right_arr"></i>
      </div>
    </div>
  </div>
</div>

<?php
  }
  else{
    echo "data not found in the database";
  }
 ?>
<!-- ===================== end of chairman image and message==================== -->




<!-- =================== for the news and event description ================= -->
<div class="news_event">
  <div class="container">
    <div class="row">

      <div class="col-md-4 col-lg-4 col-sm-4 news_descp" id="nec_scroll">
        <div class="news_icon">
          <i class="fa  fa-bullhorn"></i> &nbsp; &nbsp; &nbsp;
            <span class="big-text">Latest News</span>
        </div>
        <hr>
        <!-- fetch the data from news table -->
        <?php 
          $news_query = "SELECT * FROM `aes_news` ORDER BY `post_date` DESC ";
          $news_run = mysqli_query($con, $news_query) or die("Can't fetch the data from database.".mysqli_error($con));
          if(mysqli_num_rows($news_run) > 0){
            while ($news = mysqli_fetch_assoc($news_run)) { ?>
            
        <div class="row">
          <div class="col-xs-4">
            <img src="img/<?php echo $news['image'] ?>" alt="News Image">  
          </div>
          <div class="col-xs-8">
            <h4>
              <u>
                <?php echo $news['news_title'] ?>
              </u>
            </h4>
            <p>
              <?php echo $news['news_descp'] ?>
              <a href="#">Read More</a>
            </p>
            <p style="color:#D86612;"><i class="fa fa-clock-o">&nbsp;&nbsp;<?php echo $news['post_date'] ?></i></p>
          </div>
        </div>
        <?php  
            }
            
          }
          else{
            echo" Data not found in the database";
          }
         ?>

        

      </div>

      <div class="col-md-4 col-lg-4 col-sm-4 job_descp" id="nec_scroll">
        <div class="news_icon">
          <i class="fa  fa-graduation-cap"></i> &nbsp; &nbsp; &nbsp;
            <span class="big-text">Career Opportunity</span>
        </div>
        <hr>
        <!-- fetch the job notification data from database -->
        <?php 
          $job_query = "SELECT * FROM `aes_job` ORDER BY `aes_job`.`post_date` DESC ";
          $job_run = mysqli_query($con, $job_query);
          if (mysqli_num_rows($job_run) > 0) {
            while ($job = mysqli_fetch_assoc($job_run)) { ?>
              


         <div class="row">
             <div class="col-xs-4 job_image">
               <img src="img/<?php echo $job['image'] ?>" alt="Job Image">
             </div>
             <div class="col-xs-8 job_descp">
             <h4>
              <u>
                <?php echo $job['job_title'] ?>
              </u>
             </h4>
             <p>
               <?php echo $job['job_descp'] ?>
               <a href="<?php echo $job['apply_link'] ?>" class="btn btn-primary btn-xs apply">Apply</a>
             </p>
             <p style="color: #0F71BC;">
               Last Date: &nbsp;&nbsp;<?php echo $job['last_date'] ?>
             </p> 
             <p style="color: #D86612;">
              <i class="fa fa-clock-o">&nbsp;&nbsp;<?php echo $job['post_date'] ?></i>
            </p>
           </div>
         </div> 
         <?php    
            }
          }
          else{
            echo "data not found in the database";
          }
         ?>

      </div><!-- end of job descprition-->

      <div class="col-md-4 col-lg-4 col-sm-4 event_cal" id="nec_scroll">
        <div class="news_icon">
          <i class="fa   fa-calendar"></i> &nbsp; &nbsp; &nbsp;
            <span class="big-text">Event Calender</span>
        </div>
        <hr>
      <!-- fetch the event details data from database  -->
      <?php 
        $event_query = "SELECT * FROM `aes_events` ORDER BY `post_date` DESC ";
        $event_run = mysqli_query($con, $event_query);
        if(mysqli_num_rows($event_run) > 0){
          while ($event = mysqli_fetch_assoc($event_run)) { ?>


        <div class="row">
          <div class="col-xs-4 event_image">
            <img src="img/<?php echo $event['image'] ?>" alt="Event Image">
          </div>
          <div class="col-xs-8 event_descp">
            <h4>
              <u><?php echo $event['event_title'] ?></u>
            </h4>
            <p>
              <?php echo $event['event_descp'] ?>
            </p>
            <span>
              <p class="event_date_place">
                <i class="fa  fa-map-marker fa-lg"></i>
                <?php echo $event['event_ven_date'] ?>
              </p>
            </span>
            <p style="color: #078092;">
              <i class="fa fa-clock-o">&nbsp;&nbsp;<?php echo $event['post_date'] ?></i>
            </p>
          </div>
        </div> 
     <?php
           
          }
        }
        else{
          echo "data not found in the database";
        }
       ?>
        
      </div> <!-- end of event calender-->
    </div>
  </div>
</div>
<!-- =================== end of the news and event description ================= -->

<!-- =================== start of the school advantage section ================= -->
<div class="school_adv">
  <div class="container">
    <div class="row">
      <div class="sch_heading">
        <h2>
          Student Advantages
        </h2>
      </div>
      <div class="sch_descp">
        <p>
          Concord High School was founded on the principle that by pursuing big ideas and sharing what we learn, we make the world a better place. For more than 135 years, we haven’t strayed from that vision.
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3 total_student">
         <div class="icon">
           <i class="fa fa-users"></i>
         </div>
         <div class="count_no animated zoomIn">
           <!-- count the no of students from database -->
           <?php 
            $st_query = "SELECT * FROM `aes_student`";
            $st_run = mysqli_query($con, $st_query);
            $count_st = mysqli_num_rows($st_run);
            echo $count_st;
           ?>
         </div>
         <p class="text_title">
           Total Students
         </p> 

      </div>
      <div class="col-md-3 col-sm-3 col-lg-3 alumni_connected">
          <div class="icon">
           <i class="fa fa-graduation-cap"></i>
         </div>
         <div class="count_no animated zoomIn">
           <!-- count the no of alumnies from database -->
           <?php 
            $al_query = "SELECT * FROM `aes_alumni`";
            $al_run = mysqli_query($con, $al_query);
            $count_al = mysqli_num_rows($al_run);
            echo $count_al;
            ?>
         </div>
         <p class="text_title">
           Alumni Networks
         </p>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3 certified_teacher">
        <div class="icon">
           <i class="fa fa-briefcase"></i>
         </div>
         <div class="count_no animated zoomIn">
          <!-- count the no of adjunct professor from database -->
          <?php 
            $adjn_query = "SELECT * FROM `aes_adjn_pf` ";
            $adjn_run = mysqli_query($con, $adjn_query);
            $adjn_count = mysqli_num_rows($adjn_run);
           ?>
           <?php echo $adjn_count ?><span> + </span>
         </div>
         <p class="text_title">
           Adjunct Professor
         </p>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3 student_camp">
        <div class="icon">
           <i class="fa fa-building"></i>
         </div>
         <div class="count_no animated zoomIn">
           <!-- fetch the mentor data from database -->
           <?php 
            $mn_query = "SELECT * FROM `aes_mentor` ";
            $mn_run = mysqli_query($con, $mn_query);
            $mentor_count = mysqli_num_rows($mn_run);
            echo $mentor_count;
            ?>
         </div>
         <p class="text_title">
           Mentor
         </p>
      </div>
    </div>
  </div>
</div>
<!-- =================== end  of the school advantage section ================= -->

<!-- ==================== start of alumni story ================== -->
<?php 
  $blog_query = "SELECT * FROM `aes_blog` ORDER BY `aes_blog`.`publish_date` DESC";
  $blog_run = mysqli_query($con, $blog_query) or die("Can't fetch the data from database.".mysql_error($con));
  if (mysqli_num_rows($blog_run)>0) {
    $blog = mysqli_fetch_assoc($blog_run);?>

<div class="alumni_story">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-2 col-sm-2 col-lg-2">
        
      </div>
      <div class="col-md-4 col-sm-4 col-lg-4 al_pic">
        <img src="img/<?php echo $blog['blog_image'] ?>"  alt="Blog Image">
      </div>
      <div class="col-md-6 col-sm-6 col-lg-6 pull-right">
        <div class="story_wrapper">
          <div class="story_titile">
            <h4 class="heading-light text-capitalize">Alumni Blog</h4>
            <h1 class="heading-light text-capitalize"><?php echo $blog['blog_title'] ?></h1>
          </div>
          <div class="story_descp text-left">
            <p class="text-light">
              <?php echo $blog['blog_content'] ?>
            </p>
            <h5 style="color: #0AAAD2;">Author :<?php echo $blog['author'] ?></h5>
            <i class="fa fa-clock-o" style="color: #D28807; font-size: 12px;">&nbsp;Publish Date : <?php echo $blog['publish_date'] ?></i>
          </div>
          <div class="see_strory_btn">
            <a href="alumni_blog.php" class="see-story bnt text-uppercase">READ ALUMNI BLOG</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
  }
  else{
    echo "data not found in the database";
  }
 ?>
<!-- =================== end of alumni story ==================== -->



<!-- =============== start of alumni help dashboard=============== -->
<div class="alumni_dash">
  <div class="container">
    <div class="row">
      <h2 class="alumni_title">My Alumni Dashboard</h2>
      <div class="col-md-3 col-sm-3 col-lg-3">
        <i class="fa fa-key "></i>
        <h3>Login into Dashboard</h3>
        <p>
          Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3">
        <i class="fa fa-cogs"></i>
        <h3>Update Information</h3>
        <p>
          Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3">
        <i class="fa fa-users"></i>
        <h3>Join with Alumnies</h3>
        <p>
          Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
        </p>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3">
        <i class="fa fa-search"></i>
        <h3>Search for a Job</h3>
        <p>
          Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam.
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-lg-5 col-sm-5"></div>
      <div class="col-md-2 col-lg-2 col-sm-2">
        <a href="alumni_reg.php" class="btn btn-warning btn-group-justified btn-lg" style="margin-top: 15px;">Register</a>
      </div>
      <div class="col-md-5 col-lg-5 col-sm-5">
        
      </div>
    </div>
  </div>
</div>
<!-- =============== end of alumni help dashboard=============== -->

<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->



   