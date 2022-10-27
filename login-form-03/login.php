<?php require_once('../admin/includes/conn.php');

if(isset($mysqli,$_POST['submit'])){
    $username = mysqli_real_escape_string($mysqli,$_POST['username']);
    $password = mysqli_real_escape_string($mysqli,$_POST['password']);
    $password=md5($password);
    $query1=mysqli_query($mysqli,"SELECT username,password,type,permission,name,surname FROM users");
  while($row=mysqli_fetch_array($query1))
  {
        $db_name=$row["name"];
    $db_surname=$row["surname"];
    $db_username=$row["username"];
    $db_password=$row["password"];
    $db_type=$row["type"];
        $db_per=$row["permission"];
    
    if($username==$db_username && $password==$db_password){
      session_start();
      $_SESSION["username"]=$db_username;
      $_SESSION["type"]=$db_type;
            $_SESSION["permission"]=$db_per;
            $_SESSION["name"]=$db_name;
            $_SESSION["surname"]=$db_surname;
            

      
      if($_SESSION["type"]=='user'){
                    if($_SESSION['permission']===1 or $_SESSION['permission']===2 ){
        echo "<script>alert('Welcome!'); window.location='../admin/dashboard.php'</script>";
        } else {
          // echo "<script>alert('Welcome!'); window.location='../home.php'</script>";
          echo "<script>alert('Welcome!'); window.location='../admin/dashboard.php'</script>";

      }
        } 

      }
    
    }
    if($username!=$db_surname && $password!=$db_password){
          echo "<script>alert('Oops, wrong credentials!'); window.location='login.php'</script>";
  }
    }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css1/styles.css">

    <title>Login</title>
  </head>
  <body>
  

  <div class="half">
    <!-- <div class="bg order-1 order-md-2" style="background-color:#262626;"></div> -->
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block1" style= "border-radius: 20px;">
              <div class="text-center mb-5">
              <img src="images/PNP-Logo.png" height="70px"><br><br><h3>Login to <strong>CMPS Missing Person Page</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <hr> 
              <form action="#" method="post">
                <div class="form-group first">
                  <label for="username">Username<text style="color: red;">*</text></label>
                  <input type="text" class="form-control" placeholder="Your Username" name="username" required>
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password<text style="color: red;">*</text></label>
                  <input type="password" class="form-control" placeholder="Your Password" name="password" required>
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"></span>
                  </label>
                  <span class="ml-auto"><a href="signup.php" class="forgot-pass">Don't have an account?</a></span> 
                </div>

                <input type="submit" value="Log In" name="submit" class="btn btn-block btn-color">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>