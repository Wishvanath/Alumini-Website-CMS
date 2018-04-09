<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>
<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>
<!-- =================== end of logo and menu section======================== -->

<!-- ==================== start of alumni event page section==================== -->
<div class="al_event_descp">
  <div class="container">
        <?php 
        $event_query = "SELECT * FROM `aes_events` ORDER BY `post_date` DESC ";
        $event_run = mysqli_query($con, $event_query);
        if(mysqli_num_rows($event_run) > 0){
          $event = mysqli_fetch_assoc($event_run);  ?>

    <div class="row">
      <div class="col-md-5 col-sm-5 col-lg-5 al_image">
        <img src="img/<?php echo $event['image'] ?>" alt="Alumni Event Image">
        
      </div>
      <div class="col-md-7 col-sm-7 col-lg-5 al_det">
        <div class="upcoming_event">
          <h3>UPCOMING EVENTS </h3>
          <h4> <?php echo $event['event_title'] ?></h4>
          <h4>POST DATE : <?php echo $event['post_date'] ?></h4>
        </div>
        <div class="event_title">
          <h2>
            <?php echo $event['event_descp'] ?>
          </h2>
        </div>
        <div class="location">
          <span>
            <p><i class="fa fa-map-marker fa-2x"></i>
             <?php echo $event['event_ven_date'] ?>
            </p>
          </span>
        </div>
        <div class="join_button">
          <input type="submit" value="Join Now" class="btn btn-warning btn-lg">
        </div>
      </div>

       <?php
           
          
        }
        else{
          echo "data not found in the database";
        }
       ?>
    </div>
  </div>
</div>
<!-- ==================== end of alumni event page section====================== -->

<!-- ==================== start of all event details section ================== -->
<?php 
        $event_query = "SELECT * FROM `aes_events` ORDER BY `post_date` ASC ";
        $event_run = mysqli_query($con, $event_query);
        if(mysqli_num_rows($event_run) > 0){
          $row_count = mysqli_num_rows($event_run);
         while ($event = mysqli_fetch_assoc($event_run)) { ?>
          
         
<div class="all_event">
  <div class="container">
    <div class="row all_event_det">
      <div class="col-md-2 col-sm-2 col-lg-2 date">
         <img src="img/<?php echo $event['image'] ?>" alt="">
      </div>
      <div class="col-md-7 col-sm-7 col-lg-7 event_det">
        <h3><?php echo $event['event_title'] ?></h3>
        <p>
          <?php echo $event['event_descp'] ?>
        </p>
        <div class="location">
          <span>
            <p>
            <i class="fa fa-map-marker fa-2x"></i>
            
             <?php echo $event['event_ven_date'] ?>
            </p>
          </span>
        </div>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3">
        <div class="register_button">
          <input type="button" value="Register" class="btn btn-danger btn-lg">
        </div>
      </div>
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

 <!-- start of pagination section -->
     <div class="row event_pagination">
       <div class="container">
         <div class="col-sm-4"></div>
       <div class="col-sm-4">
         <ul class="pagination pagination-lg">
          <li><a href="#">1</a></li>
          <li class="active"><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">4</a></li>
          <li><a href="#">5</a></li>
        </ul> 
       </div>
       <div class="col-sm-4">
         
       </div>
       </div>
     </div>
 <!-- end of pagination section -->
<!-- ==================== end of all event details section ==================== -->



<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->

