<?php
include 'db.php';

$msg =$_POST['msg'];
$msgby =$_POST['msgby'];
$eventname =$_POST['eventname'];
$msgowner =$_POST['msgowner'];

//echo $msg;
    //echo $msgby;
    //echo $msgowner;
    //echo $eventname;
    //return false;
$sql = "INSERT INTO chats (msg, msgby, msgowner, eventname, date) VALUES ('$msg','$msgby','$msgowner','$eventname',NOW() )";
$result = mysqli_query($db, $sql);
//if (mysqli_num_rows($result) != 0) {
    //mysqli_query($db, $sql);
    //echo $msg;
    //echo $msgby;
    //echo $msgowner;
    //echo $eventname;
    //return false;

    header('location:chat.php');
//}
?>