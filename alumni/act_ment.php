<?php 
// to check save button is pressed or not
require_once('inc/db.php');
if (isset($_POST['ment_reg'])){
	$mentor_name = $_POST['mentor_name'];
	$contact_no = $_POST['contact_no'];
	$mentor_pf = $_POST['mentor_pf'];
	$mentor_sp = $_POST['mentor_sp'];
	$available_hours = $_POST['available_hours'];
	$available_days = $_POST['available_days'];
	$email_id = $_POST['email_id'];

	// save the form data in to database
	// $query_test = "SELECT * FROM `aes_mentor` ORDER BY `aes_mentor`.`mentor_id` ASC ";
	// $test_run = mysqli_query($con,$query_test) or die(" problem found to fetch the data" . mysqli_error($con));
	// while ($test_run) {
	// 	$unique_id = mysqli_fetch_assoc($test_run);
	// 	$ment_contact = $unique_id['contact_no'];
		
	// }
	// if ($contact_no == $ment_contact) {
	// 		echo "you have registered ";
	// 		exit();
	// 	}
					  $mn_query = "SELECT * FROM `aes_alumni` WHERE `aes_alumni`.`email_id` = '$email_id'";
                      $mn_run = mysqli_query($con, $mn_query) or die("can not fetch the data from database".mysqli_error($con));
                      if (mysqli_num_rows($mn_run)>0) {
                        $mentor_det = mysqli_fetch_assoc($mn_run);
                        $ment_image =  $mentor_det['image'];
                      }
	
	$query = "INSERT INTO `aes_mentor` (`mentor_id`, `mentor_name`, `email_id`,`contact_no`, `mentor_pf`, `mentor_sp`, `available_hours`, `available_days`, `image`) VALUES (NULL, '$mentor_name','$email_id','$contact_no', '$mentor_pf', '$mentor_sp', '$available_hours', '$available_days', '$ment_image')";
	$run = mysqli_query($con, $query) or die("can not insert the data into the database" .mysqli_error($con));
	if ($run) {
		echo '<script language="javascript">';
      	echo 'alert("Successfully Registered as a Mentor");';
      	echo 'window.location.href = "al_mentor.php";';
      	echo '</script>';
	}
	else{
		
	}
}


 ?>