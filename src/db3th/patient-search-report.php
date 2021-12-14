<?php session_start();
//DB conncetion
include_once('includes/config.php');
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-19 TMS | Search Report</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/file-css/bootstrap.min.css" rel="stylesheet">
    
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
   
}




</style>
</head>

<body id="page-top">

<section>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark  fixed-top" style="background-color:black">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav" style="margin-left:auto;">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="symptoms.php">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="prevention.php">Prevention</a>
        </li>
        
       
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          User
          </a>
          
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="user.php">New User</a></li>
            <li><a class="dropdown-item" href="registered.php">Registered User</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="patient-search-report.php">Find Report</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="international-patient.php">International Travel Test</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="http://localhost:3000/">Vaccine Authenticity Check</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login.php">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>

    <!-- Page Wrapper -->
    <div id="wrapper">

<?
// php include_once('includes/sidebar.php');
?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
          <?
          php include_once('includes/topbar.php');
          ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                   <center><h1 class="h3 mb-4 text-gray-800">Search Report Here :     </h1></center> 

<form  method="post" action="patient-report.php">
  <div class="row col d-flex justify-content-center">

                        <div class="col-lg-6>

                            <!-- Basic Card Example -->
                            <div class="card shadow mb-4">
                          
                                <div class="card-body">
                       <div class="form-group">
                                            <label>Search By   NID/Birth Certificate or Order Number</label>
                                            <input type="text" class="form-control" id="searchdata"  name="searchdata" required="true" placeholder="Enter  NID or Order Number">
                                        </div>


<div class="form-group">
                                 <input type="submit" class="btn btn-primary btn-user btn-block" name="search" value="Search">                           
                             </div>

                                    </div>
                                </div>
                            </div>
                        </div>
</form>



                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->

<a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>



    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>



</body>
</html>
