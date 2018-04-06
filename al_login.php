
<?php 
	require_once('inc/db.php');
	if (isset($_POST['al_login_btn'])) {
		// to chek login button is pressed or not
		//echo "login btn is pressed";

		// get the value of input box
		
		$email_id = mysqli_real_escape_string($con, trim($_POST['email_id']));
		$password = mysqli_real_escape_string($con, md5(trim($_POST['password'])));
		//echo "$email_id" . "$password";
		if (empty($email_id) and empty($password)) {
			# code...
			echo '<script language="javascript">';
			echo 'alert("please fill all the fields");';
			echo 'window.location.href = "alumni_login.php";';
			echo '</script>';
			exit();

		}
		// to check rember option
		if (isset($_POST['re'])) {
			$re = "checked";
		}
		else {
			$re = "unchecked";
		}
		// check user name and password
		$query = "SELECT * FROM aes_alumni WHERE email_id = '$email_id' AND password = '$password'";
		$run = mysqli_query($con, $query);
		if (mysqli_num_rows($run) > 0) {
			// check remember option is checked or not
			if ($re == 'checked') {
				setcookie("email_id", $email_id, time() + (86400 * 10));
			}
			else{
				session_start();
				$_SESSION['email_id'] = $email_id;
			}
			header("Location: alumni/index.php");
		}
		else{
			echo '<script language="javascript">';
			echo 'alert("Invalid User Name and Password please try again ..!");';
			echo 'window.location.href = "alumni_login.php";';
			echo '</script>';

		}
	}
	
 ?>