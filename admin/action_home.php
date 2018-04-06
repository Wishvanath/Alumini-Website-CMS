
<?php 
require_once('inc/db.php');
// for save the message and chairman image 
if (isset($_POST['btn_save'])) {
	// check button save is pressed or not
	//echo "save button is processing";
	$message_descp = $_POST['message_descp'];
	$upload_date = date("Y-m-d");
	$upload_time = time();
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
		echo 'window.location.href = "home.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "home.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$query = "INSERT INTO `aes_message` (`message_id`, `message_descp`, `upload_date`, `upload_time`, `image`) VALUES (NULL, '$message_descp', '$upload_date', CURRENT_TIMESTAMP, '$new_file')";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		header("Location: home.php");
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. ");';
		echo 'window.location.href = "home.php";';
	 	echo '</script>';
	}
	

	

}// end of save buuton

// section of update command
if (isset($_POST['btn_update'])) {
	// check button is pressed or not
	//echo "update button is pressed";
	$message_descp = $_POST['message_descp'];
	$upload_date = date("Y-m-d");
	$upload_time = time();
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
		echo 'window.location.href = "home.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB.. ");';
		echo 'window.location.href = "home.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$get_msg_id = "SELECT * FROM `aes_message` ORDER BY `aes_message`.`upload_time` DESC";
			$run_id = mysqli_query($con, $get_msg_id) or die("cannot fetch the data from database" .mysqli_error($con));
			if ($run_id) {
				$message_id = mysqli_fetch_assoc($run_id);
				$message_uni_id = $message_id['message_id'];
				$pre_image = $message_id['image'];
			}
			$query = "UPDATE `aes_message` SET `message_descp` = '$message_descp', `upload_date` = '$upload_date', `upload_time` = CURRENT_TIMESTAMP, `image` = '$new_file' WHERE `aes_message`.`message_id` = $message_uni_id ";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		 unlink("../img/".$pre_image);
	 		 header("Location: home.php");
	 		
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. Press OK Button to redirect Home Page. ");';
		echo 'window.location.href = "home.php";';
	 	echo '</script>';
	}
	

}
	
	
// end of update command


// start pf delete command
if (isset($_POST['btn_delete'])) {
	// to check delete button is pressed or not
	//echo "delete button is pressed";
	$get_msg_id = "SELECT * FROM `aes_message` ORDER BY `aes_message`.`upload_time` DESC";
			$run_id = mysqli_query($con, $get_msg_id) or die("cannot fetch the data from database" .mysqli_error($con));
			if ($run_id) {
				$message_id = mysqli_fetch_assoc($run_id);
				$message_uni_id = $message_id['message_id'];
				$image = $message_id['image'];
			}
			$query = "DELETE FROM `aes_message` WHERE `aes_message`.`message_id` = $message_uni_id";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		// echo "You have deleted successfully";
	 		unlink("../img/".$image);
	 		header("Location: home.php");
	 		
		 } 
		 else{
		 	echo "problem find to delete the data";
		 }
}

// end of delete command


?>