<?php 
    session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: ../index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
            //print_r($_SESSION['user']);
            //include ('dbconn.php'); 

            ?>
            <!DOCTYPE html>
            <html >


            <head>

                <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
                <meta charset="utf-8" />
                <title>Credit Card Details</title>
                <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
                <meta content="" name="description" />
                <meta content="" name="author" />
                <script>

                    window.EBFONT_PROPERTIES = {
                        'family': 'Neue Plak',
                        'src': 'https://cdn.evbstatic.com/s3-build/perm_001/bf1c05/django/js/src/eb/fonts/neueplak.js',
                        'oldVersions': ['EB.fonts.neueplak.10-24-2018', 'EB.fonts.neueplak.09-20-2018', 'EB.fonts.neueplak.09-04-2018', 'EB.fonts.neueplak.08-30-2018', 'EB.fonts.neueplak.08-24-2018', 'EB.fonts.benton.10-26-2016', 'EB.fonts.benton.11-29-2016'],
                        'version': 'EB.fonts.neueplak.03-19-2019',
                    };
                </script>
<!-- FORM CSS STARTS-->

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
<!-- FORM CSS STARTS-->



<link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />    <!-- Favicon -->
<link rel="apple-touch-icon-precomposed" href="assets/images/apple-touch-icon-57-precomposed.png">	<!-- For iPhone -->
                <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/apple-touch-icon-72-precomposed.png">    <!-- For iPad -->
                <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/apple-touch-icon-144-precomposed.png">    <!-- For iPad Retina display -->
                <!--FA FA ICONS LOADER-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                <!--<link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"/> -->


                <!-- CORE CSS FRAMEWORK - START -->
                <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
                <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
                <link href="assets/plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
                <link href="assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
                <link href="assets/plugins/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" type="text/css"/>
                <!-- CORE CSS FRAMEWORK - END -->

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
                    <div class='quick-area'>
                        <div class='pull-left'>
                            <ul class="info-menu left-links list-inline list-unstyled">
                                <li class="sidebar-toggle-wrap">
                                    <a href="#" data-toggle="sidebar" class="sidebar_toggle">
                                        <i class="fa fa-bars"></i>
                                    </a>
                                </li>
                               <li class="">
                                        <div class="">
                                            
                                                <strong><button href="../../index.php" >HOME &nbsp;</button></strong>|
                                                <strong><button href="../../index.php" >Create An Event</button></strong>
                                            
                                        </div>
                                    </li>
                                </ul>
                            </div>		
                            <div class='pull-right'>
                                <ul class="info-menu right-links list-inline list-unstyled">
                                    <li class="profile">
                                        <a href="#" data-toggle="dropdown" class="toggle">
                                            <img src="data/profile/profile.png" alt="user-image" class="img-circle img-inline">
                                            <span><span value=""><?=$_SESSION['user']['firstname']?>  <span value=""><?=$_SESSION['user']['lastname']?> <i class="fa fa-angle-down"></i></span>
                                        </a>
                                        <ul class="dropdown-menu profile animated fadeIn">
                                            <li>
                                                <a href="#settings">
                                                    <i class="fa fa-calendar-plus-o"></i>
                                                    Create Event
                                                </a>
                                            </li>
                                            <li>
                                                <a href="profile.php">
                                                    <i class="fa fa-user"></i>
                                                    Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#help">
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
                                    <li class="chat-toggle-wrapper">

                                    </li>
                                </ul>			
                            </div>		
                        </div>

                    </div>
                    <!-- END TOPBAR -->
                    <!-- START CONTAINER -->
                    <div class="page-container row-fluid">

                        <!-- SIDEBAR - START -->
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
                                        </h3> 
                                        <!-- Available statuses: online, idle, busy, away and offline -->
                                        <span class="profile-status online"></span>
                                        
                                        <span value=""><?=$_SESSION['user']['jobtitle']?></span>
                                        <!--<p class="profile-title">Web Developer</p>-->

                                    </div>

                                </div>
                                <!-- USER INFO - END -->



                                <ul class='wraplist'>	


                                    <li class=""> 
                                        <a href="#">
                                            <i class="fa fa-dashboard"></i>
                                            <span class="title">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-suitcase"></i>
                                            <span class="title">Account</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class="open"> 
                                        <a href="creditcard.php">
                                            <i class="fa fa-credit-card"></i>
                                            <span class="title">Credit/Debit Cards</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-edit"></i>
                                            <span class="title">Emails/Password Change</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-bar-chart"></i>
                                            <span class="title">Organizer</span>
                                            
                                        </a>
                                        
                                    </li>
                                    
                                </ul>

                            </div>
                            <!-- MAIN MENU - END -->



                            



                        </div>
                        <!--  SIDEBAR - END -->
                        <!-- START CONTENT -->
<div class="col-lg-10">
<form action="credit.php" method="post" class="form-inline">
<fieldset class="profile">
                           
<section class="wrapper main-wrapper" >

<div id="main">
<strong><h1 align="center">Credit Card Details Update</h1></strong>

<div id="container">
<h4 align="center">Pay with my debit or credit card</h4>
<div class="display-td" >                            
    <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
</div>

<div class="wrap-input100 input100-select bg1">
<h2 align="center">Billing Information</h2>
<hr>
<div class="col-sm-6">
<strong><span id="td-label">First Name : </span></strong>
<i class="fa fa-user icon"></i>
<input class="form-control" type="text" name="firstname" id="firstname" placeholder="enter first name" required>
<br><br>

<strong><span>Last Name : </span></strong>
<i class="fa fa-user icon"></i>
<input class="form-control" type="text" name="lastname" id="lastname" placeholder="enter last name" required>
<br><br>


<strong><span> Card Type : </span> </strong>
<i class="fa fa-credit-card"></i>
<select name="creditCardType" class="form-control">
<option name="creditCardType" value="Visa" selected="selected">Visa</option>
<option name="creditCardType" value="MasterCard">MasterCard</option>
<option name="creditCardType" value="Discover">Discover</option>
<option name="creditCardType" value="Amex">American Express</option>
</select>
<br><br>
</div>
<div class="col-sm-6">
<strong><span > Card Number : </span></strong>
<i class="fa fa-credit-card"></i>
<input class="form-control" type="text" name="cardnumber" id="cardnumber" placeholder="enter card number" required="true">

<br><br>
<strong><span> Expiry Date :</span>&nbsp;&nbsp;&nbsp;</strong>
<span class="fa fa-info-circle errspan"></span>
<input class="form-control" type="text" name="expiry" id="expiry" placeholder="enter expiry date (e.g mm/yy)" required="true">

<br><br>


<strong><span> CVV : </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
<i class="fa fa-credit-card"></i>
<input class="form-control" type="text" name="cvv" id="cvv" placeholder="enter your card CVV" required="true">
</div>
</div>

<div class="wrap-input100 input100-select bg1">
<h2 align="center">Billing Address</h2>
<hr>
<div class="col-sm-6">
<strong><span> Address 1 : </span></strong>
<input class="form-control" type="text" name="address1" id="address1" placeholder="enter address " required>
<br><br>
<strong>Address 2 : </strong>
<input class="form-control" type="text" name="address2" id="address2" placeholder="enter address"reqiuired>
<br><br>


<strong><span> City : </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>
<input class="form-control" type="text" name="city" id="city" placeholder="enter city name" required>
<br><br>


<strong><span> State : </span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>

<select class="form-control"  id="state" name="state" data-automation="state" value="<?=$_SESSION['user']['state']?>">
    <option value="select state" selected="selected">- Select state -</option>
    <option value="Abuja FCT">Abuja FCT</option>
    <option value="Abia">Abia</option>
    <option value="Adamawa">Adamawa</option>
    <option value="Akwa Ibom">Akwa Ibom</option>
    <option value="Anambra">Anambra</option>
    <option value="Bauchi">Bauchi</option>
    <option value="Bayelsa">Bayelsa</option>
    <option value="Benue">Benue</option>
    <option value="Borno">Borno</option>
    <option value="Cross River">Cross River</option>
    <option value="Delta">Delta</option>
    <option value="Ebonyi">Ebonyi</option>
    <option value="Edo">Edo</option>
    <option value="Ekiti">Ekiti</option>
    <option value="Enugu">Enugu</option>
    <option value="Gombe">Gombe</option>
    <option value="Imo">Imo</option>
    <option value="Jigawa">Jigawa</option>
    <option value="Kaduna">Kaduna</option>
    <option value="Kano">Kano</option>
    <option value="Katsina">Katsina</option>
    <option value="Kebbi">Kebbi</option>
    <option value="Kogi">Kogi</option>
    <option value="Kwara">Kwara</option>
    <option value="Lagos">Lagos</option>
    <option value="Nassarawa">Nassarawa</option>
    <option value="Niger">Niger</option>
    <option value="Ogun">Ogun</option>
    <option value="Ondo">Ondo</option>
    <option value="Osun">Osun</option>
    <option value="Oyo">Oyo</option>
    <option value="Plateau">Plateau</option>
    <option value="Rivers">Rivers</option>
    <option value="Sokoto">Sokoto</option>
    <option value="Taraba">Taraba</option>
    <option value="Yobe">Yobe</option>
    <option value="Zamfara">Zamfara</option>
    <option value="Outside Nigeria">Outside Nigeria</option>
</select>


</div>
<div class="col-sm-6">
<strong><span> Zipcode : </span></strong>
<input class="form-control" type="text" name="zip" id="zip" placeholder="enter zip code (5 or 9 digits)">
<br><br>
<strong><span> Country : </span></strong>
<input type="text" name="country" id="country" placeholder="enter country name" class="form-control">
<br><br>

<strong><span> Phone No : </span></strong>
<input class="form-control" type="text" name="phone" id="phone" placeholder="enter Phone number ">
</div>
<br><br>

<!--<a href="#" id="paynow"> Pay Now </a>-->
<br><br>
</div>
<hr>
<input style="width: 20%;" type="submit" id="cardsubmit" name="cardsubmit" value="Update Card Details" align="center">
<br><br>

</form>
</div>

</div>
<div id="pop2" class="simplePopup">
<div id="loader">
<div id="circularG">
<div id="circularG_1" class="circularG">
</div>
<div id="circularG_2" class="circularG">
</div>
<div id="circularG_3" class="circularG">
</div>
<div id="circularG_4" class="circularG">
</div>
<div id="circularG_5" class="circularG">
</div>
<div id="circularG_6" class="circularG">
</div>
<div id="circularG_7" class="circularG">
</div>
<div id="circularG_8" class="circularG">
</div>
</div>
</div>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.simplePopup.js" type="text/javascript"></script>
<script type="text/javascript">
</script>
                            </section>
                            </fieldset>
                        </form>
            <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->


            <!-- CORE JS FRAMEWORK - START --> 
            <script src="assets/js/jquery-1.11.2.min.js" type="text/javascript"></script> 
            <script src="assets/js/jquery.easing.min.js" type="text/javascript"></script> 
            <script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
            <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>  
            <script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js" type="text/javascript"></script> 
            <script src="assets/plugins/viewport/viewportchecker.js" type="text/javascript"></script>  
            <!-- CORE JS FRAMEWORK - END --> 


            <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START --> 
            <script src="assets/plugins/autosize/autosize.min.js" type="text/javascript"></script><!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END --> 


            <!-- CORE TEMPLATE JS - START --> 
            <script src="assets/js/scripts.js" type="text/javascript"></script> 
            <!-- END CORE TEMPLATE JS - END --> 

            <!-- Sidebar Graph - START --> 
            <script src="assets/plugins/sparkline-chart/jquery.sparkline.min.js" type="text/javascript"></script>
            <script src="assets/js/chart-sparkline.js" type="text/javascript"></script>
            <!-- Sidebar Graph - END --> 













            <!-- General section box modal start -->
            <div class="modal" id="section-settings" tabindex="-1" role="dialog" aria-labelledby="ultraModal-Label" aria-hidden="true">
                <div class="modal-dialog animated bounceInDown">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                            <h4 class="modal-title">Section Settings</h4>
                        </div>
                        <div class="modal-body">

                            Body goes here...

                        </div>
                        <div class="modal-footer">
                            <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                            <button class="btn btn-success" type="button">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- modal end -->
            </body>
            </html>