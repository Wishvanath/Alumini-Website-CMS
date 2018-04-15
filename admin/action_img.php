<?php 
// include connection
require_once('inc/db.php');
//to save the image 
if (isset($_POST['btn_save'])) {
	// get the form data 
	$gal_title = $_POST['gal_title'];
	extract($_POST);
	$img1=$_FILES['img1']['name'];
	$tmp1=$_FILES['img1']['tmp_name'];
	$file1_size = $_FILES['img1']['size'];
	$file1_extension = explode('.', $img1);
	$file1_extension = strtolower(end($file1_extension));
	$new1_file = uniqid().'.'.$file1_extension;
	$store1 = "../img/".$new1_file;
	echo "$new1_file";

	$img2=$_FILES['img2']['name'];
	$tmp2=$_FILES['img2']['tmp_name'];
	$file2_size = $_FILES['img2']['size'];
	$file2_extension = explode('.', $img2);
	$file2_extension = strtolower(end($file2_extension));
	$new2_file = uniqid().'.'.$file2_extension;
	$store2 = "../img/".$new2_file;
	echo "$new2_file";

	$img3=$_FILES['img3']['name'];
	$tmp3=$_FILES['img3']['tmp_name'];
	$file3_size = $_FILES['img3']['size'];
	$file3_extension = explode('.', $img3);
	$file3_extension = strtolower(end($file3_extension));
	$new3_file = uniqid().'.'.$file3_extension;
	$store3 = "../img/".$new3_file;
	echo "$new3_file";

	$img4=$_FILES['img4']['name'];
	$tmp4=$_FILES['img4']['tmp_name'];
	$file4_size = $_FILES['img4']['size'];
	$file4_extension = explode('.', $img4);
	$file4_extension = strtolower(end($file4_extension));
	$new4_file = uniqid().'.'.$file4_extension;
	$store4 = "../img/".$new4_file;
	echo "$new4_file";
	
	if ($file1_extension && $file2_extension && $file3_extension && $file4_extension == 'jpg' || $file1_extension && $file2_extension && $file3_extension && $file4_extension == 'jpeg' || $file1_extension && $file2_extension && $file3_extension && $file4_extension == 'png' || $file1_extension && $file2_extension && $file3_extension && $file4_extension =='gif') {
		if ($file1_size && $file2_size && $file3_size && $file4_size >= 300000) {
		echo '<script language="javascript">';
		echo 'alert(" Your Image size is more then 300 KB. Press OK Button to redirect Home Page.. ");';
		echo 'window.location.href = "gall_img.php";';
	 	echo '</script>';
		}
		else{
			move_uploaded_file($tmp1,$store1);
			move_uploaded_file($tmp2,$store2);
			move_uploaded_file($tmp3,$store3);
			move_uploaded_file($tmp4,$store4);
			$query = "INSERT INTO `aes_gallary` (`gal_id`, `gal_title`, `img1`, `img2`, `img3`, `img4`, `post_date`) VALUES (NULL, '$gal_title', '$new1_file', '$new2_file', '$new3_file', '$new4_file', CURRENT_TIMESTAMP)";
		    $run = mysqli_query($con, $query) or die("You are unable to insert the data.".mysqli_error($con));
	 	if ($run) {
	 		header("Location: gall_img.php");
		 } 
		}
	}
	else{
		echo '<script language="javascript">';
		echo 'alert(" You can upload only jpg , jpeg , png , gif Format image. ");';
		echo 'window.location.href = "gall_img.php";';
	 	echo '</script>';
	}








}




 ?>