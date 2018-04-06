<?php 
  require_once('inc/top.php');

 ?>
    
  </head>
  <body>
    <!-- start of the head and nav section -->
    
    <?php 
        require_once('inc/head_nav.php');
     ?>
    <!-- end of head and nav section -->
         <div class="container main_wrapper">  
          <!-- show background video -->
          <div class="row back_video">
            
            <video autoplay muted loop id="myVideo">
              <source src="img/al_back_video.mp4" type="video/mp4">
              Your browser does not support HTML5 video.
            </video>

            <div class="content hidden-xs">
              
              <h4>Any institutions' alumni are key to its growth. We are focused on giving a global experience to our students.A founder can carry an institution only so far, and then others have to step in, even the alumni. That's how an institution becomes one.</h4>
              <button id="myBtn" onclick="myFunction()" class="hidden-sm hidden-xs">Pause</button>
            </div>

            <script>
            var video = document.getElementById("myVideo");
            var btn = document.getElementById("myBtn");

            function myFunction() {
              if (video.paused) {
                video.play();
                btn.innerHTML = "Pause";
              } else {
                video.pause();
                btn.innerHTML = "Play";
              }
            }
            </script>

          </div>
          
          <!-- end of background video -->


          <!-- alumni association -->
          <div class=" row al_assoc">
            <div class="as_heading">
              <h3>Alumni Association</h3>
            </div>
            <div class="as_content">
              <p>
              It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).

            </p>
            </div>
          </div>
          <!-- end of alumni association -->
          
          <!--  start of alumni association thumbnail-->
          <div class="row al_as_thumb">
            <div class="col-md-3 col-sm-3 col-lg-3 as_job">
              <div class="thumbnail">
                <img src="img/al_job.jpg" alt="Job Image">
                <div class="descp">
                  <h3 style="color:#EBA02B; margin-bottom: 20px; font-size: 18px;">JOB</h3>
                <p>
                  <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                  Find joy in everything you choose to do. Every job, relationship, home... it's your responsibility to love it, or change it.
                  <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
                </p>
                <div class="btn_pannel" >
                  <a href="al_job.php">
                    <input type="submit" class="thumb_button" value="Search">
                  </a>
                </div>  
              </div>
              </div>
              
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3 as_mentor">
              <div class="thumbnail">
                <img src="img/al_mentor.jpg" alt="Mentor Image">
                 <div class="descp">
                  <h3 style="color:#EBA02B; margin-bottom: 20px; font-size: 18px;">MENTOR</h3>
                <p>
                  <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                  A mentor is someone who sees more talent and ability within you, than you see in yourself, and helps bring it out of you.        
                  <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
                </p>
                <div class="btn_pannel" >
                  <a href="al_mentor.php">
                    <input type="submit" class="thumb_button" value="Register">
                  </a>
                </div>  
              </div>  
              </div>
             
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3 as_adjunct">
              <div class="thumbnail">
                <img src="img/al_adjunct.jpg" alt="Adjunct Professor Image">
                 <div class="descp">
                  <h3 style="color:#EBA02B; margin-bottom: 20px; font-size: 18px;">ADJUNCT Pf.</h3>
                <p style="letter-spacing: 1.5px; margin-bottom: 27px">
                  <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                  A good teacher must be able to put himself in the place of those who find learning hard.
                  <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
                </p>
                <div class="btn_pannel" >
                  <a href="al_adjn_pf.php">
                    <input type="submit" class="thumb_button" value="Register">
                  </a>
                </div>  
              </div>  
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-lg-3 as_fund">
              <div class="thumbnail">
                <img src="img/al_fund.jpg" alt="Fund Image">
                 <div class="descp">
                  <h3 style="color:#EBA02B; margin-bottom: 20px; font-size: 18px;">FUND</h3>
                <p style="letter-spacing: 1.5px; margin-bottom: 25px;">
                  <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                  Without investment there will not be growth, and without growth there will not be employment.
                  <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
                </p>
                <div class="btn_pannel" >
                  <a href="al_fund.php">
                    <input type="submit" class="thumb_button" value="Donate">
                  </a>
                </div>  
              </div>  
              </div>
            </div>
            
          </div>
          <!-- end of alumni assoiation thumbnail -->

          <!--  alumni blog section -->

          <div class=" row al_assoc_blog">
            <div class="as_heading">
              <h3> Write Your Blog</h3>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 blog_image">
              <img src="img/write_blog.jpg" alt="Blog Image">
            </div>
            <div class="col-md-6 col-lg-6 col-sm-6 blog_descp">
              <p>
                <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for
                <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
              </p>
              <div class="btn_pannel" >
                  <a href="al_blog.php">
                    <input type="submit" class="blog_button" value="Write">
                  </a>
                </div>
            </div>
            
          </div>
  </div>
          <!-- end of alumni blog section -->

  
 <!-- footer of website  -->
 <?php 
    require_once('inc/footer.php');
  ?>
 <!-- end of footer seciton -->