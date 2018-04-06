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
		echo 'alert(" Please select any Image file. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$query = "INSERT INTO `aes_job` (`job_id`, `job_title`, `job_descp`, `last_date`, `apply_link`, `image`, `post_date`) VALUES (NULL, '$job_title', '$job_descp', '$last_date', '$apply_link', '$new_file', CURRENT_TIMESTAMP)";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		header("Location: post_jobs.php");
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
	}
	
	}
	// end of save command


	// update command
	if (isset($_POST['btn_update'])) {
	// check button is pressed or not
	//echo "update button is pressed";
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
		echo 'alert(" Please select any Image file. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB.. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$get_job_id = "SELECT * FROM `aes_job` ORDER BY `aes_job`.`post_date` DESC ";
			$run_id = mysqli_query($con, $get_job_id) or die("cannot fetch the data from database" .mysqli_error($con));
			if ($run_id) {
				$job_id = mysqli_fetch_assoc($run_id);
				$job_uni_id = $job_id['job_id'];
				$pre_image = $job_id['image'];
			}
			$query = "UPDATE `aes_job` SET `job_title` = '$job_title', `job_descp` = '$job_descp', `last_date` = '$last_date', `apply_link` = '$apply_link', `image` = '$new_file', `post_date` = CURRENT_TIMESTAMP WHERE `aes_job`.`job_id` = $job_uni_id ";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		 unlink("../img/".$pre_image);
	 		 header("Location: post_jobs.php");
	 		
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. Press OK Button to redirect Home Page. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
	}
	

	}

	// end of update command

	// delete command
	if (isset($_POST['btn_delete'])) {
	// to check delete button is pressed or not
	//echo "delete button is pressed";
		$get_job_id = "SELECT * FROM `aes_job` ORDER BY `aes_job`.`post_date` DESC";
		$run_id = mysqli_query($con, $get_job_id) or die("cannot fetch the data from database" .mysqli_error($con));
		if ($run_id) {
				$job_id = mysqli_fetch_assoc($run_id);
				$job_uni_id = $job_id['job_id'];
				$image = $job_id['image'];

			}
			$query = "DELETE FROM `aes_job` WHERE `aes_job`.`job_id` = $job_uni_id";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		// echo "You have deleted successfully";
	 		unlink("../img/".$image);
	 		header("Location: post_jobs.php");
	 		
		 } 
		 else{
		 	echo "problem find to delete the data";
		 }
}
	//end of delete command
 ?>