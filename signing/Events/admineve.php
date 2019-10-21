<?php
include '../../db.php';
//$uid = $_SESSION['user']['id'];
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
$myeve = [];
$sql = "SELECT * FROM events";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = $result->fetch_assoc()) {
        $myeve[] = $row;
        count($myeve);

    }
}
$db->close();
?>