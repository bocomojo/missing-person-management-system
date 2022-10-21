<?php

require_once('../includes/conn.php');
session_start();
$username = $_SESSION['name'] . " ". $_SESSION['surname'];

date_default_timezone_set('Asia/Manila');
$dateToday = date("m-d-Y h:i:sa");
$positionArray = ['','Admin', 'Desk officer', 'User'];
$position = $positionArray[$_SESSION['permission']];

if (isset($_GET['id'])) {

$id = $_GET['id'];

$sql="UPDATE reports SET status = '1', accepted_by = '$username', accepted_date = '$dateToday', position = '$position' WHERE id=$id";
// $sqli="UPDATE notification SET status = '1' WHERE request_id=$id";

    if ($mysqli->query($sql) === true) 
{ 

    echo "<script>alert('Successfully Accepted!!!'); window.location='../v_issue.php'</script>"; 
} 
else
{ 
    echo "<script>alert('Error Occured!!!');";
        $mysqli->error; 
} 
  
// Close the  connection 
$mysqli->close(); 
}
?> 
