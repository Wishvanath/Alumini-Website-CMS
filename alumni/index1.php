
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
		header("Location: ../alumni_login.php");
	}
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>alumni dashboard</title>
</head>
<body>
	<h4>welcome to alumni dashboard</h4>
	<h3>please logout here.......</h3>
	<a href="../al_logout.php">
		<h2>Logout</h2>
	</a>
</body>
</html>