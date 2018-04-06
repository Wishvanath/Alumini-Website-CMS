<?php 
// iclude database connection
require_once('inc/db.php');
// processing to save the details
if (isset($_POST['btn_save'])) {
	// check save button is working or not
	//echo "save button is pressed";
	// get the form data in variable
	$adjn_name = $_POST['adjn_name'];
	$adjn_email = $_POST['adjn_email'];
	$adjn_contact_no = $_POST['adjn_contact_no'];
	$adjn_sp = $_POST['adjn_sp'];
	$subject = $_POST['subject'];
	$avl_hours = $_POST['avl_hours'];
	$avl_days = $_POST['avl_days'];

	// write query for saving the data
	$query = "INSERT INTO `aes_adjn_pf` (`adjn_id`, `adjn_name`, `adjn_email`, `adjn_contact_no`, `adjn_sp`, `subject`, `avl_hours`, `avl_days`, `image`) VALUES (NULL, '$adjn_name', '$adjn_email', '$adjn_contact_no', '$adjn_sp', '$subject', '$avl_hours', '$avl_days', '')";
	$run = mysqli_query($con, $query);
	if ($run) {
		echo '<script language="javascript">';
		echo 'alert(" You have Registered as an Adjunct Professor.We will notify you via email. ");';
		echo 'window.location.href = "al_adjn_pf.php";';
	 	echo '</script>';
		
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" Can not registered as an Adjunct Professor ");';
		echo 'window.location.href = "al_adjn_pf.php";';
	 	echo '</script>';
	}
}
 ?>