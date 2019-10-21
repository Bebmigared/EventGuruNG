
<?php
session_start();
include 'db.php';
$data = htmlspecialchars($_GET["d"]);
$_SESSION['d'] = $data;
header('location: eventdetails.php');
?>