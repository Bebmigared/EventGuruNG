<?php
session_start();
$errors = array();
$username = "";
$email = "";


//Connect to the database
include ('../db.php');

//if the register button is clicked
if (isset($_POST['register'])) {
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$email = mysqli_real_escape_string($db, $_POST['email']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password1 = mysqli_real_escape_string($db, $_POST['password1']);
	$password2 = mysqli_real_escape_string($db, $_POST['password2']); 
	
	//ensure that form fields are filled
	if (empty($firstname)){
		array_push($errors, "Firstname is required");
	}
	if (empty($lastname)){
		array_push($errors, "Lastname is required");
	}
	if (empty($email)){
		array_push($errors, "Email is required");
	}
	if (empty($username)){
		array_push($errors, "Username is required");
	}
	if (empty($password1)){
		array_push($errors, "Password is required");
	}
	if ($password1 != $password2){
		array_push($errors, "The two passwords do not match");
	}
	
	$query = "SELECT * FROM registered where email = '$email'"  ;
	$result = mysqli_query($db, $query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    
    if ($user['email'] === $email) {
        echo "<script type='text/javascript'>alert('The Email you entered is already in use.')</script>";
      //array_push($errors, "email already exists");
    }
  }
	//if(count == 1)
	//{
	    //echo "<script type='text/javascript'>alert('User Email is already in use.')</script>";
	//} 
	//if there are no errors, save the data to database
	else {
	if(count($errors) == 0)
	{
		$password = md5($password1); // ensures that password is encrypted before storage
		$sql = "INSERT INTO registered (firstname, lastname, email, username, password) VALUES ('$firstname', '$lastname', '$email', '$username', '$password')";
		$result = mysqli_query($db, $sql);
		    $user = "SELECT * FROM registered WHERE username='$username'";
          	$results = mysqli_query($db, $user);
          	if (mysqli_num_rows($results) != 0) {
          	   
          	 $rowval = mysqli_fetch_array($results);
			 $_SESSION['user'] = $rowval;
			 //print_r ($_SESSION['user']);
			 //return false;
          	  //$_SESSION['user'] = $firstname;
          	    
          	}
		//Mail sending starts
		if ($result == true) 
                        {
  	                             require 'mailing.php'   ;
                                     $to = $email;
                                 $subject = "EventGuru Registration for $firstname $lastname";
                                 $msg = "
        <html>
        <head>
        <title>EventGuru Registration Notification</title>
        </head>
        <body>
        <p>Dear $firstname,</p>
        <p>Thanks for choosing <strong>EventGuru</strong>.</p>
        <p>Your account has been successfully created.</p>
        <p>Welcome to the world of <strong>Unlimited Events</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Admin,</i>
        <br><strong>EventGuru</strong>
        <br>info@eventguru.com
        </body>
        </html>
        ";
        //$headers = "MIME-Version: 1.0" . "\r\n";
        //$headers = "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        //$headers = 'From: EventGuru Admin<info@eventguru.com>' . "\r\n";
        
		sendmail($to,$msg,$subject);
		//echo $mail;
		//echo $subject;
		//echo $to;
		//return false;
		//echo ''; 
//echo '<script type="text/javascript">alert("Registration successfull! A Welcome mail has been sent to " .$mail. " ");</script>';
//echo 'window.location.href = "../index.php";';
//echo '';
		header ('location: home.php');
						}
		
	}
	
else {
		//array_push($errors, "wrong username/password combination");
		echo "<script type='text/javascript'>alert('wrong username/password combination')</script>";
		//$errors = "wrong username/password combination";
		//header ('location: home2x.php');
	}
}
//}
//else {
    //echo "<script type='text/javascript'>alert('User Email is already in use.')</script>";
	//$errors = "User Email is already in use.";	
	//$type = "error";
//}
}

?>