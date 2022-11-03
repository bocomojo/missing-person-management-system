<?php

require_once('../includes/conn.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

$sql="UPDATE reports SET notification = '3' WHERE id=$id";

    if ($mysqli->query($sql) === true) 
{ 

    echo "<script>window.location='../notification.php'</script>"; 
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
