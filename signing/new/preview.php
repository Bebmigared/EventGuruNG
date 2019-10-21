<?php

session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
    $_SESSION['name']="eventname";
    $_SESSION['id']="id";
    //print_r($_SESSION['user']);
//include ('dbconn.php');
include '../../db.php';
//if (!$db) {
    //die("Connection failed: " . mysqli_connect_error());
//}
//echo "Connected successfully";
                //echo $lastid;
                //return false;
 if(isset($_POST['submit'])){
    $pics       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    $fullname = $_POST["fullname"];
    $profession = $_POST["profession"];
    $company = $_POST["company"];
    $position = $_POST["position"];
    $eventname = $_POST["id"];
    $linkedin = $_POST["linkedin"];
    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $lastid = $_POST["lastid"];
    $eventname = $_POST["eventname"];
    $id = $_POST["id"];
    
                //echo $fullname;
                //echo $profession;
                //echo $company;
                //echo $position;
                //echo $eventname;
                //echo $linkedin;
                //echo $twitter;
                //echo $instagram;
                //echo $facebook;
                //echo $lastid;
                //return false;
    //if(isset($pics)){
        if(!empty($pics)){      
            $location = 'uploads/';  
            //$data = "SELECT id FROM events where eventname = $eventname";
            //$result = $db->query($data);
            //while ($result->fetch_assoc()){
            $sql = "INSERT INTO speakers (eventname, fullname, profession, company, position, linkedin, facebook, twitter, instagram, s_image) VALUES ('$eventname' ,'$fullname' ,'$profession' ,'$company' ,'$position' ,'$linkedin' ,'$facebook' ,'$twitter' ,'$instagram', '$location.$name')";
            //$sql = "UPDATE events SET flyer ='$location.$pics', comment = '$comment', uploaded_on = NOW() WHERE id='$lastid' ";
            if (mysqli_query($db, $sql)) {
                //echo $id;
                if(move_uploaded_file($temp_name, $location.$pics)){
                //header ('location: preview.php');
                //echo $event;
                //echo $comment;
                //echo $location.$name;       
                $msg = 'File uploaded successfully';
                //echo "The file ".$name. " has been uploaded successfully.";
                //<php <a href="">Preview Event Details</a> >
                //echo "Preview Event Details";
            }
             //   echo "New record created successfully";

            }else{ 
                //mysqli_error($db); 
                $msg= "Error uploading file: " . $sql . "<br>" . mysqli_error($db);
            }
        
            
        }       
    else {
        $msg = 'You should select a file to upload !!';
    }
}
?>
<html >


<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Preview Your Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />


<!--EVENTS FORM CSS STARTS-->

<link rel="stylesheet" type="text/css" href="asset/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="asset/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="asset/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="asset/animate.css">
<!--<link rel="stylesheet" type="text/css" href="asset/hamburgers.min.css">-->
<link rel="stylesheet" type="text/css" href="asset/animsition.min.css">
<!--<link rel="stylesheet" type="text/css" href="asset/select2.min.css">-->
<!--<link rel="stylesheet" type="text/css" href="asset/daterangepicker.css">-->
<!--<link rel="stylesheet" type="text/css" href="asset/nouislider.min.css">-->
<link rel="stylesheet" type="text/css" href="asset/util.css">
<link rel="stylesheet" type="text/css" href="asset/main.css">
<!--EVENTS FORM CSS STARTS-->



<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/apple-touch-icon-114-precomposed.png">    <!-- For iPhone 4 Retina display -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->

<!-- CORE CSS FRAMEWORK - START -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
<!-- CORE CSS FRAMEWORK - END -->

<!--FA FA ICONS LOADER-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


<!-- CORE CSS TEMPLATE - START -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<!-- CORE CSS TEMPLATE - END -->

<!--Preview event form-->
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #f4fbfb;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
  color: black;
}

h1 {
  text-align: center;  
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
  display: none;
}

button {
  background-color: #4CAF50;
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

<!--IMAGE UPLOAD SCRIPT-->
<script type='text/javascript'>
    function preview_image(event) 
    {
    var reader = new FileReader();
    reader.onload = function()
    {
    var output = document.getElementById('output_image');
    output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
       }
</script>
<script>
$(document).ready(function() {
  $("#formButton").click(function() {
    $("#regForm").toggle();
  });
});
</script>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class=" "><!-- START TOPBAR -->
<div class='page-topbar '>
<div class='logo-area'>

</div>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<div class='quick-area'>
    <div class='pull-left'>
                <ul class="info-menu left-links list-inline list-unstyled">
                    <li class="sidebar-toggle-wrap">
                        <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                    <li class="message-toggle-wrapper">


					<div class="">
                                            
											<strong><a href="../../index.php" >HOME &nbsp;</a></strong>|
										
										
									</div>
                    </li>
                </ul>
            </div>		
            <div class='pull-right'>
                <ul class="info-menu right-links list-inline list-unstyled">
                    <li class="profile">
                        <a href="#" data-toggle="dropdown" class="toggle">
                            <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                            <strong><span value=""><?=$_SESSION['user']['firstname']?></span>  <span value=""><?=$_SESSION['user']['lastname']?> <i class="fa fa-angle-down"></i></span></strong>
                        </a>
                        <ul class="dropdown-menu profile animated fadeIn">
                            <li>
									<a href="myevent.php">
                                                    <i class="fa fa-calendar-plus-o"></i>
                                                    My Event
                                    </a>
                            </li>
                            <li>
                                <a href="profile.php">
                                    <i class="fa fa-user"></i>
                                    Profile
                                </a>
                            </li>
                            <li>
                                <a href="../../FAQ.html">
                                    <i class="fa fa-info"></i>
                                    Help
                                </a>
                            </li>
                            <li class="last">
                                <a href="../logout.php">
                                    <i class="fa fa-lock"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>			
            </div>		
</div>

</div><!-- END TOPBAR -->
<!-- START CONTAINER -->
<div class="page-sidebar ">

                            <!-- MAIN MENU - START -->
                            <div class="page-sidebar-wrapper" id="main-menu-wrapper"> 

                                <!-- USER INFO - START -->
                                <div class="profile-info row">

                                    <div class="profile-image col-md-4 col-sm-4 col-xs-4">
                                        <a href="profile.php">
                                            <img src="data/profile/profile.png" class="img-responsive img-circle">
                                            <!--<img name="picture" id="picture" src="?=$_SESSION['user']['picture']?>" class="img-responsive img-circle">-->
                                        </a>
                                    </div>

                                    <div class="profile-details col-md-8 col-sm-8 col-xs-8">

                                        <h3>
                                            <!--<span value="">?=$_SESSION['user']['firstname']?></span>-->
                                            <a href="profile.php" value=""><?=$_SESSION['user']['firstname']?></a>
											<a href="profile.php" value=""><?=$_SESSION['user']['lastname']?></a>
											<input type="hidden" name="id" value="<?= $_SESSION['user']['id']?>" >
                                        </h3> 
                                        <!-- Available statuses: online, idle, busy, away and offline -->
                                        <span class="profile-status online"></span>
                                        
										<span value=""><?=$_SESSION['user']['jobtitle']?></span>
										<input type="hidden" value="<?=$_SESSION['user']['id']?>">
                                        <!--<p class="profile-title">Web Developer</p>-->

                                    </div>

                                </div>
                                <!-- USER INFO - END -->



                                <ul class='wraplist'>	


                                    <li class="open"> 
                                        <a href="events.php">
                                            <i class="fa fa-book"></i>
                                            <span class="title">Events Info</span>
                                        </a>
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-address-card"></i>
                                            <span class="title">Event Details</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="title">Tickets</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-credit-card"></i>
                                            <span class="title">Payment Details</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-cog"></i>
                                            <span class="title">My Events</span>
                                            
                                        </a>
                                        
                                    </li>
                                    
                                    
                                </ul>

</div>
<!-- MAIN MENU - END -->
</div>
	
		
			  
    <div class="container">
            <form method="POST" id="regForm" action="preview.php">
                <?php echo $msg; ?>
                <h2 align="center"><?= $_SESSION['eventname']?></h2>
            <h3>Your Event has been Successfully Created    </h3>
            <fieldset>
                    
            &nbsp;&nbsp;&nbsp;<a href="#" align="center"><strong>Preview Your Event</strong></a>&nbsp;&nbsp; or &nbsp;&nbsp;
                    &nbsp; &nbsp;&nbsp;    <a href="#" align="right"><strong>Edit This Event</strong></a>
                    
            </fieldset>
                    <h1>Add Speakers:</h1><br>
                    <label align="center">To add a new speaker click next</label>
                    <!-- One "tab" for each step in the form: -->
                    <div class="">
                            <div id="wrapper">
                                    <img id="output_image"/><br>
                                    <input type="file" name="file" id="file" accept="image/*" onchange="preview_image(event)" required>
                            </div>
                            <input type="text" name="id" value="<?= $_SESSION['eventid']?>" hidden>
                            <input type="hidden" name="eventname" value="<?= $_SESSION['eventname']?>" >
                        <p><input placeholder="Full Name name..." oninput="this.className = ''" name="fullname"></p>
                        <p><input placeholder="Profession..." oninput="this.className = ''" name="profession"></p>
                        <p><input placeholder="Company name..." oninput="this.className = ''" name="company"></p>
                        <p><input placeholder="Position..." oninput="this.className = ''" name="position"></p>
                        <label>Social Media Links</label>
                        <p><input placeholder="Linkedin..." oninput="this.className = ''" name="linkedin"></p>
                        <p><input placeholder="Facebook..." oninput="this.className = ''" name="Facebook"></p>
                        <p><input placeholder="Twitter..." oninput="this.className = ''" name="Twitter"></p>
                        <p><input placeholder="Instagram..." oninput="this.className = ''" name="Instagram"></p>
                    </div>
                    <!--<div class="tab">
                        <p><input placeholder="Full Name name..." oninput="this.className = ''" name="fullname2"></p>
                        <p><input placeholder="Profession..." oninput="this.className = ''" name="profession2"></p>
                        <p><input placeholder="Company name..." oninput="this.className = ''" name="company2"></p>
                        <p><input placeholder="Position..." oninput="this.className = ''" name="position2"></p>
                        <label>Social Media Links</label>
                        <p><input placeholder="Linkedin..." oninput="this.className = ''" name="linkedin2"></p>
                        <p><input placeholder="Facebook..." oninput="this.className = ''" name="Facebook2"></p>
                        <p><input placeholder="Twitter..." oninput="this.className = ''" name="Twitter2"></p>
                        <p><input placeholder="Instagram..." oninput="this.className = ''" name="Instagram2"></p>
                    </div>
                    <div class="tab">
                        <p><input placeholder="Full Name name..." oninput="this.className = ''" name="fullname3"></p>
                        <p><input placeholder="Profession..." oninput="this.className = ''" name="profession3"></p>
                        <p><input placeholder="Company name..." oninput="this.className = ''" name="company3"></p>
                        <p><input placeholder="Position..." oninput="this.className = ''" name="position3"></p>
                        <label>Social Media Links</label>
                        <p><input placeholder="Linkedin..." oninput="this.className = ''" name="linkedin3"></p>
                        <p><input placeholder="Facebook..." oninput="this.className = ''" name="Facebook3"></p>
                        <p><input placeholder="Twitter..." oninput="this.className = ''" name="Twitter3"></p>
                        <p><input placeholder="Instagram..." oninput="this.className = ''" name="Instagram3"></p>
                    </div>
                    <div class="tab">
                        <p><input placeholder="Full Name name..." oninput="this.className = ''" name="fullname4"></p>
                        <p><input placeholder="Profession..." oninput="this.className = ''" name="profession4"></p>
                        <p><input placeholder="Company name..." oninput="this.className = ''" name="company4"></p>
                        <p><input placeholder="Position..." oninput="this.className = ''" name="position4"></p>
                        <label>Social Media Links</label>
                        <p><input placeholder="Linkedin..." oninput="this.className = ''" name="linkedin4"></p>
                        <p><input placeholder="Facebook..." oninput="this.className = ''" name="Facebook4"></p>
                        <p><input placeholder="Twitter..." oninput="this.className = ''" name="Twitter4"></p>
                        <p><input placeholder="Instagram..." oninput="this.className = ''" name="Instagram4"></p>
                    </div>-->
                    <button type="submit" name="submit" id="submit" >Submit</button>
                    <button type="button" id="formButton">Add New Speaker!</button>
                    <!--<div style="overflow:auto;">
                        <div style="float:right;">
                        <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button type="button" id="nextBtn" onclick="nextPrev(1)">Add New</button>
                        </div>
                    </div>-->
                    <!-- Circles which indicates the steps of the form: -->
                    <!--<div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                    </div>-->
                    
            </form>
            
</div>
<!-- END CONTAINER -->

<!-- START OF SCRIPT -->
<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Event Category") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
</script>
<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>

<!--Add Speaker script starts-->
<script>
//var currentTab = 0; // Current tab is set to be the first tab (0)
//showTab(currentTab); // Display the current tab

//function showTab(n) {
  // This function will display the specified tab of the form...
 /// var x = document.getElementsByClassName("tab");
  //x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  //if (n == 0) {
   // document.getElementById("prevBtn").style.display = "none";
  //} else {
   // document.getElementById("prevBtn").style.display = "inline";
  //}
  //if (n == (x.length - 1)) {
   // document.getElementById("nextBtn").innerHTML = "Submit";
  //} else {
   // document.getElementById("nextBtn").innerHTML = "Next";
  //}
  //... and run a function that will display the correct step indicator:
  //fixStepIndicator(n)
//}

//function nextPrev(n) {
  // This function will figure out which tab to display
  //var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  //if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  //x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  ///currentTab = currentTab + n;
  // if you have reached the end of the form...
  //if (currentTab >= x.length) {
    // ... the form gets submitted:
    //document.getElementById("regForm").submit();
    //return false;
  //}
  // Otherwise, display the correct tab:
  //showTab(currentTab);
//}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
<!--Add Speaker script ends-->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>


<!-- Global Places - Google Places Search -->
<script>
function activatePlacesSearch() {
var input = document.getElementByID('location');
var autocomplete = new google.maps.places.Autocomplete(input);
}
</script>


<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsjKM16fbsmVRNU4jlrhn3yinTyu3z5JU&libraries=places&callback=activatePlacesSearch"></script>
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAER0nFInObYID6YXDTPqQS3bopGTJ6tgY&libraries=places&callback=activatePlacesSearch"></script>-->
<!--===============================================================================================-->
<script src="asset/jquery-3.2.1.min.js"></script>
<script src="asset/animsition.min.js"></script>
<script src="asset/popper.js"></script>
<script src="asset/bootstrap.min.js"></script>
<script src="asset/select2.min.js"></script>
<!--<script src="asset/main.js"></script>-->
<script src="asset/moment.min.js"></script>
<script src="asset/daterangepicker.js"></script>
<script src="asset/countdowntime.js"></script>
<script src="asset/nouislider.min.js"></script>
<!-- END OF SCRIPT -->
<!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


<!-- CORE JS FRAMEWORK - START --> 
<script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
<script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
<script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  <!-- CORE JS FRAMEWORK - END --> 
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
<script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 
<!-- CORE TEMPLATE JS - START --> 
<script src="assets/js/scripts.js" type="text/javascript"></script> <!-- END CORE TEMPLATE JS - END --> 
<!-- Sidebar Graph - START --> 
<script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
<script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
<!-- Sidebar Graph - END --> 
</body>
</html>