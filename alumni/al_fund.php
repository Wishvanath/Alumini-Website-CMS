
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
    <!-- end of the head and navbar section -->
    
         <!-- for mentor details  -->
         <div class="container al_mentor">
          <div class="row">
            <div class="page_head">
              <h2>Fund</h2>
            </div>
             <div class="col-md-6 col-lg-6 col-sm-6 adjn_image">
               <img src="img/alfund.jpg" alt="Fund Image">
             </div>
             <div class="col-md-6 col-lg-6 col-sm-6 mentor_message">
               <h4>
                <i class="fa  fa-quote-left" id="left_arr" style="color: #EBA02B;"></i>  
                 What a privilege to be here on the planet to contribute your unique donation to humankind. Each face in the rainbow of colors that populate our world is precious and special.
                 <i class="fa fa fa-quote-right" id="right_arr" style="color: #EBA02B;"></i>     
               </h4>
             </div>
           </div> 

           <div class="row">
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
             <div class="col-sm-6 col-md-6 col-lg-6 men_reg">
               <div class="btn_pannel" >
                    <input type="submit" class="mentor_button" value="Donate" data-toggle="tab" href="#select">
                    <div class="tab-pane fade" id="select">
                     <form action="">
                       
                       <div class="form-group">
                         <label for="name"><h5>Donar Name :</h5></label>
                         <input type="text" class="form-control">
                       </div>
                       <div class="form-group">
                         <label for="contact no"><h5>Contact No : *</h5></label>
                         <input type="text" class="form-control">
                       </div>
                       <div class="form-group">
                         <label for="sel1"><h5>Purpose (select one): *</h5></label>
                          <select class="form-control" id="sel1">
                            <option>Library Fund</option>
                            <option>Lab Fund</option>
                            <option>Placement fund</option>
                            <option>Student fund</option>
                          </select>
                       </div>
                       <div class="form-group">
                         <label for="amount"><h5>Amount : *</h5></label>
                         <input type="text" class="form-control">
                       </div>
                       <div class="form-group">
                         <label for="mode of payment"><h5>Mode of Payment : *</h5></label>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Check</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Debit Card</label>
                          </div>
                          <div class="radio">
                            <label><input type="radio" name="optradio">Netbanking</label>
                          </div> 
                       </div>
                       <div class="btn_pannel">
                         <input type="submit" class="men_save" value="Submit">
                       </div>
                     </form>
                    </div>
                </div>
             </div>
             <div class="col-sm-3 col-md-3 col-lg-3"></div>
           </div> 
        
         </div> 
            

          <!-- end of mentor details -->


<!-- footer of the page -->
<?php 
  require_once('inc/footer.php');
 ?>
<!-- end of the footer -->