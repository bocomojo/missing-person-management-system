<?php require_once('includes/session.php');
       require_once('includes/conn.php');
       require_once('check.php');
       require_once('check.php');
       $year = date("Y", strtotime("+8 HOURS"));
       $conn = new mysqli("localhost", "root", "", "caaz") or die(mysqli_error());
       $qjan = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'Jan' && `filed_date`") or die(mysqli_error());
       $fjan = $qjan->fetch_array();
       $qfeb = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'Feb' && `filed_date`") or die(mysqli_error());
       $ffeb = $qfeb->fetch_array();
       $qmar = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'Mar' && `filed_date`") or die(mysqli_error());
       $fmar = $qmar->fetch_array();
       $qapr = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'apr' && `filed_date`") or die(mysqli_error());
       $fapr = $qapr->fetch_array();
       $qmay = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'may' && `filed_date`") or die(mysqli_error());
       $fmay = $qmay->fetch_array();
       $qjun = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'jun' && `filed_date`") or die(mysqli_error());
       $fjun = $qjun->fetch_array();
       $qjuly = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'july' && `filed_date`") or die(mysqli_error());
       $fjuly = $qjuly->fetch_array();
       $qaug = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'aug' && `filed_date`") or die(mysqli_error());
       $faug = $qaug->fetch_array();
       $qsep = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'sep' && `filed_date`") or die(mysqli_error());
       $fsep = $qsep->fetch_array();
       $qoct = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'oct' && `filed_date`") or die(mysqli_error());
       $foct = $qoct->fetch_array();
       $qnov = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'nov' && `filed_date`") or die(mysqli_error());
       $fnov = $qnov->fetch_array();
       $qdec = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'dec' && `filed_date`") or die(mysqli_error());
       $fdec = $qdec->fetch_array();
       $year = date("Y");
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
        <link href="assets/css/card.css" rel="stylesheet" />
       <!-- Java Script bruh -->
        <script type="text/javascript" src="../Highcharts-2.3.5/js/jquery.min.js"></script>
        <script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Missing Person Report Graph <?php echo $year ?>'
            },
            xAxis: {
                categories: ['2019', '2020', '2021', '2022']
            },
            tooltip: {
                  headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y} </b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
            },
            labels: {
                items: [{
                    html: 'Total missing person',
                    style: {
                        left: '40px',
                        top: '8px',
                        color: 'black'
                    }
                }]
            },
            series: [{
                type: 'column',
                name: 'Resident (Male)',
                data: [<?php echo $fjan['total']?>,<?php echo $ffeb['total']?>,<?php echo $fjan['total']?>,<?php echo $fmar['total']?>]
            }, {
                type: 'column',
                name: 'Resident (Female)',
                data: [2, 3, 5, 7]
            }, {
                type: 'column',
                name: 'Children (0-17 y/old)',
                data: [4, 3, 3, 9]
            },  {
                type: 'column',
                name: 'Adult (18-59 y/old)',
                data: [4, 3, 3, 9]
            },  {
                type: 'column',
                name: 'Senior Citizen (60 y/old - above)',
                data: [4, 3, 3, 9]
            },{
                type: 'spline',
                name: 'Average',
                data: [3, 2.67, 3, 6.33],
                marker: {
                    lineWidth: 2,
                    lineColor: Highcharts.getOptions().colors[3],
                    fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Evacuee',
                data: [{
                    name: 'flood',
                    y: 13,
                    color: '#ff0000' // Jane's color
                }, {
                    name: 'wind storm/ storm surge',
                    y: 23,
                    color: '#00ff00' // John's color
                }, {
                    name: 'mudflow/ lahar',
                    y: 23,
                    color: '#0000ff' // John's color
                }, {
                    name: 'landslide',
                    y: 19,
                    color: '#000000' // Joe's color
                }],
                center: [100, 80],
                size: 100,
                showInLegend: false,
                dataLabels: {
                    enabled: false
                }
            }]
        });
    });
    
});
        </script>
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
                    if($_SESSION['permission']===1 or $_SESSION['permission']===2 ){
                        
                    
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
                     

                    <?php }?>

                    <?php
                    if($_SESSION['permission']===1 or $_SESSION['permission']===2 ){
                        
                    
                    ?>
                    <li>
                        <a href="rejected_request.php">
                            <i class="fa fa-table"></i>
                            Rejected Reports
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']===1 or $_SESSION['permission']===2 ){
                        
                    
                    ?>
                    <li>
                        <a href="archives.php">
                            <i class="fa fa-table"></i>
                            Archives &nbsp;&nbsp;<?php echo $archives;?>
                        </a>
                    </li>
                    <?php }?>

                    <?php
                    if($_SESSION['permission']===1  or $_SESSION['permission']===2 ){
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
                 
            <?php
                    $id = $_GET['id'];
                    $query=mysqli_query($mysqli,"select * from `reports` where id = $id");
                     while($row=mysqli_fetch_array($query))
                      
                        {
                          
                          ?>

              <center>                       

<table border="1" cellspacing="0" cellpadding="0">
    <tbody>
        <tr>
            <td width="1285" colspan="2" valign="top">
                <h1 style="font-size:18vw; background-color: black">
                    <p align="center">
                    <strong><font color="#d42626">MISSING</font></strong>
                    <strong></strong>
                    </p>
                </h1>
            </td>
        </tr>
        <h3>
        <tr>
            <td width="849" rowspan="2" valign="top">
                <p align="center">
                    <strong>
                        <br/>
                        <br/>
                        <br/>
                    </strong>
                </p>
                <p align="center">
                    <strong>
                        <img
                            width="90%"
                            height="90%"
                            src="admin/assets/image/missing_person/<?php echo $row["recentphoto"]; ?>"
                        />
                    </strong>
                    <strong></strong>
                </p>
            </td>
            <td width="436" valign="top">
                
                <p>
                    <h1><strong>SUBJECT DETAILS</strong></h1>
                </p>
                <p>
                    <strong></strong>
                </p>
                <p>
                    <strong></strong>
                </p>
                <h5><p>
                    <strong>NAME :</strong>&nbsp;&nbsp;<?php echo $row['fullname'];?>
                </p>
                <p>
                    <strong>HEIGHT (CM) :</strong>&nbsp;&nbsp;<?php echo $row['height'];?>
                </p>
                <p>
                    <strong>WEIGHT (KG) :</strong>&nbsp;&nbsp;<?php echo $row['weight'];?>
                </p>
                <p>
                    <strong>AGE :</strong>&nbsp;&nbsp;<?php echo $row['age'];?>
                </p>
                <p>
                    <strong>EYES :</strong>&nbsp;&nbsp;<?php echo $row['eyestate'];?>&nbsp;<?php echo $row['eyecolor'];?>
                </p>
                <p>
                    <strong>HAIR :</strong>&nbsp;&nbsp;<?php echo $row['hairstate'];?>&nbsp;<?php echo $row['haircolor'];?>
                </p>
                <p>
                    <strong>NATIONALITY :</strong>&nbsp;&nbsp;<?php echo $row['race'];?>
                </p>
                <p>
                    <strong></strong><br>
                </p>
                <p>
                    <strong>ADDITIONAL INFORMATION:</strong>
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['smt'];?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['accessory'];?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['prostet'];?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row['defect'];?>
                </p>
                <p>
                    <strong></strong><br>
                </p>
                <p>
                    <strong>LAST SEEN :</strong>
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;&nbsp;Last seen on <?php echo $row['last_seen_date'];?> 
                    in <?php echo $row['lastloc'];?><br>
                    &nbsp;&nbsp;&nbsp;&nbsp;wearing <?php echo $row['cloth'];?>
                </p>
            </td>
        </tr>
        <tr>
        </tr>

        <tr>
            <td width="1285" colspan="2" valign="top">
                <h1><p align="center">
                    <strong>IF YOU HAVE INFORMATION PLEASE CONTACT</strong>
                </p>
                    <p align="center">
                    <strong><?php echo $row['phone'];?></strong>
                    <strong></strong>
                    </p>
                </h1>
            </td>
        </tr>
        <tr>
            <td style="font-size:8vw; background-color: red" width="1285" colspan="2" valign="top">
                <p  align="center">
                    <strong>HELP US PLEASE</strong>
                </p>
            </td>
        </tr>
    </tbody>
</table>
<p align="center">
    <strong></strong>
</p>
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





        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>

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
    </body>
</html>
