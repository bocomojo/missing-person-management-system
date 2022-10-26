<?php

require_once('../includes/conn.php');
date_default_timezone_set('Asia/Manila');


if (isset($_POST['update_form'])) {
 
    $id = $_POST['id'];
    $status;

    $query=mysqli_query($mysqli,"select status from `reports` where id = $id");
        while($row=mysqli_fetch_array($query)) {
            $status = $row['status'];
            echo $status;
        }
    

    $issue_alarm_req_by = $_POST['issue_alarm_req_by'];

    //for ISSUANCE OF ALARM REQUESTED
    $issue_alarm_req_date = $_POST['issue_alarm_req_date'];
    // $issue_alarm_d = date_create($issue_alarm_req_date);
    // $issue_alarm_send = date_format($issue_alarm_d,"F d, Y h:i:s A");

    $issue_alarm_req_position = $_POST['issue_alarm_req_position'];
    $alarm_issue_by = $_POST['alarm_issue_by'];

    //for alarm issued
    $alarm_issue_date = $_POST['alarm_issue_date'];
    // $alarm_d = date_create($alarm_issue_date);
    // $alarm_d_send = date_format($alarm_d,"F d, Y h:i:s A");


    $alarm_issue_position = $_POST['alarm_issue_position'];
    $lift_alarm_req_by = $_POST['lift_alarm_req_by'];

    //for lifting of alarm date
    $lift_alarm_req_date = $_POST['lift_alarm_req_date'];
    // $lift_alarm_req_d = date_create($lift_alarm_req_date);
    // $lift_alarm_req_send = date_format($lift_alarm_req_d ,"F d, Y h:i:s A");


    $lift_alarm_req_position = $_POST['lift_alarm_req_position'];
    $alarm_lifted_by = $_POST['alarm_lifted_by'];

    //for alarm lifted
    $alarm_lifted_date = $_POST['alarm_lifted_date'];
    // $alarm_lifted_d = date_create($alarm_lifted_date);
    // $alarm_lifted_send = date_format($alarm_lifted_d ,"F d, Y h:i:s A");

    $alarm_lifted_position = $_POST['alarm_lifted_position'];
    $reason_lift = $_POST['reason_lift'];

  

// $sql="UPDATE reports SET status = '1' + '1' , issue_alarm_req_by = '$issue_alarm_req_by', issue_alarm_req_date = '$issue_alarm_send', issue_alarm_req_position = '$issue_alarm_req_position', alarm_issue_by = '$alarm_issue_by', alarm_issue_date = '$alarm_d_send', alarm_issue_position = '$alarm_issue_position', lift_alarm_req_by = '$lift_alarm_req_by', lift_alarm_req_date = '$lift_alarm_req_send', lift_alarm_req_position = '$lift_alarm_req_position', alarm_lifted_by = '$alarm_lifted_by', alarm_lifted_date = '$alarm_lifted_send', alarm_lifted_position = '$alarm_lifted_position', reason_lift = '$reason_lift' WHERE id=$id";

$sql="UPDATE reports SET status = status + 1 , issue_alarm_req_by = '$issue_alarm_req_by', issue_alarm_req_date = '$issue_alarm_req_date', issue_alarm_req_position = '$issue_alarm_req_position', alarm_issue_by = '$alarm_issue_by', alarm_issue_date = '$alarm_issue_date', alarm_issue_position = '$alarm_issue_position', lift_alarm_req_by = '$lift_alarm_req_by', lift_alarm_req_date = '$lift_alarm_req_date', lift_alarm_req_position = '$lift_alarm_req_position', alarm_lifted_by = '$alarm_lifted_by', alarm_lifted_date = '$alarm_lifted_date', alarm_lifted_position = '$alarm_lifted_position', reason_lift = '$reason_lift' WHERE id=$id";

// $sqli="UPDATE notification SET status = '1' WHERE request_id=$id";

    if ($mysqli->query($sql) === true) 
{ 

    echo "<script>alert('Successfully Updated!'); window.location='../view_process.php'</script>"; 
    // echo "<script>alert('Successfully Updated!'); "; 
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
