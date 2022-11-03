<?php require_once('includes/session.php');
       require_once('includes/conn.php');
       require_once('check.php');
    //    $year = date("Y", strtotime("+8 HOURS"));
    //    $conn = new mysqli("localhost", "root", "", "caaz") or die(mysqli_error());
    //    $qjan = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'Jan' && `filed_date`") or die(mysqli_error());
    //    $fjan = $qjan->fetch_array();
    //    $qfeb = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'Feb' && `filed_date`") or die(mysqli_error());
    //    $ffeb = $qfeb->fetch_array();
    //    $qmar = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'Mar' && `filed_date`") or die(mysqli_error());
    //    $fmar = $qmar->fetch_array();
    //    $qapr = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'apr' && `filed_date`") or die(mysqli_error());
    //    $fapr = $qapr->fetch_array();
    //    $qmay = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'may' && `filed_date`") or die(mysqli_error());
    //    $fmay = $qmay->fetch_array();
    //    $qjun = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'jun' && `filed_date`") or die(mysqli_error());
    //    $fjun = $qjun->fetch_array();
    //    $qjuly = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'july' && `filed_date`") or die(mysqli_error());
    //    $fjuly = $qjuly->fetch_array();
    //    $qaug = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'aug' && `filed_date`") or die(mysqli_error());
    //    $faug = $qaug->fetch_array();
    //    $qsep = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'sep' && `filed_date`") or die(mysqli_error());
    //    $fsep = $qsep->fetch_array();
    //    $qoct = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'oct' && `filed_date`") or die(mysqli_error());
    //    $foct = $qoct->fetch_array();
    //    $qnov = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'nov' && `filed_date`") or die(mysqli_error());
    //    $fnov = $qnov->fetch_array();
    //    $qdec = $conn->query("SELECT COUNT(*) as total FROM `reports` WHERE 'dec' && `filed_date`") or die(mysqli_error());
    //    $fdec = $qdec->fetch_array();
    //    $year = date("Y");
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
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script type="text/javascript">
$(function () {
    var chart;
    $(document).ready(function() {
        chart = new Highcharts.Chart({
            chart: {
                renderTo: 'container'
            },
            title: {
                text: 'Missing Person Reports 2022'
            },
            xAxis: {
                categories: ['January-March', 'April-June', 'July-September', 'October-December']
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
                    html: 'Total missing person reports',
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
                data: [<?php echo $male_sept;?>,<?php echo $male_oct;?>,<?php echo $male_nov;?>,<?php echo $male_dec;?>]
            }, {
                type: 'column',
                name: 'Resident (Female)',
                data: [<?php echo $female_sept;?>,<?php echo $female_oct;?>,<?php echo $female_nov;?>,<?php echo $female_dec;?>]
            }, {
                type: 'column',
                name: 'Children (0-17 y/old)',
                data: [<?php echo $children_sept;?>,<?php echo $children_oct;?>,<?php echo $children_nov;?>,<?php echo $children_dec;?>]
            },  {
                type: 'column',
                name: 'Adult (18-59 y/old)',
                data: [<?php echo $adult_sept;?>,<?php echo $adult_oct;?>,<?php echo $adult_nov;?>,<?php echo $adult_dec;?>]
            },  {
                type: 'column',
                name: 'Senior Citizen (60 y/old - above)',
                data: [<?php echo $senior_sept;?>,<?php echo $senior_oct;?>,<?php echo $senior_nov;?>,<?php echo $senior_dec;?>]
            },{
                type: 'spline',
                name: 'Average',
                data: [
                    <?php echo $q_one = ($male_sept + $female_sept + $children_sept + $adult_sept + $senior_sept)/(5);?>, 
                    <?php echo $q_one = ($male_oct + $female_oct + $children_oct + $adult_oct + $senior_oct)/(5);?>, 
                    <?php echo $q_one = ($male_nov + $female_nov + $children_nov + $adult_nov + $senior_nov)/(5);?>, 
                    <?php echo $q_one = ($male_dec + $female_dec + $children_dec + $adult_dec + $senior_dec)/(5);?>],
                marker: {
                	lineWidth: 2,
                	lineColor: Highcharts.getOptions().colors[3],
                	fillColor: 'white'
                }
            }, {
                type: 'pie',
                name: 'Total Missing Reports',
                data: [{
                    name: 'January-March',
                    y: <?php echo $report_sept;?>,
                    color: 'red' // Jane's color
                }, {
                    name: 'April-June',
                    y: <?php echo $report_oct;?>,
                    color: 'green' // John's color
                }, {
                    name: 'July-September',
                    y: <?php echo $report_nov;?>,
                    color: 'blue' // John's color
                }, {
                    name: 'October-December',
                    y: <?php echo $report_dec;?>,
                    color: 'yellow' // Joe's color
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
                    <!--  <!-- <?php
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
                    <?php
                    if($_SESSION['permission']==1 or  $_SESSION['permission']==2 ){
                       
                    
                    ?>
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
                            Pending Requests &nbsp;&nbsp;<?php echo $requests;?>
                        </a>
                    </li> 
                     
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
                                    <div class="huge"><?php echo $active_case;?></div>
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
        <!-- <script src="../Highcharts-2.3.5/js/highcharts.js"></script>
        <script src="../Highcharts-2.3.5/js/exporting.js"></script> -->
        <script src="http://code.highcharts.com/highcharts.js"></script>
        <script src="http://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
        
        <!-- <center>
        <select id="ddlYears"></select><br><br>
        </center> -->
        <!-- <center>
        <?php 
    $year_start  = 2000;
    $year_end = date('Y'); // current Year
    $user_selected_year = $year_end; // user date of birth year

    echo '<select id="year_dropdown" name="year_dropdown">'."\n";
    for ($i_year = $year_start; $i_year <= $year_end; $i_year++) {
        $selected = ($user_selected_year == $i_year ? ' selected' : '');
        echo '<option value="'.$i_year.'"'.$selected.'>'.$i_year.'</option>'."\n";
    }
    echo '</select>'."\n";
        ?><br><br>
        </center> -->
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



             $(document).ready(function () {
                $('#year_dropdown').on('click', function () {
                    var test = $( "#year_dropdown option:selected" ).text();
                    // console.log('test', test)
                })
             })
         </script>
<!-- dropdown year
         <script type="text/javascript">
    window.onload = function () {
        //Reference the DropDownList.
        var ddlYears = document.getElementById("ddlYears");
 
        //Determine the Current Year.
        var currentYear = (new Date()).getFullYear();
 
        //Loop and add the Year values to DropDownList.
        for (var i = currentYear; i >= 1950; i--) {
            var option = document.createElement("OPTION");
            option.innerHTML = i;
            option.value = i;
            ddlYears.appendChild(option);
        }
    };
</script> -->
    </body>
</html>
