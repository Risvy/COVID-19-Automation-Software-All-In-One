<?php 
session_start();
error_reporting(0);
//DB conncetion
include_once('config.php');

if(isset($_POST['submit'])){
//getting post values
$fname=$_POST['fullname'];
$mnumber=$_POST['mobilenumber'];
$dob=$_POST['dob'];
$govtid=$_POST['govtissuedid'];
$passportno=$_POST['passportno'];
$img=basename($_FILES["filename"]["name"]);
$target="files/".$img;
$tmp_name=$_FILES['filename']['tmp_name'];
$address=$_POST['address'];
$vaccine=$_POST['take_vaccine'];
$testtype=$_POST['testtype'];
$timeslot=$_POST['testtime'];
$orderno= mt_rand(100000000, 999999999);
$query="insert into internationalpatients(FullName,MobileNumber,DateOfBirth,GovtIssuedId,PassportNumber,imgpath,FullAddress,VaccineDose,OrderNumber) values('$fname','$mnumber','$dob','$govtid','$passportno','$img','$address','$vaccine','$orderno');";
$query1="insert into internationaltestrecord(GovtIssuedId,PassportNumber,TestType,TestTimeSlot,OrderNumber) values('$govtid','$passportno','$testtype','$timeslot','$orderno');";
$result = mysqli_multi_query($con, $query);
$result1=mysqli_multi_query($con,$query1);
if ($result) {
echo '<script>alert("Your test request submitted successfully.")</script>';
  echo "<script>window.location.href='international-patient.php'</script>";
} 
else {
    
    echo "<script>alert('Something went wrong. Please try again.');</script>";  
echo "<script>window.location.href='international-patient.php'</script>";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" >
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Automation testing and report management application</title>
  
  <link href="css/file-css/bootstrap.min.css" rel="stylesheet">
  <style>
  <?php
  include "css/file-css/style.css"
   ?>
</style>
  
</head>

<body id="page-top">
<style>

</style>


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
          <a class="nav-link active" aria-current="page" href="international-patient.php">International Travel Test</a>
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


<section style="">
    <div class="container" style="margin-top:60px">
        <div class="row">
            <div class="col-12">
            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Instructions</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="text-left">
                                        <li>Only RT-PCR Report is allowed in International Flight</li>
                                        <li>Please fill this form one day before your test day</li>
                                        <li>Stay at home after doing your covid test till travel day.</li>
                                    </ul>
                                </div>
                
            </div>
            </div>

        </div>
    </div>
</section>
<section>
    <div class="container">
    <div id="wrapper">


        
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

       
        <div class="container">
    
            
          
<form name="newtesting" method="post" enctype="multipart/form-data" style="display:block;width:100%">
<div class="row">

                <div class="col-lg-6">

                   
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">User Details</h6>
                        </div>
                        <div class="card-body">
                <div class="form-group">
                    <label class="label">Full Name(As in Passport)</label>
                                    <input type="text" class="form-control" id="fullname" name="fullname"  placeholder="Enter your full name..." pattern="[A-Za-z ]+" title="letters only" required="true">
                                </div>
                                <div class="form-group">
                                     <label class="label">Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" required="true">
                                </div>
                                <div class="form-group">
                                     <label class="label">Mobile Number</label>
                          <input type="text" class="form-control" id="mobilenumber" name="mobilenumber" placeholder="Please enter your mobile number" pattern="[0-9]{11}" title="11 numeric characters only" required="true" onBlur="mobileAvailability()">
                                        <span id="mobile-availability-status" style="font-size:12px;"></span>
                                </div>
                                
                                <div class="form-group">
                                       <label class="label">NID/Birth Certificate Number</label>
                                    <input type="text" class="form-control" id="govtissuedid" name="govtissuedid" placeholder="Please enter your NID/Birth Certificate Number" required="true">
                                </div>
                                <div class="form-group">
                                       <label class="label">Passport Number</label>
                                    <input type="text" class="form-control" id="passportno" name="passportno" placeholder="Please enter your Passport Number" required="true">
                                </div>
                                
                                <div class="form-group">
                                    <label class="label">Submit your Passport copy</label>
                                    <input type="file" id="myFile" name="filename">
                                </div>
                       <div class="form-group">
                                      <label class="label">Address</label>
                                    <textarea class="form-control" id="address" name="address" required="true" placeholder="Enter your full address here"></textarea>
                                </div>
                        <div class="form-group">
                            <label class="label">How many vaccine dose you have taken?</label>
                           
                            <input type="radio" value="one" name="take_vaccine" id="one">
                            <label for="one" style="color:black">One</label>
                            <input type="radio" value="two" name="take_vaccine" id="two">
                            <label for="two" style="color:black">Two</label>
                            <input type="radio" value="none" name="take_vaccine" id="none" checked>
                            <label for="none" style="color:black">None</label>

</div>
                        
</div>

                </div>
</div>
                <div class="col-lg-6">

                   <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Testing Details</h6>
                        </div>
                        <div class="card-body">
                     <div class="form-group">
                                      <label>Test Method</label>
                                      <select class="form-control" id="testtype" name="testtype" readonly="true">
                                    <option value="RT-PCR">RT-PCR</option>
                                        
                                      </select>
                                </div>

                                              <div class="form-group">
                                    <label>Time Slot for Test</label>
                         <input type="datetime-local" class="form-control" id="testtime" name="testtime" class="form-control">                                        
                     </div>
               <div class="form-group">
                         <input type="submit" class="btn btn-primary btn-user btn-block" name="submit" id="submit">                           
                     </div>

                        </div>
                    </div>
               

                </div>

            </div>
</form>

        </div>
      

    </div>
    



</div>

</div>

    </div>
</section>
   <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
</body>

</html>
