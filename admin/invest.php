<?php require_once('includes/session.php');
      require_once('includes/conn.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Missing Person Reporting | SECURITY - DASHBOARD</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="sammacmedia">
                <div class="sidebar-header">
                    <h3>Missing Person Reporting</h3>
                    <strong>MPR</strong>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="dashboard.php">
                            <i class="fa fa-th"></i>
                           Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="view_missing_person.php">
                            <i class="fa fa-table"></i>
                            View Missing Persons
                        </a>
                    </li>   
                   
                    <li class="active">
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Report Missing Person
                        </a>
                    </li>
                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="a_employees.php">
                            <i class="fa fa-plus"></i>
                            Add Desk Officer
                        </a>
                      
                    </li>
                     <li>
                        <a href="all_employees.php">
                            <i class="fa fa-table"></i>
                           All Desk Officers
                        </a>
                    </li>
                    <li>
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                            View Missing Reports
                        </a>
                    </li>
                    <li>
                        <a href="requests.php">
                            <i class="fa fa-table"></i>
                            View Pending Requests
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="request_archives.php">
                            <i class="fa fa-table"></i>
                            Request Archives
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="archives.php">
                            <i class="fa fa-table"></i>
                            Archives
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1){
                    ?>
                    <li>
                        <a href="a_users.php">
                            <i class="fa fa-user"></i>
                            Add Users
                        </a>
                    </li>
                    <li>
                        <a href="v_users.php">
                            <i class="fa fa-table"></i>
                            View Users
                        </a>
                    </li>
                    <?php } ?>
                    <?php
                    if($_SESSION['permission']==3){
                    ?>
                    <li>
                        <a href="notification.php">
                            <i class="fa fa-cog"></i>
                            Notifications
                        </a>
                    </li>
                    <?php } ?>
                    <li>
                        <a href="account_settings.php">
                            <i class="fa fa-cog"></i>
                            Update Account
                        </a>
                    </li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
             
                <div clas="col-md-12">
                    <img src="assets/image/header.png" class="img-thumbnail">
                    </div>
         
                
                <nav class="navbar navbar-default sammacmedia">
                    <div class="container-fluid">

                        <div class="navbar-header" id="sams">
                            <button type="button" id="sidebarCollapse" id="makota" class="btn btn-sam animated tada navbar-btn">
                                <i class="glyphicon glyphicon-align-left"></i>
                                <span>Menu</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right  makotasamuel">
                                <li><a style="color: white;" href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a style="color: white;" href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>

                <div class="line"></div>


		<div class="panel panel-default sammacmedia">
            <div class="panel-heading"><H4>Submit Report<br></H4> Note: Only the missing person's data shall be entered in this area.</div>
        <div class="panel-body">
            <form method="post" action="function/insert_report.php" enctype="multipart/form-data">
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
              <input type="text" class="form-control" name="eyecolor" placeholder="Enter eye color" >
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
              <input type="text" class="form-control" name="smt" placeholder="Describe scars, marks, or tattoos" >
        </div>   
          <div class="col-lg-6">
            <label>BLOOD TYPE (IF KNOWN)</label>
              <select class="form-control" name="blood">
              <option>Unknown</option>
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
              <input type="text" class="form-control" name="cloth" placeholder="Enter last known clothing and indicate color">
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
              <input type="text" class="form-control" name="agency" placeholder="">
          </div>
          <div class="col-lg-6">
              <input type="hidden" name="username" value="<?php echo $_SESSION['name'] . " ". $_SESSION['surname'];?>">
          </div>   
        </div>
                
                <div class="row">
                <div class="col-md-6">
                  <button type="submit" name="submit" class="btn btn-suc btn-block"><span class="fa fa-plus"></span> Process</button>  
                </div>
                     <div class="col-md-6">
                  <button type="reset" class="btn btn-dan btn-block"><span class="fa fa-times"></span> Cancel</button>  
                </div>
                </div>
            </form>

            </div>
                </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
            Missing Person Reporting System &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved    
            </p>
            </footer>
            </div>
            
        </div>
        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/ckeditor/sammacmedia.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
              ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                console.log( editor );
		} )
                .catch( error => {
                console.error( error );
		} );
    </script>
    </body>
</html>
