<?php 
require_once('inc/db.php');

if (isset($_POST['al_update'])) {
	// get the data from form control
	$alumni_id = $_POST['alumni_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$email_id = $_POST['email_id'];
	$contact_no = $_POST['contact_no'];
	$date_of_birth = $_POST['date_of_birth'];
	$stream = $_POST['stream'];
	$passing_year = $_POST['passing_year'];
	$job_descp = $_POST['job_descp'];
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
		echo 'alert(" Please select any Image file.. ");';
		echo 'window.location.href = "al_profile.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 200000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 200 KB.. ");';
		echo 'window.location.href = "al_profile.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$get_al_id = "SELECT * FROM `aes_alumni` WHERE `aes_alumni`.`email_id` = '$email_id'";
			$run_id = mysqli_query($con, $get_al_id) or die("cannot fetch the data from database" .mysqli_error($con));
			if ($run_id) {
				$al_id = mysqli_fetch_assoc($run_id);
				$al_uni_id = $al_id['alumni_id'];
				$pre_image = $al_id['image'];
			}
			$query = "UPDATE `aes_alumni` SET `first_name` = '$first_name', `middle_name` = '$middle_name', `last_name` = '$last_name', `email_id` = '$email_id', `contact_no` = '$contact_no', `date_of_birth` = '$date_of_birth', `stream` = '$stream', `passing_year` = '$passing_year', `job_descp` = '$job_descp', `image` = '$new_file' WHERE `aes_alumni`.`alumni_id` = $al_uni_id ";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		 // unlink("../img/".$pre_image);
	 		if (!empty($pre_image)) {
	 			unlink("../img/".$pre_image);
	 		}

	 		// update mentor pfofile image
	 		$mn_upd = "UPDATE `aes_mentor` SET `image` = '$new_file' WHERE `aes_mentor`.`email_id` = '$email_id'";
	 		$mn_run = mysqli_query($con, $mn_upd);
	 		if ($mn_run) {
	 			
	 		}

	 		 echo '<script language="javascript">';
			 echo 'alert(" You have Updated your Profile ");';
			 echo 'window.location.href = "al_profile.php";';
		 	 echo '</script>';
			 exit();
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. Press OK Button to redirect Home Page. ");';
		echo 'window.location.href = "al_profile.php";';
	 	echo '</script>';
	}
}	

 ?>