<?php 
      require_once('../includes/conn.php');


if (isset($_POST['submit'])) {

move_uploaded_file($_FILES["image"]["tmp_name"],"../assets/image/residents" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];
$name = $_POST['name'];
$surname = $_POST['surname'];
$address = $_POST['address'];
$email = $_POST['email'];
$phon = $_POST['phone'];
$username = $_POST['username']; 
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];     
$permission = $_POST['permission']; 
$gender = $_POST['gender'];     
$joined = date(" d M Y ");
$tmp = rand(1,9999);
$phone = '+63 '.$phon;

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
                            ?>
                             <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'sorry the email is already allocated to someone';?></div>
                        <?php    
                       }elseif(mysqli_num_rows($res_n) > 0){
                        ?>
                        <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'sorry the phone is already allocated to someone';?></div>
                        <?php    
                        }
                    else{



$sql = "INSERT INTO users(name,surname,address,username,email,joined,type,permission,gender,phone,tmp,password,image)VALUES('$name','$surname','$address','$username','$email','$joined','user','$permission','$gender','$phone','$tmp','$password','$location')";
                $results = mysqli_query($mysqli,$sql);

                        if($results==1){
                              ?>
                        <div class="alert alert-success strover animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Successfully! </strong><?php echo'Thank you for creating account';?></div>
                        <?php

                          }else{
                                ?>
                         <div id="sams1" class="sufee-alert alert with-close alert-danger alert-dismissible fade show col-lg-12">
											<span class="badge badge-pill badge-danger">Error</span>
											OOPS something went wrong
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>

                        <?php    
                          }      
                      }
}
                }
                ?>
