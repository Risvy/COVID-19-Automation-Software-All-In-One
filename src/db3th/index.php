<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="css/formStyle.css">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Automation testing and report management application</title>
  
  <link href="css/file-css/bootstrap.min.css" rel="stylesheet">
  <style>
  <?php
  //  include "css/file-css/style.css"
   ?>
</style>
<style>
body{
  background-color:	white;
}
form{
  margin-top:70px;
}
</style>
  
</head>

<body id="page-top" >




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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="symptoms.php">Symptoms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="prevention.php">Prevention</a>
        </li>
        
       
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
<!-- 
  <section class="welcome">
      <div class="container align-self-center text-center"> 
      <div class="row">
        <div class="col-12">
          <div class="wel-txt">
          <h1 class="" style="color:red">Welcome to COVID-19 Testing<br> and Report Management</h1>         
         
</div>
</div>
</div>
</div>
</section> -->


<section class="risk" >
  <div class="container">
<!--     
  <form>

    <div class="row">
      
      <h3>Test Your risk of COVID-19</h3>
      <p>We can assume your </p>
      <div class="col-md-6">
        <label class="fw-bold">What is your temparature?</label>
      <select class="form-select"  aria-label="Default select example">
  <option selected>Temparature</option>
  <option value="1">Normal</option>
  <option value="2">Medium</option>
  <option value="3">High</option>
</select>
</div>
<div class="col-md-6">
        <label class="fw-bold">What is your Age?</label>
      <select class="form-select"  aria-label="Default select example">
  <option selected>Temparature</option>
  <option value="1">Normal</option>
  <option value="2">Medium</option>
  <option value="3">High</option>
</select>
</div>
</form> -->




<form name="covidForm" method="POST" action="process.php" onsubmit="return validateForm()" class="margin-top:100px">
    
<h3>Covid-19 Risk Assesment</h3> 
<i> <p style="color: red;"> Measure your personal Coronavirus risk below </p> </i>  <br> <br>
<div >
        <label for="name">Name:</label> <input type="text" name="name" placeholder="Your Name" required/>
    </div>
    <br>
    <div >
        <label for="age" class="text-left">Age:</label> 
        <input  type="number" name="age" min="1" max="120" placeholder="Age" required/>
    </div>
    <br>
    <div>
        <label for="name">Email:</label> <input type="email" name="email" placeholder="Email" required/>
    </div>
    <div>
        <p>Reason to Visit:</p>
        <input type="radio" name="reason" id="consult" value="consult" required/> <label for="consult">Consult</label>
        <input type="radio" name="reason" id="emergency" value="emergency"/> <label for="emergency">Emergency</label>
        <input type="radio" name="reason" id="enquiry" value="enquiry"/> <label for="enquiry">Enquiry</label>
    </div>
    <div>
        <p>Have you had any of the following symptoms in the past 14 days? (Check all that apply):</p>
        <input type="checkbox" name="symptoms[]" id="cold" value="cold"/> <label for="cold">Cold</label>
        <input type="checkbox" name="symptoms[]" id="cough" value="cough"/> <label for="cough">Cough</label>
        <input type="checkbox" name="symptoms[]" id="fever" value="fever"/> <label for="fever">Fever</label>
        <input type="checkbox" name="symptoms[]" id="breathing problems" value="breathing problems"/> <label
                for="breathing problems">Difficulty breathing</label>
        <input type="checkbox" name="symptoms[]" id="sore throat" value="sore throat"/> <label for="sore throat">Sore
            throat</label>
    </div>
    <div>
        <p>Have you been in contact with anyone who has had any of the above symptoms?</p>
        <input type="radio" name="SickRelative" id="yes" value="yes" required/> <label for="yes">Yes</label>
        <input type="radio" name="SickRelative" id="no" value="no"/> <label for="no">No</label>
    </div>
    <div>
        <p>Have you been in contact with anyone who has tested positive for Covid-19?</p>
        <input type="radio" name="CovidPositiveRelative" id="yes" value="yes" required/> <label for="yes">Yes</label>
        <input type="radio" name="CovidPositiveRelative" id="no" value="no"/> <label for="no">No</label>
    </div>
    <div>
        <p>Have you tested negative for Covid-19 in the past 14 days?</p>
        <input type="radio" name="CovidNegative" id="yes" value="yes"/> <label for="yes">Yes</label>
        <input type="radio" name="CovidNegative" id="no" value="no"/> <label for="no">No</label>
    </div>
    <br>
    <div id="message">
        <label for="message">If you have travelled beyond city limits in the past one month, please specify the time and
            place: <br> </label>
        <textarea name="travel"></textarea>
    </div>
    <br>
    <div>
        <input type="radio" name="declaration" id="declaration" value="declaration" required/> <label for="declaration">I
            acknowledge that the information I have provided here is accurate and complete.</label>
    </div>
    <br>
    <div><input type="submit" name="submit" value="Submit"/></div>
</form>
      
</div>
</div>
</section>
   <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
</body>

</html>
