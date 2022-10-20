<?php require_once('includes/session.php');
       require_once('includes/conn.php');
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
                    <li class="active">
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
                                <li><a href="#"><?php require_once('includes/name.php');?></a></li>
                                <li ><a href="logout.php"><i class="fa fa-power-off"> Logout</i></a></li>
           
                            </ul>
                        </div>
                    </div>
                </nav>

            <div class="line"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $users;?></div>
                                    <div>Total Number Of Users</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 g-danger">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $reports;?></div>
                                    <div>Total Number Of Active Cases</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 ">
                    <div class="panel panel sammac sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $requests;?></div>
                                    <div>Total Number Of Pending Request</div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 g-danger">
                    <div class="panel panel strover sammacmedia">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-4">
                                    <i class="fa fa-link fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $archives;?></div>
                                    <div>Total Number Of Archive</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="line"></div>
<!-- Start of Report Graph -->
        <div class="row">
        <script src="../Highcharts-2.3.5/js/highcharts.js"></script>
        <script src="../Highcharts-2.3.5/js/exporting.js"></script>
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
        </div>
<!-- End of Report Graph -->               

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
