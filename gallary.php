<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>
<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>


<!--  start of gallary section -->
<div class="img_gal">
  <div class="container">
    <div class="row">
      <?php 
        // fetch the image from image gallary table
       $img_query = "SELECT * FROM `aes_gallary` ORDER BY `aes_gallary`.`post_date` DESC ";
       $img_run = mysqli_query($con, $img_query);
       if (mysqli_num_rows($img_run) > 0) {
         while ($gal_image = mysqli_fetch_assoc($img_run)) { ?>


      <div class="page-header">
        <h3><u><?php echo $gal_image['gal_title'] ?></u></h3>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 gal_img">
        <a href="img/<?php echo $gal_image['img1'] ?>" data-lightbox="gallary">
          <img src="img/<?php echo $gal_image['img1'] ?>" alt="Gallary Image">
        </a>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 gal_img">
        <a href="img/<?php echo $gal_image['img2'] ?>" data-lightbox="gallary">
          <img src="img/<?php echo $gal_image['img2'] ?>" alt="Gallary Image">
        </a>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 gal_img">
        <a href="img/<?php echo $gal_image['img3'] ?>" data-lightbox="gallary">
          <img src="img/<?php echo $gal_image['img3'] ?>" alt="Gallary Image">
        </a>
      </div>
      <div class="col-sm-3 col-md-3 col-lg-3 col-xs-3 gal_img">
        <a href="img/<?php echo $gal_image['img4'] ?>" data-lightbox="gallary">
          <img src="img/<?php echo $gal_image['img4'] ?>" alt="Gallary Image">
        </a>
      </div>
    </div>

    
         <?php  
         }
       }
       else{
        echo "Data not found in the database";
       }

       ?>

  </div>
</div>
<!--  end of gallary section -->



<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->



