<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Covid-19 Testing Management System | Test Details</title>

    <!-- Custom fonts for this template-->
    <link href="css/timeline.min.css">
    <style>
       <?php include_once("css/timeline.min.css") ?>
      <?php include_once("css/file-css/style.css")?>
      </style>
    <link href="css/bootstrap.min.css">
    
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
<style type="text/css">
label{
    font-size:16px;
    font-weight:bold;
    color:#000;
}

</style>


</head>
   
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
</section>
<script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/timeline.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
<script >
  

  timeline(document.querySelectorAll('.timeline'), {
      forceVerticalMode: 700,
      mode: 'horizontal',
      verticalStartPosition: 'left',
      visibleItems: 3,
      moveItems: 1

    });
  //For report file
  $('#reportfile').hide();
  $(document).ready(function(){
  $('#status').change(function(){
  if($('#status').val()=='Delivered')
  {
  $('#reportfile').show();
  jQuery("#report").prop('required',true);  
  }
  else{
  $('#reportfile').hide();
  }
})}) 
</script>
</body>
</html>
