<?php 
            session_start();
            //print_r($_SESSION['user']);
            //include ('dbconn.php'); 

            ?>
            <!DOCTYPE html>
            <html >


            <head>

                <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
                <meta charset="utf-8" />
                <title>User Profile</title>
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
                                <li class="message-toggle-wrapper">


                                    <li class="hidden-sm hidden-xs searchform">
                                        <div class="input-group">
                                            <span class="input-group-addon input-focus">
                                                <i class="fa fa-search"></i>
                                            </span>
                                            <form action="http://jaybabani.com/ultra-admin-html/preview/search-page.html" method="post">
                                                <input type="text" class="form-control animated fadeIn" placeholder="Search & Enter">
                                                <input type='submit' value="">
                                            </form>
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


                                    <li class="open"> 
                                        <a href="#">
                                            <i class="fa fa-dashboard"></i>
                                            <span class="title">Dashboard</span>
                                        </a>
                                    </li>
                                    <li class=""> 
                                        <a href="changemail.php">
                                            <i class="fa fa-suitcase"></i>
                                            <span class="title">Account</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-keyboard-o"></i>
                                            <span class="title">Password</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-credit-card"></i>
                                            <span class="title">Credit/Debit Cards</span>
                                            
                                        </a>
                                        
                                    </li>
                                    <li class=""> 
                                        <a href="javascript:;">
                                            <i class="fa fa-edit"></i>
                                            <span class="title">Emails</span>
                                            
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
                        <form action="store.php" method="post">
                        <section id="main-content" class=" ">
                            <section class="wrapper main-wrapper" >

                                <div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
                                    <div class="page-title">

                                        <div class="pull-left">
                                            <h1 class="title">User Profile: &nbsp &nbsp</h1>                            
                                        </div>
                                        <div class="g-cell g-cell-1-1">
                                            <h2 class="text-heading-primary"><strong>Account Information</strong></h2>
                                        </div>

                                        <div class="pull-right hidden-xs">
                                            <ol class="breadcrumb">
                                                <li>
                                                    <a href="#"><i class="fa fa-home"></i>Home</a>
                                                </li>
                                                <li>
                                                    <a href="#">Pages</a>
                                                </li>
                                                <li class="active">
                                                    <strong>Profile</strong>
                                                </li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                                <div class="clearfix"></div>

                                
                                <div class="col-lg-12">
                                    <section class="box nobox">
                                        <div class="content-body">    <div class="row">
                                            <div class="col-md-3 col-sm-4 col-xs-12">
                                                <div class="uprofile-image">
                                                    <img name="picture" id="picture" src="data/profile/user.png" class="img-responsive">

                                                </div>
                                                <div class="uprofile-name">
                                                    <h3>
                                                        <span value=""><?=$_SESSION['user']['firstname']?></span>
                                                        <span value=""><?=$_SESSION['user']['lastname']?></span>

                                                        <!-- Available statuses: online, idle, busy, away and offline -->
                                                        <span class="uprofile-status online"></span>
                                                    </h3>
                                                    <p class="uprofile-title">
                                                        <span value=""><?=$_SESSION['user']['jobtitle']?> </span>
                                                    </p>
                                                </div>
                                                <div class="uprofile-info">
                                                    <ul class="list-unstyled">
                                                        <li><i class='fa fa-home'></i><span value=""><?=$_SESSION['user']['address1']?> </span></li>
                                                        <li><i class='fa fa-user'></i> <span value=""><?=$_SESSION['user']['cellphone']?> </span></li>
                                                        <li><i class='fa fa-suitcase'></i> <span value=""><?=$_SESSION['user']['email']?> </span></li>
                                                    </ul>
                                                </div>

                                                <div class=" uprofile-social">

                                                    <a href="#" class="btn btn-primary btn-md facebook"><i class="fa fa-facebook icon-xs"></i></a>
                                                    <a href="#" class="btn btn-primary btn-md twitter"><i class="fa fa-twitter icon-xs"></i></a>
                                                    <a href="#" class="btn btn-primary btn-md google-plus"><i class="fa fa-google-plus icon-xs"></i></a>
                                                    <a href="#" class="btn btn-primary btn-md dribbble"><i class="fa fa-dribbble icon-xs"></i></a>

                                                </div> 

                                            </div>

                                            
                                                <div class="col-md-4 col-sm-4 col-xs-12">    
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                        <h3 class="text-heading-secondary">Account email address:</h3>     
                                                    </div>
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"></div>
                                                    <div class="js-d-credentials">

                                                        <div class="g-cell g-cell-1-1">
                                                            <p>        
                                                                  
                                                                <span value=""><?=$_SESSION['user']['email']?> </span>
                                                            </p>
                                                            
                                                            <a id="change_email" href="changemail.php" class="btn btn--secondary btn--small">Change</a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="g-cell g-cell-1-1 l-mar-top-6">
                                                        <h3 class="text-heading-secondary">Contact Information</h3>
                                                    </div>
                                                    <div>
                                                        <!--<form action="/account" method="post" name="addressform" id="fieldform_addressform" class="responsive-form fieldsform js-d-submitControl">-->

                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="contactinfo_prefix" class="label-primary">Prefix</label></div>
                                                                    <div>
                                                                        <select class="js-d-select-box" id="prefix" name="prefix" value="<?=$_SESSION['user']['prefix'] ?>">
                                                                            <option value="--" >--</option>
                                                                            <option value="Mr."  selected>Mr.</option>
                                                                            <option value="Mrs." >Mrs.</option>
                                                                            <option value="Ms."  >Ms.</option>
                                                                            <option value="Miss" >Miss</option>
                                                                            <option value="Mx."  >Mx.</option>
                                                                            <option value="Dr."  >Dr.</option>
                                                                            <option value="Prof." >Prof.</option>
                                                                            <option value="Rev." >Rev.</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="firstname" class="label-primary">First Name</label></div>
                                                                    <div><input class="form-control" type="text" id="firstname"  name="firstname" value="<?=$_SESSION['user']['firstname']?>" /></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="lastname" class="label-primary">Last Name</label></div>
                                                                    <div><input class="form-control" type="text" id="lastname"  name="lastname" value="<?=$_SESSION['user']['lastname']?>"  /></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="ex-2" class="label-primary">Suffix</label></div>
                                                                    <div><input class="js-d-select-box" type="text" id="ex-2"  name="suffix" value="<?=$_SESSION['user']['suffix']?>" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="homephone" class="label-primary">Home Phone</label></div>
                                                                    <div><input class="form-control" type="text" id="homephone"  name="homephone" value="<?=$_SESSION['user']['homephone']?>"  /></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="cellphone" class="label-primary">Cell Phone</label></div>
                                                                    <div><input class="form-control" type="text" id="cellphone" 14 name="cellphone" value="<?=$_SESSION['user']['cellphone']?>"  /></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="job_title" class="label-primary">Job Title</label></div>
                                                                    <div><input class="form-control" type="text" id="jobtitle" 18 name="jobtitle" value="<?=$_SESSION['user']['jobtitle']?>" /></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="company" class="label-primary">Company / Organization</label></div>
                                                                    <div><input class="form-control" type="text" id="company" 23 name="company" value="<?=$_SESSION['user']['company']?>" /></div>
                                                                </div>
                                                            </div>
                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="website" class="label-primary">Website</label></div>
                                                                    <div><input class="form-control" type="text" id="website" 0 name="website" value="<?=$_SESSION['user']['website']?>"  /></div>
                                                                </div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                    <div><label for="blog" class="label-primary">Blog</label></div>
                                                                    <div><input class="form-control" type="text" id="blog" 0 name="blog" value="<?=$_SESSION['user']['blog']?>"  /></div>
                                                                </div>
                                                            </div>

                                                            <div class="g-group l-mar-top-4">
                                                                <div class="g-cell g-cell-1-1 l-mar-top-4">
                                                                    <h3 class="text-heading-secondary">Home Address:</h3>
                                                                </div>
                                                            </div>
                                                            <div class='js-d-cep'>

                                                              <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="home_address" class="label-primary">Address</label></div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" class="js-xd-cep-street" id="address1"  name="address1" data-automation="address1" value="<?=$_SESSION['user']['address1']?>"  /></div>
                                                            </div>

                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="home_addresslinetwo" class="label-primary">Address 2</label></div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" class="js-xd-cep-neighborhood" id="address2"  name="address2" data-automation="address2" value="<?=$_SESSION['user']['address2']?>"  /></div>
                                                            </div>

                                                            <div class="g-group">
                                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="home_city" class="label-primary">City</label></div>
                                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" class="js-xd-cep-city" id="city"  name="city" data-automation="city" value="<?=$_SESSION['user']['city']?>"  /></div>
                                                            </div>
                                                            <div class="js-d-state-block">

                                                                <div class="js-d-select-box" data-country="us">
                                                                    <label for="state" class="label-primary">
                                                                        State
                                                                    </label>
                                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                                        <select class="form-control"  id="state" name="state" data-automation="state" value="<?=$_SESSION['user']['state']?>">
                                                                            <option value="" selected="selected">- Select state -</option>
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
                                                                </div>

                                                                <div class='js-d-provinces'>
                                                                    <div class="g-group">
                                                                        <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                                            <label for="homecountry" class="label-primary">Country</label>
                                                                        </div>
                                                                        <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                                            <select class="form-control" id="country" name="country" data-automation="country" value="<?=$_SESSION['user']['country']?>">
                                                                                <option value="">Select a Country</option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" selected>Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>




                                                                    <div class="g-group">
                                                                        <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                                          <div><label for="home_zip" class="label-primary">Zip/Postal Code</label></div>
                                                                          <div class='js-cep-spinner'>
                                                                            <input class="form-control" type="text" class='js-xd-cep-input' id="zipcode"  name="zipcode" data-automation="zipcode" value="<?=$_SESSION['user']['zipcode']?>"  />
                                                                            </div><!-- End js-d-spinner -->
                                                                            <div><p class="hide form__field-error js-error-for-postal_code"></p></div>

                                                                        </div>

                                                                    </div>
                                                                </div><!--End js-d-provinces -->
                                                            </div>

                                                    </div><!-- End js-d-cep -->

                                                </div>

                                            </div>
                                            <div class="col-md-4 col-sm-4 col-xs-12">



                                               <div class="g-group l-mar-top-4">
                                                <div class="g-cell g-cell-1-1 l-mar-top-4">
                                                    <h3 class="text-heading-secondary">Billing Address:</h3>
                                                </div>
                                            </div>

                                        <div class='js-d-cep'>

                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="bill_address" class="label-primary">Address</label></div>
                                                    <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input class="form-control" type="text" id="address3"  name="address3" data-automation="address3" value="<?=$_SESSION['user']['address3']?>"  /></div>
                                                </div>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="bill_addresslinetwo" class="label-primary">Address 2</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address4"  name="address4" data-automation="address4" value="<?=$_SESSION['user']['address4']?>"  /></div>
                                            </div>

                                            <div class="g-group">
                                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="bill_city" class="label-primary">City</label></div>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="city2"  name="city2" data-automation="city2" value="<?=$_SESSION['user']['city2']?>"  /></div>
                                            </div>
                                            <div class=""  data-country="us">

                                                <label for="state" class="label-primary">
                                                    State
                                                </label>
                                                <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                    <select id="state" class="form-control" name="state" data-automation="state" value="<?=$_SESSION['user']['state2']?>">
                                                        <option value="" selected="selected">- Select state -</option>
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
                                            </div>
                                            <div class='js-d-provinces'>
                                                <div class="g-group">
                                                        <div class="g-cell g-cell-1-1 l-mar-top-2">
                                                          <label for="billcountry" class="label-primary">Country</label>
                                                      </div>
                                                      <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                                          <select class="form-control"  id="country2" name="country2" data-automation="country2" value="<?=$_SESSION['user']['country2']?>">
                                                            <option value="">Select a Country</option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" >Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" selected>United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                                        </select>
                                                        </div>
                                                </div>




                                                <div class="g-group">
                                                    <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                                      <div><label for="bill_zip" class="label-primary">Zip/Postal Code</label></div>
                                                      <div class='js-cep-spinner'>
                                                        <input type="text" class="form-control" id="zipcode2"  name="zipcode2" data-automation="zipcode2" value="<?=$_SESSION['user']['zipcode2']?>"  />
                                                    </div><!-- End js-d-spinner -->
                                                    <div><p class="hide form__field-error js-error-for-postal_code"></p></div>

                                                    </div>
                                                </div>
                                            </div><!--End js-d-provinces -->

                                        </div><!-- End js-d-cep -->


                            <div class="g-group l-mar-top-4">
                                <div class="g-cell g-cell-1-1 l-mar-top-4">
                                    <h3 class="text-heading-secondary">Shipping Address:</h3>
                                </div>
                            </div>
                            <div class='js-d-cep'>

                              <div class="g-group">
                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="ship_address" class="label-primary">Address</label></div>
                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address5"  name="address5" data-automation="address5" value="<?=$_SESSION['user']['address5']?>" /></div>
                            </div>

                            <div class="g-group">
                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="ship_addresslinetwo" class="label-primary">Address 2</label></div>
                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address6"  name="address6" data-automation="address6" value="<?=$_SESSION['user']['address6']?>" /></div>
                            </div>

                            <div class="g-group">
                                <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="ship_city" class="label-primary">City</label></div>
                                <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="city3"  name="city3" data-automation="city3" value="<?=$_SESSION['user']['city3']?>"  /></div>
                            </div>
                            <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                <label for="state" class="label-primary">
                                    State
                                </label>
                                <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                    <select id="state" class="form-control" name="state" data-automation="state" value="<?=$_SESSION['user']['state3']?>">
                                        <option value="" selected="selected">- Select state -</option>
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
                                <div class='js-d-provinces'>
                                  <div class="g-group">
                                    <div class="g-cell g-cell-1-1 l-mar-top-2">
                                      <label for="shipcountry" class="label-primary">Country</label>
                                  </div>
                                  <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                      <select class="form-control" id="country3" name="country3" data-automation="country3" value="<?=$_SESSION['user']['country3']?>">
                                        <option value="">Select a Country</option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" selected>Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                    </select>
                                </div>
                            </div>




                            <div class="g-group">
                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                  <div><label for="ship_zip" class="label-primary">Zip/Postal Code</label></div>
                                  <div class='js-cep-spinner'>
                                    <input type="text" class="form-control" id="zipcode3"  name="zipcode3" data-automation="zipcode3" value="<?=$_SESSION['user']['zipcode3']?>"  />
                                </div><!-- End js-d-spinner -->
                                </div>
                            </div>
                    </div><!--End js-d-provinces -->

                </div><!-- End js-d-cep -->


                <div class="g-group l-mar-top-4">
                    <div class="g-cell g-cell-1-1 l-mar-top-4">
                        <h3 class="text-heading-secondary">Work Address:</h3>
                    </div>
                </div>
                    <div class='js-d-cep'>

                      <div class="g-group">
                        <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="work_address" class="label-primary">Address</label></div>
                        <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address7"  name="address7" data-automation="address7" value="<?=$_SESSION['user']['address7']?>"  /></div>
                        </div>

                        <div class="g-group">
                            <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="work_addresslinetwo" class="label-primary">Address 2</label></div>
                            <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="address8"  name="address8" data-automation="address8" value="<?=$_SESSION['user']['address8']?>"  /></div>
                        </div>

                        <div class="g-group">
                            <div class="g-cell g-cell-1-1 l-mar-top-2"><label for="work_city" class="label-primary">City</label></div>
                            <div class="g-cell g-cell-1-1 g-cell-md-6-9"><input type="text" class="form-control" id="city4"  name="city" data-automation="city4"  value="<?=$_SESSION['user']['city4']?>"/></div>
                        </div>
                        <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                            <label for="state" class="label-primary">
                                State
                            </label>
                        </div>
                        <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                            <select id="state" class="form-control" name="state4" data-automation="state4" value="<?=$_SESSION['user']['state4']?>">
                                <option value="" selected="selected">- Select state -</option>
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
                        <div class='js-d-provinces'>
                            <div class="g-group">
                                <div class="g-cell g-cell-1-1 l-mar-top-2">
                                  <label for="workcountry" class="label-primary">Country</label>
                                  </div>
                                  <div class="g-cell g-cell-1-1 g-cell-md-6-9">
                                      <select class="form-control" id="country4" name="country4" data-automation="country4" value="<?=$_SESSION['user']['country4']?>">
                                        <option value="">Select a Country</option><option value="AF" >Afghanistan</option><option value="AX" >Åland Islands</option><option value="AL" >Albania</option><option value="DZ" >Algeria</option><option value="AS" >American Samoa</option><option value="AD" >Andorra</option><option value="AO" >Angola</option><option value="AI" >Anguilla</option><option value="AQ" >Antarctica</option><option value="AG" >Antigua and Barbuda</option><option value="AR" >Argentina</option><option value="AM" >Armenia</option><option value="AW" >Aruba</option><option value="AU" >Australia</option><option value="AT" >Austria</option><option value="AZ" >Azerbaijan</option><option value="BS" >Bahamas</option><option value="BH" >Bahrain</option><option value="BD" >Bangladesh</option><option value="BB" >Barbados</option><option value="BY" >Belarus</option><option value="BE" >Belgium</option><option value="BZ" >Belize</option><option value="BJ" >Benin</option><option value="BM" >Bermuda</option><option value="BT" >Bhutan</option><option value="BO" >Bolivia, Plurinational State of</option><option value="BQ" >Bonaire, Sint Eustatius and Saba</option><option value="BA" >Bosnia and Herzegovina</option><option value="BW" >Botswana</option><option value="BV" >Bouvet Island</option><option value="BR" >Brazil</option><option value="IO" >British Indian Ocean Territory</option><option value="BN" >Brunei Darussalam</option><option value="BG" >Bulgaria</option><option value="BF" >Burkina Faso</option><option value="BI" >Burundi</option><option value="CV" >Cabo Verde</option><option value="KH" >Cambodia</option><option value="CM" >Cameroon</option><option value="CA" >Canada</option><option value="KY" >Cayman Islands</option><option value="CF" >Central African Republic</option><option value="TD" >Chad</option><option value="CL" >Chile</option><option value="CN" >China</option><option value="CX" >Christmas Island</option><option value="CC" >Cocos (Keeling) Islands</option><option value="CO" >Colombia</option><option value="KM" >Comoros</option><option value="CG" >Congo</option><option value="CD" >Congo, The Democratic Republic of the</option><option value="CK" >Cook Islands</option><option value="CR" >Costa Rica</option><option value="CI" >Côte d'Ivoire</option><option value="HR" >Croatia</option><option value="CW" >Curaçao</option><option value="CY" >Cyprus</option><option value="CZ" >Czechia</option><option value="DK" >Denmark</option><option value="DJ" >Djibouti</option><option value="DM" >Dominica</option><option value="DO" >Dominican Republic</option><option value="EC" >Ecuador</option><option value="EG" >Egypt</option><option value="SV" >El Salvador</option><option value="GQ" >Equatorial Guinea</option><option value="ER" >Eritrea</option><option value="EE" >Estonia</option><option value="ET" >Ethiopia</option><option value="FK" >Falkland Islands (Malvinas)</option><option value="FO" >Faroe Islands</option><option value="FJ" >Fiji</option><option value="FI" >Finland</option><option value="FR" >France</option><option value="GF" >French Guiana</option><option value="PF" >French Polynesia</option><option value="TF" >French Southern Territories</option><option value="GA" >Gabon</option><option value="GM" >Gambia</option><option value="GE" >Georgia</option><option value="DE" >Germany</option><option value="GH" >Ghana</option><option value="GI" >Gibraltar</option><option value="GR" >Greece</option><option value="GL" >Greenland</option><option value="GD" >Grenada</option><option value="GP" >Guadeloupe</option><option value="GU" >Guam</option><option value="GT" >Guatemala</option><option value="GG" >Guernsey</option><option value="GN" >Guinea</option><option value="GW" >Guinea-Bissau</option><option value="GY" >Guyana</option><option value="HT" >Haiti</option><option value="HM" >Heard Island and McDonald Islands</option><option value="VA" >Holy See (Vatican City State)</option><option value="HN" >Honduras</option><option value="HK" >Hong Kong</option><option value="HU" >Hungary</option><option value="IS" >Iceland</option><option value="IN" >India</option><option value="ID" >Indonesia</option><option value="IQ" >Iraq</option><option value="IE" >Ireland</option><option value="IM" >Isle of Man</option><option value="IL" >Israel</option><option value="IT" >Italy</option><option value="JM" >Jamaica</option><option value="JP" >Japan</option><option value="JE" >Jersey</option><option value="JO" >Jordan</option><option value="KZ" >Kazakhstan</option><option value="KE" >Kenya</option><option value="KI" >Kiribati</option><option value="KR" >Korea, Republic of</option><option value="KW" >Kuwait</option><option value="KG" >Kyrgyzstan</option><option value="LA" >Lao People's Democratic Republic</option><option value="LV" >Latvia</option><option value="LB" >Lebanon</option><option value="LS" >Lesotho</option><option value="LR" >Liberia</option><option value="LY" >Libya</option><option value="LI" >Liechtenstein</option><option value="LT" >Lithuania</option><option value="LU" >Luxembourg</option><option value="MO" >Macao</option><option value="MK" >Macedonia, Republic of</option><option value="MG" >Madagascar</option><option value="MW" >Malawi</option><option value="MY" >Malaysia</option><option value="MV" >Maldives</option><option value="ML" >Mali</option><option value="MT" >Malta</option><option value="MH" >Marshall Islands</option><option value="MQ" >Martinique</option><option value="MR" >Mauritania</option><option value="MU" >Mauritius</option><option value="YT" >Mayotte</option><option value="MX" >Mexico</option><option value="FM" >Micronesia, Federated States of</option><option value="MD" >Moldova, Republic of</option><option value="MC" >Monaco</option><option value="MN" >Mongolia</option><option value="ME" >Montenegro</option><option value="MS" >Montserrat</option><option value="MA" >Morocco</option><option value="MZ" >Mozambique</option><option value="MM" >Myanmar</option><option value="NA" >Namibia</option><option value="NR" >Nauru</option><option value="NP" >Nepal</option><option value="NL" >Netherlands</option><option value="NC" >New Caledonia</option><option value="NZ" >New Zealand</option><option value="NI" >Nicaragua</option><option value="NE" >Niger</option><option value="NG" selected>Nigeria</option><option value="NU" >Niue</option><option value="NF" >Norfolk Island</option><option value="MP" >Northern Mariana Islands</option><option value="NO" >Norway</option><option value="OM" >Oman</option><option value="PK" >Pakistan</option><option value="PW" >Palau</option><option value="PS" >Palestine, State of</option><option value="PA" >Panama</option><option value="PG" >Papua New Guinea</option><option value="PY" >Paraguay</option><option value="PE" >Peru</option><option value="PH" >Philippines</option><option value="PN" >Pitcairn</option><option value="PL" >Poland</option><option value="PT" >Portugal</option><option value="PR" >Puerto Rico</option><option value="QA" >Qatar</option><option value="RE" >Réunion</option><option value="RO" >Romania</option><option value="RU" >Russian Federation</option><option value="RW" >Rwanda</option><option value="BL" >Saint Barthélemy</option><option value="SH" >Saint Helena, Ascension and Tristan da Cunha</option><option value="KN" >Saint Kitts and Nevis</option><option value="LC" >Saint Lucia</option><option value="MF" >Saint Martin (French part)</option><option value="PM" >Saint Pierre and Miquelon</option><option value="VC" >Saint Vincent and the Grenadines</option><option value="WS" >Samoa</option><option value="SM" >San Marino</option><option value="ST" >Sao Tome and Principe</option><option value="SA" >Saudi Arabia</option><option value="SN" >Senegal</option><option value="RS" >Serbia</option><option value="SC" >Seychelles</option><option value="SL" >Sierra Leone</option><option value="SG" >Singapore</option><option value="SX" >Sint Maarten (Dutch part)</option><option value="SK" >Slovakia</option><option value="SI" >Slovenia</option><option value="SB" >Solomon Islands</option><option value="SO" >Somalia</option><option value="ZA" >South Africa</option><option value="GS" >South Georgia and the South Sandwich Islands</option><option value="SS" >South Sudan</option><option value="ES" >Spain</option><option value="LK" >Sri Lanka</option><option value="SR" >Suriname</option><option value="SJ" >Svalbard and Jan Mayen</option><option value="SZ" >Swaziland</option><option value="SE" >Sweden</option><option value="CH" >Switzerland</option><option value="TW" >Taiwan R.O.C.</option><option value="TJ" >Tajikistan</option><option value="TZ" >Tanzania, United Republic of</option><option value="TH" >Thailand</option><option value="TL" >Timor-Leste</option><option value="TG" >Togo</option><option value="TK" >Tokelau</option><option value="TO" >Tonga</option><option value="TT" >Trinidad and Tobago</option><option value="TN" >Tunisia</option><option value="TR" >Turkey</option><option value="TM" >Turkmenistan</option><option value="TC" >Turks and Caicos Islands</option><option value="TV" >Tuvalu</option><option value="UG" >Uganda</option><option value="UA" >Ukraine</option><option value="AE" >United Arab Emirates</option><option value="GB" >United Kingdom</option><option value="US" >United States</option><option value="UM" >United States Minor Outlying Islands</option><option value="UY" >Uruguay</option><option value="UZ" >Uzbekistan</option><option value="VU" >Vanuatu</option><option value="VE" >Venezuela, Bolivarian Republic of</option><option value="VN" >Viet Nam</option><option value="VG" >Virgin Islands, British</option><option value="VI" >Virgin Islands, U.S.</option><option value="WF" >Wallis and Futuna</option><option value="EH" >Western Sahara</option><option value="YE" >Yemen</option><option value="ZM" >Zambia</option><option value="ZW" >Zimbabwe</option>
                                    </select>

                                </div>
                            </div>

                            <div class="g-group">
                                <div class="g-cell g-cell-1-1 g-cell-md-3-9 l-mar-top-2">
                                  <div><label for="work_zip" class="label-primary">Zip/Postal Code</label></div>
                                  <div class='js-cep-spinner'>
                                    <input type="text" class="form-control" id="zipcode4"  name="zipcode4" data-automation="zipcode4" value="<?=$_SESSION['user']['zipcode4']?>"  />
                                </div><!-- End js-d-spinner -->

                                    </div>
                            </div>
                        </div>
                        
                    </div>
                <!-- End js-d-cep -->

            <br>
            </div>

            <div class="form-group">
                            <button data-dismiss="modal" class="btn btn-default" name="close" type="button">Close</button>
                            <button class="btn btn-success" name="save" type="submit">Save changes</button>
            </div>
            </div>
            </div>
            <!--<button type="submit" class="btn" id="save" name="save"  style="height: 50px; width: 120px; left: 50; top: 50;" >Update Profile</button>-->
            </div>

            </div>

            

            </div>

            </div>

            </section>
            </div>


            </section>
            </section>
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