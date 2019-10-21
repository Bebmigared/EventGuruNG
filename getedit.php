<?php
include 'db.php';
session_start();
htmlspecialchars($_GET["e"]);
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
$data=htmlspecialchars($_GET["e"]);
//echo $data;
//return false;
//$event = [];
$sql = "SELECT * FROM events where id= '$data'";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = $result->fetch_assoc()) {
    //print_r ($data);
    
    //return false;
        //$datas[] = $row;
        //print_r($row);
        $_SESSION['edit_this'] = $row;
        //count($datas);

        header ('location: ../edit.php');
        //$id = $row['id'];
        //$event = $row['eventname'];
        //$startdate = $row['startdate'];
        //$venue = $row['venue'];
        //$location = $row['locations'];
        //$category = $row['eventcategory'];
        //$event = $row['eventname'];
        //$event = $row['eventname'];
        //$event = $row['eventname'];
        //$event = $row['eventname'];
        //$event = $row['eventname'];
        //if ($i==1) {
            //$id = $row['id'];
            //$i++;
        }
        //$id = $row["id"];
        //$_SESSION['this_event'] = $row;
        //$_SESSION['id'] = $first_id;
        //$_SESSION['id'] =$id;
    //}
    //header ('location: event1.php');
    //$id = $first_id;
}
else {
    echo 'Couldnt connect';
}

//$row = $result->fetch_assoc()
 // $id = $row["id"];
    //$rowval = mysqli_fetch_array($result);
     //$_SESSION['user'] = $rowval;
     //$_SESSION['id'] =$id;
//while ($row = $result->fetch_assoc()) {
    //if ($i===0){
          //= $row["Order_ID"];}
        //$i++;

  
//}
$db->close();
?>