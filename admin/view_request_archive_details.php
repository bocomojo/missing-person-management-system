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
                              <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="a_employees.php">
                            <i class="fa fa-plus"></i>
                            Add Desk Officer
                        </a>
                      
                    </li>
                    <?php }?>
                    <li>
                        <a href="all_employees.php">
                            <i class="fa fa-table"></i>
                           All Desk Officers
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
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                            View Missing Reports
                        </a>
                    </li>
                    <li>
                        <a href="requests.php">
                            <i class="fa fa-table"></i>
                            View Pending Reports
                        </a>
                    </li>

                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li>
                        <a href="bulletin.php">
                            <i class="fa fa-table"></i>
                            Missing Person Bulletin
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
                    <li class="active">
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


                    <?php
                    $id = $_GET['id'];
                    $query=mysqli_query($mysqli,"select * from `archives` where id = $id");
                     while($row=mysqli_fetch_array($query))
                      
                        {
                          
                          ?>

              <center>                       
<p>
    <div class="fhead"><strong>MISSING PERSON ALARM SHEET</strong></div>
</p>
<p>
    <strong></strong>
</p>
<table border="1" cellspacing="0" cellpadding="0" width="783">
    <tbody>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;1. ALARM ID.&nbsp;&nbsp;&nbsp;<?php echo $row['id'];?></div>
                </p>
            </td>
            <td width="519" colspan="4" valign="top">
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;2.NATURE OF ALARM</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;[/] MISSING</div>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;3. PLACE WHERE LAST SEEN</div><br>
                    &nbsp;&nbsp;<?php echo $row['lastloc'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;4. DATE/TIME</div><br>
                    &nbsp;&nbsp;<?php echo $row['filed_date'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;5. NAME OF SUBJECT</div><br>
                    &nbsp;&nbsp;<?php echo $row['fullname'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;6. ALIAS (ES)</div><br>
                    &nbsp;&nbsp;<?php echo $row['alias'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;7. ADDRESS</div><br>
                    &nbsp;&nbsp;<?php echo $row['address'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="537" colspan="4" valign="top">
                <p>
                    <div class="fhead">&nbsp;8. DESCRIPTION:</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;SEX:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['gender'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;NATIONALITY:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['race'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;AGE:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;COMPLEXION:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;HEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['height'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;WEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['weight'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;BUILD:&nbsp;&nbsp;&nbsp;&nbsp;
                </p></div>
                <p>
                    <div class="fhead">&nbsp;HAIR:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['hairstate'];?>&nbsp;<?php echo $row['haircolor'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;PECULIARITIES:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['defect'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;OTHER IDENTIFICATION DATA:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;9. PHOTO</div><img src="admin/assets/image/missing_person/<?php echo $row["recentphoto"]; ?>" alt="Avatar" style="width:100%" class="photo">
                </p>
            </td>
        </tr>
        <tr>
            <td width="783" colspan="5" valign="top">
                <p>
                    <div class="fhead">&nbsp;10 ADDITIONAL INFO ON SUBJECT<br>
                    &nbsp;&nbsp;<?php echo $row['others'];?></div>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                    <div class="fhead">&nbsp;11.COMPLAINANT/INFORMANT</div><br>
                    &nbsp;&nbsp;<?php echo $row['comp_name'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                    <div class="fhead">&nbsp;12. ADDRESS</div><br>
                    &nbsp;&nbsp;<?php echo $row['comp_address'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;13. TEL NO.</div><br>
                    &nbsp;&nbsp;<?php echo $row['phone'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p align="left">
                    <div class="fhead">&nbsp;14. RELATIONSHIP OF &nbsp;COMPLAINANT/INFORMANT TO &nbsp;SUBJECT</div><br>
                    &nbsp;&nbsp;<?php echo $row['relation'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p align="left">
                    <div class="fhead">&nbsp;15. REPORTED TO OTHER AGENCY</div>
                </p>
                <p>
                    <div class="fhead">&nbsp;[ ] YES [ ] NO</div>
                </p>
                <p align="left">
                    <div class="fhead">&nbsp;If yes, what &nbsp;agency&nbsp;<?php echo $row['agency'];?></div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;16. DATE/TIME REPORTED</div><br>
                    &nbsp;&nbsp;<?php echo $row['filed_date'];?>
                </p>
            </td>
        </tr>
    </tbody>
</table>
</center>

                    <?php
                          }
                          $mysqli->close();
                         ?>
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
