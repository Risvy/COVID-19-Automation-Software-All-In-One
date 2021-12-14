<?php
include_once("includes/config.php");
if(isset($_POST['submit'])){
    $reportfile = $_FILES ['filename']['name']; 
    $extension = substr($reportfile,strlen($reportfile)-4,strlen($reportfile));
// allowed extensions
$allowed_extensions = array(".pdf");
// Validation for allowed extensions .in_array() function searches an array for a specific value.
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only doc / pdf format allowed');</script>";
}
else
{
    $newreportfile=md5($reportfile).time().$extension;
    move_uploaded_file($_FILES["filename"]["tmp_name"],"passportfiles/".$newreportfile);

    $query = "insert into img(path) values('$newreportfile')";
    $result = mysqli_query($con, $query);
    
if($result){
     echo '<script>alert("image added successfully")</script>';
}
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


    <form method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="label">Submit your Passport copy</label>
                                    <input type="file" id="myFile" name="filename">
                                    <input type="submit" name="submit">
                                </div>
</form>

         <?php
       $result1=mysqli_query($con,"select * from img");
        while($row=mysqli_fetch_array($result1)){
             ?>
             <a href="passportfiles/<?php echo $row['path']?>" target="_blank">Copy</a>

      <?php  }?>
                
   <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

  
</body>

</html>
