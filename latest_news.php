<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>

<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>
<!-- =================== end of logo and menu section======================== -->

<!-- =================== start of page title section ======================= -->
<div class="page_header">
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 page_title">
        <h2>
          Latest News
        </h2>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</div>
<!-- =================== end of page title section ========================= -->
<div class="all_news_section">
  <!-- first row of news -->
  <!-- fetch the data from news table -->
        <?php 
          $news_query = "SELECT * FROM `aes_news` ORDER BY `post_date` DESC ";
          $news_run = mysqli_query($con, $news_query) or die("Can't fetch the data from database.".mysqli_error($con));
          if(mysqli_num_rows($news_run) > 0){
            while ($news = mysqli_fetch_assoc($news_run)) { ?>

  <div class="container all_news">
    <div class="row all_news_det">
      <div class = "col-md-3 col-sm-3 col-lg-3 news_image">
        <img src="img/<?php echo $news['image'] ?>" alt="News Image">
      </div>
      <div class="col-md-9 col-sm-9 col-lg-9 news_title">
        <h3><?php echo $news['news_title'] ?></h3>
        <p>
          <?php echo $news['news_descp'] ?>
        </p>
        <div class="post_date">
          <span>
            <i class="fa fa-clock-o"></i>
            Post Date : <?php echo $news['post_date'] ?>
          </span>
        </div>
      </div>
      
    </div>
  </div>
  <?php  
            }
            
          }
          else{
            echo" Data not found in the database";
          }
         ?>
  <!--  end of first row -->
  
</div>
<!-- start of pagination section -->
     <div class="row news_pagination">
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





<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->


