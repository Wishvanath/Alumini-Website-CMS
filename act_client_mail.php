<!-- send mail for contact us page -->
<?php 

  if (isset($_POST['mail_submit'])) {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $contact_no = $_POST['contact_no'];
    $msg = $_POST['msg'];
    $message = "$msg"."<br> Contact No :"."$contact_no";
    $to_email = "wishvanath.anand.pals@gmail.com";
    $subject = "Alumni Association Clients Message :";
    $headers = "From : $email";
    mail($to_email,$subject,$message,$headers);
          echo '<script language="javascript">';
          echo 'alert("We will get back you with in 2 Working days via Email.");';
          echo 'window.location.href = "about_us.php";';
          echo '</script>';
    

  }


 ?>
<!-- end of php code -->