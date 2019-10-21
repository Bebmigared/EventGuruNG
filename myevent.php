<?php 

session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
    header("Location: signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
	//include 'allevent.php';
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
	<title> Event Map - My Events</title>
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
  background-color: #1fb5ac45 !important;
}

#regForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
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
<style>
.card.mb-3 {
    margin-bottom: 30px !important;
}
.widget-content {
    padding: 1rem;
    flex-direction: row;
    align-items: center;
}
.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4,9,20,0.03), 0 0.9375rem 1.40625rem rgba(4,9,20,0.03), 0 0.25rem 0.53125rem rgba(4,9,20,0.05), 0 0.125rem 0.1875rem rgba(4,9,20,0.03);
    border-width: 0;
    transition: all .2s;
}
.bg-midnight-bloom {
    background-image: linear-gradient(-20deg, #2b5876 0%, #4e4376 100%) !important;
}
.mb-3, .my-3 {
    margin-bottom: 1rem !important;
}
.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #1a15d914;
    background-clip: border-box;
    border: 1px solid rgba(26,54,126,0.125);
    border-radius: .25rem;
}
.widget-content .widget-content-left .widget-heading {
    opacity: .8;
    font-weight: bold;
}
.widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center;
}
.widget-content .widget-numbers {
    font-weight: bold;
    font-size: 3.8rem;
    display: block;
}
.text-white {
    color: #fff !important;
}
.mr-3, .mx-3 {
    margin-right: 1rem !important;
}
.card-header {
    display: flex;
    align-items: center;
    border-bottom-width: 1px;
    padding-top: 0;
    padding-bottom: 0;
    padding-right: .625rem;
    height: 4.5rem;
}
.card-header, .card-title {
    text-transform: uppercase;
    color: rgba(13,27,62,0.7);
    font-weight: bold;
    font-size: 1.88rem;
}
.card-header {
    padding: .75rem 1.25rem;
    margin-bottom: 0;
    color: inherit;
    background-color: #fff;
    border-bottom: 1px solid rgba(26,54,126,0.125);
}
.card-header:first-child {
    border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
}
.widget-content .widget-content-right {
    margin-left: 50px;
}
.widget-content .widget-content-left .widget-subheading {
    opacity: .5;
}
.col-xl-4 {
    flex: 0 0 33.33333%;
    max-width: 33.33333%;
}
</style>
</head>
<body style="overflow:visible !important;">
	<!-- loadpage -->
	<div class="loadpage">
		<div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
		</div>
	</div>

	<!-- Header -->
<!-- Header  Begins -->
<?php include('header.php'); ?>
<!-- Header  Ends -->

<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title entry-title-event3">My Events</h1>

</div>
<div class="container" style="padding-top:100px;">
	
<div class="app-main">
                
                    
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">
                                    <div class="row">
                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-midnight-bloom">
                                    <div class="widget-content-wrapper text-white">
                                    <?php include 'myeve.php'; ?>
                                        <div class="widget-content-left">
                                            <div class="widget-heading">Total Events Created</div>
                                            <div class="widget-subheading">All my events</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?php echo count($myeve); ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 col-xl-4">
                                <div class="card mb-3 widget-content bg-arielle-smile">
                                    <div class="widget-content-wrapper text-white">
                                        <div class="widget-content-left">
                                            <div class="widget-heading">My Total Events Reach</div>
                                            <div class="widget-subheading">Total Number of attendees</div>
                                        </div>
                                        <div class="widget-content-right">
                                            <div class="widget-numbers text-white"><span><?=$myeve[0]['totalsum'] ?></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-header">All Events Created
                                        <!--<div class="btn-actions-pane-right">
                                            <div role="group" class="btn-group-sm btn-group">
                                                <button class="active btn btn-focus">Last Week</button>
                                                <button class="btn btn-focus">All Month</button>
                                            </div>
                                        </div>-->
                                    </div>
                                    <div class="table-responsive">
                                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                            <thead>
                                            <tr>
                                                <th class="text-center">S/No</th>
                                                <th>Event Name</th>
                                                <th class="text-center">Location</th>
                                                <th class="text-center">Registered Users</th>
                                                <th class="text-center">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php 
                                            for ($row = 0; $row < count($myeve); $row++) {
                                              //  print_r ($myeve);
                                            //return false;
                                            $number = $row +1;
                                                ?>
                                            

                                            <tr>
                                                <td class="text-center text-muted"><?php echo $number ?></td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="50" src="<?= !isset($myeve[$row]['flyer']) ? "../uploads/defaultimg.png": $myeve[$row]['flyer'] ?>" alt="flyer">
                                                                    <!--<img width="50" src="signing/new/<= $myeve[$row]['flyer'] ?>" alt="flyer">-->
                                                                    <!--<= !isset($_SESSION['user']['picture']) ?  "user.png": $_SESSION['user']['picture'] ?>-->
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading"><?= $myeve[$row]['eventname'] ?></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                
                                                

                                                <? echo $msg;?>
                                                <td class="text-center"><?php echo $myeve[$row]['venue'] ?> &nbsp;<?php echo $myeve[$row]['locations'] ?> </td>
                                                
                                                <td class="text-center">
                                                    <div class="badge badge-warning"><?= isset($myeve[$row]['registered']) ?  $myeve[$row]['registered'] : 0?></div>
                                                </td>
                                               
                                                <td class="text-center">
                                                <a href="e_details.php/?d=<?=$myeve[$row]['id']?>"  id="myBtn<?=$row?>">Details</a><!-- Trigger/Open The Modal -->
                                                </td>
                                                
                                            </tr>
                                            <!-- The Modal -->
                                <div id="myModal" class="modal">

                                <!-- Modal content -->
                                <div class="modal-content">
                                <span class="close" onclick="div_hide()">Click anywhere outside this form to close&nbsp; &times;</span>
                                <p></p>
                                <label>Eventname: </label><input type="text" value="<?= $myeve[$row]['eventname'] ?>" disabled><br>
                                <label>Address: </label><input type="text" value="<?php echo $myeve[$row]['venue'] ?>&nbsp;<?php echo $myeve[$row]['locations'] ?> " disabled><br>
                                <label>Contact Email: </label><input type="text" value="<?php echo $myeve[$row]['contactemail'] ?>" disabled><br>
                                <label>Contact Phone:</label><input type="text" value="<?php echo $myeve[$row]['contactphone'] ?>" disabled><br>
                                <label>Start Date: </label><input type="text" value="<?php echo $myeve[$row]['startdate'] ?>" disabled>
                                
                                </div>

                                </div>
                                                                            <?php }?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-block text-center card-footer">
                                        <!--<button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                                        <button class="btn-wide btn btn-success">Save</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
	</div>
	<!-- Footer -->
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