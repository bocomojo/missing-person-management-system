<?php require_once('includes/session.php');
      require_once('includes/conn.php');
       require_once('check.php');
      date_default_timezone_set('Asia/Manila');
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
                        <a href="view_found_person.php">
                            <i class="fa fa-table"></i>
                            View Found Persons &nbsp;&nbsp;<?php echo $found;?>  
                        </a>
                    </li>   
                   
                    <li>
                        <a href="invest.php">
                            <i class="fa fa-link"></i>
                            Report Missing Person
                        </a>
                    </li>
                     <!-- <?php
                    if($_SESSION['permission']==1){
                        
                    
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
                    <?php }?> -->
                    <li>
                        <a href="v_issue.php">
                            <i class="fa fa-table"></i>
                            Active Cases &nbsp;&nbsp;<?php echo $active_case;?>
                        </a>
                    </li>
                    <li>
                        <a href="view_process.php">
                            <i class="fa fa-table"></i>
                            Reports in Process &nbsp;&nbsp;<?php echo $reports_process;?>
                        </a>
                    </li>
                    <li>
                        <a href="requests.php">
                            <i class="fa fa-table"></i>
                            Pending Requests &nbsp;&nbsp;<?php echo $requests;?>      </a>
                    </li>   
                     

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
                            Archives &nbsp;&nbsp;<?php echo $archives;?>
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']==1  or $_SESSION['permission']==2 ){
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
                            <i class="fa fa-bell"></i>
                            Report Status
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
        <div class="panel-body" id="printArea">


                    <?php
                    $id = $_GET['id'];
                    $query=mysqli_query($mysqli,"select * from `reports` where id = $id");
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
                    &nbsp;&nbsp;<?php $date = date_create($row["last_seen_date"]); echo date_format($date, "F d, Y h:i:s A"); ?>
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
                    <div class="fhead">&nbsp;AGE:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['age'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;COMPLEXION:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['complexion'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;HEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['height'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;WEIGHT:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['weight'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;BUILD:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['build'];?></div>
                </p></div>
                <p>
                    <div class="fhead">&nbsp;HAIR:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['hairstate'];?>&nbsp;<?php echo $row['haircolor'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;PECULIARITIES:&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['peculiarity'];?></div>
                </p>
                <p>
                    <div class="fhead">&nbsp;OTHER IDENTIFICATION DATA:&nbsp;&nbsp;&nbsp;&nbsp;</div>
                    &nbsp;&nbsp;&nbsp;<?php echo $row['smt'];?><br>
                    &nbsp;&nbsp;&nbsp;<?php echo $row['cloth'];?><br>
                    &nbsp;&nbsp;&nbsp;<?php echo $row['others'];?><br>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;9. PHOTO</div><img src="assets/image/missing_person/<?php echo $row["recentphoto"]; ?>" alt="Avatar" style="width:100%" class="photo">
                </p>
            </td>
        </tr>
        <?php
                    if($_SESSION['permission']==3 ){
                        
                    
                    ?>
        <tr>
            <td width="783" colspan="5" valign="top">
                <p>
                    <div class="fhead">&nbsp;10 PLEASE CONTACT THIS NUMBER IF FOUND</div><br>
                    &nbsp;&nbsp;<?php echo "09123896970";?></div>
                </p>
            </td>
        </tr>
        <?php }?>
        <?php
                    if($_SESSION['permission']==1 or $_SESSION['permission']==2 ){
                        
                    
                    ?>
        <tr>
            <td width="783" colspan="5" valign="top">
                <p>
                    <div class="fhead">&nbsp;10 ADDITIONAL INFO ON SUBJECT</div><br>
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
                    <div class="fhead">&nbsp;15. HAVE YOU REPORTED TO OTHER AGENCY?</div>
                </p>
                <p align="left">
                    <div class="fhead">&nbsp;If yes, what &nbsp;agency&nbsp;<?php echo $row['agency'];?></div>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                    <div class="fhead">&nbsp;16. DATE/TIME REPORTED</div><br>
                    &nbsp;&nbsp;<?php $date = date_create($row["filed_date"]); echo date_format($date, "F d, Y h:i:s A"); ?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="264" valign="top">
                <p>
                <div class="fhead">&nbsp;17. REPORT RECEIVED BY</div><br>
                &nbsp;&nbsp;<?php echo $row['accepted_by'];?>
                </p>
            </td>
            <td width="273" colspan="3" valign="top">
                <p>
                <div class="fhead">&nbsp;18. DATE/TIME</div><br>
                &nbsp;&nbsp;<?php echo $row['accepted_date'];?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                <div class="fhead">&nbsp;19. POSITION/DESIGNATION</div><br>
                &nbsp;&nbsp;<?php echo $row['position'];?>
                </p>
            </td>
        </tr>
        <!-- <tr>
            <td width="354" colspan="3" valign="top">
                <p align="left">
                <div class="fhead">&nbsp;20. THIS IS TO CERTIFY that the above report/data are true
                    and correct to the best of my knowledge.</div>
                </p>
            </td>
            <td width="429" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;21. SIGNATURE OF COMPLAINANT/INFORMER</div>
                </p>
            </td>
        </tr> -->
        <!-- <tr>
            <td width="354" colspan="3" valign="top">
                <p>
                <div class="fhead">&nbsp;22. SUBSCRIBED AND SWORN TO before me this _____ day of
                    ________________ 19 _______</div>
                </p>
            </td>
            <td width="429" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;23. SIGNATURE OF ADMINISTERING OFFICER</div>
                </p>
            </td>
        </tr>
        <tr> -->
            <td width="294" colspan="2" valign="top">
                <p align="left">
                <div class="fhead">&nbsp;24. ISSUANCE OF ALARM REQUESTED BY</div><br>
                &nbsp;&nbsp;<?php echo $row['issue_alarm_req_by'];?>
                </p>
            </td>
            <td width="243" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;25. DATE/TIME</div>
                <br>
                &nbsp;&nbsp;<?php
                $date_alarm_req = date_create($row["issue_alarm_req_date"]);
                
                if (!empty($row["issue_alarm_req_date"])) {
                    echo date_format($date_alarm_req, "F d, Y h:i:s A");
                }
                 ?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                <div class="fhead">&nbsp;26. POSITION/DESIGNATION</div>
                <br>
                &nbsp;&nbsp;<?php
                switch ($row['issue_alarm_req_position']) {
                    case 1:
                      echo "Chief of Police";
                      break;
                    case 2:
                        echo "Police Major";
                      break;
                    case 3:
                        echo "Police Captain";
                      break;                    
                  }
                ?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="294" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;27. ALARM ISSUED BY</div>
                <br>
                &nbsp;&nbsp;<?php echo $row['alarm_issue_by'];?>
                </p>
            </td>
            <td width="243" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;28. DATE/TIME</div>
                <br>
                &nbsp;&nbsp;<?php 
                    // $date_alarm_issued = date_create($row["alarm_issue_date"]); echo date_format($date_alarm_issued, "F d, Y h:i:s A"); 
                    // echo $row["alarm_issue_date"];
                    
                    $date_alarm_issued = date_create($row["alarm_issue_date"]);
                    if (!empty($row["alarm_issue_date"])) {
                        echo date_format($date_alarm_issued, "F d, Y h:i:s A");
                    }

                ?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                <div class="fhead">&nbsp;29. POSITION/DESIGNATION</div>
                <br>
                &nbsp;&nbsp;
                <?php
                switch ($row['alarm_issue_position']) {
                    case 1:
                      echo "Chief of Police";
                      break;
                    case 2:
                        echo "Police Major";
                      break;
                    case 3:
                        echo "Police Captain";
                      break;                    
                  }
                ?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="294" colspan="2" valign="top">
                <p align="left">
                <div class="fhead">&nbsp;30. LIFTING OF ALARM REQUESTED BY</div>
                <br>
                &nbsp;&nbsp;<?php echo $row['lift_alarm_req_by'];?>
                </p>
            </td>
            <td width="243" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;31. DATE/TIME</div>
                <br>
                &nbsp;&nbsp;<?php
                $date_lifting = date_create($row["lift_alarm_req_date"]);
                if (!empty($row["lift_alarm_req_date"])) {
                    echo date_format($date_lifting, "F d, Y h:i:s A");
                }
                
                // echo $row["lift_alarm_req_date"];
                ?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                <div class="fhead">&nbsp;32. POSITION/DESIGNATION</div>
                <br>
                &nbsp;&nbsp;
                <?php
                switch ($row['lift_alarm_req_position']) {
                    case 1:
                      echo "Chief of Police";
                      break;
                    case 2:
                        echo "Police Major";
                      break;
                    case 3:
                        echo "Police Captain";
                      break;                    
                  }
                ?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="294" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;33. ALARM LIFTED BY</div>
                <br>
                &nbsp;&nbsp;<?php echo $row['alarm_lifted_by'];?>
                </p>
            </td>
            <td width="243" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;34. DATE/TIME</div>
                <br>
                &nbsp;&nbsp;<?php
                $date_alarm_lifted = date_create($row["alarm_lifted_date"]);
                
                if (!empty($row["alarm_lifted_date"])) {
                    echo date_format($date_alarm_lifted, "F d, Y h:i:s A");
                }
                
                // echo $row["alarm_lifted_date"];
                ?>
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                <div class="fhead">&nbsp;35.POSITION/DESIGNATION</div><br>
                &nbsp;&nbsp;
                <?php
                switch ($row['alarm_lifted_position']) {
                    case 1:
                      echo "Chief of Police";
                      break;
                    case 2:
                        echo "Police Major";
                      break;
                    case 3:
                        echo "Police Captain";
                      break;                    
                  }
                ?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="783" colspan="5" valign="top">
                <p>
                <div class="fhead">&nbsp;36. REASON FOR LIFTING ALARM</div><br>
                &nbsp;&nbsp;<?php echo $row['reason_lift'];?>
                </p>
            </td>
        </tr>
        <tr>
            <td width="294" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;37.SIGNATURE OF SUPERVISOR</div><br>
                &nbsp;&nbsp;
                </p>
            </td>
            <td width="243" colspan="2" valign="top">
                <p>
                <div class="fhead">&nbsp;38. DATE/TIME</div><br>
                &nbsp;&nbsp;
                </p>
            </td>
            <td width="246" valign="top">
                <p>
                <div class="fhead">&nbsp;39.POSITION/DESIGNATION</div><br>
                &nbsp;&nbsp;
                </p>
            </td>
        </tr>
        <tr height="0">
            <td width="267">
            </td>
            <td width="30">
            </td>
            <td width="60">
            </td>
            <td width="180">
            </td>
            <td width="246">
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>


</center>

                    <?php
                          }
                          $mysqli->close();
                         ?>
            </div>
            <center>
            <button class="btn btn-primary fa fa-download" onclick="printDiv('printArea')"> &nbsp;Download this form</button><br><br>
            </center>
            
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

    <script>
        function printDiv(printArea) {
            var printContents = document.getElementById(printArea).innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;
        }
    </script>
</html>
