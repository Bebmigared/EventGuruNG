<?php
include 'db.php';

$type="";
$event="";
$budget="";
$capacity="";
$catering="";
$cleaners="";
$decorators="";
$diskJockey="";
$eventLogistics="";
$lighting="";
$planning="";
$servers="";
$ushers="";
$eventSoon="";
$startdate="";
$state="";
$area="";
$comment="";
$fullname="";
$phone="";
$email="";
$admin ="info@eventguru.ng";

if (isset($_POST['submit'])) {
  $type = isset ($_POST['type']) ? $_POST['type'] : '';
  $event = isset ($_POST['event']) ? $_POST['event'] : '';
  $capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
  $budget = isset($_POST['budget']) ? $_POST['budget'] : '';
  //$capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
  $catering = isset($_POST['catering']) ? $_POST['catering'] : '';
  $cleaners = isset($_POST['cleaners']) ? $_POST['cleaners'] : '';
  $decorators = isset($_POST['decorators']) ? $_POST['decorators'] : '';
  $diskJockey = isset($_POST['diskJockey']) ? $_POST['diskJockey'] : '';
  $eventLogistics = isset($_POST['eventLogistics']) ? $_POST['eventLogistics'] : '';
  $lighting = isset($_POST['lighting']) ? $_POST['lighting'] : '';
  $planning = isset($_POST['planning']) ? $_POST['planning'] : '';
  $servers = isset($_POST['servers']) ? $_POST['servers'] : '';
  $ushers = isset($_POST['ushers']) ? $_POST['ushers'] : '';
  $eventSoon = isset($_POST['eventSoon']) ? $_POST['eventSoon'] : '';
  $startdate = isset($_POST['startdate']) ? $_POST['startdate'] : '';
  $state = isset($_POST['state']) ? $_POST['state'] : '';
  $area = isset($_POST['area']) ? $_POST['area'] : '';
  $comment = isset($_POST['comment']) ? $_POST['comment'] : '';
  $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
  $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
  $email = isset($_POST['email']) ? $_POST['email'] : '';
  # code...
/*
  echo $type;
  echo $event;
  echo $capacity;
  echo $catering;
  echo $cleaners;
  echo $decorators;
  echo $diskJockey;
  echo $eventLogistics;
  echo $lightning;
  echo $planning;
  echo $servers;
  echo $ushers;
  echo $eventSoon;
  echo $startdate;
  echo $state;
  echo $area;
  echo $comment;
  echo $fullname;
  echo $phone;
  echo $email;
  return false;
*/
  $data= "INSERT INTO managedevent (Etype, eventE, capacity, budget, catering, cleaners, decorators, diskJockey, eventLogistics, lighting, planning, servers, ushers, eventSoon, startdate, Estate, area, comment, fullname, phone, email) VALUES ('$type', '$event', '$capacity', '$budget', '$catering', '$cleaners', '$decorators', '$diskJockey', '$eventLogistics', '$lighting', '$planning', '$servers', '$ushers', '$eventSoon', '$startdate', '$state', '$area', '$comment', '$fullname', '$phone', '$email')";
  $result = mysqli_query($db, $data) or die(mysqli_error($db));
  //print_r($data);
  //return false;

  if ($result) {
    # code...
    require 'mailing.php'   ;
                                $to = $email;
                                $subject = "Dear $fullname Your Order has been taken";
                                $msg = "
        <html>
        <head>
        <title>EventGuru: Manage My Event Notification</title>
        </head>
        <body>
        <p>Dear $fullname,</p>
        <p>Thanks for choosing <strong>EventGuru</strong>.</p>
        <p>Your Order has been taken.</p>
        <p><strong>Order Details</strong></p>
        <p>You want to have a/an $event, with the following details </p>
        <p>You want EventGuru to manage this event that you want to have with $budget as your Budget. This Budget will cater for $capacity People.</p>
        <p>You specified that you want <strong>$catering, $cleaners, $decorators, $diskjockey, $eventlogistics, $lighting, $planning, $servers, $ushers </strong></p>
        <p>In less than 24Hours, EventGuru.ng Professionals will contact you to confirm your order and plan your event with you</p>
        <p>EventGuru.ng <strong>Your World of Unlimited Events!</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Admin,</i>
        <br><strong>EventGuru</strong>
        <br>info@eventguru.ng
        </body>
        </html>
        ";
        //$headers = "MIME-Version: 1.0" . "\r\n";
        //$headers = "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        //$headers = 'From: EventGuru Admin<info@eventguru.com>' . "\r\n";
        
		sendmail($to,$msg,$subject);
		
		//begin Sending mail Notification to Admin Contact Email
		
		$to = $admin;
                                $subject = "New Manage My Event Order!";
                                $msg = "
        <html>
        <head>
        <title>EventGuru: New Manage My Event Notification</title>
        </head>
        <body>
        <p>Dear Admin, $fullname has Just submitted a new Manage My Event Order,</p>
        <p>This Order is now Available on the Admin Platform.</p>
        <p><strong>Order Details</strong></p>
        <p>The user wants to have a/an $event, with the following details </p>
        <p>Managing his/her event with $budget as Budget. This Budget will cater for $capacity People.</p>
        <p>He/She has requested the following services <strong>$catering, $cleaners, $decorators, $diskjockey, $eventlogistics, $lighting, $planning, $servers, $ushers </strong></p>
        <p>Please contact the user on $email or call the user on $phone </p>
        <p>EventGuru.ng <strong>Your World of Unlimited Events!</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Admin,</i>
        <br><strong>EventGuru</strong>
        <br>info@eventguru.ng
        </body>
        </html>
        ";
        //$headers = "MIME-Version: 1.0" . "\r\n";
        //$headers = "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        //$headers = 'From: EventGuru Admin<info@eventguru.com>' . "\r\n";
        
		sendmail($to,$msg,$subject);
		
    echo "<script>alert('Your eventdetails have been successfully Sent, You will get a mail from EventGuru confirming your order. EventGuru Professionals will contact you in less than 24Hrs!! ')</script>";
  }
  else {
      # code...
      die(mysqli_error($db)); 
      //echo "<script>alert('Your eventdetails Not Sent!! Please try again LATER!! ')</script>";
  } 

}
?>
<!--
<php include 'allevent.php'; ?> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Event Map - Manage My Event</title>
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
  ul#stepForm, ul#stepForm li {
    margin: 0;
    padding: 0;
  }
  ul#stepForm li {
    list-style: none outside none;
  } 
  label{margin-top: 10px;}
  .help-inline-error{color:red;}
</style>
<style>
    .contain {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 20px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.inner{
    background-color: #1fb5ac45;
    border-radius: 15px 50px;
    padding: 10px;
}
#basicform {
  background-color: #ffffff;
  margin: auto;
  padding: 20px;
  width: 95%;
  min-width: 300px;
  padding-top: 80px;
  border-radius: 15px;
  margin-bottom: 50px;
}
/* Hide the browser's default radio button */
.contain input {
  cursor: pointer;
}
p {
    font-size: 22px;
    text-transform: uppercase;
}
    /* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}
/* On mouse-over, add a grey background color */
.contain:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.contain input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.contain input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.contain .checkmark:after {
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
textarea {
   resize: none;
}
.inner {
    background-color: #1fb5ac45;
    border-radius: 15px 50px;
    padding: 10px;
    padding-left: 20px;
}
.service{
    border: 2px solid #1fb5ac45;
  border-radius: 5px;
  background-color: transparent;
  height: 300px;
  overflow: scroll;
  overflow-x: auto;
  padding-left: 10px;
}
.budget{
    border: 2px solid #1fb5ac45;
  border-radius: 5px;
  background-color: transparent;
  height: 150px;
  overflow: scroll;
  overflow-x: auto;
  padding-left: 10px;
}
.eventkind{
    border: 2px solid #1fb5ac45;
  border-radius: 5px;
  background-color: transparent;
  height: 250px;
  overflow: scroll;
  overflow-x: auto;
  padding-left: 10px;
}
</style>
</head>
<body style="overflow:visible !important;background-color:#eee !important;">
	<!-- loadpage -->
	<div class="loadpage">
		<div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
		</div>
	</div>

	
	<?php include('header.php'); ?>
	

<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title entry-title-event3">Let EventGuru Manage My Event</h1>
</div>
<div class="container" style="padding-left: 0px; padding-right: 15px;">
  <div class="panel panel-success" style="border-radius:45px;border-color: darkmagenta !important;">
    <!--<div class="panel-heading">
        
      <h3 class="panel-title">!</h3><br>
    </div>-->
    <div class="panel-body">
      <form name="basicform" id="basicform" method="post" action="managevent.php" enctype="multipart/form-data">
        <div class="inner">
        <div id="sf1" class="frm">
          <fieldset>
            <legend style="font-weight:600;font-size: 36px;text-align: center;">Type of Event:</legend>

            <div class="form-group">
              
              <label class="contain">Outdoor Event
                <input style="opacity: 0;" type="radio" value="outdoor event"  name="type" required>
                <span class="checkmark"></span>
                </label>
                <label class="contain">Indoor Event
                <input style="opacity: 0;" type="radio" value="Indoor event" name="type" required>
                <span class="checkmark"></span>
                </label>
                <label class="contain">Not yet sure
                <input style="opacity: 0;" type="radio" value="Not Sure" name="type" required>
                <span class="checkmark"></span>
                </label>
            </div><br />
			<div class="clearfix" style="height: 10px;clear: both;"></div>
			            			
            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-success open1" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf2" class="frm" style="display: none;">
          <fieldset>
            <legend style="font-weight:600;">Kind of Event:</legend>
            <div class="form-group eventkind">
            <label class="contain">Anniversary
              <input style="opacity: 0;" type="radio" value="anniversary" name="event" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Bachelor Party
              <input style="opacity: 0;" type="radio" value="bachelor party" name="event" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Birthday Party
              <input style="opacity: 0;" type="radio" value="birthday party" name="event" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Corporate Party
              <input style="opacity: 0;" type="radio" value="corporate party" name="event" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Festive Party
              <input style="opacity: 0;" type="radio" value="festive party" name="event" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Meeting
              <input style="opacity: 0;" type="radio" value="meeting" name="event" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Wedding
              <input style="opacity: 0;" type="radio" value="wedding" name="event" required>
              <span class="checkmark"></span>
              </label>
            </div>


            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back2" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open2" type="button">Next <span class="fa fa-arrow-right"></span></button> 
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf3" class="frm" style="display: none;">
          <fieldset>
            <legend style="font-weight:600;">Event Plan: </legend>

            <p><label>Capacity</label><input type="number" min="1" max="100000" placeholder="Maximum No of people you expect" oninput="this.className = ''" name="capacity" required></p>
    <p><label>Budget</label><br> <span> How much do you have budgetted for the event</span></p>
    
    <div class="form-group budget">
              <label class="contain">Below 100K
              <input style="opacity: 0;" type="radio" value="Below 100k" name="budget" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">100K-200K
              <input style="opacity: 0;" type="radio" value="100k-200k" name="budget" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">200K-500K
              <input style="opacity: 0;" type="radio" value="200k-500k" name="budget" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">500k-1Million
              <input style="opacity: 0;" type="radio" value="500k-1million" name="budget" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Above 1Million
              <input style="opacity: 0;" type="radio" value="Above 1million" name="budget" required>
              <span class="checkmark"></span>
              </label>
              </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back3" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open3" type="button">Next <span class="fa fa-arrow-right"></span></button> 
                <!--<img src="images/spinner.gif" alt="" id="loader" style="display: none">-->
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf4" class="frm" style="display: none;">
          <fieldset>
            <legend style="font-weight:600;">Select the type of services you want included to your budget:</legend>

            <div class="form-group service">
              <label class="contain">Catering
              <input style="opacity: 0;" type="checkbox" value="catering"name="catering" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Cleaners
              <input style="opacity: 0;" type="checkbox" value="cleaners" name="cleaners" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Decorators
              <input style="opacity: 0;" type="checkbox" value="decorators" name="decorators" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Disk Jockey(DJ)
              <input style="opacity: 0;" type="checkbox" value="diskJockey" name="diskJockey" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Event Logistics
              <input style="opacity: 0;" type="checkbox" value="eventLogistics" name="eventLogistics" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Lightning
              <input style="opacity: 0;" type="checkbox" value="lighting" name="lighting" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Planning
              <input style="opacity: 0;" type="checkbox" value="planning" name="planning" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Servers[Food & Drinks]
              <input style="opacity: 0;" type="checkbox" value="servers" name="servers" >
              <span class="checkmark"></span>
              </label>
              <label class="contain">Ushers
              <input style="opacity: 0;" type="checkbox" value="ushers" name="ushers" >
              <span class="checkmark"></span>
              </label>
    </div>

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back4" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open4" type="button">Next <span class="fa fa-arrow-right"></span></button> 
                <!--<img src="images/spinner.gif" alt="" id="loader" style="display: none">-->
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf5" class="frm" style="display: none;">
          <fieldset>
            <legend style="font-weight:600;">Event Plan: </legend>

            <div class="form-group">
  <p style="font-weight:600;">How soon is your event: <br></p>
    <p><select name="eventSoon" id="eventSoon" class="form-control form-control-lg" onclick="doClick(this)">
        <option value=""></option>
        <option value="haveDate">I Have a Date</option>
        <option value="notSure">Not sure</option>
    </select></p>  
  </div>
  <div class="form-group" id="calenderDiv" onclick="doClick(this)" hidden> 
        <p style="font-weight:600;">Pick a date:</p>
                <input class="form-date" id="startdate" type="date" data-date-format="DD MMMM YYYY"  name="startdate">
                    <script>
                        document.getElementById('startdate').value = moment().format('DD-MM-YYYY');
                    </script>
    </div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back5" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open5" type="button">Next <span class="fa fa-arrow-right"></span></button> 
                <!--<img src="images/spinner.gif" alt="" id="loader" style="display: none">-->
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf6" class="frm" style="display: none;">
          <fieldset>
            <legend style="font-weight:600;">Event Location:</legend>

            <div id="state">
              <label class="contain">Lagos
              <input style="opacity: 0;" type="radio" value="lagos" name="state" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Abuja
              <input style="opacity: 0;" type="radio" value="abuja" name="state" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Ibadan
              <input style="opacity: 0;" type="radio" value="ibadan" name="state" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Porthacort
              <input style="opacity: 0;" type="radio" value="porthacort" name="state" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Other States
              <input style="opacity: 0;" type="radio" value="other" name="state" required>
              <span class="checkmark"></span>
              </label>
                </div>
                
                <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back6" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open6" type="button">Next <span class="fa fa-arrow-right"></span></button> 
                <!--<img src="images/spinner.gif" alt="" id="loader" style="display: none">-->
              </div>
            </div>
                <!--Area[State] Options loads on click[Lagos]-->
                <div class="form-group" id="area" style="display: none">
                <input type="button" name="back" value="Change State Choice" id="back2" style="background-color: #bbbbbb;color: #ffffff;border-radius: 20px;"> <br>  
                <div class="service">
              <label class="contain">Agege
              <input style="opacity: 0;" type="radio" value="Agege" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Alimosho
              <input style="opacity: 0;" type="radio" value="Alimosho" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Apapa
              <input style="opacity: 0;" type="radio" value="Apapa" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Badagry
              <input style="opacity: 0;" type="radio" value="Badagry" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Epe
              <input style="opacity: 0;" type="radio" value="Epe" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Festac Town
              <input style="opacity: 0;" type="radio" value="Festac Town" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Gbagada
              <input style="opacity: 0;" type="radio" value="Gbagada" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Ifako-Ijaiye
              <input style="opacity: 0;" type="radio" value="Ifako-Ijaiye" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Ikeja
              <input style="opacity: 0;" type="radio" value="Ikeja" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Ikoyi
              <input style="opacity: 0;" type="radio" value="Ikoyi" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Lagos Island
              <input style="opacity: 0;" type="radio" value="Lagos Island" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Lagos mainland
              <input style="opacity: 0;" type="radio" value="Lagos mainland" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Lekki
              <input style="opacity: 0;" type="radio" value="Lekki" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Ojo
              <input style="opacity: 0;" type="radio" value="Ojo" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Oshodi - Isolo
              <input style="opacity: 0;" type="radio" value="Oshodi - Isolo" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Surulere
              <input style="opacity: 0;" type="radio" value="Surulere" name="area" required>
              <span class="checkmark"></span>
              </label>
              <label class="contain">Victoria Island
              <input style="opacity: 0;" type="radio" value="Victoria Island" name="area" required>
              <span class="checkmark"></span>
              </label>
              </div>    

          </fieldset>
        </div>

        <div id="sf7" class="frm" style="display: none;">
          <fieldset>
            <legend>Other details of your event:</legend>

            <p style="font-weight:600;">Other details of your event:</p>
                            <div class="form-group" name="commently" id="comment" >
                            <input type="button" name="back" value="Change Event Location Choice" id="back" style="background-color: #bbbbbb;color: #ffffff;border-radius: 20px;"><br>
                            <br>
                            <textarea name="comment" id="" cols="130" rows="10" placeholder="Write out what else would you like the Service providers to know about your event...."></textarea><br>
                            </div> 

            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back7" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success open7" type="button">Next <span class="fa fa-arrow-right"></span></button> 
                <!--<img src="images/spinner.gif" alt="" id="loader" style="display: none">-->
              </div>
            </div>

          </fieldset>
        </div>

        <div id="sf8" class="frm" style="display: none;">
          <fieldset>
            <legend>Other details of your event:</legend>
            <div class="form-group">
            <p><input type="text" placeholder="Fullname..." oninput="this.className = ''" name="fullname"></p>
    <p><input type="number" placeholder="Phone number..." oninput="this.className = ''" name="phone"></p>
    <p><input type="email" placeholder="email..." oninput="this.className = ''" name="email"></p>
    <div>
            <div class="clearfix" style="height: 10px;clear: both;"></div>

            <div class="form-group">
              <div class="col-lg-10 col-lg-offset-2">
                <button class="btn btn-warning back8" type="button"><span class="fa fa-arrow-left"></span> Back</button> 
                <button class="btn btn-success" type="submit" name="submit">Submit </button> 
                <!--<img src="images/spinner.gif" alt="" id="loader" style="display: none">-->
              </div>
            </div>

          </fieldset>
        </div>
        </div>
      </form>
    </div>
  </div>


</div>

<!-- Footer  Begins -->
<?php include('footer.php'); ?>
<!-- Footer  Ends -->

    <div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
        /*Event date user choice script ends*/
        //shows a Div on select of an option
$(function () {
        $("#eventSoon").change(function () {
            if ($(this).val() == "haveDate") {
                $("#calenderDiv").show();
            } else {
                $("#calenderDiv").hide();
            }
        });
    });
    $(function () {
        $("#eventSoon").change(function () {
            if ($(this).val() == "notSure") {
                var date = new Date();
var currentDate = date.toISOString().slice(0,10);
document.getElementById('startdate').value = currentDate;
            } 
        });
    });
    $(function () {
        $("#dateType").change(function () {
            if ($(this).val() == "aDay") {
                $("#calenderDiv").show();
            } else {
                $("#calenderDiv").hide();
            }
        });
    });

    $(function () {
        $("#dateType").change(function () {
            if ($(this).val() == "moreDays") {
                $("#calenderDiv").show();
            } else {
                $("#calenderDiv").hide();
            }
        });
    });
/*Event date user choice script ends*/
/*---------------------------------------*/

/*---------------------------------------*/
/*Location Page user choice script begins*/
    $(function() {
    $('input[name="state"]').on('change', function() {
        //alert($(this).val());
        if ($(this).val() == 'lagos') {
            $('#area').show();
            $('#state').hide();
        }
        
    });
});
$(function() {
    $('input[name="back"]').on('click', function() {
        if ($(this).val() == 'Change State Choice') {
            $('#state').show();
            $('#area').addClass('hide');
        }
        /*else {
            $('#state').show();
            $('#area').addClass('hide');
        }*/
    });
});
$(function() {
    $('input[name="back2"]').on('click', function() {
        if ($(this).val() == 'Change Area Choice') {
            $('#area').addClass('hide');
            $('#state').removeClass('hide');
        }
        else{
            $('#area').removeClass('hide');
            $('#state').addClass('hide');
        }
        
    });
});
/*Location Page user choice script ends*/
/*---------------------------------------*/
/*---------------------------------------*/
  </script>	
    <script type="text/javascript">
  
  jQuery().ready(function() {

    // validate form on keyup and submit
    var v = jQuery("#basicform").validate({
      rules: {
		    name: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        u_name: {
          required: true,
          minlength: 2,
          maxlength: 16
        },
        uemail: {
          required: true,
          minlength: 2,
          email: true,
          maxlength: 100,
        },
        upass1: {
          required: true,
          minlength: 6,
          maxlength: 15,
        },
        upass2: {
          required: true,
          minlength: 6,
          equalTo: "#upass1",
        }

      },
      errorElement: "span",
      errorClass: "help-inline-error",
    });

    $(".open1").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf2").show("slow");
      }
    });

    $(".open2").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf3").show("slow");
      }
    });
    $(".open3").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf4").show("slow");
      }
    });
    $(".open4").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf5").show("slow");
      }
    });
    $(".open5").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf6").show("slow");
      }
    });
    $(".open6").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf7").show("slow");
      }
    });
    $(".open7").click(function() {
      if (v.form()) {
        $(".frm").hide("fast");
        $("#sf8").show("slow");
      }
    });
    $(".open8").click(function() {
      if (v.form()) {
        $("#loader").show();
         setTimeout(function(){
           $("#basicform").html('<h2>Thanks for your time.</h2>');
         }, 1000);
        return false;
      }
    });
    
    $(".back2").click(function() {
      $(".frm").hide("fast");
      $("#sf1").show("slow");
    });

    $(".back3").click(function() {
      $(".frm").hide("fast");
      $("#sf2").show("slow");
    });
    $(".back4").click(function() {
      $(".frm").hide("fast");
      $("#sf3").show("slow");
    });
    $(".back5").click(function() {
      $(".frm").hide("fast");
      $("#sf4").show("slow");
    });
    $(".back6").click(function() {
      $(".frm").hide("fast");
      $("#sf5").show("slow");
    });
    $(".back7").click(function() {
      $(".frm").hide("fast");
      $("#sf6").show("slow");
    });
    $(".back8").click(function() {
      $(".frm").hide("fast");
      $("#sf7").show("slow");
    });

  });
</script>
<script type="text/javascript" src="js/jquery.validate.js"></script>

<!--
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="js/picturefill.min.js"></script>
	<script type="text/javascript" src="js/lightgallery.min.js"></script>
	<script type="text/javascript" src="js/lg-thumbnail.min.js"></script>
	<script type="text/javascript" src="js/lg-autoplay.min.js"></script>
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
-->
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>