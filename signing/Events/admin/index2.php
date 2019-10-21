<?php
session_start();
include ('../db.php');
$username = "";
$password = "";

//login
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
if (isset($_SESSION['user'])) {
	// Redirection to login page twitter or facebook
	header("location: ../index.php");
	}
	if (array_key_exists("login", $_GET)) 
{
$oauth_provider = $_GET['oauth_provider'];
if ($oauth_provider == 'twitter')
{
header("Location: login-twitter.php");
}
else if ($oauth_provider == 'facebook')
 {
header("Location: login-facebook.php");
}
}
if (isset($_POST['login'])) {

	if(isset($_POST['username'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
	}

	if(isset($_POST['password'])) {
		$password = mysqli_real_escape_string($db, $_POST['password']);
	}
	$errors = array();
	
	$select2= 	mysqli_select_db($db,'emadb');
	if (empty($username)) {
		//array_push($errors, "Username is required");
		$_SESSION['msg'] = 'Username is required';
		}
	if (empty($password)) {
		//array_push($errors, "password is required");
		$_SESSION['msg'] = 'password is required';
	}
	if (count ($errors) == 0) {
		$password1 = md5($password);
		$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password1'";
		$result = mysqli_query($db,$query);
		//$row = mysqli_fetch_array($query);
		if (mysqli_num_rows($result) != 0 ) {
			$id = $row["id"];
			$rowval = mysqli_fetch_array($result);
			 $_SESSION['admin'] = $rowval;	
			 $_SESSION['admin_id'] =$id;
		//$_SESSION['username'] = $username;

		$_SESSION['success'] = "You are now logged in";
		header ('location: ../admin.php');
		} 
	}
}
?>