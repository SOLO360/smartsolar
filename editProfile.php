<?php 
include 'session.php';
$id = base64_decode($_GET['id']);
$sql1 = "SELECT * FROM customers WHERE id='$id'";
$rn = mysqli_query($conn, $sql1);
$row = mysqli_fetch_assoc($rn); 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

  </head>

  <body class="bg-gradient-primary" id="page-top">


      <!-- Page Wrapper -->
      <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="sidebar-brand-icon rotate-n-15">
              <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
            <a class="nav-link" href="dashboard.php">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Interface
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
              <i class="fas fa-fw fa-list"></i>
              <span>Customers Information</span>
            </a>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">customers:</h6>
                <a class="collapse-item" href="customerinfo.php"><i class="fas fa-fw fa-users"></i> View Customers</a>
                <a class="collapse-item" href="addcustomer.php"><i class="fas fa-fw fa-user-plus"></i> Add Customers</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
              <i class="fas fa-fw fa-coins"></i>
              <span>Payments</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Customer Payments</h6>
                <a class="collapse-item" href="addpayments.php"><i class="fa fa-cash-register"></i>Add Payments</a>
                <a class="collapse-item" href="viewPayments.php"><i class="fa fa-list"></i> View Payments</a>
              </div>
            </div>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
            Addons
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
              <i class="fas fa-fw fa-folder"></i>
              <span>Pages</span>
            </a>
            <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
              <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Login Screens:</h6>
                <a class="collapse-item" href="login.html">Login</a>
                <a class="collapse-item" href="register.html">Register</a>
                <a class="collapse-item" href="forgot-password.php">Forgot Password</a>
                <div class="collapse-divider"></div>
                <h6 class="collapse-header">Other Pages:</h6>
                <a class="collapse-item" href="404.html">404 Page</a>
                <a class="collapse-item" href="blank.html">Blank Page</a>
              </div>
            </div>
          </li>

          <!-- Nav Item - Charts -->
          <li class="nav-item">
            <a class="nav-link" href="charts.html">
              <i class="fas fa-fw fa-chart-area"></i>
              <span>Charts</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="tables.html">
              <i class="fas fa-fw fa-table"></i>
              <span>Tables</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

          <!-- Main Content -->
          <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                  <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                  <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                  <li class="nav-item dropdown no-arrow d-sm-none">
                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-search fa-fw"></i>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                      <form class="form-inline mr-auto w-100 navbar-search">
                        <div class="input-group">
                          <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                          <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                              <i class="fas fa-search fa-sm"></i>
                            </button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </li>

                  <!-- Nav Item - Alerts -->
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-bell fa-fw"></i>
                      <!-- Counter - Alerts -->
                      <span class="badge badge-danger badge-counter">3+</span>
                    </a>
                    <!-- Dropdown - Alerts -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                      <h6 class="dropdown-header">
                        Alerts Center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500">December 12, 2019</div>
                          <span class="font-weight-bold">A new monthly report is ready to download!</span>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500">December 7, 2019</div>
                          $290.29 has been deposited into your account!
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="mr-3">
                          <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                          </div>
                        </div>
                        <div>
                          <div class="small text-gray-500">December 2, 2019</div>
                          Spending Alert: We've noticed unusually high spending for your account.
                        </div>
                      </a>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                    </div>
                  </li>

                  <!-- Nav Item - Messages -->
                  <li class="nav-item dropdown no-arrow mx-1">
                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-envelope fa-fw"></i>
                      <!-- Counter - Messages -->
                      <span class="badge badge-danger badge-counter">7</span>
                    </a>
                    <!-- Dropdown - Messages -->
                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                      <h6 class="dropdown-header">
                        Message Center
                      </h6>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                          <div class="status-indicator bg-success"></div>
                        </div>
                        <div class="font-weight-bold">
                          <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                          <div class="small text-gray-500">Emily Fowler · 58m</div>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                          <div class="status-indicator"></div>
                        </div>
                        <div>
                          <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                          <div class="small text-gray-500">Jae Chun · 1d</div>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                          <div class="status-indicator bg-warning"></div>
                        </div>
                        <div>
                          <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                          <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                        </div>
                      </a>
                      <a class="dropdown-item d-flex align-items-center" href="#">
                        <div class="dropdown-list-image mr-3">
                          <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                          <div class="status-indicator bg-success"></div>
                        </div>
                        <div>
                          <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                          <div class="small text-gray-500">Chicken the Dog · 2w</div>
                        </div>
                      </a>
                      <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                    </div>
                  </li>

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - User Information -->
                  <li class="nav-item dropdown no-arrow">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['user'];  ?></span>
                      <img class="img-profile rounded-circle" src="img/<?php echo $fetch['image']; ?>">
                    </a>
                    <!-- Dropdown - User Information -->
                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="profile.php">
                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                        Profile
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                        Settings
                      </a>
                      <a class="dropdown-item" href="#">
                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                        Activity Log
                      </a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                        Logout
                      </a>
                    </div>
                  </li>
                </ul>
              </nav>
              <!-- End of Topbar -->

<body class="bg-gradient-primary">
 
   <div class="container">

      <div class="card o-hidden border-0 shadow- my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->
          <div class="row">
            <!--<div class="col-lg-5 d-none d-lg-block bg-register-image"></div>-->
          <!--  <div class="col-sm-7">-->
              <div class="pl-5 pt-5">
<?php
include 'includes/conection.php';
if (isset($_POST['update'])) {
  $fname = $_POST['fname'];
  $mname = $_POST['mname'];
  $lname = $_POST['lname'];
  $adres = $_POST['adres'];
  $dob = $_POST['dob'];
  $phone = $_POST['phone'];
  $jinsia = $_POST['gender'];
  $id_type = $_POST['id_type'];
  $id_no = $_POST['id_no'];
  $bulb = $_POST['bulb'];
  $chaji = $_POST['charger'];
  $clerk = $_POST['clerk'];
  $regdate= $_POST['regdate'];
  $sdate= $_POST['sdate'];
  $stype= $_POST['stype'];
  $status = $_POST['status'];
  $amount = $_POST['amount'];
  $mwisho = $_POST['enCdate'];

  $error=array();

  $file_name=$_FILES['picture']['name'];

  $file_size=$_FILES['picture']['size'];
 $file_tmp=$_FILES['picture']['tmp_name'];
 $file_type=$_FILES['picture']['type'];

 $file_ext=strtolower(end(explode('.',$_FILES['picture']['name'])));
 $expense=array("jpg","png","jpeg","pdf");



 $picture=addslashes($_FILES['picture']['name']);

 if(in_array($file_ext,$expense)==false)
  {
    $error[]="this formart is not supported use ";
  }
 if($file_size > 3065759)
 {
   $error[]="limit exceed try again ";
 }
 if(empty($error)==true)
 {
  if ($chaji == ''){
    $chaji = 'no-charger';
    $regdate = $sdate;
  }elseif ($stype == 'Company') {
    $mwisho = date('Y-m-d', strtotime(' + 18250 days',time()));
    $regdate = $sdate;
  }else{
    $regdate = $sdate;
  }


    $sql = "UPDATE customers SET fname = '$fname' ,mname='$mname',lname='$lname',addres='$adres',dob='$dob',phone='$phone',gender='$jinsia',id_card_type='$id_type',id_card_no='$id_no',bulb_no='$bulb',charger='$chaji',clerk_name='$clerk',reg_date='$regdate',s_date='$sdate',service_type='$stype',status='$status',image='$file_name',cont_end='$mwisho',amount='$amount' WHERE id = '$id'";
    
    $rn = mysqli_query($conn, $sql);
  

   if($rn){
      move_uploaded_file($file_tmp,"img/".$file_name);
      header("refresh:2, url=profileCustomer.php");
      echo '<div class="alert alert-success"><a class="close" data-dismiss="alert">&times;</a>Update Successfully</div>';
        }else{
           echo '<div class="alert alert-danger"><a class="close" aria-label="close" data-dismiss="alert">&times;</a>Failed to Update</div>';
        }
                
}
}
?>
                <div class="text-center">
                  <h1 class="h4 text-gray-900 mb-4">Add New Customer</h1>
                </div>
                <form class="user" method="POST" action='' enctype="multipart/form-data">
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" class="form-control " id="exampleFirstName" placeholder="First Name" name="fname" value="<?php echo $row['fname']; ?>"required >
                    </div>
                    <div class="col-sm-4 mb-1">
                      <input type="text" class="form-control " id="exampleLastName" placeholder="Middle Name" name="mname" value="<?php echo $row['mname']; ?>"required>
                    </div>
                    <div class="col-sm-4 mb-1">
                      <input type="text" class="form-control " id="exampleLastName" placeholder="Last Name" name="lname" value="<?php echo $row['lname']; ?>"required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" class="form-control " id="exampleFirstName" placeholder="Address" name="adres" value="<?php echo $row['addres']; ?>"required>
                    </div>
                    <div class="col-sm-4 mb-1">
                      <input type="date" class="form-control " id="exampleLastName" placeholder="Date Of Birth" name="dob" value="<?php echo $row['dob']; ?>"required>
                    </div>
                    <div class="col-sm-4">
                      <input type="text" class="form-control " id="exampleLastName" placeholder="Phone" name="phone" required pattern="[0-9]{10}"  title="Number of characters should not exceed 10" value="<?php echo $row['phone']; ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-6 mb-3 mb-sm-0"><?php echo $row['gender']; ?>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="gender" class="custom-control-input" value="male" required>
                        <label class="custom-control-label" for="customRadio2">Male</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="gender" class="custom-control-input" value="female" required>
                        <label class="custom-control-label" for="customRadio1">Female</label>
                    </div>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <!--<input type="text" class="form-control " id="exampleFirstName" placeholder="Id-card Type" name="id_type">-->

                      <select class="form-control" name="id_type" id="id_type" onchange="if (this.value!='Id-card Type'){this.form['idt'].style.visibility='visible'}else{this.form['idt'].style.visibility='hidden'};">
                        <option value="<?php echo $row['id_card_type']; ?>" id="0"><?php echo $row['id_card_type']; ?></option>
                        <option value="Id-card Type" id="0">Id-card Type</option>
                        <option value="Driving Licence" id="1">Driving Licence</option>
                        <option value="National Id" id="1">National Id</option>
                        <option value="Voter Id" id="1">Voter Id</option>
                        <option value="Passport Id"id="1">Passport Id</option>
                      </select>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control " id="idt" name="id_no" style="visibility:hidden;" value="<?php echo $row['id_card_no']; ?>"required >
                  </div>
                </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <!--<input type="text" class="form-control " id="exampleLastName" placeholder="Bulb-No" name="bulb">-->
                      <select class="form-control" name="bulb" required >
                        <option value="<?php echo $row['bulb_no']; ?>"><?php echo $row['bulb_no']; ?></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3-5">3-5</option>
                        <option value="5-7">5-7</option>
                      </select>
                    </div>
                    <div class="col-sm-6 mb-sm-0"><?php echo $row['charger']; ?>
                      <div class="custom-control custom-checkbox">

                        <input type="checkbox" class="custom-control-input" id="Charger" name="charger" value="charger" value="">
                        <label class="custom-control-label" for="Charger">Charger</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control " id="exampleInputEmail" placeholder="Clerk_name" name="clerk" value="<?php echo $_SESSION['user']?>" readonly>
                  </div>
                  <hr>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input type="date" class="form-control" id="exampleFirstName" placeholder="Start-Date" name="sdate" value="<?php echo $row['s_date']; ?>">
                    </div>
                    <div class="col-sm-3  mb-3 mb-sm-0">
                      <select class="form-control" id="stype" name="stype" required onchange="if (this.value=='Contract'){this.form['endContractdate'].style.visibility='visible'}else{this.form['endContractdate'].style.visibility='hidden'};">
                        <option value="<?php echo $row['service_type']; ?>"><?php echo $row['service_type']; ?></option>
                        <option value="">Service Type</option>
                        <option value="Company">Company</option>
                        <option value="Contract">Contract</option>
                      </select>
                    </div>
                    <div class="col-sm-3 mb-sm-0">
                      <select class="form-control" id="stype" name="status"  required>
                        <option value="<?php echo $row['status']; ?>">
                      <?php echo $row['status']; ?></option>
                        <option value="">Status Type</option>
                        <option value="on-service">on-service</option>
                        <option value="off-service">off-service</option>
                        <option value="Pending">required-service</option>
                        <option value="Awaiting Installation">Awaiting Installation</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <select class="form-control" id="stype" name="amount"  required>
                        <option value="<?php echo $row['amount']; ?>"><?php echo $row['amount']; ?></option>
                        <option value="4000">4000</option>
                        <option value="6000">6000</option>
                        <option value="8000">8000</option>
                        <option value="10000">10000</option>
                        <option value="15000">15000</option>
                        <option value="20000">20000</option>
                      </select>
                    </div>
                  <div class="col-sm-3 mb-sm-0">
                    <div class="custom-file overflow-hidden rounded-pill mb-5">
                      <input id="customFile" type="file" class="custom-file-input" name="picture" value="<?php echo $row['image']; ?>">
                      <label for="customFile" class="custom-file-label rounded-pill">Choose file</label>
                    </div>
                  </div>
                    <div class="col-sm-3 mb-sm-0">
                    <input type="date" class="form-control " id="endContractdate" placeholder="Id-card No" name="enCdate" style="visibility:hidden;" value="<?php echo date('Y-m-d', strtotime(' + 548 days',time())); ?>">
                  </div>
                </div>
                  <hr>
                     <input type="submit" name="update" value="Update Customer" class="btn btn-primary btn-user btn-block"/>
                </form>
              </div>
            </div>
          </div>
         
        </div>
      </div>
        <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
              <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
          </div>
        </div>

    </div>


  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
