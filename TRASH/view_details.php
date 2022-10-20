<?php


      require_once('admin/includes/session.php');
      require_once('admin/includes/conn.php');

    


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Scrolling Nav - Start Bootstrap Template</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="index/css/styles.css" rel="stylesheet" />
        <link href="index/css/card.css" rel="stylesheet" />
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
                        <li class="nav-item"><a class="nav-link" href="login-form-03/login.php">Login</a></li>
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

        <!-- Start of Missing Person section -->
        <section class="" id="services">




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



        </section>
        <!-- End of Missing Person section -->

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
