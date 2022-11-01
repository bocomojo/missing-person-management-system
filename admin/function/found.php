<?php

require_once('../includes/conn.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

$sql="UPDATE reports SET status = '5' WHERE id=$id";
// $sqli="UPDATE notification SET status = '2' WHERE request_id=$id";

    if ($mysqli->query($sql) === true) 
{ 

    echo "<script>alert('Action Successful!!!'); window.location='../v_issue.php'</script>"; 
} 
else
{ 
    echo "<script>alert('Error Occured!!!'); window.location='../v_issue.php'</script>";
        $mysqli->error; 
} 
  
// Close the  connection 
$mysqli->close(); 
}
?> 