<?php 
session_start();
error_reporting(0);
include_once("includes/config.php");
//DB conncetion
$tst_no=$_GET['test_id'];
$sql=mysqli_query($con,"select * from tbltestrecord where OrderNumber='$tst_no'");
$row=mysqli_fetch_array($sql);
$nid_bc=$row['GovtIssuedId'];
$sql1=mysqli_query($con,"select * from tblpatients where GovtIssuedId='$nid_bc'");
    $row1=mysqli_num_rows($sql1);   
    $result=mysqli_fetch_array($sql1);
$sql2=mysqli_query($con,"select * from tblreporttracking where OrderNumber='$tst_no");
$result1=mysqli_fetch_array($sql2);
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
        <?php include "css/timeline.min.css" ?>
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

            <li><a class="dropdown-item" href="find_report.php">Find Report</a></li>
            
           

          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="login.php">Admin</a>
        </li>
      </ul>
       </div>
  </div>
</nav>




<section class="user-test-details">
    <div class="container">
        <div class="row" style="margin-top:10%">
            <div class="col-md-6">
            <div class="card shadow  mx-auto">
            <h5 class="card-header text-center">User Information</h5>
        <table class="table  w-100 table-bordered" cellspacing="0">
            
                <tbody>
                 
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
            </tbody>
            <?php ?>
</table>
</div>
</div>
<div class="col-md-6">
<div class="card shadow  mx-auto">
            <h5 class="card-header text-center">Test Information</h5>
        <table class="table   mx-auto table-bordered">
            <tbody>
                <tr>
                    <th>Test Number</th>
                   <td><?php echo $row['OrderNo']?></td>
</tr>
<tr>
                    <th>Test Method</th>
                   <td><?php echo $row['TestType']?></td>
</tr>
<tr>
                    <th>Test Date</th>
                   <td><?php echo $row['TestTimeSlot']?></td>
</tr>
<tr>
                    <th>Test Status</th>
                   <td><?php  echo ($row['ReportStatus']==NULL)?"Not Processed Yet":$row['ReportStatus']?></td>
</tr>

<tr> 
                <?php if($row['AssigntoName']!=NULL){?>
                    <th>Assigned To Employee</th>
                   <td><?php  echo $row['AssigntoName']?></td>
                   <?php } ?>
</tr>
<tr> 
                <?php if($row['AssignedTime']!=NULL){?>
                    <th>Assigned Time</th>
                   <td><?php  echo $row['AssignedTime']?></td>
                   <?php } ?>
</tr>
<tr> 
                <?php if($row['ReportStatus']=='Delivered'){?>
                    <td>Report</td>
                   <td><?php  echo $row['AssignedTime']?></td>
                   <?php } ?>
</tr>
</tbody>
</table>
</div>
</div>
</div>
</div>
                </section>
<section class="my-5 track-history"> 
    <div class="container">
        <div class="card shadow py-3">
        <h5 class="card-header text-center">Test Tracking History</h5>
            <div style="padding:6% 0">
                <div class="timeline">
                    <div class="timeline__wrap">
                        <div class="timeline__items">
                            <div class="timeline__item">
                                <div class="timeline__content">
                                <h2>On The Way For Collection</h2>
                                <p><?php echo $result1['ReportStatus']=='Assigned'?$result1['PostingTime']:"Not Processed Yet";?></p>

                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                <h2>Sample Collected</h2>
                                </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                <h2>Sample Sent To Lab</h2>
                               </div>
                            </div>
                            <div class="timeline__item">
                                <div class="timeline__content">
                                <h2>Delivered</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section

    <!-- Bootstrap core JavaScript-->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/timeline.min.js"></script>
   <!-- Bootstrap core JavaScript -->
   <script>
     timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',
      visibleItems: 3,
      moveItems: 1

    });

     

     </script>

   
</body>

</html>