<?php 
	require_once('db.php');
	session_start();
	if(!isset($_SESSION['admin_login'])){
	if(isset($_POST['login_btn'])){
		// $sql = " SELECT * FROM aes_admin where admin_email = '" .$_POST['admin_email']
		
		
		$admin_email = mysqli_real_escape_string($con,trim($_POST['admin_email']));
		$admin_password = mysqli_real_escape_string($con,trim($_POST['admin_password']));
		// echo "$admin_email";
		// echo "$admin_password";
		// $user_name = mysqli_real_escape_string($con ,$_POST['admin_email']);

		// $user_name = $_POST['admin_email'];
		// $user_password = $_POST['admin_password'];
		// echo "$user_name";
		// echo "$user_password";
		$query = "SELECT * FROM aes_admin WHERE admin_email = '$admin_email' AND admin_password = '$admin_password'";
		$fire = mysqli_query($con,$query);
		// if($fire)
		// 	echo mysqli_num_rows($fire). "row found";
		if($fire){
			if(mysqli_num_rows($fire) > 0){
				$_SESSION['admin_login'] = true;
				$_SESSION['admin_email'] = $admin_email;
				header("Location: ../home.php");
			}
			else{
				echo '<script language="javascript">';
				echo 'alert(" Invalid User name and Password Please try again..");';
				echo 'window.location.href = "../index.php";';
			 	echo '</script>';
				exit();
				 
        			
			}
		}
	}
}else{
	header("Location: ../home.php");
}

 ?>