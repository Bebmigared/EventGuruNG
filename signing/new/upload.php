<?php
//include ('events.php');
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "emadb");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$eventname = mysqli_real_escape_string($db, $_POST['eventname']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO events (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  
  //SELECT id FROM order WHERE orderNumber = '$orderNumber;
  $query = "SELECT id FROM images WHERE id='.$_POST[$eventname]'";
  $result = mysqli_query($db, $query) or die( mysqli_error($db));
  $id = $row['id'];
?>