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
$age = $_POST['age'];
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
$filed_date =  date("m-d-Y h:i:sa");
$as = rand(1000,9999);     
$case_num = date("YmdHis").'.'.$as;
$comp_name = $_POST['comp_name'];
$comp_address = $_POST['comp_address'];
$phone = $_POST['phone'];
$relation = $_POST['relation'];
$agency = $_POST['agency'];
$username = $_POST['username'];
//variables for notifcications
// session_start();
// $username = $_POST['username'];
// $status = 0;
// $viewed = 0;
// $name = $fullname;

$sql = "INSERT INTO reports (fullname,alias,address,bday,smt,gender,race,recentphoto,height,weight,haircolor,hairstate,eyecolor,eyestate,prostet,blood,cloth,accessory,defect,lastloc,others,filed_date,case_num,comp_name,comp_address,phone,relation,agency,last_seen_date, username,age)
VALUES('$fullname','$alias','$address','$bday','$smt','$gender','$race','$location','$height','$weight','$haircolor','$hairstate','$eyecolor','$eyestate','$prostet','$blood','$cloth','$accessory','$defect','$lastloc','$others',NOW(),'$case_num','$comp_name','$comp_address','$phone','$relation','$agency','$last_seen_date', '$username','$age')";


// $sqli = "INSERT INTO notification (request_id,username,status,viewed,name) VALUES ('$last_id','$username','$status','$viewed','$name')";

if($mysqli->query($sql) === TRUE){


	echo "<script>alert('Successfully Added!!!'); window.location='../invest.php'</script>";
} else {
	echo "<script>alert('Error!!!');";
}


}

?>