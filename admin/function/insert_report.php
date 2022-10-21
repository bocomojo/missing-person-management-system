<?php

require_once('../includes/conn.php');

if (isset($_POST['submit'])) {
//variables for insert report
move_uploaded_file($_FILES["recentphoto"]["tmp_name"],"../assets/image/missing_person/" . $_FILES["recentphoto"]["name"]);			
$location=$_FILES["recentphoto"]["name"];
$fullname = $_POST['fullname'];
$alias = $_POST['alias'];
$address = $_POST['address'];
$bday = $_POST['bday'];
$last_seen_date = $_POST['last_seen_date'];
$smt = $_POST['smt'];
$gender = $_POST['gender'];
$race = $_POST['race'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$haircolor = $_POST['haircolor'];
$hairstate = $_POST['hairstate'];
$eyecolor = $_POST['eyecolor'];
$eyestate = $_POST['eyestate'];
$prostet = $_POST['prostet'];
$blood = $_POST['blood'];
$cloth = $_POST['cloth'];
$accessory = $_POST['accessory'];
$defect = $_POST['defect'];
$lastloc = $_POST['lastloc'];
$others = $_POST['others'];
$filed_date = date(" M d Y hh:i:s ");
$as = rand(1000,9999);     
$case_num = date("YmdHis").'.'.$as;
$comp_name = $_POST['comp_name'];
$comp_address = $_POST['comp_address'];
$phone = $_POST['phone'];
$relation = $_POST['relation'];
$agency = $_POST['agency'];
//variables for notifcications
// session_start();
$username = $_POST['username'];
$status = 0;
$viewed = 0;
$name = $fullname;

$sql = "INSERT INTO requests (fullname,alias,address,bday,smt,gender,race,recentphoto,height,weight,haircolor,hairstate,eyecolor,eyestate,prostet,blood,cloth,accessory,defect,lastloc,others,filed_date,case_num,comp_name,comp_address,phone,relation,agency,last_seen_date)
VALUES('$fullname','$alias','$address','$bday','$smt','$gender','$race','$location','$height','$weight','$haircolor','$hairstate','$eyecolor','$eyestate','$prostet','$blood','$cloth','$accessory','$defect','$lastloc','$others',NOW(),'$case_num','$comp_name','$comp_address','$phone','$relation','$agency','$last_seen_date')";
if($mysqli->query($sql) === TRUE){
	$last_id = $mysqli->insert_id;

$sqli = "INSERT INTO notification (request_id,username,status,viewed,name) VALUES ('$last_id','$username','$status','$viewed','$name')";

if($mysqli->query($sql) === TRUE && $mysqli->query($sqli) === TRUE){


echo "<script>alert('Successfully Added!!!'); window.location='../invest.php'</script>";
}

else
	echo "<script>alert('Error Occured!!!'); window.location='../invest.php'</script>";
}

}

?>