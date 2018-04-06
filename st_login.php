<?php
	require_once('inc/db.php'); 
	if (isset($_POST['st_login_btn'])) {
		// chek if login button is pressed or not
		//echo "login button is pressed";
		
		$email_id = mysqli_real_escape_string($con, trim($_POST['email_id']));
		$password = mysqli_real_escape_string($con, md5(trim($_POST['password'])));
		//echo "$email_id" . "$password";


		// checked for empty field
		if (empty($email_id) and empty($password)) {
			echo '<script language="javascript">';
			echo 'alert("please fill all the fields");';
			echo 'window.location.href = "student_login.php";';
			echo '</script>';
			exit();
		}

		// to check remember option is checked or not
		if (isset($_POST['re'])) {
			$re = "checked";
		}
		else{
			$re = "unchecked";
		}
		//echo "$re";
		$query = "SELECT * FROM aes_student WHERE email_id = '$email_id' AND password = '$password'";
		$run = mysqli_query($con, $query);
		if (mysqli_num_rows($run) > 0 ) {
			// check remember me option
			if ($re == "checked") {
				setcookie("email_id", $email_id, time() + (86400 * 10));
			}
			else{
				session_start();
				$_SESSION['email_id'] = $email_id;
			}
			header("Location: student/index.php");
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Invalid User Name and Password please try again ..!");';
			echo 'window.location.href = "student_login.php";';
			echo '</script>';
		}
	}

 ?>