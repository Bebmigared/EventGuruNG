<?php
//session_start();
$username = "";
$email = "";
$errors = array();

//Connect to the database
 //include ('../../db.php');
 $db = mysqli_connect("localhost", "root", "", "emadb");


//if the register button is clicked
if (isset($_POST['cardsubmit'])) {
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$creditCardType = mysqli_real_escape_string($db, $_POST['creditCardType']);
	$cardnumber = mysqli_real_escape_string($db, $_POST['cardnumber']);
	$expiry = mysqli_real_escape_string($db, $_POST['expiry']);
	$cvv = mysqli_real_escape_string($db, $_POST['cvv']);
	$address1 = mysqli_real_escape_string($db, $_POST['address1']);
    $address2 = mysqli_real_escape_string($db, $_POST['address2']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $zip = mysqli_real_escape_string($db, $_POST['zip']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $phone = mysqli_real_escape_string($db, $_POST['phone']);
	
		
	//ensure that form fields are filled
	if (empty($firstname)){
		array_push($errors, "First Name is required");
	}
	if (empty($lastname)){
		array_push($errors, "Organizer is required");
	}
	if (empty($creditCardType)){
		array_push($errors, "Card Type is required");
	}
	if (empty($cardnumber)){
		array_push($errors, "Card Number is required");
	}
	if (empty($expiry)){
		array_push($errors, "Expiry is required");
	}
	if (empty($cvv)){
		array_push($errors, "CVV is required");
	}
	if (empty($address1)){
		array_push($errors, "Address is required");
	}
	if (empty($address2)){
		array_push($errors, "Address is required");
	}
	if (empty($city)){
		array_push($errors, "City is required");
    }
    if (empty($state)){
		array_push($errors, "State is required");
    }
    if (empty($zip)){
		array_push($errors, "Zip is required");
    }
    if (empty($country)){
		array_push($errors, "Country is required");
    }
    if (empty($phone)){
		array_push($errors, "Phone is required");
    }
	//if there are no errors, save the data to database
	if(count($errors) == 0)
	{
        //echo $address1;
        //echo $zip;
		//return false;
		//$password = md5($password1); // ensures that password is encrypted before storage
        $sql = "INSERT INTO creditcard (fname, lname, cardtype, cardnumber, expiry, cvv, address1, address2, city, state, zip, country, phone) VALUES ('$firstname','$lastname','$creditCardType','$cardnumber','$ecpiry' ,'$cvv', '$address1', '$address2', '$city', '$state', '$zip', '$country', '$phone')";
        mysqli_query($db, $sql);
        header ('location: creditcard.php');
		//print_r(count($errors));
		//echo $eventname;
		//echo $organizer;
		//echo $seats;
		//echo $contactemail;
		//echo $contactphone;
		//echo $category;
		//echo $type;
		//echo $location;
		//echo $venue;
		//echo $startdate;
		//echo $starttime;
		//echo $enddate;
		//echo $endtime;
		//echo $timezone;

		//return false;
		//if(mysqli_query($db, $sql)){
            
		//	$_SESSION['eventname']=$eventname;
			
		//}else {
		//	echo mysqli_error($sql);
		//}
		//header ('location: events2.php');
	}else {
        array_push($errors, "wrong username/password combination");
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        echo("Error description: " . mysqli_error($db));
		//header ('location: home2x.php');
	}
}

?>