<?php

session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: ../index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
    $_SESSION['name']="eventname";
    $_SESSION['id']="id";
    //print_r($_SESSION['user']);
//include ('dbconn.php');
?>
<html >


<head>

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta charset="utf-8" />
<title>Create an Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />


<!--EVENTS FORM CSS STARTS-->

<link rel="stylesheet" type="text/css" href="asset/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="asset/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="asset/material-design-iconic-font.min.css">
<link rel="stylesheet" type="text/css" href="asset/animate.css">
<link rel="stylesheet" type="text/css" href="asset/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="asset/animsition.min.css">
<link rel="stylesheet" type="text/css" href="asset/select2.min.css">
<link rel="stylesheet" type="text/css" href="asset/daterangepicker.css">
<link rel="stylesheet" type="text/css" href="asset/nouislider.min.css">
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
<<div class="container-contact100">
	
		<div class="wrap-contact100">
			<form action="submit.php" method="post" class="contact100-form validate-form">
				<fieldset>
					<br>
				<span class="contact100-form-title">
					<strong>CREATE EVENT</strong>
				</span>
				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Your Name">
				
					<h3 align="center" class="label-input100">Name Of Your Event </h3>
					<input type="hidden" name="id" id="id" value="<?=$_SESSION['user']['id']?>">
					
					<span><i><strong>NOTE:</strong> include details that makes your event unique for Attendees to know.</i></span>
					<br><input class="form-control" type="text" name="eventname" placeholder="Enter Your Event Name" required><br>
					<input class="form-control" type="text" name="organizer" placeholder="Enter the name of the Event Organizer" required><br>
					<input class="form-control" type="text" name="seats" placeholder="Enter your Maximum Number of Expected Attendees (E.g 5000 or 1000)" required>
				</div>
				<div class="wrap-input101 input100-select bg1">
					
					<h3 class="label-input100" align="center">Other Details</h3>
				<br>
					<div>
						<input class="form-control" type="text" name="contactemail" placeholder="Enter the Email Address that you want your events attendees to contact you on"  required>
						<br>
						<input class="form-control" type="text" name="contactphone" placeholder="Enter the Phone Number that you want your events attendees to contact you on" required>
						<br>
												
					</div>
				</div>

				<div class="wrap-input101 validate-input bg1" data-validate = "Enter Your Email (e@a.x)">
					
					<h3 class="label-input100" align="center">Category</h3>
				<br>
						<select class="form-control" name="category">
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
						<select class="form-control" name="type">
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
				</div>				

				<div class="wrap-input101 input100-select bg1">
					
					<h3 class="label-input100" align="center">Location</h3>
				<br>
					<div>
						<input class="form-control" type="text" id="venue" name="venue" placeholder="Enter Your Event's Venue (E.g Ikeja City Hotel)" required>
						<br>
						<input class="form-control" type="text" id="location" name="location" placeholder="Enter the name of the Area for your event (E.g G.R.A, Ikeja, Lagos)" required>
						<br>
												
					</div>
				</div>
				<div class="wrap-input101 input100-select bg1">
					
				<h3 class="label-input100" align="center">Date</h3>
				<br>
				<div>
							<label for="start">Start date:</label>
							<input class="form-date" id="startdate" type="date" min="2019-01-01" name="startdate"> &nbsp &nbsp &nbsp &nbsp;
								<script>
								document.getElementById('startdate').value = moment().format('YYYY-MM-DD');
								</script>
							
							<label for="start">End date:</label>
							<input class="form-date" id="enddate" type="date" max="2028-12-31" name="enddate" required>
								<script>
								document.getElementById('enddate').value = moment().format('YYYY-MM-DD');
								</script>
								<br><br>
							<label for="start">Start Time:</label>
							<input class="form-date" type="time"  name="starttime">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp;


							<label for="start">End Time:</label>
							<input class="form-date" type="time"  name="endtime">
						</div>	
				</div>
				
						<ul class="info-menu right-links list-inline list-unstyled">
                                <li class="profile">
                                    <a href="#" data-toggle="dropdown" class="toggle">
                                        <span>Timezone <i class="fa fa-angle-down"></i></span>
									</a>
									<ul class="dropdown-menu profile">
                                    <select name="timezone">
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
										</ul>
									</li>
						</ul>
			

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
<script src="asset/main.js"></script>
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