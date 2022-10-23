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
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
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
                   
                    <li>
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
                    <li class="active">
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
            <div class="panel-heading">All Issues</div>
        <div class="panel-body">
                        <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Case Number</th>
                    <th>Subject Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Reported by</th>
                    <th>Action</th> 

                    
                    
                    </tr>
                </thead>
                    <?php
                                   $a=1;
                    $query=mysqli_query($mysqli,"select * from `reports` where status=0");
                     while($row=mysqli_fetch_array($query))
                      
                        {
                          $id = $row['id'];
                          ?>
                          <tr>
                              <td><?php echo $a;?></td> 
                            <td><?php echo $row['case_num'];?></td>
                            <td><?php echo $row['fullname'];?></td>
                            <td><?php echo $row['gender'];?></td>  
                            <td><?php echo $row['address'];?></td>
                            <td><?php if ($row['status']==0) {
                                echo 'pending';
                            } else if ($row['status']==1) {
                                echo 'accepted';
                            } else if ($row['status']==2) {
                                echo 'rejected';
                            } else if ($row['status']==3) {
                                echo 'cold case';
                            } else if ($row['status']==4) {
                                echo 'found';
                            }?></td>
                            <td><?php echo $row['username'];?></td>

                            <td>
                  <a href="function/accept.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-warning"><span class="fa fa-check"></span> Accept</a>            
                   || 
                  <a href="function/reject.php?id=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="fa fa-times"></span> Reject</a>
                   || 
                  <a href="view_request_details.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-warning"><span class="fa fa-pencil"></span> View</a> 
                              </td>
                          </tr>
                          <?php
                          $a++;
                      }
                       
                    
                      ?>
              
               
                </table>
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





         <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/datatables/datatables.min.js"></script>
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
    </script>
         <script type="text/javascript">
             
             $(document).ready( function () {
                 $('#myTable').DataTable();
             } );
         </script>
    </body>
</html>
