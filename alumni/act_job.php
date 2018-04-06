<?php 

require_once('inc/db.php');
	// save command
	if (isset($_POST['btn_save'])) {
	// to check the save button is pressed or not 
	//echo "you have pressed the save button";
	$job_title = $_POST['job_title'];
	$job_descp = $_POST['job_descp'];
	$last_date = $_POST['last_date'];
	$apply_link = $_POST['apply_link'];
	extract($_POST);
	$img_name=$_FILES['img']['name'];
	$tmp_name=$_FILES['img']['tmp_name'];
	$file_size = $_FILES['img']['size'];
	$file_extension = explode('.', $img_name);
	$file_extension = strtolower(end($file_extension));
	$new_file = uniqid().'.'.$file_extension;
	$store = "../img/".$new_file;
	if (empty($img_name)) {
		echo '<script language="javascript">';
		echo 'alert(" Please select any Image file. ");';
		echo 'window.location.href = "al_job.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" You Image size is more then 300 KB. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "al_job.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$query = "INSERT INTO `aes_job` (`job_id`, `job_title`, `job_descp`, `last_date`, `apply_link`, `image`, `post_date`) VALUES (NULL, '$job_title', '$job_descp', '$last_date', '$apply_link', '$new_file', CURRENT_TIMESTAMP)";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		//header("Location:al_job.php");
	 		echo '<script type="text/javascript">'; 
			echo 'alert("Successfully Posted a New Job");'; 
			echo 'window.location.href = "al_job.php";';
			echo '</script>';
		 } 
		}
	}
	else{
		echo '<script language="text/javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. ");';
		echo 'window.location.href = "al_job.php";';
	 	echo '</script>';
	}
	
	}
	// end of save command




 ?>