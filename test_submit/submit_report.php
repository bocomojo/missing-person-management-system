<?php


      require_once('../admin/includes/session.php');
      require_once('../admin/includes/conn.php');

    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Submit Report</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="index/css/styles.css" rel="stylesheet" />
        <link href="css/form.css" rel="stylesheet" />
        <!-- Our Custom CSS -->
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <div class="container px-4">
                <a class="navbar-brand" href="#page-top"><img src="images/icons/PNP-Logo.png" height="40px">Camalig MPS</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-primary bg-gradient text-white">
            <div class="container px-4 text-center">
                <h1 class="fw-bolder">Welcome to Camalig MPS Portal</h1>
                <p class="lead">An online bulletin for missing person</p>
                <a class="btn btn-lg btn-light" href="submit_report.php">Submit Report?</a>
            </div>
        </header>

        <!-- Start of Report section -->
        <section class="" id="services">

<div class="wrapper inner">
<div class="panel">
            <div class="panel-heading"><H4>Submit Report<br></H4> Note: Only the missing person's data shall be entered in this area.</div>
        <div class="panel-body">
            <form method="post" action="admin/function/insert_report.php" enctype="multipart/form-data">
        <div class="row form-group">
          <div class="col-lg-6">


            <label>NAME</label>
              <input type="text" class="form-control" name="fullname" placeholder="Enter full name" required>
          </div>  
          <div class="col-lg-6">
            <label>ALIAS(ES)</label>
              <input type="text" class="form-control" name="alias" placeholder="Enter alias" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>AGE</label>
              <input type="number" class="form-control" name="age" placeholder="Enter age" required>
          </div>
          <div class="col-lg-6">
            <label>DATE OF BIRTH</label>
              <input type="date" class="form-control" name="bday" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>GENDER</label>
              <select class="form-control" name="gender">
              <option>MALE</option>
              <option>FEMALE</option>      
              </select>
          </div> 
          <div class="col-lg-6">
            <label>ADDRESS</label>
              <input type="text" class="form-control" name="address" placeholder="Enter complete address" required>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>RACE/NATIONALITY</label>
              <input type="text" class="form-control" name="race" placeholder="Enter race or nationality" required>
          </div>
          <div class="col-lg-6">
            <label>MOST RECENT PHOTO</label>
              <input type="file" class="form-control" name="recentphoto" required>
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>HEIGHT (CM)</label>
              <input type="number" class="form-control" name="height" placeholder="Enter height" required>
          </div>   
          <div class="col-lg-6">
            <label>WEIGHT (KG)</label>
              <input type="number" class="form-control" name="weight" placeholder="Enter weight" required>
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>CURRENT HAIR COLOR</label>
              <input type="text" class="form-control" name="haircolor" placeholder="Enter current hair color" required>
          </div>   
          <div class="col-lg-6">
            <label>CHOOSE IF NATURAL OR DYED</label>
              <select class="form-control" name="hairstate">
              <option>NATURAL</option>
              <option>DYED</option>      
              </select>
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>EYE COLOR</label>
              <input type="text" class="form-control" name="eyecolor" placeholder="Enter eye color" required>
          </div>   
          <div class="col-lg-6">
            <label>CHOOSE IF NATURAL, ARTIFICIAL, OR WEARS CONTACT LENSES </label>
              <select class="form-control" name="eyestate">
              <option>NATURAL</option>
              <option>ARTIFICIAL</option> 
              <option>WEARS CONTAC LENSES</option>     
              </select>
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>SCARS, MARKS & TATTOOS (SMT)</label>
              <input type="text" class="form-control" name="smt" placeholder="Describe scars, marks, or tattoos" required>
        </div>   
          <div class="col-lg-6">
            <label>BLOOD TYPE (IF KNOWN)</label>
              <select class="form-control" name="blood">
              <option>A+</option>
              <option>A-</option> 
              <option>B+</option>
              <option>B-</option>
              <option>O+</option> 
              <option>O-</option> 
              <option>AB+</option>
              <option>AB-</option>       
              </select>
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>ACCESSORIES/JEWELRY (IF ANY)</label>
              <input type="text" class="form-control" name="accessory" placeholder="Enter last worn accessory eg. earrings, necklace, etc.">
          </div>
          <div class="col-lg-6">
            <label>PROSTHETICS & IMPLANTS (IF ANY)</label>
              <input type="text" class="form-control" name="prostet" placeholder="Enter prosthetics or implants if there's any">
          </div>  
        </div>
        <div class="row form-group">
          <div class="col-lg-6">
            <label>BIRTH DEFECTS (IF ANY)</label>
              <input type="text" class="form-control" name="defect" placeholder="Enter birth defects eg. blind, crippled, etc.">
          </div>
              <div class="col-lg-6">
            <label>LAST KNOWN CLOTHING</label>
              <input type="text" class="form-control" name="cloth" placeholder="Enter last known clothing and indicate color" required>
          </div>
          <!--<div class="col-lg-6">
            <label>DENTAL AND FINGERPRINT RECORDS (IF AVAILABLE)</label>
              <input type="file" class="form-control" name="dentalfinger" required>
          </div>-->
        </div>

        <div class="row form-group">
           <div class="col-lg-6">
            <label>LAST KNOWN LOCATION</label>
              <input type="text" class="form-control" name="lastloc" placeholder="Enter last known location" required>
           </div>
           <div class="col-lg-6">
            <label>LAST SEEN DATE</label>
              <input type="datetime-local" class="form-control" name="last_seen_date" required>
          </div>
        </div>
        
        <div class="row form-group">
          <div class="col-lg-12">
            <label>OTHER RELEVANT INFORMATION SUCH AS CELLPHONE NUMBER AND SOCIAL MEDIA ACCOUNT, AND THE REASON WHY THE COMPLAINANT BELIEVES THAT THE PERSON IS MISSING.</label>
              <textarea class="form-control"  name="others"></textarea>
            </div>
        </div>
        <div class="panel panel-default sammacmedia">
            <div class="panel-heading"><H4>Information about the complainant</H4></div>
        <div class="panel-body">
        <div class="row form-group">
           <div class="col-lg-6">
            <label>COMPLAINANT/INFORMANT'S NAME</label>
              <input type="text" class="form-control" name="comp_name" placeholder="Enter your name" required>
          </div>
        </div>     
        <div class="row form-group">
           <div class="col-lg-6">
            <label>COMPLAINANT/INFORMANT'S ADDRESS</label>
              <input type="text" class="form-control" name="comp_address" placeholder="Enter your complete address" required>
          </div>
          <div class="col-lg-6">
            <label>PHONE NUMBER</label>
              <input type="text" class="form-control" name="phone" placeholder="Enter phone number" required>
          </div>  
        </div>
        <div class="row form-group">
           <div class="col-lg-6">
            <label>RELATIONSHIP OF COMPLAINANT/INFORMANT TO THE SUBJECT</label>
              <select class="form-control" name="relation">
              <option>Parent</option>
              <option>Guardian</option> 
              <option>Sister</option>
              <option>Brother</option>
              <option>Spouse</option>
              <option>Husband</option>
              <option>Friend</option>
              <option>Girlfriend/Boyfriend</option>  
              <option>Classmate</option> 
              <option>Co-worker</option>
              <option>Relative</option>       
              </select>
          </div>
          <div class="col-lg-6">
            <label>HAVE YOU REPORTED TO OTHER AGENCY? IF YES, STATE THE AGENCY</label>
              <input type="text" class="form-control" name="agency" placeholder="" required>
          </div>  
        </div>
                
                <div class="row">
                <div class="col-md-6">
                  <button type="submit" name="submit" class="button-process"><span class="fa fa-plus"></span> Process</button>  
                </div>
                     <div class="col-md-6">
                  <button type="reset" class="button-cancel"><span class="fa fa-times"></span> Cancel</button>  
                </div>
                </div>
            </form>

            </div>
                </div>
            </div>



        </section>
        <!-- End of Report section -->

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>

    </body>
</html>
