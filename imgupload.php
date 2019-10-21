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
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: signing/index.php");
}

?>
<?php 
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
include 'db.php';
 if(isset($_POST['upload'])){
    $name       = $_FILES['file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    $comment = $_POST["comment"];
    $lastid = $_POST["lastid"];
    $eventname = $_POST["eventname"];
    $id = $_POST["id"];
    
                //echo $lastid;
                //return false;
    if(isset($name)){
        if(!empty($name)){      
            $location = 'uploads/';  
            //$data = "SELECT id FROM events where eventname = $eventname";
            //$result = $db->query($data);
            //while ($result->fetch_assoc()){
            //$sql = "INSERT INTO events (flyer, comment, uploaded_on) VALUES ('".$location.$name."','".$comment."', NOW())";
            $sql = "UPDATE events SET flyer ='$location$name', comment = '$comment', uploaded_on = NOW() WHERE id='$lastid' ";
            if (mysqli_query($db, $sql)) {
                //echo $id;
                header ('location: preview.php');
                //echo "New record created successfully";

            }else{ 
                mysqli_error($db); 
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
            }
        
            if(move_uploaded_file($temp_name, $location.$name)){
                
                //echo $event;
                //echo $comment;
                //echo $location.$name;       
                //echo 'File uploaded successfully';
                //echo "The file ".$name. " has been uploaded successfully.";
                //<php <a href="">Preview Event Details</a> >
                //echo "Preview Event Details";
            }
        }       
    }  else {
        echo 'You should select a file to upload !!';
    }
}
?>
<!--
<php include 'allevent.php'; ?> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Event Map - Event Details</title>
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
               
               #wrapper
               {
                text-align:center;
                margin:0 auto;
                padding:0px;
                width:80%;
               }
               #output_image
               {
                max-width:300px;
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
h2{
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
</head>
<body style="overflow:visible !important;">
	<!-- loadpage -->
	<div class="loadpage">
		<div class="spinner">
		  <div class="double-bounce1"></div>
		  <div class="double-bounce2"></div>
		</div>
	</div>

	<?php include('header.php'); ?>

<!-- banner pages -->

<div class="container">
<div class="page-heading">
	<h1 class="entry-title entry-title-event3"><?= $_SESSION['eventname']?></h1>

</div>
        <form action="imgupload.php" method="post" id="regForm" class="contact100-form " enctype="multipart/form-data">
                        <fieldset>
                        <h1 align="center"></h1>
                        <input type="hidden" name="lastid" id="lastid" value="<?= $_SESSION['lastid']?>" >
                        
                        <br>
                        <hr>
                        <h2>Upload Events Image/Flyer</h2>
                        <input type="text" name="id" value="<?= $_SESSION['eventid']?>" hidden>
                        <input type="text" name="eventname" value="<?= $_SESSION['eventname']?>" hidden>
                        <h4>
                            The image you upload will be the one displayed for events viewers to see. 
                        </h4>
                        <p>A great image speaks louder than words, as long as it's a PNG, JPG or GIF file. For best results, use a high-resolution image. Images with as little text as possible work best.
                            </p>
                            <!--Image Preview Starts-->
                            <!--<fieldset> -->
                                <div class ="row">
                                <div >
                                    <!--&nbsp;<img src="<php echo $imagePath; ?>" id="cropbox" class="img" align="center"/><br />-->

                                 </div>
                                <div id="wrapper">
                                    <img id="output_image"/><br>
                                    <input type="file" name="file" id="file" accept="image/*" onchange="preview_image(event)" >
                                </div>
                                </div>
                            <!--</fieldset>-->
                            <!--Image Preview Ends-->
                            <br>
                            <h2> Event's Description </h2>
                            <h4>
                            The Description you write about this event will be the displayed for events viewers to see. <br>
                            
                        </h4>
                        <div class="form-group">
                        <label for="comment">Comment:</label>
                        <textarea class="form-control" rows="8" placeholder="Write the details of what your event offers here....." name="comment" id="comment" required></textarea>
                        </div> 

                        <button class="btn btn-success" name="upload" id="upload" type="submit">Update Event</button>
                        
                        </fieldset>
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
	
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>