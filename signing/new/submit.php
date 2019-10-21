<?php
session_start();
$username = "";
$email = "";
$errors = array();

//Connect to the database
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
include '../../db.php';

//if the register button is clicked
if (isset($_POST['submit'])) {
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$eventname = mysqli_real_escape_string($db, $_POST['eventname']);
	$organizer = mysqli_real_escape_string($db, $_POST['organizer']);
	$seats = mysqli_real_escape_string($db, $_POST['seats']);
	$contactemail = mysqli_real_escape_string($db, $_POST['contactemail']);
	$contactphone = mysqli_real_escape_string($db, $_POST['contactphone']);
	$category = mysqli_real_escape_string($db, $_POST['category']);
	$type = mysqli_real_escape_string($db, $_POST['type']);
    $location = mysqli_real_escape_string($db, $_POST['location']);
    $venue = mysqli_real_escape_string($db, $_POST['venue']);
    $startdate = mysqli_real_escape_string($db, $_POST['startdate']);
    $enddate = mysqli_real_escape_string($db, $_POST['enddate']);
    $starttime = mysqli_real_escape_string($db, $_POST['starttime']);
    $endtime = mysqli_real_escape_string($db, $_POST['endtime']);
    $timezone = mysqli_real_escape_string($db, $_POST['timezone']);
	
		
	//ensure that form fields are filled
	if (empty($id)){
		array_push($errors, "ID is required");
	}
	if (empty($eventname)){
		array_push($errors, "Event Name is required");
	}
	if (empty($organizer)){
		array_push($errors, "Organizer is required");
	}
	if (empty($seats)){
		array_push($errors, "Seats is required");
	}
	if (empty($contactemail)){
		array_push($errors, "Contact Email is required");
	}
	if (empty($contactphone)){
		array_push($errors, "Contact Phone is required");
	}
	if (empty($category)){
		array_push($errors, "Category is required");
	}
	if (empty($type)){
		array_push($errors, "Type is required");
	}
	if (empty($location)){
		array_push($errors, "Location is required");
	}
	if (empty($venue)){
		array_push($errors, "Venue is required");
    }
    if (empty($startdate)){
		array_push($errors, "Start Date is required");
    }
    if (empty($enddate)){
		array_push($errors, "End Date is required");
    }
    if (empty($starttime)){
		array_push($errors, "Start Time is required");
    }
    if (empty($endtime)){
		array_push($errors, "End Time is required");
    }
    if (empty($timezone)){
		array_push($errors, "Timezone is required");
	}

	//if there are no errors, save the data to database
	if(count($errors) == 0)
	{
		//echo $timezone;
		//return false;
		//$password = md5($password1); // ensures that password is encrypted before storage
		$sql = "INSERT INTO events (createdby,eventname,organizer, seats, contactemail, contactphone, eventcategory, eventtype, locations, venue, startdate, enddate, starttime, endtime, timezone) VALUES ('$id','$eventname','$organizer','$seats','$contactemail','$contactphone' ,'$category', '$type', '$location', '$venue', '$startdate', '$enddate', '$starttime', '$endtime', '$timezone')";
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
		if(mysqli_query($db, $sql)){
			$last_id = mysqli_insert_id($db);
			$_SESSION['eventname']= $eventname;
			$_SESSION['lastid']= $last_id;
			$_SESSION['eventid']= $id;
			header ('location: events2.php');
		}else {
			echo mysqli_error($db);
			
		}
		//header ('location: events2.php');
	}else {
		array_push($errors, "wrong username/password combination");
		//header ('location: home2x.php');
	}
}

?>