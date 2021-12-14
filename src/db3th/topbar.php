<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
<div class="container">
<!-- Sidebar Toggle (Topbar) -->
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

<!-- Topbar Search -->
<?php if($_SESSION['aid']):?>

<!-- Topbar Navbar -->
<ul class="navbar-nav text-center" style>

    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
    <!-- <li class="nav-item dropdown no-arrow d-sm-none">
        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-search fa-fw"></i>
        </a> -->
        <!-- Dropdown - Messages -->
        <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
            aria-labelledby="searchDropdown">
            <form class="form-inline mr-auto w-100 navbar-search">
                <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small"
                        placeholder="Search for..." aria-label="Search"
                        aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </li> -->
<?php $query=mysqli_query($con,"select * from tbltestrecord where ReportStatus is null");
$count=mysqli_num_rows($query);


?>
    <!-- Nav Item - Alerts -->
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active " href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge position-absolute top-30 start-50 translate-middle  rounded-pill bg-danger" ><?php echo $count;?></span>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <h6 class="dropdown-header" style="    background-color: #4e73df;
    border: 1px solid #4e73df;
    margin-bottom:0;
    padding-bottom: 0.75rem;
    color: #fff;">
                                    Alerts Center
                                </h6>
                                <?php if($count>0){
while($row=mysqli_fetch_array($query)){
                                    ?>
            <li><a class="dropdown-item d-flex align-items-center" href="test-details.php?tid=<?php echo $row['id'];?>&&oid=<?php echo $row['OrderNo'];?>">
                                    <div class="mr-5" style="margin-right:3%">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500"><?php echo $row['RegistrationDate'];?></div>
                                        <span class="font-weight-bold">A new test received # <?php echo $row['OrderNo'];?></span>
                                    </div>
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                                <?php }} else{?>
                                <p style="color:red">No record found</p>
                            <?php } ?>
            <li> <a class="dropdown-item text-center small text-gray-500" href="new-test.php">Show All Alerts</a>
                           </li>
            
          </ul>
        </li>

 <?php $aid=$_SESSION['aid'];
 $sql=mysqli_query($con,"select * from tbladmin where ID='$aid'");
 $result=mysqli_fetch_array($sql);?>

    
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle active" href="" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $result['AdminName']?>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item " href="user.php">New User</a></li>
            <li><a class="dropdown-item" href="registered.php">Registered User</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="patient-search-report.php">Find Report</a></li>
          </ul>
        </li>

</ul>
<?php endif;?>
</div>
</nav>