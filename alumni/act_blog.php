<?php 

	require_once('inc/db.php');
	// save command
	if (isset($_POST['btn_post'])) {
	// to check the save button is pressed or not 
	//echo "you have pressed the save button";
	$bloger_email = $_POST['bloger_email'];
	$author = $_POST['author'];
	$blog_title = $_POST['blog_title'];
	$blog_content = $_POST['blog_content'];
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
		echo 'window.location.href = "al_blog.php";';
	 	echo '</script>';
		exit();
	}
	if ($file_extension == 'jpg' || $file_extension == 'jpeg' || $file_extension == 'png' || $file_extension =='gif') {
		if ($file_size >= 200000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 200 KB. ");';
		echo 'window.location.href = "post_jobs.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp_name,$store);
			$query = "INSERT INTO `aes_blog` (`blog_id`, `bloger_email`, `author`, `blog_title`, `blog_content`, `blog_image`, `publish_date`) VALUES (NULL, '$bloger_email', '$author', '$blog_title', '$blog_content', '$new_file', CURRENT_TIMESTAMP)";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		echo '<script language="javascript">';
			echo 'alert(" Successfully Posted your Blog..");';
			echo 'window.location.href = "al_blog.php";';
	 		echo '</script>';
	 		
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




 ?>