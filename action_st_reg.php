<!-- start of php code for student registration -->
<?php 
  require_once('inc/db.php');
  if (isset($_POST['st_reg_btn'])) {
    //check button is pressed or not
    // echo "registration is processing";
    // receive the data from the form
    $first_name = mysqli_real_escape_string($con, trim($_POST['first_name']));
    $middle_name = mysqli_real_escape_string($con, trim($_POST['middle_name']));
    $last_name = mysqli_real_escape_string($con, trim($_POST['last_name']));
    $email_id = mysqli_real_escape_string($con, trim($_POST['email_id']));
    $date_of_birth = $_POST['date_of_birth'];
    $contact_no = mysqli_real_escape_string($con, trim($_POST['contact_no']));
    $password = mysqli_real_escape_string($con, md5(trim($_POST['password'])));
    $confirm_pass = mysqli_real_escape_string($con, md5(trim($_POST['confirm_pass'])));
    if (isset($_POST['gender'])) {
      $gender = $_POST['gender'];
    }
    if ($password !== $confirm_pass) {
      echo '<script language="javascript">';
          echo 'alert("Password is not matched.");';
          echo 'window.location.href = "student_reg.php";';
          echo '</script>';
    }
    else{
       $query = "INSERT INTO `aes_student` (`student_id`, `first_name`, `middle_name`, `last_name`, `date_of_birth`, `gender`, `address`, `email_id`, `contact_no`, `stream`, `academic_year`, `image`, `password`) VALUES (NULL, '$first_name', '$middle_name', '$last_name', '$date_of_birth', '$gender', '', '$email_id', '$contact_no', '', '', '', '$password')";

        $run = mysqli_query($con, $query) or die("Can not insert data into database." .mysqli_error($con));
        if($run){
        echo '<script language="javascript">';
        echo 'alert("You have signup sucessfully.");';
        echo 'window.location.href = "student_login.php";';
        echo '</script>';
        
       }
    }   

}

?>