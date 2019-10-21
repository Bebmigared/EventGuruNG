<?php
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: signing/index.php");
}
$_SESSION['msg'] ="";
    $_SESSION['name']="eventname";
    $_SESSION['id']="id";
    //print_r($_SESSION['user']);
//include ('dbconn.php');
?>
<?php 
include 'db.php';
$ID = $_SESSION['lastid'];

 if(isset($_POST['submit'])){
    $pics       = $_FILES['sp_file']['name'];  
    $temp_name  = $_FILES['file']['tmp_name'];  
    $fullname = $_POST["fullname"];
    $profession = $_POST["profession"];
    $company = $_POST["company"];
    $position = $_POST["position"];
    $eventname = $_POST["eventname"];
    $eventid = $_POST["eventid"];
    $linkedin = $_POST["linkedin"];
    $facebook = $_POST["facebook"];
    $twitter = $_POST["twitter"];
    $instagram = $_POST["instagram"];
    $lastid = $_POST["lastid"];
    
                echo $file;
                //echo $profession;
                //echo $company;
                //echo $linkedin;
                //echo $twitter;
                //echo $facebook;
                //echo $instagram;
                return false;
    //if(isset($pics)){ 
        //if(!empty($pics)){      
            $location = 'speakers_img/';  
            //$data = "SELECT id FROM events where eventname = $eventname";
            //$result = $db->query($data);
            //while ($result->fetch_assoc()){
            $sql = "INSERT INTO speakers (eventname, fullname, profession, company, position, linkedin, facebook, twitter, instagram, s_image) VALUES ('$lastid' ,'$fullname' ,'$profession' ,'$company' ,'$position' ,'$linkedin' ,'$facebook' ,'$twitter' ,'$instagram', '$location$pics')";
            //$sql = "UPDATE events SET flyer ='$location.$pics', comment = '$comment', uploaded_on = NOW() WHERE id='$lastid' ";
            $result= mysqli_query($db, $sql) or die(mysqli_error($db));
            if ($result) {
                //echo $id;
                //$_SESSION['msg'] = "New record created successfully";
                echo "<script>alert('New Speaker added successfully')</script>";

            }else{ 
                mysqli_error($db); 
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
                echo "<script>alert('Speaker Not Added!! Please Try Again Later')</script>";
            }
        
            if(move_uploaded_file($temp_name, $location.$pics)){
                
            }
        //}       
    //}
    //else {
        //$_SESSION['msg'] = 'You should select a file to upload !!';
        //echo "<script>alert('You should select a file to upload !!')</script>";
    //}
}
?>
<!--
<php include 'allevent.php'; ?> -->
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title> Event Map - Add speaker to your Event</title>
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


		<?php include('header.php'); ?>


<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title entry-title-event3"></h1>

</div>
<div class="container">
<form id="regForm" method="POST" action="preview.php" enctype="multipart/form-data">
            <h3 align="center">Your Event <span align="center"><strong><?= $_SESSION['eventname']?></strong><br> has been Successfully Created   </span> </h3>
            
            <fieldset>

                    
            &nbsp;&nbsp;&nbsp;<a href="details.php/?e=<?=$ID?>" align="center"><strong>Preview Your Event</strong></a>&nbsp;&nbsp; or &nbsp;&nbsp;
                    &nbsp; &nbsp;&nbsp;    <a href="getedit.php/?e=<?=$ID?>" align="right"><strong>Edit This Event</strong></a>
                    
            </fieldset>
                    <h1>Add Speakers:</h1><br>
                    <label align="center">To add a new speaker click next</label>
                    <!-- One "tab" for each step in the form: -->
                    <div class="">
                            <div id="wrapper">
                                    <img id="output_image"/><br>
                                    <input type="file" name="sp_file" id="sp_file" accept="image/*" onchange="preview_image(event)"  required>
                            </div>
                            <input type="hidden" name="eventname" value="<?= $_SESSION['eventname']?>" >
                            <input type="hidden" name="id" value="<?= $_SESSION['eventid']?>" >
                            <input type="hidden" name="lastid" id="lastid" value="<?= $_SESSION['lastid']?>" >
                        <p><input placeholder="Full Name name..." oninput="this.className = ''" name="fullname" required></p>
                        <p><input placeholder="Profession..." oninput="this.className = ''" name="profession"  required></p>
                        <p><input placeholder="Company name..." oninput="this.className = ''" name="company"  required></p>
                        <p><input placeholder="Position..." oninput="this.className = ''" name="position"  required></p>
                        <label>Social Media Links</label>
                        <p><input placeholder="Linkedin..." oninput="this.className = ''" name="linkedin"  required></p>
                        <p><input placeholder="Facebook..." oninput="this.className = ''" name="facebook"  required></p>
                        <p><input placeholder="Twitter..." oninput="this.className = ''" name="twitter"  required></p>
                        <p><input placeholder="Instagram..." oninput="this.className = ''" name="instagram"  required></p>
                    </div>
                    
                    <button type="submit" name="submit" id="submit" >Submit</button>
                    <button onclick="window.location.href = '#';">Finished Adding Speaker!</button>
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
	
	<!-- Footer  Begins -->
<?php include('footer.php'); ?>
<!-- Footer  Ends -->

	<div id="to-top"><i class="fa fa-angle-up" aria-hidden="true"></i></div>
	    
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