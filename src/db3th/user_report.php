<?php 
session_start();
error_reporting(0);
include_once("config.php");
//DB conncetion

   $nid_bc=$_SESSION['nid_bc'];
$sql=mysqli_query($con,"select * from tblpatients where GovtIssuedId='$nid_bc'");
    $row=mysqli_num_rows($sql);   
    $result=mysqli_fetch_array($sql);
$sql1=mysqli_query($con,"select * from tbltestrecord where GovtIssuedId='$nid_bc'");

$sql2=mysqli_query($con,"select * from internationalpatients where GovtIssuedId='$nid_bc'");
    $row1=mysqli_num_rows($sql2);   
    $result1=mysqli_fetch_array($sql2);
$sql3=mysqli_query($con,"select * from internationaltestrecord where GovtIssuedId='$nid_bc'");
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
  <?php include "css/file-css/style.css" ?>
</style>
  <link href="css/file-css/bootstrap.min.css" rel="stylesheet">


   
<style type="text/css">
.label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>



</head>

<body id="page-top">
  
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

<section class="user-details">
    <div class="container">
        <div class="row" style="margin-top:100px">
        <div class="col-12">
          <div class="card shadow w-50 mx-auto">
            <h5 class="card-header text-center">User Information</h5>
        <table class="table   mx-auto table-bordered">
            
                <tbody>
                 
                <?php if($row>0){?>
                <tr>
                    <th>Full Name</th>
                    <td><?php echo $result['FullName'];?></td>
                </tr>
                <tr>
                    <th>Mobile Number</th>
                    <td><?php echo $result['MobileNumber'];?></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $result['DateOfBirth'];?></td>
                </tr>
                <tr>
                    <th>NID/Birth Certificate Number</th>
                    <td><?php echo $result['GovtIssuedId'];?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $result['FullAddress'];?></td>
                </tr>
                <tr>
                    <th>Taken Vaccine Dose</th>
                    <td><?php echo $result['VaccineDose'];?></td>
                </tr>
                <?php }?>
                <?php if($row1>0){?>
                <tr>
                    <th>Full Name</th>
                    <td><?php echo $result1['FullName'];?></td>
                </tr>
                <tr>
                    <th>Mobile Number</th>
                    <td><?php echo $result1['MobileNumber'];?></td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td><?php echo $result1['DateOfBirth'];?></td>
                </tr>
                <tr>
                    <th>NID/Birth Certificate Number</th>
                    <td><?php echo $result1['GovtIssuedId'];?></td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td><?php echo $result1['FullAddress'];?></td>
                </tr>
                <tr>
                    <th>Taken Vaccine Dose</th>
                    <td><?php echo $result1['VaccineDose'];?></td>
                </tr>
                <?php }?>
            </tbody>
            <?php ?>
</table>
</div>
</div>
</div>
    </div>
</section>
<section class="test-details">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="text-center mt-5">All Test Details</h1>
        <hr class="w-50 mx-auto">
        <div style="padding:5% 0;overflow-x:auto">
        <table class="table table-bordered" >
          <tbody>
            <tr>
              <th>Test No</th>
              <th>Registration Date</th>
              <th>Test Time</th>
              <th>Details</th>
</tr>
<tr>
  <?php while($res=mysqli_fetch_array($sql1)){?>
    <td><?php echo $res['OrderNo']?></td>
    <td><?php echo $res['RegistrationDate']?></td>
    <td><?php echo $res['TestTimeSlot']?></td>
    <td><a href="test_details.php?test_id=<?php echo $res['OrderNo']?>" class="border details">View Details</a></td>
        
</tr>
<?php } ?>
</tbody>
</table>
  </div>
</div>
</div>
</div>
</section>


    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

   
</body>

</html>