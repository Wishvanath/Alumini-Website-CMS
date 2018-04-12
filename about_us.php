<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>
<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>

<!-- ====================== start of universtiy moto section ======================= -->
<div class="university_moto">
  <div class="container">
    <div class="text-header">
      <h2>About Us</h2>
    </div>
    <div class="row">
      <div class="col-sm-4 col-lg-4 col-md-4 about_img">
        <img src="img/unimoto.png" alt="About Us Image">
      </div>
      <div class="col-sm-8 col-lg-8 col-md-8 about_des">
        <h4 class="title">University Moto</h4>
        <p>
          Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. 
        </p>
      </div>
    </div>
  </div>
</div>

<!-- =============== end of university moto section =================== -->

<!-- ===================== start of programme and services section ===================== -->
<div class="pgm_ser">
  <div class="container">
    <h4>Programs and Services</h4>
    <div class="row">
      <div class="col-sm-3 col-lg-3 col-md-3 job_offer">
        <img src="img/aboutus2.jpg" alt="Job Offer Image">
        <h3 style="text-align: center; color: #0F8D8F;">Job Offer</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution. 
        </p> 
      </div>
      <div class="col-sm-3 col-lg-3 col-md-3 event_desc">
        <img src="img/aboutus3.jpg" alt="Event Calender">
        <h3 style="text-align: center; color: #0F8D8F;">Event Calender</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
        </p>
      </div>
      <div class="col-sm-3 col-lg-3 col-md-3 fund">
        <img src="img/aboutus4.jpg" alt="Fund Image">
        <h3 style="text-align: center; color: #0F8D8F;">Fund Donation</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution.
          
        </p>

      </div>
      <div class="col-sm-3 col-lg-3 co-md-3 edu">
        <img src="img/aboutus5.jpg" alt="Educational Image">
        <h3 style="text-align: center; color: #0F8D8F;">Education</h3>
        <p style="color: black; font-size: 14px;">
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution. 
          
        </p>
      </div>
    </div>
  </div>
</div>
<!-- ===================== end of programme and services section===================== -->


<!-- ==================== start of global and friend section =================== -->
<div class="friend_gmap">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-2">
        
      </div>
      <div class="col-sm-8 friend_text">
        <h2>We are not just Friend, We are Family</h2>
        <p>
          It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English
        </p>
      </div>
      <div class="col-sm-2">
        
      </div>
      
    </div>
  </div>
</div>
<!-- ==================== end of global mam and friend section=================== -->

<!-- ==================== start of contact us  section ==================== -->
<div class="contact_us">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 col-md-6 col-lg-6 con_map">
        <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyDkNfygcVXwyl4XmFiJcq3gdYPmKoFNAVY '></script><div style='overflow:hidden;height:525px;width:100%;'><div id='gmap_canvas' style='height:525px;width:100%;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://www.embed-map.net/'>Google Map</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=7f9e150e5938044883a3188ea85436f32ccc8723'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:12,center:new google.maps.LatLng(12.0295696,79.85188229999994),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(12.0295696,79.85188229999994)});infowindow = new google.maps.InfoWindow({content:'<strong>Pondicherry University</strong><br>MAKA Hostel<br>605014 Puducherry<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
      </div>
      <div class="col-sm-6 col-md-6 col-lg-6 contact_form">
        <h2>Contact US</h2>
            <hr>
            <form action="act_client_mail.php" method="post" name="contact_form" id="contact_form">
              <div class="form-group">
                <label for="full-name">Full Name :*</label>
                <input type="text" id="full_name" name="full_name" class="form-control" placeholder="full Name" required="" maxlength="20">
              </div>
              <div class="form-group">
                <label for="email">Email Address :*</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Email Address" required="">
              </div>
              <div class="form-group">
                <label for="website">Contact NO :*</label>
                <input type="text" id="contact_no" name="contact_no" class="form-control" placeholder="Contact No" required="" pattern="[0-9]{10}" maxlength="10">
              </div>
              <div class="form-group">
                <label for="message">Message :*</label>
              </div>
              <div class="form-group">
                <textarea name="msg" id="msg"  cols="10" rows="5" class="form-control" placeholder="Your Message" maxlength=300"></textarea>
              </div>
              <input type="submit" name="mail_submit" id="mail_submit" value="Submit" class="btn btn-primary">
            </form>
      </div>
    </div>
  </div>
</div>
<!-- ==================== end of contact us section ====================== -->


<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->


