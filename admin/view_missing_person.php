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
                    <li class="active">
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
                            Active Cases
                        </a>
                    </li>
                    <li>
                        <a href="view_process.php">
                            <i class="fa fa-table"></i>
                            Reports in Process
                        </a>
                    </li>
                    <li>
                        <a href="requests.php">
                            <i class="fa fa-table"></i>
                            Pending Requests
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="rejected_request.php">
                            <i class="fa fa-table"></i>
                            Rejected Reports
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
                <table class="table table-striped thead-dark table-bordered table-hover" id="myTable" >    
                <thead>
                <tr>
                    <th>No</th>
                    <th>Image</th>
                    <th>Subject Name</th>
                    <th>Age</th>
                    <th>Sex</th>
                    <th>Last seen date</th>
                    <th>Last seen place</th>
                    <th>Action</th> 

                    
                    
                    </tr>
                </thead>
                    <?php
                                   $a=1;
                    $query=mysqli_query($mysqli,"select *from `reports` where status=4");
                     while($row=mysqli_fetch_array($query))
                        {
                          $id = $row['id'];
                          ?>
                          <tr>
                            <td><?php echo $a;?></td> 
                            <td><img src="assets/image/missing_person/<?php echo $row["recentphoto"]; ?>" alt="Avatar" style="width:390px"></td>
                            <td><?php echo $row['fullname'];?></td>
                            <td><?php echo $row['age'];?></td>  
                            <td><?php echo $row['gender'];?></td>
                            <td><?php $date = date_create($row["last_seen_date"]); echo date_format($date, "F d, Y h:i:sa"); ?></td>
                            <td><?php echo $row['lastloc'];?></td>
                            <td>
                  <a href="function/archive.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-primary"><span class="fa fa-download"></span> Download  Poster</a>
                   || 
                  <a href="view_report_details.php?id=<?php echo $id; ?>" data-toggle="modal" class="btn btn-warning"><span class="fa fa-pencil"></span> View</a> 
                              </td>
                          </tr>
                          <?php
                          $a++;
                      }
                       

          
                      if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $mysqli->prepare("DELETE FROM reports WHERE id = ? LIMIT 1"))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                    <div class="alert alert-success strover" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Successfully! </strong><?php echo'Record Successfully deleted please refresh this page';?></div>
                    
                    <?php
                          }
                          else
                          {
                    ?>
                    <div class="alert alert-danger samuel" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Danger! </strong><?php echo'OOPS please try again something went wrong';?></div>
                    <?php
                          }
                          $mysqli->close();

                      }
                else

                {

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
