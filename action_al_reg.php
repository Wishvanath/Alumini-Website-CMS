<?php 
	require_once('inc/db.php');
	if (isset($_POST['al_reg_btn'])) {
		// to check button is pressed or not 
		//echo "you have pressed button";
		$first_name = mysqli_real_escape_string($con, trim($_POST['first_name']));
		$middle_name = mysqli_real_escape_string($con, trim($_POST['middle_name']));
		$last_name = mysqli_real_escape_string($con, trim($_POST['last_name']));
		$email_id = mysqli_real_escape_string($con, trim($_POST['email_id']));
		// $gender = (isset($_POST['gender']));
		$date_of_birth = $_POST['date_of_birth'];
		$passing_year = $_POST['passing_year'];
		$password = mysqli_real_escape_string($con, md5(trim($_POST['password'])));
		$confirm_pass = mysqli_real_escape_string($con, md5(trim($_POST['confirm_pass'])));
		if (isset($_POST['gender'])) {
			$gender = $_POST['gender'];
		}
		if ($password !== $confirm_pass) {
			echo '<script language="javascript">';
      		echo 'alert("Password is not matched.");';
      		echo 'window.location.href = "alumni_reg.php";';
      		echo '</script>';
		}
		else{
			$query = "INSERT INTO `aes_alumni` (`alumni_id`, `first_name`, `middle_name`, `last_name`, `email_id`, `contact_no`, `gender`, `date_of_birth`, `stream`, `passing_year`, `job_descp`, `image`, `password`) VALUES (NULL, '$first_name', '$middle_name', '$last_name', '$email_id', '', '$gender', '$date_of_birth', '', '$passing_year', '', '', '$password')";
			$run = mysqli_query($con,$query) or die("Can not insert data into database." .mysqli_error($con));
			if($run){
				echo '<script language="javascript">';
		        echo 'alert("You have signup sucessfully.");';
		        echo 'window.location.href = "alumni_login.php";';
		        echo '</script>';
			}
		}
	}
	
 ?>