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
                        <li class="nav-item"><a class="nav-link" href="home.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about2.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact2.php">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="#"> </a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/logout.php">Logout</a></li>
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


<div class="cards">
      <?php
    $sql= mysqli_query($mysqli,"SELECT * FROM reports ORDER BY id ASC");
    if (!empty($sql)) { 
        while ($row=mysqli_fetch_array($sql)) {
        
    ?>   
<div class="card">    
  <img src="admin/assets/image/missing_person/<?php echo $row["recentphoto"]; ?>" alt="Avatar" style="width:100%" class="photo">
  <div class="containers">
    <h4><b><?php echo $row["fullname"]; ?></b></h4> 
    <p>Architect & Engineer</p> 
  </div>
</div>
    <?php
        }
    }  else {
 echo "No Records.";

    }
    ?>
</div>



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
