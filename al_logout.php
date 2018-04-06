<?php 

	session_start();
	session_destroy();
	setcookie("email_id", "" , time() - (86400 * 10));
	header("Location: alumni_login.php");
	exit();
 ?>