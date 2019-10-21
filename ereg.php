<?php
//Database Connection
//session_start();
//$con = mysqli_connect('127.0.0.2', 'root', '');
//mysqli_select_db($con, 'emadb');
include 'db.php';

         // define variables and set to empty values
        $fullnameErr = "";
        $emailErr = "";
        $msg = "";
        $fullname = "";
        $email = "";
        $eventname = "";
        $ticket = "";
        $ticketno = "";
        $contactemail="";
        $contactphone="";
        $venue="";
        $locations="";
        $startdate="";
        $starttime="";
        $enddate="";
        $endtime="";
        $organizer="";
        $seats="";
        $organizer="";
        $orderby="";
        $a="";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["fullname"])) {
               $fullnameErr = "Name is required";
            }            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            } 
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format"; 
             }
             if (!filter_var($eventname, FILTER_VALIDATE_EMAIL)) {
               $eventnameErr = "Invalid email format"; 
            }
             
            $a = mt_rand(100000,999999); 

             if (($_POST)) {
                //Start Others

            $fullname = $_POST["fullname"];
            $email = $_POST["email"];
            $ticket =$_POST['ticket'];
            $contactemail =$_POST['contactemail'];
            $contactphone =$_POST['contactphone'];
            $eventid =$_POST['id'];
            $eventname =$_POST['eventname'];
            $venue =$_POST['venue'];            
            $locations =$_POST['locations'];
            $startdate =$_POST['startdate'];
            $starttime =$_POST['starttime'];
            $organizer =$_POST['organizer'];
            $enddate =$_POST['enddate'];
            $endtime =$_POST['endtime'];
            $seats =$_POST['seats'];
            $category =$_POST['eventcategory'];
            $orderby = $_POST['orderby'];
            $ordername = $_POST['ordername'];
            $noticket = $_POST['noticket'];

            $_SESSION['fullname']=$fullname;
            $_SESSION['email']=$email;
            $ticketno=$a;
            //echo "Registration Successful";
            //echo $fullname;
            //echo $email;
            //echo $ticket;
            //echo $eventname;
            //echo $eventid;
            //echo $venue;
            //echo $ticketno;
            //echo $contactemail;
            //echo $contactphone;
            //echo $locations;
            //echo $startdate;
            //echo $starttime;
            //echo $enddate;
            //echo $endtime;
            //echo $seats;
            //echo $organizer;
            //echo $category;
            //echo $noticket;
            //echo $ordername;
            //return false;
            // check if e-mail address is well-formed
            $reg = "INSERT INTO eregistered (eventname, fullname, email, ticket, orderby, ordername, ticketno, venue, location, startdate, starttime, enddate, endtime, contactphone, contactemail, ordertime, noticket) VALUES ('$eventid', '$fullname', '$email', '$ticket','$orderby', '$ordername','$ticketno','$venue','$locations','$startdate','$starttime','$enddate','$endtime','$contactphone','$contactemail',NOW(),'$noticket')";
            $regist = mysqli_query($db, $reg) or die(mysqli_error($db));
            if ($regist) {
                $last_id = mysqli_insert_id($db);
                
               
            }
            $e = $last_id;
            
             require 'mailing.php'   ;
                                     $to = $email;
                                 $subject = "Success Registration for $eventname";
                                 $msg = "
        <html>
        <head>
        <title>You have successfully Registered fication</title>
        </head>
        <body>
        <p>Dear $fullname,</p>
        <p>Thanks for choosing <strong>EventGuru</strong>.</p>
        <p>You have successfully completed your registration for $eventname.</p>
        <p><strong>EventGuru World Unlimited Events</strong>.</p>
        <p>Best Regards,</p>
        <br><i>Admin,</i>
        <br><strong>EventGuru</strong>
        <br>info@eventguru.com
        </body>
        </html>
        ";
        
		sendmail($to,$msg,$subject);
                
            
            header ('location: ticket.php?t='.$e );
            
            //$_SESSION['name']=$fullname;
            //$name =$fullname;
            //$receiptno =$ticketno;
            //$_SESSION['receipt']=$ticketno;
            
            //echo $ordername;
            //echo $orderby;
            //echo $fullname;
            //echo $email;
            //echo $ticket;
            //echo $ticketno;

            //return false;

            
            //$msg = "Registration Successful";
             }
             else {
                echo "Registration not successful";
             }
            
         }
         
      ?>

