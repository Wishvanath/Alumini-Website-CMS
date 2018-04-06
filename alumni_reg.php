<?php require_once('inc/top.php'); ?>
  </head>
  <body>
<!-- ==================== for the site details section ===================== -->
<?php require_once('inc/top_nav.php'); ?>

<!-- ===================== end of the site details ==================== -->



<!-- ================== logo and menu section======================= -->
<?php require_once('inc/nav_bar.php'); ?>


<!-- ====================== start of alumni login window ======================= -->
<div class="alumni_reg">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-3 col-lg-3"></div>
      <div class="col-md-6 col-sm-6 col-lg-6 alumni_reg_window">
        <h3>Alumni Registration</h3>
        <form action="action_al_reg.php" name="alumni_registration" id="alumni_registration" method="post">

            <div class="form-group">
              <label for="First Name">First Name : *</label>
              <input type="text" class="form-control" name="first_name" id="first_name" required maxlength="50" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,50}$">
            </div>

            <div class="form-group">
              <label for="Middle Name">Middle Name :</label>
              <input type="text" class="form-control" name="middle_name" id="middle_name" maxlength="20" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
            </div>

            <div class="form-group">
              <label for="Last Name">Last Name :</label>
              <input type="text" class="form-control" name="last name" maxlength="20" pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$">
            </div>

            <div class="form-group">
              <label for="email">Email address : *</label>
              <input type="email" class="form-control" name="email_id" id="email_id" maxlength="50" required="">
            </div>

            <div class="form-group">
              <div class="radio">
                <label for="male button">
                  <input type="radio" name="gender" id ="gender" value="Male" required="please select gender"> Male
                </label> &nbsp;&nbsp;&nbsp;&nbsp;
                <label for="female button">
                  <input type="radio" name="gender" id="gender" value ="Female" required="please select gender"> Female
                </label>
              </div>
            </div>

            <div class="form-group">
              <label for="date of birth">Date Of Birth : *</label>
              <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" required="">
            </div>
            <div class="form-group">
              <label for="passing year">Passing Year : *</label>
              <input type="text" name="passing_year" id="passing_year" class="form-control" placeholder="Passing Year :" required="" pattern="^[0-9]{4}$" maxlength="4">
            </div>

            <div class="form-group">
              <label for="pwd">Password : *</label>
              <input type="password" name="password" id="password" class="form-control" required="" maxlength="50">
            </div>

            <div class="form-group">
              <label for="confirm password">Confirm Password : *</label>
              <input type="password" class="form-control" name="confirm_pass" id="confirm_pass" required="" maxlength="50">
            </div>
            
            <div class="form-group submit_btn">
              <button type="submit" class="btn btn-primary" name="al_reg_btn" id="al_reg_btn">Submit</button>
            </div>
              
        </form>
      </div>
      <div class="col-md-3 col-sm-3 col-lg-3"></div>
    </div>
  </div>
</div>
<!-- =============== end of alumni login window =================== -->



<!-- ===================== footer section ===================== -->
<?php require_once('inc/footer.php'); ?>
<!-- ===================== end of footer section ============== -->


