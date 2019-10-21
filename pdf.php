<?php 
//$eventname =$_POST['eventname'];
//$ticketno =$_POST['ticketno'];
session_start();
$ticketno = $_SESSION['ticket']['ticketno'];
//$address =$_POST['address'];
//$date =$_POST['date'];
//$tickettype =$_POST['tickettype'];
//$firstname =$_POST['firstname'];
//$lastname =$_POST['lastname'];
//$orderno =$_POST['orderno'];
//$eventname =$_POST['eventname'];
//$eventname =$_POST['eventname'];
//$eventname =$_POST['eventname'];
//$eventname =$_POST['eventname'];

require "fpdf181/fpdf.php";
//$con = mysqli_connect('localhost','root','');
//mysqli_select_db($con,'emadb');
include 'db.php';




//GET data from DB
$sql = "SELECT * FROM eregistered WHERE ticketno = $ticketno";
$query = mysqli_query($db, $sql);
while ($row = mysqli_fetch_assoc($query)){

    $eventname = $row['eventname'];
    $fullname = $row['fullname'];
    $ticket = $row['ticket'];
    $tickno = $row['ticketno'];
    $venue = $row['venue'];
    $location = $row['location'];
    $startdate = $row['startdate'];
    $starttime = $row['starttime'];
    $enddate = $row['enddate'];
    $endtime = $row['endtime'];
    $contactphone = $row['contactphone'];
    $contactemail = $row['contactemail'];
    $eventcategory = $row['eventcategory'];
    $organizer = $row['organizer'];
    $ordertime = $row['ordertime'];
    $noticket = $row['noticket'];

    
    
    
}

$pdf = new FPDF();
$pdf -> AliasNbPages();
$pdf -> AddPage('P','A4',0);
//$pdf -> headerTable();
$pdf->SetDrawColor(10,50,100);
$pdf->SetFillColor(230,230,230);
//define style for data to be printed on PDF
$pdf->SetFont('Arial','B',16);
    //Here concatenate $questionName and $name
    //$pdf->MultiCell(40,10,sprintf("%s %s", $questionName, $name));

    //
    //class myPDF extends FPDF{
        //function header(){
        
        $pdf->Image('logo.png',5,16);
        $pdf->Ln(40);
        
        function headerTable(){
        }

    //}
    
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(30,15,'Ticket No:','','','R');
        $pdf->Cell(33,15,$tickno,'',0,'L');
        $pdf->Ln();
        $pdf->SetFont('Times','',10);
        $pdf->Cell(30,10,'Hello!','',0);
        $pdf->SetFont('Times','B',10);
        $pdf->Cell(30,10,$fullname ,'',0);
    $pdf->Ln();
    $pdf->SetFont('Times','',12);
    $pdf->Cell(30,10,'Here is your ticket to attend','',0);
    $pdf->Cell(30,10,' ','',0);
    $pdf->SetFont('Times','B',16);
    $pdf->Cell(30,10,$eventname,0,0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(30,10,'Event Details','',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(30,10,'Venue :','',0);
    $pdf->SetFont('Times','',10);
    $pdf->Cell(30,10,$venue,'','');
    $pdf->Cell(30,10,', ','',0);
    $pdf->Cell(30,10,$location,'','');
    $pdf->Ln();
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(30,10,'Begining On:','',0);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(35,10,$startdate,'',0);
    $pdf->Cell(35,10,', ','',0);
    $pdf->Cell(35,10,$starttime,'',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(30,10,'Ending On:','',0);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(35,10,$enddate,'',0);
    $pdf->Cell(35,10,', ','',0);
    $pdf->Cell(35,10,$endtime,'',0);
    $pdf->Ln();
    $pdf->Cell(30,10,'Organized By','',0);
    $pdf->Cell(30,10,$organizer,'',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(30,10,'For Details, call: ','',0);
    $pdf->SetFont('Times','',10);
    $pdf->Cell(36,10,$contactphone,'',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',10);
    $pdf->Cell(30,10,', Or Email:','',0);
    $pdf->Cell(30,10,$contactemail,'',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',14);
    $pdf->Cell(30,10,'Ticket Type: ','',0);
    $pdf->SetFont('Times','',12);
    $pdf->Cell(35,10, $noticket,'','');
    $pdf->Cell(30,10, '','','');
    $pdf->Cell(30,10, $ticket,'',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',14);
    $pdf->Cell(30,10,'Order Information:','',0);
    $pdf->Ln();
    $pdf->SetFont('Times','B',8);
    $pdf->Cell(30,10,'Order By: ','',0);
    $pdf->Cell(30,10,$fullname,'',0);
    $pdf->Ln();
    $pdf->Cell(30,10,'Ordered On:','',0);
    $pdf->Cell(30,10,$ordertime,0,0);
    $pdf->Ln();

    $pdf->Cell(190,0,'','T',1,'',true);
    $pdf->SetFont('Times','B',12);
    $pdf->Cell(0,20,'Eventguru  ', 80,60,'C');
    $pdf->Cell(0,10,'Page'.$pdf->PageNo().'/{nb}',0,0,'C');
    


$pdf -> Output("EventGuru.pdf","D");
?>