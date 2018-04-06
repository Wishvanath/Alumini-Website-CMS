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
              
              <h4>
                <ul>
                  <li>Believing in yourself</li>
                  <li>Cultivating a success mindset</li>
                  <li>Overcoming procrastination</li>
                  <li>Hard work</li>
                  <li>Not making excuses</li>
                  <li>Perseverance</li>
                </ul>
              </h4>
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
              <h3>Student Association</h3>
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
                  <a href="st_job.php">
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
                  <a href="st_mentor.php">
                    <input type="submit" class="thumb_button" value="Find">
                  </a>
                </div>  
              </div>  
              </div>
             
            </div>

            <div class="col-md-3 col-sm-3 col-lg-3 as_adjunct">
              <div class="thumbnail">
                <img src="img/al_adjunct.jpg" alt="Adjunct Professor Image">
                 <div class="descp">
                  <h3 style="color:#EBA02B; margin-bottom: 20px; font-size: 18px;">NEW MESSAGE</h3>
                <p style="letter-spacing: 1.5px; margin-bottom: 27px">
                  <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                  A good teacher must be able to put himself in the place of those who find learning hard.
                  <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>
                </p>
                <div class="btn_pannel" >
                  <a href="st_message.php">
                    <input type="submit" class="thumb_button" value="Show">
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
                    <input type="submit" class="thumb_button" disabled="" value="Donate">
                  </a>
                </div>  
              </div>  
              </div>
            </div>
            
          </div>
          <!-- end of alumni assoiation thumbnail -->
        
  </div>
          <!-- end of alumni blog section -->

  
 <!-- footer of website  -->
 <?php 
    require_once('inc/footer.php');
  ?>
 <!-- end of footer seciton -->