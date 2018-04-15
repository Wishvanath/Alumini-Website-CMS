<?php 
// include database connection
require_once('inc/db.php');
if (isset($_POST['btn_save'])) {
	
	// get the form data
	$st_message = $_POST['st_message'];
	$query = "INSERT INTO `aes_st_msg` (`st_msg_id`, `st_message`, `post_date`) VALUES (NULL, '$st_message', CURRENT_TIMESTAMP)";
	$run = mysqli_query($con, $query) or die("can not inserted the data".mysqli_error($con));
	if ($run) {
		header("Location:student_msg.php");
	}
}



 ?>