<?php
session_start();
if(!isset($_SESSION['user'])){ //if login in session is not set
	header("Location: ../index.php?location=" . urlencode($_SERVER['REQUEST_URI']));
	$_SESSION['current_page'] = $_SERVER['REQUEST_URI'];
}

?>
<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>EventGuru - Manage your event </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
<link href="main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <!--<div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div> -->   
            <div class="app-header__content">
                <!--<div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>       
                </div>-->
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <!--ERROR START-->
                            <?php if(isset($_SESSION['user']) && count($_SESSION['user']) > 0) {?>
                            <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <a type="button" tabindex="0" class="dropdown-item">My Events</a>
                                            <a type="button" tabindex="0" class="dropdown-item">Profile</a>
                                            <a type="button" tabindex="0" class="dropdown-item">Help</a>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <a type="button" tabindex="0" class="dropdown-item">Logout</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                    <?=$_SESSION['user']['firstname']?>
                                    </div>
                                    <div class="widget-subheading">
                                    <a href="signing/logout.php"> <i class="fa fa-lock"></i> Logout </a>
                                    </div>
                                </div>
                                
                                
						
						<?php }else { ?>
									<a href="signing/index.php?location=" . urlencode($_SERVER['REQUEST_URI'])); $_SESSION['current_page'] = $_SERVER['REQUEST_URI']; class="buy-ticket">LOGIN/SIGN UP </a> 
						<?php } ?>
						
                                </div>
                            </div>
                        </div>
                </div>        
                </div>
            </div>
        </div>          
        <div class="app-main">
                <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <div class="logo-src"></div>
                        <div class="header__pane ml-auto">
                            <div>
                                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                            </button>
                        </span>
                    </div>    
                    <div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu">
                                <li class="app-sidebar__heading"><a href="index.php">Dashboard</a></li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Events
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="elements-buttons-standard.html">
                                                <i class="metismenu-icon"></i>
                                                Create Event
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>Edit Event Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Manage My Event
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>Manage My Events
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>My Managed Event
                                            </a>
                                        </li>
                                        <li>
                                            <a href="">
                                                <i class="metismenu-icon">
                                                </i>Edit My Managed Event Details
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>    <div class="app-main__outer">
                    <div class="app-main__inner">

                        <div class="app-page-title">
                            <div class="page-title-wrapper">
                                <div class="page-title-heading">
                                    <div class="page-title-icon">
                                        <i class="pe-7s-note2 icon-gradient bg-happy-fisher">
                                        </i>
                                    </div>
                                    <div>Let EventGuru Manage My Event
                                        <div class="page-title-subheading">Do you want to have an event but don&#x27;t know how to go about it? EventGuru can manage your event for you. <br>All you need do is answer a few questions that would allow us understand what you want for your event.
                                        </div>
                                    </div>
                                </div>
                                
                                </div>    
                            </div>

                        

                    <div class="tab-content">
                    <form class="" method="POST" action="">
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="main-card mb-3 card">
                                            <div class="card-body"><h5 class="card-title">Describe Your Event</h5>
                                                <div>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Type/Category of Event</span></div>
                                                        <input placeholder="Type of event you are having" name="category" type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Your Budget Amount</span></div>
                                                        <input placeholder="Amount you plan to spend" name="amount" type="number" class="form-control">
                                                        <div class="input-group-append"><span class="input-group-text">.00</span></div>
                                                    </div>
                                                    <br>
                                                    <div class="position-relative form-group">
                                                        <label for="exampleCustomSelect" class="">Do you have a Prefered location?</label>
                                                    <select  onchange="paidEvent(this);" type="select" id="exampleCustomSelect" name="preferredlocation" class="custom-select">
                                                                <option value="">Select</option>
                                                                <option value="yes">YES</option>
                                                                <option value="no">NO</option>
                                                            </select></div>
                                                            <script>
											    function paidEvent(that) {
                                                    if (that.value == "yes") {
                                                  /*alert("Note: You will be directed to make payment");*/
                                                        document.getElementById("ifYes").style.display = "block";
                                                    } else {
                                                        document.getElementById("ifYes").style.display = "none";
                                                    }
                                                }
											</script>
                                                    <br>
                                                    <div class="input-group" id="ifYes" style="display: none;">
                                                        <div class="input-group-prepend"><span class="input-group-text">Preferred Area</span></div>
                                                        <input placeholder="Name of the area you want your event at" name="preferred_area" type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group" id="ifYes" style="display: none;">
                                                        <div class="input-group-prepend"><span class="input-group-text">Preferred Venue</span></div>
                                                        <input placeholder="Name of your preferred Event Center" name="preferred_venue" type="text" class="form-control"></div>
                                                    <br>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text">Number of Expected Attendants</span></div>
                                                        <input placeholder="No of people you expect" name="expected_attendants"type="number" class="form-control"></div>
                                                    <br>
                                                                                                       
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                            <div class="main-card mb-3 card">
                                                <div class="card-body"><h5 class="card-title">Specify Things You want added to your Budget</h5>
                                                    <div class="position-relative form-group">
                                                        <div>
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox" class="custom-control-input"><label class="custom-control-label" name="feeding" for="exampleCustomCheckbox">Feeding</label></div>
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" name="accomodation" for="exampleCustomCheckbox2">Accomodation</label></div>
                                                            <div class="custom-checkbox custom-control"><input type="checkbox" id="exampleCustomCheckbox2" class="custom-control-input"><label class="custom-control-label" name="transportation" for="exampleCustomCheckbox2">Transportation</label></div>
                                                        </div>
                                                    </div>
                                                            <div class="position-relative form-group">
                                                                <label for="exampleCustomSelect" class="">Do you have a Prefered location?</label>
                                                                <select type="select" id="exampleCustomSelect" name="customSelect" class="custom-select">
                                                                <option value="">Select</option>
                                                                <option>YES</option>
                                                                <option>NO</option>
                                                            </select></div>
                                                            
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">Your Details</h5>
                                        <!--<form class="">-->
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleEmail11" class="">Email</label><input name="email" id="exampleEmail11" placeholder="your email address" type="email" class="form-control"></div>
                                                </div>
                                            </div>
                                            <div class="position-relative form-group"><label for="exampleAddress" class="">Address</label><input name="address" id="exampleAddress" placeholder="eg. 1234 My St" type="text" class="form-control"></div>
                                            <div class="position-relative form-group"><label for="exampleAddress2" class="">Address 2</label><input name="address2" id="exampleAddress2" placeholder="e.g 131 My bus stop" type="text" class="form-control">
                                            </div>
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="position-relative form-group"><label for="exampleCity" class="">City</label><input name="city" id="city" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="position-relative form-group"><label for="exampleState" class="">State</label><input name="state" id="state" type="text" class="form-control"></div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="position-relative form-group"><label for="exampleZip" class="">Zip Code</label><input name="zip" id="zip" type="text" class="form-control"></div>
                                                </div>
                                            </div>
                                            
                                            <button class="mt-2 btn btn-primary">Submit</button>
                                        <!--</form> -->
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                    </form>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <!--<div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 1
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                Footer Link 3
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link">
                                                <div class="badge badge-success mr-1 ml-0">
                                                    <small>NEW</small>
                                                </div>
                                                Footer Link 4
                                            </a>
                                        </li>
                                    </ul>
                                </div>-->
                            </div>
                        </div>
                    </div>  
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    </div>
<script type="text/javascript" src="assets/scripts/main.js"></script></body>

</html>
