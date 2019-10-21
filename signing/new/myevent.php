<?php 
    session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}
    //$_SESSION['eventname'] = '';
    //print_r($_SESSION['user']);
    include('listen.php');

 ?>
            <!DOCTYPE html>
            <html >


            <head>

                <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
                <meta charset="utf-8" />
                <title>My Events</title>
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
                <!--FA FA ICONS LOADER-->
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
                                            
                                            <strong><a href="../../index.php" >HOME &nbsp;</a></strong>|
                                        
                                        
                                    </div>
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
                                                <a href="../../faq.php">
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
                                        <a href="javascript:;">
                                            <i class="fa fa-book"></i>
                                            <span class="title">Events Info</span>
                                        </a>
                                    </li>
                                    <li class="javascript:;"> 
                                        <a href="events2.php">
                                            <i class="fa fa-address-card-o"></i>
                                            <span class="title">Details</span>
                                            
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
                                    <li class="open"> 
                                        <a href="javascript:;">
                                            <i class="fa fa-cog"></i>
                                            <span class="title">My Events</span>
                                            
                                        </a>
                                        
                                    </li>
                                    
                                    
                                </ul>

                            </div>
                <!-- MAIN MENU - END -->
                                        </div>
                <!--  SIDEBAR - END -->
                <!-- START CONTENT -->
                <div class="container">
                <div class='col-lg-10 col-md-12 col-sm-12 col-xs-12'>
                <div class="wrap-contact101">
                    <form action="#" method="post" class="contact100-form " enctype="multipart/form-data">
                        <fieldset>
                        <div class="col-lg-9 col-sm-4 col-xs-12">
                        <h2 align="center">ALL MY EVENTS</h2>
                        <input type="hidden" name="lastid" id="lastid" value="<?= $_SESSION['lastid']?>" >
                        <?php include ('myeve.php'); ?>
                        <?php 
									for ($row = 0; $row < count($myeve); $row++) {
                                        ?>
                                        <div class="form-group">
                                        <h3><a href="../../details.php/?e=<?=$myeve[$row]['id']?>"><?php echo $myeve[$row]['eventname'] ?></a></h3>&nbsp;
                                        <span><?php echo $myeve[$row]['venue'] ?></span>
                                        <span><?php echo $myeve[$row]['locations'] ?></span>
                                        </div>

                                    <?php }?>

                        
                        </fieldset>
                </form>
                </div>
                </div>
                </div>
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

            </body>
            </html>