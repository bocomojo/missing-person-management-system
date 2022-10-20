<?php

require_once('../includes/conn.php');

if (isset($_GET['id'])) {

$id = $_GET['id'];

$sql  =  "INSERT INTO archives (fullname,alias,address,bday,age,smt,gender,race,recentphoto,height,weight,haircolor,hairstate,eyecolor,eyestate,prostet,blood,cloth,accessory,defect,lastloc,others,filed_date,case_num,comp_name,comp_address,phone,relation,agency)
SELECT fullname,alias,address,bday,age,smt,gender,race,recentphoto,height,weight,haircolor,hairstate,eyecolor,eyestate,prostet,blood,cloth,accessory,defect,lastloc,others,filed_date,case_num,comp_name,comp_address,phone,relation,agency
FROM reports
WHERE id = $id";
$query = "DELETE FROM reports WHERE id = $id"; 
    if ($mysqli->query($sql) === true) 
{ 
  if ($mysqli->query($query) === true) 
{ 

    echo "<script>alert('Successfully Accepted!!!'); window.location='../v_issue.php'</script>"; 
} 
else
{ 
    echo "<script>alert('Error Occured!!!'); window.location='../v_issue.php'</script>";
        $mysqli->error; 
} 
  
// Close the  connection 
$mysqli->close(); 
}
}
?> 
