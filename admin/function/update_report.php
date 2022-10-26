<?php

require_once('../includes/conn.php');


if (isset($_POST['update_form'])) {
 
    $id = $_POST['id'];

    $issue_alarm_req_by = $_POST['issue_alarm_req_by'];
    $issue_alarm_req_date = $_POST['issue_alarm_req_date'];
    $issue_alarm_req_position = $_POST['issue_alarm_req_position'];
    $alarm_issue_by = $_POST['alarm_issue_by'];
    $alarm_issue_date = $_POST['alarm_issue_date'];
    $alarm_issue_position = $_POST['alarm_issue_position'];
    $lift_alarm_req_by = $_POST['lift_alarm_req_by'];
    $lift_alarm_req_date = $_POST['lift_alarm_req_date'];
    $lift_alarm_req_position = $_POST['lift_alarm_req_position'];
    $alarm_lifted_by = $_POST['alarm_lifted_by'];
    $alarm_lifted_date = $_POST['alarm_lifted_date'];
    $alarm_lifted_position = $_POST['alarm_lifted_position'];
    $reason_lift = $_POST['reason_lift'];

  

$sql="UPDATE reports SET status = '1' + '1' , issue_alarm_req_by = '$issue_alarm_req_by', issue_alarm_req_date = '$issue_alarm_req_date', issue_alarm_req_position = '$issue_alarm_req_position', alarm_issue_by = '$alarm_issue_by', alarm_issue_date = '$alarm_issue_date', alarm_issue_position = '$alarm_issue_position', lift_alarm_req_by = '$lift_alarm_req_by', lift_alarm_req_date = '$lift_alarm_req_date', lift_alarm_req_position = '$lift_alarm_req_position', alarm_lifted_by = '$alarm_lifted_by', alarm_lifted_date = '$alarm_lifted_date', alarm_lifted_position = '$alarm_lifted_position', reason_lift = '$reason_lift' WHERE id=$id";
// $sqli="UPDATE notification SET status = '1' WHERE request_id=$id";

    if ($mysqli->query($sql) === true) 
{ 

    echo "<script>alert('Successfully Updated!'); window.location='../v_issue.php'</script>"; 
} 
else
{ 
    echo "<script>alert('Error Occured!');";
        $mysqli->error; 
} 
  
// Close the  connection 
$mysqli->close(); 
}
?> 
