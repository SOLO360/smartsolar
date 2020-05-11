<?php
include 'session.php';
$conn=mysqli_connect('localhost', 'root', 'solo360', 'smartsolar') or die("cant connect!!!");
$id = base64_decode($_GET['id']);
$sql = "SELECT * FROM customers WHERE id = '$id'";
$exe = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($exe);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">


    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <style media="screen">
    body{
  background: -webkit-linear-gradient(left, #3931af, #00c6ff);
}
.emp-profile{
  padding: 3%;
  margin-top: 3%;
  margin-bottom: 3%;
  border-radius: 0.5rem;
  background: #fff;
}
.profile-img{
  text-align: center;
}
.profile-img img{
  width: 70%;
  height: 100%;
}
.profile-img .file {
  position: relative;
  overflow: hidden;
  margin-top: -20%;
  width: 70%;
  border: none;
  border-radius: 0;
  font-size: 15px;
  background: #212529b8;
}
.profile-img .file input {
  position: absolute;
  opacity: 0;
  right: 0;
  top: 0;
}
.profile-head h5{
  color: #333;
}
.profile-head h6{
  color: #0062cc;
}
.profile-edit-btn{
  border: none;
  border-radius: 1.5rem;
  width: 70%;
  padding: 2%;
  font-weight: 600;
  color: #6c757d;
  cursor: pointer;
}
.proile-rating{
  font-size: 12px;
  color: #818182;
  margin-top: 5%;
}
.proile-rating span{
  color: #495057;
  font-size: 15px;
  font-weight: 600;
}
.profile-head .nav-tabs{
  margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
  font-weight:600;
  border: none;
}
.profile-head .nav-tabs .nav-link.active{
  border: none;
  border-bottom:2px solid #0062cc;
}
.profile-work{
  padding: 14%;
  margin-top: -15%;
}
.profile-work p{
  font-size: 12px;
  color: #818182;
  font-weight: 600;
  margin-top: 10%;
}
.profile-work a{
  text-decoration: none;
  color: ##0062cc;
  font-weight: 600;
  font-size: 14px;
}
.profile-work ul{
  list-style: none;
}
.profile-tab label{
  font-weight: 600;
}
.profile-tab p{
  font-weight: 600;
  color: #0062cc;
}

</style>
  </head>
  <body>
    <div class="container emp-profile">
                <form method="post" action="editProfile.php">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                <img  src="img/<?php echo $row['image']; ?>" alt=""/>
                                <!--<div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="file"/>
                                </div>-->
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h5>
                                          <p><?php echo $row['fname'] ?> <?php echo $row['mname']?> <?php echo $row['lname'] ?>
                                        </h5>
                                        <h6>
                                           <?php echo $row['addres']; ?>
                                        </h6>
                                       <p><?php echo $row['phone'] ?> </p>
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                       <br>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Timeline</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <input type="button" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" onclick="location.href='editProfile.php?id=<?php echo base64_encode($row['id']);?>'" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">
                                <p>Other Infomation</p>
                                <p>WORK LINK</p>
                                <a href="">Website Link</a><br/>
                                <a href="">Bootsnipp Profile</a><br/>
                                <a href="">Bootply Profile</a>
                                <p>SKILLS</p>
                                <a href="">Web Designer</a><br/>
                                <a href="">Web Developer</a><br/>
                                <a href="">WordPress</a><br/>
                                <a href="">WooCommerce</a><br/>
                                <a href="">PHP, .Net</a><br/>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Name</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['fname'] ?> <?php echo $row['mname']?> <?php echo $row['lname'] ?> </p>
                                                    <p></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label> Address</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['addres'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Date of Birth</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['dob'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Phone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['phone'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Service Type</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['service_type'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Start Date</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['s_date'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <label>Contact End Date</label>
                                              </div>
                                              <div class="col-md-6">
                                                <p><?php echo $row['cont_end'] ?> </p>
                                              </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>ID Number</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['id_card_no'] ?> </p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Status</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $row['status'] ?> </p>
                                                    <p>Your detail description</p>
                                                </div>
                                            </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <?php 
                                          $query = "SELECT * FROM payment WHERE id = '$id'";
                                          $rn = mysqli_query($conn, $query);
                                        ?>
                                        <table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                               <tr>
                                                  <th>id</th>
                                                  <th>Pay-date</th>
                                                  <th>Month-Issued</th>
                                                  <th>Pay-method</th>
                                                  <th>Receipt</th>
                                                  <th>Amount</th>
                                                  <th>Clerk</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                               <tr>
                                                  <th>id</th>
                                                  <th>Pay-date</th>
                                                  <th>Month-Issued</th>
                                                  <th>Pay-method</th>
                                                  <th>Receipt</th>
                                                  <th>Amount</th>
                                                  <th>Clerk</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                              <?php
                                                while ($fetch = mysqli_fetch_assoc($rn)) {
                                              ?>
                                              <td><?php echo $fetch['PID'];?></td>
                                              <td><?php echo $fetch['p_date'];?></td>
                                              <td><?php echo $fetch['month_issued'];?></td>
                                              <td><?php echo $fetch['p_method'];?></td>
                                              <td><?php echo $fetch['receipt_no'];?></td>
                                              <td><?php echo $fetch['amount'];?></td>
                                              <td><?php echo $fetch['clerk_name'];?></td> 
                                            </tr>
                                              <?php } ?>
                                              
                                            </tbody>
                                          </table>  
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="vendor/chart.js/Chart.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/chart-area-demo.js"></script>
            <script src="js/demo/chart-pie-demo.js"></script>
            <!-- Page level plugins -->
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <script>  
              $('#dataTable').dataTable({
                ordering:false,
                lenghtMenu[[5,10,25,50,-1],[5,10,25,50,"All"]]]
              });
            </script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>

  </body>
</html>
