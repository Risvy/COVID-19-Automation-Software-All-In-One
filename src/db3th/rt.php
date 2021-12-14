<?php 
session_start();
include_once('config.php');
if(isset($_POST['search'])){
    $nid_bc=$_POST['nid_bc'];
    $sql=mysqli_query($con,"select * from tblusers where GovtIssuedId='$nid_bc';");
    $row=mysqli_num_rows($sql);
    $result=mysqli_fetch_array($row);
    if($row<=0){
        $_SESSION['error']="Sorry This NID/Birth Certificate Number is not Registered";
        header('Location:registered.php');
        return;
    }
    else{
       $_SESSION['success']="Success";
       header('Location:registered.php');
       return;
    }
}

/*if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];
$mnumber=$_POST['mobilenumber'];
$dob=$_POST['dob'];
$govtid=$_POST['govtissuedid'];
$address=$_POST['address'];
$vaccine=$_POST['take_vaccine'];
$testtype=$_POST['testtype'];
$timeslot=$_POST['birthdaytime'];
$orderno= mt_rand(100000000, 999999999);
$query="insert into tblusers(FullName,MobileNumber,DateOfBirth,GovtIssuedId,FullAddress,VaccineDose) values('$fname','$mnumber','$dob','$govtid','$address','$vaccine');";
$result1 = mysqli_multi_query($con, $query);
var_dump($query);
if ($result1) {
echo '<script>alert("Your test request submitted successfully.")</script>';
  echo "<script>window.location.href='prc.php'</script>";
} 
else {
    
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='prc.php'</script>";
}
}*/
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

    <!-- Custom fonts for this template-->
   
<style>
<?php include "css/style.css" ?>
</style>
  <link href="css/bootstrap.min.css" rel="stylesheet">


   
<style type="text/css">
.label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>



</head>

<body id="page-top">
  
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
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          User
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item " href="user.php">New User</a></li>
            <li><a class="dropdown-item" href="registered.php">Registered User</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Find Report</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login.php">Admin</a>
        </li>
      </ul>
       </div>
  </div>
</nav>




<section class="enter-nid">
    <div class="container">
        <div class="form-box">
            <form name="search_info" method="post" >
                <div class="row search_info">
                   <div class="col-12 " style="margin-top:20%">
                   <?php
                   if(!isempty($_SESSION['error'])){
                   echo '<p class="alert">Sorry This NID/Birth Certificate Number is not Registered<p>';
                   unset($_SESSION['error']);   
                 }
                  var_dump($result);
                   ?>
                   
                        <div class="p-5 border">
                            <form class="user">
                            <p class="text-info">*If you are already registered and want to do a test again then search your NID/Birth Certificate and give test details.</p>            
                            <hr>
                                <div class="form-group">
                                    <label for="nid_bc" class="fw-bold">NID/Birth Certificate Number</label>
                                    <input type="text" class="form-control" name="nid_bc" id="nid_bc" placeholder="Your NID/Birth Certificate Number">
                                </div>
                                <div class="form-group">
                                <input type="submit" name="search" class="btn btn-primary btn-search rounded " value="Search">
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

   
</body>

</html>