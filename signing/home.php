<?php
include ('server.php'); 
session_start();
$_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home:</title>
	<meta http-equiv="refresh" content="5;url=../index.php">
	<!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        
		<link rel="shortcut icon" href="assets/ico/favicon.png">
		<script src="https://apis.google.com/js/platform.js" async defer></script>
		<style>
		    .login{
		    margin: 20px;
  padding: 20px 40px 100px 150px;
      width: 70%;
		    }
		</style>
		
</head>
<body>
<!--<form role="form" action="home.php" method="post" class="login-form">
<div class="container">
	<div class="row">-->
	<div class="container">
		<div class="form-div login">
			
			<div class="alert alert-success">
				You are now logged in <br> You will be redirected in 6 seconds.
			</div>
			<h3>Welcome, <?=$_SESSION['user']['username'] ?></h3>
			                <!--< print_r ($_SESSION['user']);
                                return false; ?>-->
			<!-- /*<a href="logout.php" name="logout" class="logout">LOGOUT</a> */
			<a href="logout2.php" class="logout">LOGOUT</a> -->
			<div class="alert alert-warning">
			    <strong>Welcome to EventGuru</strong><br>
				We have sent you a mail.
				Check your email account for the Welcome Message we just emailed to you at <strong><?=$_SESSION['user']['email'] ?></strong>
			</div>
			<button class="btn btn-block btn-lg btn-primary">EventGuru The Home of World Class Events!</button>
		</div>
		</div>
<!--	</div>
	
</div>
</form>-->
</body>
</html>