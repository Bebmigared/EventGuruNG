<?php
session_start();
$username = "";
$email = "";
$errors = array();
// include ('../../db.php');
//Connect to the database
$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
//if ($db) {
	# code...
//	echo "Connected";
//}
//else{
//	echo "not connected";
//}
//return false; -->
//if the register button is clicked
if (isset($_POST['save'])) {
	//$email = mysqli_real_escape_string($db, $_POST['email']);
	//$email = mysqli_real_escape_string($db, $_POST['email']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$prefix = mysqli_real_escape_string($db, $_POST['prefix']);
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$suffix = mysqli_real_escape_string($db, $_POST['suffix']);
	$homephone = mysqli_real_escape_string($db, $_POST['homephone']);
    $cellphone = mysqli_real_escape_string($db, $_POST['cellphone']);
    $jobtitle = mysqli_real_escape_string($db, $_POST['jobtitle']);
	$company = mysqli_real_escape_string($db, $_POST['company']);
	$website = mysqli_real_escape_string($db, $_POST['website']);
    $blog = mysqli_real_escape_string($db, $_POST['blog']);
    $address1 = mysqli_real_escape_string($db, $_POST['address1']);
	$address2 = mysqli_real_escape_string($db, $_POST['address2']);
	$city = mysqli_real_escape_string($db, $_POST['city']);
    $state = mysqli_real_escape_string($db, $_POST['state']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
	$zipcode = mysqli_real_escape_string($db, $_POST['zipcode']);
	$address3 = mysqli_real_escape_string($db, $_POST['address3']);
    $address4 = mysqli_real_escape_string($db, $_POST['address4']);
    $city2 = mysqli_real_escape_string($db, $_POST['city2']);
	$state2 = mysqli_real_escape_string($db, $_POST['state2']);
	$country2 = mysqli_real_escape_string($db, $_POST['country2']);
    $zipcode2 = mysqli_real_escape_string($db, $_POST['zipcode2']);
    $address5 = mysqli_real_escape_string($db, $_POST['address5']);
	$address6 = mysqli_real_escape_string($db, $_POST['address6']);
	$city3 = mysqli_real_escape_string($db, $_POST['city3']);
    $state3 = mysqli_real_escape_string($db, $_POST['state3']);
    $country3 = mysqli_real_escape_string($db, $_POST['country3']);
	$zipcode3 = mysqli_real_escape_string($db, $_POST['zipcode3']);
	$address7 = mysqli_real_escape_string($db, $_POST['address7']);
    $address8 = mysqli_real_escape_string($db, $_POST['address8']);
    $city4 = mysqli_real_escape_string($db, $_POST['city4']);
	$state4 = mysqli_real_escape_string($db, $_POST['state4']);
	$country4 = mysqli_real_escape_string($db, $_POST['country4']);
    $zipcode4 = mysqli_real_escape_string($db, $_POST['zipcode4']);

    

	//ensure that form fields are filled
	if (empty($id)){
		array_push($errors, "ID is required");
	}
	if (empty($prefix)){
		array_push($errors, "Prefix is required");
	}
	if (empty($lastname)){
		array_push($errors, "Lastname is required");
	}
	if (empty($suffix)){
		array_push($errors, "Suffix is required");
	}
	if (empty($homephone)){
		array_push($errors, "Homephone is required");
	}
	if (empty($cellphone)){
		array_push($errors, "Cellphone is required");
	}
	if (empty($jobtitle)){
		array_push($errors, "Jobtitle is required");
	}
	if (empty($company)){
		array_push($errors, "Company is required");
	}
	if (empty($website)){
		array_push($errors, "Website is required");
	}
	if (empty($blog)){
		array_push($errors, "Blog is required");
	}
	if (empty($address1)){
		array_push($errors, "Address is required");
	}
	if (empty($address2)){
		array_push($errors, "Address 2 is required");
	}
	if (empty($city)){
		array_push($errors, "City is required");
	}
	if (empty($state)){
		array_push($errors, "State is required");
	}
	if (empty($country)){
		array_push($errors, "Country is required");
	}
	if (empty($zipcode)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($address3)){
		array_push($errors, "Address is required");
	}
	if (empty($address4)){
		array_push($errors, "Address 2 is required");
	}
	if (empty($city2)){
		array_push($errors, "City is required");
	}
	if (empty($state2)){
		array_push($errors, "State is required");
	}
	if (empty($country2)){
		array_push($errors, "Country is required");
	}
	if (empty($zipcode2)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($address5)){
		array_push($errors, "Address is required");
	}
	if (empty($address6)){
		array_push($errors, "Address 2 is required");
	}
	if (empty($city3)){
		array_push($errors, "City is required");
	}
	if (empty($state3)){
		array_push($errors, "State is required");
	}
	if (empty($country3)){
		array_push($errors, "Country is required");
	}
	if (empty($zipcode3)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($address7)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($address8)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($city4)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($state4)){
		array_push($errors, "State is required");
	}
	if (empty($zipcode4)){
		array_push($errors, "Zipcode is required");
	}
	if (empty($country4)){
		array_push($errors, "Zipcode is required");
	}   
		//echo $suffix;
		//echo $homephone;
		//echo $cellphone;
		//echo $state;
		//echo $zipcode;
		//echo $country;
		//return false;
	//if there are no errors, save the data to database
	if(count($errors) == 0)
	{
		//echo $state4;
		//echo $firstname;
		//echo $id;
		//echo $state;
		//echo $zipcode;
		//echo $country;
		//return false;
		$sql = "UPDATE registered SET prefix='$prefix', firstname = '$firstname', lastname = '$lastname', suffix = '$suffix', homephone = '$homephone', cellphone = '$cellphone', jobtitle = '$jobtitle', company = '$company', website = '$website', blog = '$blog', address1 = '$address1', address2 = '$address2', city = '$city', state = '$state', country = '$country', zipcode = '$zipcode', address3 = '$address3', address4 = '$address4', city2 = '$city2', state2 = '$state2', country2 = '$country2', zipcode2 = '$zipcode2', address5 = '$address5', address6 = '$address6', city3 = '$city3', state3 = '$state3', country3 = '$country3', zipcode3 = '$zipcode3', address7 = '$address7', address8 = '$address8', city4 = '$city4', state4 = '$state4', country4 = '$country4', zipcode4 = '$zipcode4' WHERE id = $id";
		if (mysqli_query($db, $sql)) {
			//echo "Record Updated successfully";
			echo "<script type='text/javascript'>alert('Record Updated successfully')</script>";
			header ('location: profile.php');
		}
		//$result = mysqli_query($db, $sql);
		else{
			mysqli_error($db); 
		echo "Error: " . $sql . "<br>" . mysqli_error($db);
		}
		
	}else {
		//print_r($errors);
		//array_push($errors, "Error submitting data");
		//echo "Failed to connect to MySQL: ".mysqli_error($db);
		//echo $count;
		
		echo "<script type='text/javascript'>alert('Error submitting data')</script>";
		//echo "Error submitting data";
		
		//echo $errors();
	}
}
//mysqli_close();
?>