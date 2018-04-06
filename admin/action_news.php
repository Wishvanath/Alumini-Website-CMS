<?php 
require_once('inc/db.php');
//for saving the news into the database

if (isset($_POST['btn_save'])) {
	// to check the save button is pressed or not 
	//echo "you have pressed the save button";
	$news_title = $_POST['news_title'];
	$news_descp = $_POST['news_descp'];
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
		echo 'window.location.href = "post_news.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "post_news.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$query = "INSERT INTO `aes_news` (`news_id`, `news_title`, `news_descp`, `post_date`, `image`) VALUES (NULL, '$news_title', '$news_descp', CURRENT_TIMESTAMP, '$new_file')";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		header("Location: post_news.php");
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. ");';
		echo 'window.location.href = "post_news.php";';
	 	echo '</script>';
	}
	
}
// end of the save command


// update command
if (isset($_POST['btn_update'])) {
	// check button is pressed or not
	//echo "update button is pressed";
	$news_title = $_POST['news_title'];
	$news_descp = $_POST['news_descp'];
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
		echo 'window.location.href = "post_news.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB.. ");';
		echo 'window.location.href = "post_news.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$get_news_id = "SELECT * FROM `aes_news` ORDER BY `aes_news`.`post_date` DESC ";
			$run_id = mysqli_query($con, $get_news_id) or die("cannot fetch the data from database" .mysqli_error($con));
			if ($run_id) {
				$news_id = mysqli_fetch_assoc($run_id);
				$news_uni_id = $news_id['news_id'];
				$pre_image = $news_id['image'];
			}
			$query = "UPDATE `aes_news` SET `news_title` = '$news_title', `news_descp` = '$news_descp', `post_date` = CURRENT_TIMESTAMP, `image` = '$new_file' WHERE `aes_news`.`news_id` = $news_uni_id ";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		 unlink("../img/".$pre_image);
	 		 header("Location: post_news.php");
	 		
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. Press OK Button to redirect Home Page. ");';
		echo 'window.location.href = "post_news.php";';
	 	echo '</script>';
	}
	

}
// end of update command


// for delete command 
if (isset($_POST['btn_delete'])) {
	// to check delete button is pressed or not
	//echo "delete button is pressed";
	$get_news_id = "SELECT * FROM `aes_news` ORDER BY `aes_news`.`post_date` DESC";
			$run_id = mysqli_query($con, $get_news_id) or die("cannot fetch the data from database" .mysqli_error($con));
			if ($run_id) {
				$news_id = mysqli_fetch_assoc($run_id);
				$news_uni_id = $news_id['news_id'];
				$image = $news_id['image'];
			}
			$query = "DELETE FROM `aes_news` WHERE `aes_news`.`news_id` = $news_uni_id";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		// echo "You have deleted successfully";
	 		unlink("../img/".$image);
	 		header("Location: post_news.php");
	 		
		 } 
		 else{
		 	echo "Problem find to delete the data";
		 }
}
// end of the delete command

 ?>