<?php 

	session_start();
	if(isset($_SESSION['email_id'])){
		echo $_SESSION['email_id'] . "session";
	}
	else if(isset($_COOKIE['email_id'])){
		echo $_COOKIE['email_id'] . "cookie";
		
	}
	else{
		echo "some error";
		header("Location: ../student_login.php");
	}
 ?>





<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>student dashboard</title>
</head>
<body>
	<h1>welcome in student dashboard <br>
		please logout here ...........

	</h1>
	<a href="../st_logout.php">
		<h2>Logout</h2>
	</a>
</body>
</html>