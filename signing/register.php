<?php
session_start();
//$con = mysqli_connect('127.0.0.2', 'root', '');
include ('../db.php');
//mysqli_select_db($con, 'emadb');

$firstname = $_POST ['firstname'];
$lastname = $_POST ['lastname'];
$email = $_POST ['email'];
$username = $_POST ['username'];
$password = $_POST ['password'];

$s = "select * from where username = '$username'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num == 1){
	echo"Username already taken";
}
else {
	$reg = "insert into registered(firstname, lastname, email, username, password) values ('$firstname', '$lastname', '$email', '$username', '$password')";
	mysqli_query ($con, $reg);
	echo "Registration Successful";
	if ($reg) 
                        {
                                    echo "<script type='text/javascript'>alert('Your registration with EventGuru.ng has been submitted successfully')</script>";
                                    echo "<script language='javascript' type='text/javascript'> location.href='thank-you' </script>";
                                     $to = $email;
                                 $subject = "EventGuru.ng Registration for $firstname $lastname";
                                 $message = "
        <html>
        <head>
        <title>EventGuru.ng Registration Notification</title>
        </head>
        <body>
        <p>Dear $firstname,</p>
        <p>Thanks for choosing <strong>EventGuru.ng</strong>.</p>
        <p>Welcome to the world of <strong>Unlimited Events Opportunities</strong>.</p>
        <br><strong>Admin, EventGuru.ng</strong>
        <br>info@eventguru.ng
        </body>
        </html>
        ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
        $headers .= 'From: EventGuru.ng Admin<info@eventguru.ng>' . "\r\n";

        mail($to,$subject,$message,$headers);
        }
        else
        {
             echo "<script type='text/javascript'>alert('Your EventGuru registration was not successful at this time, please try again later')</script>";
        }
}
?>
