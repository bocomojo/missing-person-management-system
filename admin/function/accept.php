<?php

require_once('../includes/conn.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

$sql="UPDATE reports SET status = '1' WHERE id=$id";
$sqli="UPDATE notification SET status = '1' WHERE request_id=$id";

    if ($mysqli->query($sql) === true && $mysqli->query($sqli) === true) 
{ 

    echo "<script>alert('Successfully Accepted!!!'); window.location='../v_issue.php'</script>"; 
} 
else
{ 
    echo "<script>alert('Error Occured!!!'); window.location='../requests.php'</script>";
        $mysqli->error; 
} 
  
// Close the  connection 
$mysqli->close(); 
}
?> 
