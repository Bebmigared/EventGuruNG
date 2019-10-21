<?php 

session_start();
//if(!isset($_SESSION['user'])){ //if login in session is not set
//	header("Location: signing/index.php");
//}
	include 'allevent.php';	
	//echo htmlspecialchars($_GET["s"]);
	//$_POST[''] = $_SESSION['event'];
	//include ('eventdbconn.php');
	//}
?>
<?php

$username = "";
$email = "";
$errors = array();

//Connect to the database
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
include 'db.php';
$ID = $_SESSION['edit_this']['id'];
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
        //$sql = "INSERT INTO events (createdby,eventname,organizer, seats, contactemail, contactphone, eventcategory, eventtype, locations, venue, startdate, enddate, starttime, endtime, timezone) VALUES ('$id','$eventname','$organizer','$seats','$contactemail','$contactphone' ,'$category', '$type', '$location', '$venue', '$startdate', '$enddate', '$starttime', '$endtime', '$timezone')";
        $sql = "UPDATE events SET createdby ='$id', eventname = '$eventname', organizer = '$organizer', seats = '$seats', contactemail = '$contactemail', contactphone = '$contactphone', eventcategory = '$eventcategory', eventtype = '$eventtype', locations = '$location', venue = '$venue', startdate = '$startdate', enddate = '$enddate', starttime = '$starttime', endtime = '$endtime', timezone = '$timezone' WHERE id='$ID' ";
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
			header ('location: imgupload_2.php');
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
<!--
<php include 'allevent.php'; ?> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Event Map - Edit Event Details</title>
	<link rel="icon" href="images/favicon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/lightgallery.min.css">
	<link rel="stylesheet" href="css/datepicker.css">
	<link rel="stylesheet" href="css/swiper.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137786155-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-4');
</script>
<style>
         .erro {color: #FF0000;}
</style>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #eee !important;
}

#regForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  width: 90%;
  height: auto;
  min-width: 300px;
}

h1 {
  text-align: center;  
}
h3 {
    font-weight: 600;
}
input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none !important;
}
button {
  background-color: darkmagenta;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
</head>
<body style="overflow:visible !important;">


	<?php include('header.php'); ?>

<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title entry-title-event3">Edit Event</h1>

</div>
<div class="container">
	
		<div class="wrap-contact100">
			<form id="regForm" action="edit.php" method="POST" class="contact100-form validate-form">
				<fieldset>
					<br>
				<!--<span class="contact100-form-title">
					<strong><h1 align="center">CREATE EVENT</h1></strong>
				</span> -->
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
				
					<h3 align="center" class="label-input100">Name Of Your Event </h3>
					<input type="hidden" name="id" id="id" value="<?=$_SESSION['user']['id']?>">
					
					<span><i><strong>NOTE:</strong> include details that makes your event unique for Attendees to know.</i></span>
					<br><input class="form-control" type="text" name="eventname" placeholder="Enter Your Event Name" value="<?=$_SESSION['edit_this']['eventname'] ?>"required><br>
					<input class="form-control" type="text" name="organizer" placeholder="Enter the name of the Event Organizer" value="<?=$_SESSION['edit_this']['organizer'] ?>" required><br>
					<input class="form-control" type="text" name="seats" placeholder="Enter your Maximum Number of Expected Attendees (E.g 5000 or 1000)" value="<?=$_SESSION['edit_this']['seats'] ?>" required>
					<br>
				</div>
				<div class="wrap-input101 input100-select bg1">
					
					<h3 class="label-input100" align="center">Other Details</h3>
				
					<div>
						<input class="form-control" type="text" name="contactemail" placeholder="Enter the Email Address that you want your events attendees to contact you on" value="<?=$_SESSION['edit_this']['contactemail'] ?>"  required>
						<br>
						<input class="form-control" type="text" name="contactphone" placeholder="Enter the Phone Number that you want your events attendees to contact you on" value="<?=$_SESSION['edit_this']['contactphone'] ?>" required>
						<br>
												
					</div>
				</div>

				<div class="wrap-input101 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					
					<h3 class="label-input100" align="center">Category</h3>
				
						<select class="form-control" name="category" required>
                        <option value="<?=$_SESSION['edit_this']['eventcategory']?>"><?=$_SESSION['edit_this']['eventcategory']?></option>    
                        <option>Event Category</option>
							<option>Conference</option>
							<option>Seminar</option>
							<option>Meeting</option>
							<option>Dinner</option>
							<option>Launching</option>
							<option>Business</option>
							<option>Award</option>
							<option>Retreat</option>
							<option>Music</option>
							<option>Government</option>
							<option>Religion</option>
							<option>Academic</option>
							<option>Travel</option>
							<option>Sport</option>

						</select>
						<br>
						<select class="form-control" name="type"  required>
                        <option value="<?=$_SESSION['edit_this']['eventtype']?>"><?=$_SESSION['edit_this']['eventtype']?></option>    
							<option>Type of Event</option>
							<option>Appearance or Signing</option>
							<option>Atraction</option>
							<option>Competition</option>
							<option>Class</option>
							<option>Concert</option>
							<option>Conference</option>
							<option>Convention</option>
							<option>Dinner</option>
							<option>Exhibition</option>
							<option>Fair</option>
							<option>Meeting</option>
							<option>Party (social)</option>
							<option>Race</option>
							<option>Screening</option>
							<option>Seminar</option>
							<option>Music Show</option>
							<option>Tour</option>
							<option>Team Building</option>
							<option>Tournament</option>
							<option>Show</option>
						</select>
						<br>
				</div>				

				<div class="wrap-input101 input100-select bg1">
					
					<h3 class="label-input100" align="center">Location</h3>
				
					<div>
						<input class="form-control" type="text" id="venue" name="venue" value="<?=$_SESSION['edit_this']['venue'] ?>" placeholder="Enter Your Event's Venue (E.g Ikeja City Hotel)" required>
						<br>
						<input class="form-control" type="text" id="location" name="location" value="<?=$_SESSION['edit_this']['locations'] ?>" placeholder="Enter the name of the Area for your event (E.g G.R.A, Ikeja, Lagos)" required>
						<br>
												
					</div>
				</div>
				<div class="wrap-input101 input100-select bg1">
					
				<h3 class="label-input100" align="center">Date</h3>
				
				<div class="form-group row">
					<div class="col-xs-5">
							<label for="start">Start date:</label>
							<input class="form-date" id="startdate" value="<?=$_SESSION['edit_this']['startdate'] ?>"type="date" data-date-format="DD MMMM YYYY"min="2019-01-01" name="startdate">
								<script>
								document.getElementById('startdate').value = moment().format('DD-MM-YYYY');
								</script>
					</div>
					<div class="col-xs-5">
							<label for="start">Start Time:</label>
							<input class="form-date" type="time" value="<?=$_SESSION['edit_this']['starttime'] ?>"  name="starttime">
					</div>
					
				</div>	
				<div class="form-group row">
					<div class="col-xs-5">
							<label for="start">End date:</label>
							<input class="form-date" id="enddate" type="date" value="<?=$_SESSION['edit_this']['enddate'] ?>" data-date-format="DD MMMM YYYY" max="2028-12-31" name="enddate" required>
								<script>
								document.getElementById('enddate').value = moment().format('DD-MM-YYYY');
								</script>
					</div>
					
					<div class="col-xs-5">
							<label for="start">End Time:</label>
							<input class="form-date" type="time" value="<?=$_SESSION['edit_this']['endtime'] ?>"  name="endtime">
					</div>
				</div>	
				</div>
				<div >
                                    <a href="#" data-toggle="dropdown" class="toggle">
                                        <span>Timezone <i class="fa fa-angle-down"></i></span>
									</a>
						<select name="timezone" value="<?=$_SESSION['edit_this']['timezone'] ?>" class="form-control">
											<option value="Etc/GMT+12">(GMT-12:00) International Date Line West</option>
											<option value="Pacific/Midway">(GMT-11:00) Midway Island, Samoa</option>
											<option value="Pacific/Honolulu">(GMT-10:00) Hawaii</option>
											<option value="US/Alaska">(GMT-09:00) Alaska</option>
											<option value="America/Los_Angeles">(GMT-08:00) Pacific Time (US & Canada)</option>
											<option value="America/Tijuana">(GMT-08:00) Tijuana, Baja California</option>
											<option value="US/Arizona">(GMT-07:00) Arizona</option>
											<option value="America/Chihuahua">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
											<option value="US/Mountain">(GMT-07:00) Mountain Time (US & Canada)</option>
											<option value="America/Managua">(GMT-06:00) Central America</option>
											<option value="US/Central">(GMT-06:00) Central Time (US & Canada)</option>
											<option value="America/Mexico_City">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
											<option value="Canada/Saskatchewan">(GMT-06:00) Saskatchewan</option>
											<option value="America/Bogota">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
											<option value="US/Eastern">(GMT-05:00) Eastern Time (US & Canada)</option>
											<option value="US/East-Indiana">(GMT-05:00) Indiana (East)</option>
											<option value="Canada/Atlantic">(GMT-04:00) Atlantic Time (Canada)</option>
											<option value="America/Caracas">(GMT-04:00) Caracas, La Paz</option>
											<option value="America/Manaus">(GMT-04:00) Manaus</option>
											<option value="America/Santiago">(GMT-04:00) Santiago</option>
											<option value="Canada/Newfoundland">(GMT-03:30) Newfoundland</option>
											<option value="America/Sao_Paulo">(GMT-03:00) Brasilia</option>
											<option value="America/Argentina/Buenos_Aires">(GMT-03:00) Buenos Aires, Georgetown</option>
											<option value="America/Godthab">(GMT-03:00) Greenland</option>
											<option value="America/Montevideo">(GMT-03:00) Montevideo</option>
											<option value="America/Noronha">(GMT-02:00) Mid-Atlantic</option>
											<option value="Atlantic/Cape_Verde">(GMT-01:00) Cape Verde Is.</option>
											<option value="Atlantic/Azores">(GMT-01:00) Azores</option>
											<option value="Africa/Casablanca">(GMT+00:00) Casablanca, Monrovia, Reykjavik</option>
											<option value="Etc/Greenwich">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</option>
											<option value="Europe/Amsterdam">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</option>
											<option value="Europe/Belgrade">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</option>
											<option value="Europe/Brussels">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</option>
											<option value="Europe/Sarajevo">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</option>
											<option value="Africa/Lagos" name="timezone" selected="selected">(GMT+01:00) West Central Africa</option>
											<option value="Asia/Amman">(GMT+02:00) Amman</option>
											<option value="Europe/Athens">(GMT+02:00) Athens, Bucharest, Istanbul</option>
											<option value="Asia/Beirut">(GMT+02:00) Beirut</option>
											<option value="Africa/Cairo">(GMT+02:00) Cairo</option>
											<option value="Africa/Harare">(GMT+02:00) Harare, Pretoria</option>
											<option value="Europe/Helsinki">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</option>
											<option value="Asia/Jerusalem">(GMT+02:00) Jerusalem</option>
											<option value="Europe/Minsk">(GMT+02:00) Minsk</option>
											<option value="Africa/Windhoek">(GMT+02:00) Windhoek</option>
											<option value="Asia/Kuwait">(GMT+03:00) Kuwait, Riyadh, Baghdad</option>
											<option value="Europe/Moscow">(GMT+03:00) Moscow, St. Petersburg, Volgograd</option>
											<option value="Africa/Nairobi">(GMT+03:00) Nairobi</option>
											<option value="Asia/Tbilisi">(GMT+03:00) Tbilisi</option>
											<option value="Asia/Tehran">(GMT+03:30) Tehran</option>
											<option value="Asia/Muscat">(GMT+04:00) Abu Dhabi, Muscat</option>
											<option value="Asia/Baku">(GMT+04:00) Baku</option>
											<option value="Asia/Yerevan">(GMT+04:00) Yerevan</option>
											<option value="Asia/Kabul">(GMT+04:30) Kabul</option>
											<option value="Asia/Yekaterinburg">(GMT+05:00) Yekaterinburg</option>
											<option value="Asia/Karachi">(GMT+05:00) Islamabad, Karachi, Tashkent</option>
											<option value="Asia/Calcutta">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</option>
											<option value="Asia/Calcutta">(GMT+05:30) Sri Jayawardenapura</option>
											<option value="Asia/Katmandu">(GMT+05:45) Kathmandu</option>
											<option value="Asia/Almaty">(GMT+06:00) Almaty, Novosibirsk</option>
											<option value="Asia/Dhaka">(GMT+06:00) Astana, Dhaka</option>
											<option value="Asia/Rangoon">(GMT+06:30) Yangon (Rangoon)</option>
											<option value="Asia/Bangkok">(GMT+07:00) Bangkok, Hanoi, Jakarta</option>
											<option value="Asia/Krasnoyarsk">(GMT+07:00) Krasnoyarsk</option>
											<option value="Asia/Hong_Kong">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</option>
											<option value="Asia/Kuala_Lumpur">(GMT+08:00) Kuala Lumpur, Singapore</option>
											<option value="Asia/Irkutsk">(GMT+08:00) Irkutsk, Ulaan Bataar</option>
											<option value="Australia/Perth">(GMT+08:00) Perth</option>
											<option value="Asia/Taipei">(GMT+08:00) Taipei</option>
											<option value="Asia/Tokyo">(GMT+09:00) Osaka, Sapporo, Tokyo</option>
											<option value="Asia/Seoul">(GMT+09:00) Seoul</option>
											<option value="Asia/Yakutsk">(GMT+09:00) Yakutsk</option>
											<option value="Australia/Adelaide">(GMT+09:30) Adelaide</option>
											<option value="Australia/Darwin">(GMT+09:30) Darwin</option>
											<option value="Australia/Brisbane">(GMT+10:00) Brisbane</option>
											<option value="Australia/Canberra">(GMT+10:00) Canberra, Melbourne, Sydney</option>
											<option value="Australia/Hobart">(GMT+10:00) Hobart</option>
											<option value="Pacific/Guam">(GMT+10:00) Guam, Port Moresby</option>
											<option value="Asia/Vladivostok">(GMT+10:00) Vladivostok</option>
											<option value="Asia/Magadan">(GMT+11:00) Magadan, Solomon Is., New Caledonia</option>
											<option value="Pacific/Auckland">(GMT+12:00) Auckland, Wellington</option>
											<option value="Pacific/Fiji">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</option>
											<option value="Pacific/Tongatapu">(GMT+13:00) Nuku'alofa</option>
										</select>
						</div>
			<br>
							<hr>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit" align="center" id="submit" type="submit">
						<span>
							Save and Continue...
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
						
					</button>
				</div><br>
				</fieldset>
			</form>
		</div>
	</div>
<!--<div class="container">
					<form id="regForm" action="/action_page.php">
						<h1>Details of Your Event:</h1>
						<!-- One "tab" for each step in the form: --
						<div class="tab">Name:
							<p><input placeholder="Event name..." oninput="this.className = ''" name="fname"></p>
							<p><input placeholder="Event Organizer name..." oninput="this.className = ''" name="lname"></p>
							<p><input placeholder="Maximum number of expected participants..." oninput="this.className = ''" name="lname"></p>
						</div>
						<div class="tab">Other Details:
							<p><input placeholder="Organizer's contact email..." oninput="this.className = ''" name="email"></p>
							<p><input placeholder="Organizer's contact Phone..." oninput="this.className = ''" name="phone"></p>
						</div>
						<div class="tab">Category:
							<p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
							<select class="form-control" oninput="this.className = ''" name="category">
												<option>Event Category</option>
												<option>Conference</option>
												<option>Seminar</option>
												<option>Meeting</option>
												<option>Dinner</option>
												<option>Launching</option>
												<option>Business</option>
												<option>Award</option>
												<option>Retreat</option>
												<option>Music</option>
												<option>Government</option>
												<option>Religion</option>
												<option>Academic</option>
												<option>Travel</option>
												<option>Sport</option>
											</select>
							<select class="form-control" name="type" oninput="this.className = ''">
												<option>Type of Event</option>
												<option>Appearance or Signing</option>
												<option>Atraction</option>
												<option>Competition</option>
												<option>Class</option>
												<option>Concert</option>
												<option>Conference</option>
												<option>Convention</option>
												<option>Dinner</option>
												<option>Exhibition</option>
												<option>Fair</option>
												<option>Meeting</option>
												<option>Party (social)</option>
												<option>Race</option>
												<option>Screening</option>
												<option>Seminar</option>
												<option>Music Show</option>
												<option>Tour</option>
												<option>Team Building</option>
												<option>Tournament</option>
												<option>Show</option>
											</select>
							<p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
							<p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
						</div>
						<div class="tab">Location of Event:
							<p><input placeholder="Venue of your event..." oninput="this.className = ''" name="uname"></p>
							<p><input placeholder="Location or city of your event..." oninput="this.className = ''" name="pword" type="password"></p>
						</div>
						<div class="tab">Date of Event:
							<p><input type="datetime" placeholder="Start date of your event..." oninput="this.className = ''" name="uname"></p>
							<p><input type="time" placeholder="Start time of your event..." oninput="this.className = ''" name="pword" type="password"></p>
						</div>
						<div style="overflow:auto;">
							<div style="float:right;">
								<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
								<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
							</div>
						</div>
						<!-- Circles which indicates the steps of the form: --
						<div style="text-align:center;margin-top:40px;">
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
							<span class="step"></span>
						</div>
					</form>

</div> -->

<!-- Footer  Begins -->
<?php include('footer.php'); ?>
<!-- Footer  Ends -->

	<div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	
 <script>
function myFunction() {
  document.getElementById("myType").value = "";
}
</script>
<script>
function myFunction() {
  document.getElementById("myCategory").value = "";
}
</script>

	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/picturefill.min.js"></script>
	<script type="text/javascript" src="js/lightgallery.min.js"></script>
	<script type="text/javascript" src="js/lg-thumbnail.min.js"></script>
	<!--<script type="text/javascript" src="js/lg-autoplay.min.js"></script>-->
	<script type="text/javascript" src="js/lg-fullscreen.min.js"></script>
	<script type="text/javascript" src="js/lg-hash.min.js"></script>
	<script type="text/javascript" src="js/lg-pager.min.js"></script>
	<script type="text/javascript" src="js/lg-share.min.js"></script>
	
	<script type="text/javascript" src="js/lg-video.min.js"></script>
	<script type="text/javascript" src="js/lg-zoom.min.js"></script>
	
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	
	<script type="text/javascript" src="js/swiper.min.js"></script>
	<script type="text/javascript" src="js/wow.min.js"></script>
	<script type="text/javascript" src="js/parallax.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>