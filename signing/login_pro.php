<?php


	session_start();
	
    include '../db.php';

	$_SESSION["id"] = $_POST["id"];
	$_SESSION["name"] = $_POST["name"];
	$_SESSION["email"] = $_POST["email"];


	

    //echo $_POST['id'];
    //echo $_POST['name'];
    //echo $_POST['email'];
    //return false;
    
	$sql = "SELECT * FROM users WHERE email='".$_POST["email"]."'";
	$result = $mysqli->query($sql);


	if(!empty($result->fetch_assoc())){
		$sql2 = "UPDATE users SET google_id='".$_POST["id"]."' WHERE email='".$_POST["email"]."'";
	}else{
		$sql2 = "INSERT INTO users (name, email, google_id) VALUES ('".$_POST["name"]."', '".$_POST["email"]."', '".$_POST["id"]."')";
	}


	$mysqli->query($sql2);


	echo "Updated Successful";
?>