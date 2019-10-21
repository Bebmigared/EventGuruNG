<?php
session_start();
include 'db.php';
$uid = $_SESSION['user']['id'];
//$db = mysqli_connect('127.0.0.1', 'root', '', 'emadb');
$myeve = [];
$sql = "SELECT * FROM eregistered WHERE orderby = $uid";
$result = mysqli_query($db, $sql);
if (mysqli_num_rows($result) != 0) {
    while ($row = $result->fetch_assoc()) {
        $mytik[] = $row;
        count($mytik);
        print_r (count($mytik));
        //$eventname=$mytik['eventname'];
        //print_r ($mytik);
        return false;
    }
}


        //$data = "SELECT eventname FROM events WHERE id = $eventname";
        //$results = mysqli_query($db, $data);
        //$ample = $results -> fetch_assoc();
        //$name[]=$ample;
        //echo $ample;
        //print_r ($mytik);
        

//$registerd_pple = [];
//$data = "SELECT * FROM eregistered";
//$result = mysqli_query($db, $data) or  mysqli_connect_error($data);
//if (mysqli_num_rows($result) > 0) {
//while ($erow = mysqli_fetch_assoc($result)) {
//$registerd_pple[] = $erow;
//}
//}

//for($r =0; $r  < count($registerd_pple); $r++){
    //for($reg =0; $reg < count($myeve); $reg++){
       //if($myeve[$reg]['id'] == $registerd_pple[$r]['eventname']){
        //if(!isset($myeve[$reg]['totalsum']))  $myeve[$reg]['totalsum'] = 0; 
        //$myeve[0]['totalsum'] = $myeve[0]['totalsum'] + 1;
           //if(isset($myeve[$reg]['registered']))$myeve[$reg]['registered']++;
           //else $myeve[$reg]['registered'] = 1;
       //}
    //}
//}

//print_r ($myeve[0]['eventname']);
//Print_r ($myeve);
//print_r ($_SESSION['eventdata']);
//return false;



//} else {
//$msg="";
//$msg = "NO Records";
//}
//echo 'Event ID =' ;
//Print_r ($ueve);
//echo 'NO of registered users =' ;
//Print_r ($count);
//end($myevent);
//}


$db->close();
?>