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
  width: 95%;
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

.uprofile-info {
    padding: 15px 15px 15px 15px;
    background: #e8e8e8;
    margin-bottom: 20px;
}
.uprofile-image {
    width: 100%;
    display: inline-block;
    margin: 0 0 15px 0;
    text-align: center;
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
</head>
<body style="overflow:visible !important;">

	<?php include('header.php'); ?>

<!-- banner pages -->

<div class="container">
	
    <form id="regForm" action="managemyevent.php" method="post" class="wrapper main-wrapper1" >
    
    <div class="page-heading">
	<h1 class="entry-title entry-title-event3" style="padding-top: 20px">Let EventGuru Manage My Event</h1>
<hr>
</div>

<div>
    <label for="">Type/Category of Event</label> <input placeholder="Type of event you are having" type="text" class="form-control">
    <label for="">Your Budget Amount</label><input placeholder="Amount you plan to spend"  type="number" class="form-control">
    <label for="">Describe Your Event</label>
    <select type="select" id="exampleCustomSelect" name="customSelect" class="form-control">
        <option value="">Select</option>
        <option>YES</option>
        <option>NO</option>
    </select>
    <div><label for="">Name of Event Center</label><input placeholder="Name of your preferred Event Center" type="text" class="form-control"></div>
    <div><label for="">Location</label><input placeholder="Name of the area you want your event at" type="text" class="form-control"></div>
    <div><label for="">Number of Expected Attendants </label><input placeholder="No of people you expect" type="number" class="form-control"></div>
</div>
<div class="form-group"> 
<h3>Specify Other Services You want added to your Budget</h3>
<div><label>Feeding</label><input type="checkbox" id="exampleCustomCheckbox"></div>
<div><label>Accomodation</label><input type="checkbox" id="exampleCustomCheckbox2"></div>
<div><label>Transportation</label><input type="checkbox" id="exampleCustomCheckbox2"></div>
                        </div>
<h3>Your Details</h3>
<div><label>Email</label><input name="email" placeholder="your email address" type="email" class="form-control"></div>
<div><label>Address</label><input name="address" placeholder="eg. 1234 My St" type="text" class="form-control"></div>
<div><label>Address 2</label><input name="address2" placeholder="e.g 131 My bus stop" type="text" class="form-control"></div>
<div><label for="exampleCity" class="">City</label><input name="city" placeholder="City..." id="exampleCity" type="text" class="form-control"></div>
<div><label for="exampleState" class="">State</label><input name="state" placeholder="State..." id="exampleState" type="text" class="form-control"></div>
<div><label for="exampleZip" class="">Zip Code</label><input name="zip" placeholder="Zip code..." id="exampleZip" type="text" class="form-control"></div>
<div><input name="check"type="checkbox"><label>Agree to EventGuru Terms and Conditions</label></div>
                <button class="mt-2 btn btn-primary">Submit</button>
                                          
                                        
                                </div>
                                
    </form>
</div>
	<!-- Footer  Begins -->
<?php include('footer.php'); ?>
<!-- Footer  Ends -->

	<div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	
    <script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "block";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

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