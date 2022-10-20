<?php require_once('../admin/includes/conn.php');




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
    <link rel="stylesheet" href="css/style.css">

    <title>Signup</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/bg_1.jpg');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-6">
              <h3>Login to <strong>CMPS Missing Person Bulletin</strong></h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              
                 <hr> 
                          
          <form action="function/signup.php" method="post" enctype="multipart/form-data">
                <div class="row form-group">
          <div class="col-lg-6">
            <label>Name</label>
              <input type="text" class="form-control" name="name" pattern="[A-Za-z]{3,}" required>
          </div>  
          <div class="col-lg-6">
            <label>Surname</label>
              <input type="text" class="form-control" name="surname" pattern="[A-Za-z]{3,}" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-12">
            <label>Address</label>
              <input type="text" class="form-control" name="address" required>
          </div>
        </div>
         <div class="row form-group">  
          <div class="col-lg-6">
            <label>Gender</label>
             <select class="form-control" name="gender">
              <option>F</option>
              <option>M</option>      
              </select>
          </div>
          <div class="col-lg-6">
            <label>Photo</label>
              <input type="file" class="form-control" name="image" required>
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>Email</label>
              <input type="email" class="form-control" name="email" required>
          </div>   
          <div class="col-lg-6">
            <label>Phone</label>
              <input type="text" class="form-control" name="phone" pattern="[0][0-9]{3}[0-9]{3}[0-9]{4}" placeholder="09XXXXXXXXX" required>
          </div>  
        </div>
        <hr>
         <div class="row form-group">
          <div class="col-lg-6">
            <label>Username</label>
              <input type="text" class="form-control" name="username" pattern="[A-Za-z]{3,}">
            </div>   
        </div>
        <div class="row form-group">
             <div class="col-lg-6">
            <label>Password</label>
              <input type="password" class="form-control" name="password">
            </div> 
             <div class="col-lg-6">
            <label>Confirm Password</label>
              <input type="password" class="form-control" name="cpassword">
            </div> 
        </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"></span>
                  </label>
                  <span class="ml-auto"><a href="login.php" class="forgot-pass">Already have an account?</a></span> 
                </div>

                <input type="submit" value="Log In" name="submit" class="btn btn-block btn-primary">

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