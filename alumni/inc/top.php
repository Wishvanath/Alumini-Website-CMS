<?php 
  require_once('inc/db.php');
 ?>
 <?php 

    session_start();
    if(isset($_SESSION['email_id'])){
        // echo $_SESSION['email_id'] . "session";
        $session_id = $_SESSION['email_id'];
    }
    else if(isset($_COOKIE['email_id'])){
        // echo $_COOKIE['email_id'] . "cookie";
        $session_id = $_COOKIE['email_id'];
    }
    else{
        echo "some error";
        header("Location: ../alumni_login.php");
    }
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Alumni online association</title>
    <link rel="icon" type="image/png" href="img/favicon.png">

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/animated.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->