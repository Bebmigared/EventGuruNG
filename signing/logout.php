<?php
session_start();
//logout
//if (!empty($_POST['logout'])) {
	
	unset($_SESSION['username']);
	session_destroy();
	header('location: ../index.php');

?>