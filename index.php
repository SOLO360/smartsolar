<?php
session_start();
include 'includes/conection.php';
if(isset($_POST['login'])){
  $_SESSION['user'] = mysqli_escape_string($conn, $_POST['user']);
  $_SESSION['pass'] = mysqli_escape_string($conn, md5($_POST['pass']));
  $_SESSION['user'] = stripslashes($_SESSION['user']);
  $_SESSION['pass'] = stripslashes($_SESSION['pass']);
  $_SESSION['user'] = trim($_SESSION['user']);
  $_SESSION['pass'] = trim($_SESSION['pass']);
  $_SESSION['start'] = time();

   // taking now logged in time
  $_SESSION['expire'] = $_SESSION['start'] + (50*60) ;

  $sql = "SELECT * FROM staff WHERE username = '".$_SESSION['user']."' and password = '".$_SESSION['pass']."'";
  $rn = mysqli_query($conn,$sql);
  $row = mysqli_num_rows($rn);
  $sql1 = "SELECT username from staff";
  $rn1 = mysqli_query($conn,$sql1);
  $fetch = mysqli_fetch_assoc($rn1);
  if($row == 1){
    if ($fetch['username'] == $_SESSION['user']) {
      echo "your are logged in";
      header("location:dashboard.php");
    }else{
      echo "<script>
    alert('Wrong username or Password');
    </script>";
    }

  }else {
    echo "<script>
    alert('Wrong username or Password');
    </script>";
    }
}
?>
<html>
<head>
<title></title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Username:</label><br>
                                <input type="text" name="user" id="username" class="form-control" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="pass" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="login" class="btn btn-info btn-md" value="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!--fail to Login model-------------------------->
        <div class="modal">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Failed to login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Modal body text goes here.</p>
              </div>
              <div class="modal-footer">

                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
</body>
</html>
