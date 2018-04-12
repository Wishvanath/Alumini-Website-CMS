<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>
<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>

<!-- ===================start of the body of the alumni story ============= -->
<div class="alumni_blog">
  <div class="container-fluid">
    <div class="row">
      <div class="page-header">
        <h2>Alumni Blog</h2>
      </div>
    </div>
    <!-- for the first row of the alumni blog -->
    <div class="row al_descp">
      <div class="container">
        <?php 
  $blog_query = "SELECT * FROM `aes_blog` ORDER BY `aes_blog`.`publish_date` DESC";
  $blog_run = mysqli_query($con, $blog_query) or die("Can't fetch the data from database.".mysql_error($con));
  if (mysqli_num_rows($blog_run)>0) {
       while ($blog = mysqli_fetch_assoc($blog_run)) {  ?>
    
        <div class="col-sm-6">
          <div class="al_image">
            <img src="img/<?php echo $blog['blog_image'] ?>" alt="Alumni story image">
          </div>
          <div class="al_descp">
            <h3 class="al_author">
              <?php echo $blog['author'] ?> : 
            </h3>
            <h4 class="al_title">
              <?php echo $blog['blog_title'] ?>
            </h4>
            
            <p class="blog_descp">
              <?php echo $blog['blog_content'] ?>
              <a href="#">Read More</a>
            </p>
            <span class="date">
              <?php echo $blog['publish_date'] ?>
            </span>
          </div>
           <hr style="border-top: 1px solid #D08B07;">
        </div>

        <?php  
            }
            
          }
          else{
            echo" Data not found in the database";
          }
         ?>
       
      </div>

    </div>
    <!-- end of the first row of the alumni blog -->


    

    

    <!-- start of pagination section -->
     <div class="row blog_pagination">
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
  </div>
</div>
<!-- ===================end of the alumni story section ============= -->





<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->



