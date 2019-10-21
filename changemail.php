<?php
session_start();
include 'allevent.php';
//$_SESSION['event'] = $event[$row]['eventname'];
?>
<?php
if (isset($_POST['mailUpdate'])) {
}

if (isset($_POST['pixUpdate'])) {
}

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>EventGuru- Change Email/Profile Image</title>
	

<meta content="" name="description" />
<meta content="" name="author" />
	<!--EVENTS FORM CSS STARTS-->

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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-137786155-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-137786155-4');
</script>
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
    #regForm {
  background-color: #ffffff;
  margin: auto;
  font-family: Raleway;
  padding: 40px;
  width: 95%;
  height: auto;
  min-width: 300px;
  border-radius: 15px;
}
 #wrapper
               {
                text-align:center;
                margin:0 auto;
                padding:0px;
                width:80%;
               }
               #output_image
               {
                 height:100%;
                width:100%;
                border-radius: 15px;
               }
.field{
    border: 2px solid darkmagenta;
  border-radius: 25px;
  background-color: transparent;
  height: auto;
  padding:50px;
}
legend {padding: 2px;border: 1px solid darkmagenta;}
</style>
</head>
<body style="overflow:visible !important;">

<!-- Header -->
<!-- Header  Begins -->
<?php include('header.php'); ?>
<!-- Header  Ends -->

<!-- banner pages -->
<div class="page-heading">
	<h1 class="entry-title">Change Your Profile Image/Email</h1>
</div>

<div id="main">
	<div class="container">
		<!-- list event1 extend lastest event -->
		<div>
		    <form id="regForm" acion="" method="POST" id="">
		        <hr>
		        
		        <fieldset class="field">
		            <legend align="center"><strong>Change Email</strong></legend>
		        <label>Current Email Address</label><input type="text" name="email" value="<?=$_SESSION['user']['email'] ?>" class="form-control" disabled>
		        
		        <label>New Email Address</label><input type="text" name="newEmail" class="form-control" ><br>
		        <input type="submit" name="mailUpdate" class="btn" value="Update Email" style="background-color:darkmagenta;color:white;">
		        </fieldset>
		    </form>
		</div>
		<div>
		    <form id="regForm" acion="" method="POST" id="">
		        <fieldset class="field">
		        <legend align="center"><strong>Change Profile Image</strong></legend>
		            <div class="col-md-5" style="padding:50px;">
		        <label>Current profile image</label><br>
		        <div style=" height:250px; width:250px; border:2px solid gray; border-radius: 15px;">
		        <img src="data/profile/<?= !isset($_SESSION['user']['picture']) ?  "user.png": $_SESSION['user']['picture'] ?>" style="width:100%;height:100%;border-radius:20px">
		        </div>
		        <br>
		        </div>
		        <div class="col-md-5" style="padding:50px;">
                                <div >
                                    <!--&nbsp;<img src="<php echo $imagePath; ?>" id="cropbox" class="img" align="center"/><br />-->

                                 </div>
                                <div id="wrapper">
                                    <label>Select New Profile Image </label>
                                    <div style=" height:250px; width:250px; border:2px solid gray; border-radius: 15px;">
                                    <img id="output_image"/><br>
                                    </div><br>
                                    <input type="file" name="file" id="file" accept="image/*" onchange="preview_image(event)" ><br>
                                    <input type="submit" name="pixUpdate" class="btn" value="Update Profile Image" style="background-color:darkmagenta;color:white;">
                                </div>
                </div>
                </fieldset>
		        
		    </form>
		</div>
		
		<div class="main-lastest-event entry-list-event1">
			
		</div>

	</div>
</div>


<!-- Footer -->
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
</html>��������