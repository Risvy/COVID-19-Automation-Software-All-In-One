<?php
session_start();
include('config.php');
if(isset($_POST['login']))
  {
    $uname=$_POST['username'];
    $Password=md5($_POST['inputpwd']);
    $query=mysqli_query($con,"select ID from tbladmin where  AdminuserName='$uname' && Password='$Password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      $_SESSION['aid']=$ret['ID'];
     header('location:dashboard.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";          
    }
  }
  ?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Automation testing and report management application</title>

   
    <style>
  <?php include "css/file-css/style.css" ?>
</style>
  <link href="css/file-css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">



<section>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
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
          <a class="nav-link dropdown-toggle " href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
          <a class="nav-link active" aria-current="page" href="login.php">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
</section>
   <div class="main-form">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-12">
 
                

                    
                        <!-- Nested Row within Card Body -->
                        <div class="form-box">
<form name="login" method="post">
                        <div class="row">
                            
                            <div class="col-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Admin Login Form</h1>
                                    
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" 
                                                id="username" placeholder="Enter username" required="true">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="inputpwd" 
                                                id="inputpwd" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-user rounded" value="login">
</div>    
                      </form>
                                 
                                    

                        
                                </div>
                            </div>
                        </div>

</form>
</div>

            </div>

        </div>

    </div>
</div>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

   

</body>

</html>