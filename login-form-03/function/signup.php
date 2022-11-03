<?php

require_once('../../admin/includes/conn.php');

if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["image"]["tmp_name"],"../../admin/assets/image/residents/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$username = $_POST['username']; 
$password = $_POST['password'];
$cpassword = $_POST['cpassword']; 
$gender = $_POST['gender'];     
$joined = date(" d M Y ");

if($password != $cpassword){
                               echo 'error';
                           }
                            
                              else{ 
                            $password=md5($cpassword);



                            $sql_n = "SELECT * FROM users WHERE phone ='$phone'";
                            $res_n = mysqli_query($mysqli, $sql_n);    
                            $sql_e = "SELECT * FROM users WHERE email ='$email'";
                            $res_e = mysqli_query($mysqli, $sql_e);
                            if(mysqli_num_rows($res_e) > 0){
                           echo "<script>alert('sorry the email is already allocated to someone')</script>";
                       }elseif(mysqli_num_rows($res_n) > 0){
                       		echo "<script>alert('sorry the phone is already allocated to someone')</script>";
 
}
                    else{ 
$sql = "INSERT INTO users (name,surname,address,email,phone,gender,username,type,password,permission,joined,image)
VALUES('$name','$surname','$address','$email','$phone','$gender','$username','user','$password','3','$joined','$location')";


if($mysqli->query($sql) === TRUE){


echo "<script>alert('Successfully Registered!!!'); window.location='../login.php'</script>";
}

else
	echo "<script>alert('Error Occured!!!'); window.location='../signup.php'</script>";
}
}
}

?>



