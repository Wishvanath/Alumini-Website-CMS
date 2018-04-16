<?php 
	require_once('inc/db.php');
	// processign for update
	if (isset($_POST['btn_update'])) {
		// get the form data
		$admin_id = $_POST['admin_id'];
		$admin_name = $_POST['admin_name'];
		$admin_email = $_POST['admin_email'];
		$admin_contact = $_POST['admin_contact'];
		$admin_address = $_POST['admin_address'];
		extract($_POST);
		$img_name=$_FILES['admin_image']['name'];
		$tmp_name=$_FILES['admin_image']['tmp_name'];
		$file_size = $_FILES['admin_image']['size'];
		$file_extension = explode('.', $img_name);
		$file_extension = strtolower(end($file_extension));
		$new_file = uniqid().'.'.$file_extension;
		$store = "img/".$new_file;
		if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
			if ($file_size >= 200000) {
			echo '<script language="javascript">';
			echo 'alert(" Your Image size is more then 200 KB.. ");';
			echo 'window.location.href = "al_profile.php";';
		 	echo '</script>';
			}
			else{
				move_uploaded_file($tmp_name,$store);
				$img_del = "SELECT * FROM `aes_admin`  WHERE `aes_admin`.`admin_id` = $admin_id";
				$img_run = mysqli_query($con, $img_del) or die("cannot fetch the data from database" .mysqli_error($con));
				if ($img_run) {
					$img = mysqli_fetch_assoc($img_run);
					$pre_image = $img['admin_image'];
				}
				$query = "UPDATE `aes_admin` SET `admin_name` = '$admin_name', `admin_email` = '$admin_email', `admin_contact` = '$admin_contact', `admin_address` = '$admin_address', `admin_image` = '$new_file' WHERE `aes_admin`.`admin_id` = $admin_id";
			    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
			 	if ($run) {
			 		 // unlink("../img/".$pre_image);
			 		if (!empty($pre_image)) {
			 			unlink("img/".$pre_image);
			 		}

			 		

			 		 echo '<script language="javascript">';
					 echo 'alert(" You have Updated your Profile ");';
					 echo 'window.location.href = "admin_pf.php";';
				 	 echo '</script>';
					 exit();
				 } 
				}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. Press OK Button to redirect Home Page. ");';
		echo 'window.location.href = "admin_pf.php";';
	 	echo '</script>';
	}
}


// create author
if (isset($_POST['author_create'])) {
	// get the form data 
	$author_email = $_POST['author_email'];
	$author_password = $_POST['author_password'];
	// write query for save the author details
	$query = "INSERT INTO `aes_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_contact`, `admin_address`, `admin_password`, `admin_image`) VALUES (NULL, '', '$author_email', '', '', '$author_password', '')";
	$run = mysqli_query($con,$query) or die("Can not Inserted the data".mysqli_error($con));
	if ($run) {
		header("Location: admin_pf.php");
	}
}





 ?>