<?php
session_start();
//logout
//if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header('location: ../index.php');
//}else {
//	array_push($errors, "wrong username/password combination");
//	header ('location: home2x.php');
//}
?>